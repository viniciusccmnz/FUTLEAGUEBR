<?php
// Log para debug - verificar quando o arquivo é executado
error_log("autentic.php executado - " . date('Y-m-d H:i:s') . " - IP: " . $_SERVER['REMOTE_ADDR']);

session_start();
include_once("conn.php");
date_default_timezone_set("Brazil/East");
		
	$usuario = utf8_decode($_POST['usuario']);
	$senha = strip_tags($_POST['senha']);
	$senha2 = md5($_POST['senha']);
	$ip = $_SERVER['REMOTE_ADDR'];
	$auto_cod = rand(1000,9999);
	$penalti_cod = rand(1000,9999);
	$passe_certo_cod = rand(1000,9999);
	
	//Verificações
	if($senha == ''){
	echo 1;	
	}else{
	//selecionando usuarios banidos ou incorretos
	$select_user = DB::conn()->prepare("SELECT * FROM usuarios WHERE Usuario = ? AND Senha = ? OR Senha = ? AND Tempo_Auto <= ?");
	$select_user->execute(array($usuario,$senha,$senha2,date('Y/m/d H:i:s')));
	
	//ban
	$select_user_ban = DB::conn()->prepare("SELECT * FROM usuarios WHERE Usuario = ? AND Ban > 0");
	$select_user_ban->execute(array($usuario));
	//
	$select_on = DB::conn()->prepare("SELECT * FROM usuarios WHERE ip2 = ? AND Tempo_Auto <= ?");
	$select_on->execute(array($ip,date('Y/m/d H:i:s')));
	
	//Verificações
	if($select_user_ban->rowCount() > 0){
	echo 3;	
	}else{
	$select_user_on = DB::conn()->prepare("SELECT * FROM usuarios WHERE Usuario = ? AND Tempo_Auto >= ?");
	$select_user_on->execute(array($usuario,date('Y/m/d H:i:s')));
	
	if($select_user_on->rowCount() >= 1){
	echo 6;	
	}else{
	if($select_user->rowCount() <= 0){
	echo 2;	
	}
	else{
	if($select_on->rowCount() > 2){
	echo 4;
	}
	elseif($select_on->rowCount() >=1){
	$sql = DB::conn()->prepare("UPDATE usuarios SET ip2 = '',Tempo_Auto = '0000-00-00 00:00:00' WHERE ip2 = ?");
	$sql->execute(array($ip));
	$session = DB::conn()->prepare("SELECT * FROM usuarios WHERE Usuario = '$usuario'");
		$session->execute();
		
		$row = $session->fetchObject();
		
		$time = $row->Time;
		$vip = $row->VIP;
		$id = $row->ID;
		$nivel = $row->Nivel;
		$fim_login = $row->fim_login;
		$sorte = $row->Sorte;
		
		$_SESSION['ID'] = $id;
		$_SESSION['Usuario'] = $usuario;
		$_SESSION['Senha']	 = $senha;
		$_SESSION['Nivel'] = $nivel;
		$_SESSION['VIP'] = $vip;
		$_SESSION['fim_login'] = $fim_login;

		$depois = date("Y/m/d H:i:s", strtotime('+2 min'));

		$ip = $_SERVER['REMOTE_ADDR'];
		
		// Verificar se o tempo já expirou antes de atualizar
		$sql_tempo = DB::conn()->prepare("SELECT Tempo_Falta, Tempo_Penalti, Tempo_Auto, Tempo_Trilha FROM usuarios WHERE Usuario = ?");
		$sql_tempo->execute(array($usuario));
		$tempo_atual = $sql_tempo->fetch();
		
		// CRONÔMETROS COMPLETAMENTE INDEPENDENTES - Só atualiza se realmente expirou
		$precisa_atualizar = false;
		
		// Cronômetro de Falta - independente
		if (!$tempo_atual || $tempo_atual['Tempo_Falta'] <= date('Y-m-d H:i:s')) {
			if ($vip > 0 && $vip >= date('Y-m-d H:i:s')) {
				$tempo_falta = date("Y/m/d H:i:s", strtotime("+5 mins"));
			} else {
				$tempo_falta = date("Y/m/d H:i:s", strtotime("+10 mins"));
			}
			$precisa_atualizar = true;
		} else {
			$tempo_falta = $tempo_atual['Tempo_Falta']; // Mantém o tempo atual EXATO
		}
		
		// Cronômetro de Penalti - independente
		if (!$tempo_atual || $tempo_atual['Tempo_Penalti'] <= date('Y-m-d H:i:s')) {
			if ($vip > 0 && $vip >= date('Y-m-d H:i:s')) {
				$tempo_penalti = date("Y/m/d H:i:s", strtotime("+5 mins"));
			} else {
				$tempo_penalti = date("Y/m/d H:i:s", strtotime("+10 mins"));
			}
			$precisa_atualizar = true;
		} else {
			$tempo_penalti = $tempo_atual['Tempo_Penalti']; // Mantém o tempo atual EXATO
		}
		
		// Cronômetro de Auto - independente
		if (!$tempo_atual || $tempo_atual['Tempo_Auto'] <= date('Y-m-d H:i:s')) {
			if ($vip > 0 && $vip >= date('Y-m-d H:i:s')) {
				$tempo_auto = date("Y/m/d H:i:s", strtotime("+5 mins"));
			} else {
				$tempo_auto = date("Y/m/d H:i:s", strtotime("+10 mins"));
			}
			$precisa_atualizar = true;
		} else {
			$tempo_auto = $tempo_atual['Tempo_Auto']; // Mantém o tempo atual EXATO
		}
		
		// Cronômetro de Trilha - FORÇAR RESET PARA CORRIGIR BUG DE AGOSTO 2025
		// SEMPRE resetar o tempo da trilha, independente do valor atual
		if ($vip > 0 && $vip >= date('Y-m-d H:i:s')) {
			$tempo_trilha = date("Y/m/d H:i:s", strtotime("+5 mins"));
		} else {
			$tempo_trilha = date("Y/m/d H:i:s", strtotime("+9 mins"));
		}
		$precisa_atualizar = true;
		
		// Só atualiza se realmente precisar (tempo expirou)
		if ($precisa_atualizar) {
			$alter = DB::conn()->prepare("UPDATE usuarios SET Tempo_Auto = ?, Tempo_Penalti = ?, Tempo_Falta = ?, Tempo_Trilha = ? WHERE Usuario = ?");
			$alter->execute([$tempo_auto, $tempo_penalti, $tempo_falta, $tempo_trilha, $usuario]);
		}
		$logging = time();
		$update = DB::conn()->prepare("UPDATE usuarios SET fim_login = '$depois', Status ='1',Ultima_Entrada ='".date('d/m/y')."', ip2 = '$ip', Penalti_Cod = '". $penalti_cod ."',Falta_Cod = '".$passe_certo_cod."',Auto_Cod = '".$auto_cod."', captcha = 4, logging = '$logging', penalti = 0, falta = 0,bola1 = 0,bola2 = 0  WHERE Usuario = '$usuario'");
		$update->execute();	
	echo 7;
	}
	else{
	echo 5;
		$session = DB::conn()->prepare("SELECT * FROM usuarios WHERE Usuario = '$usuario'");
		$session->execute();
		
		$row = $session->fetchObject();
		
		$time = $row->Time;
		$vip = $row->VIP;
		$id = $row->ID;
		$nivel = $row->Nivel;
		$fim_login = $row->fim_login;
		$sorte = $row->Sorte;
		
		$_SESSION['ID'] = $id;
		$_SESSION['Usuario'] = $usuario;
		$_SESSION['Senha']	 = $senha;
		$_SESSION['Nivel'] = $nivel;
		$_SESSION['VIP'] = $vip;
		$_SESSION['fim_login'] = $fim_login;

		$depois = date("Y/m/d H:i:s", strtotime('+2 min'));

		$ip = $_SERVER['REMOTE_ADDR'];
		
		// Verificar se o tempo já expirou antes de atualizar
		$sql_tempo = DB::conn()->prepare("SELECT Tempo_Falta, Tempo_Penalti, Tempo_Auto, Tempo_Trilha FROM usuarios WHERE Usuario = ?");
		$sql_tempo->execute(array($usuario));
		$tempo_atual = $sql_tempo->fetch();
		
		// CRONÔMETROS COMPLETAMENTE INDEPENDENTES - Só atualiza se realmente expirou
		$precisa_atualizar = false;
		
		// Cronômetro de Falta - independente
		if (!$tempo_atual || $tempo_atual['Tempo_Falta'] <= date('Y-m-d H:i:s')) {
			if ($vip > 0 && $vip >= date('Y-m-d H:i:s')) {
				$tempo_falta = date("Y/m/d H:i:s", strtotime("+5 mins"));
			} else {
				$tempo_falta = date("Y/m/d H:i:s", strtotime("+10 mins"));
			}
			$precisa_atualizar = true;
		} else {
			$tempo_falta = $tempo_atual['Tempo_Falta']; // Mantém o tempo atual EXATO
		}
		
		// Cronômetro de Penalti - independente
		if (!$tempo_atual || $tempo_atual['Tempo_Penalti'] <= date('Y-m-d H:i:s')) {
			if ($vip > 0 && $vip >= date('Y-m-d H:i:s')) {
				$tempo_penalti = date("Y/m/d H:i:s", strtotime("+5 mins"));
			} else {
				$tempo_penalti = date("Y/m/d H:i:s", strtotime("+10 mins"));
			}
			$precisa_atualizar = true;
		} else {
			$tempo_penalti = $tempo_atual['Tempo_Penalti']; // Mantém o tempo atual EXATO
		}
		
		// Cronômetro de Auto - independente
		if (!$tempo_atual || $tempo_atual['Tempo_Auto'] <= date('Y-m-d H:i:s')) {
			if ($vip > 0 && $vip >= date('Y-m-d H:i:s')) {
				$tempo_auto = date("Y/m/d H:i:s", strtotime("+5 mins"));
			} else {
				$tempo_auto = date("Y/m/d H:i:s", strtotime("+10 mins"));
			}
			$precisa_atualizar = true;
		} else {
			$tempo_auto = $tempo_atual['Tempo_Auto']; // Mantém o tempo atual EXATO
		}
		
		// Cronômetro de Trilha - FORÇAR RESET PARA CORRIGIR BUG DE AGOSTO 2025
		// SEMPRE resetar o tempo da trilha, independente do valor atual
		if ($vip > 0 && $vip >= date('Y-m-d H:i:s')) {
			$tempo_trilha = date("Y/m/d H:i:s", strtotime("+5 mins"));
		} else {
			$tempo_trilha = date("Y/m/d H:i:s", strtotime("+9 mins"));
		}
		$precisa_atualizar = true;
		
		// Só atualiza se realmente precisar (tempo expirou)
		if ($precisa_atualizar) {
			$alter = DB::conn()->prepare("UPDATE usuarios SET Tempo_Auto = ?, Tempo_Penalti = ?, Tempo_Falta = ?, Tempo_Trilha = ? WHERE Usuario = ?");
			$alter->execute([$tempo_auto, $tempo_penalti, $tempo_falta, $tempo_trilha, $usuario]);
		}
		$logging = time();
		$update = DB::conn()->prepare("UPDATE usuarios SET fim_login = '$depois', Status ='1',Ultima_Entrada ='".date('d/m/y')."', ip2 = '$ip', Penalti_Cod = '". $penalti_cod ."',Falta_Cod = '".$passe_certo_cod."',Auto_Cod = '".$auto_cod."', captcha = 4, logging = '$logging', penalti = 0, falta = 0, trilha = 0, bola1 = 0,bola2 = 0,bola3 = 0  WHERE Usuario = '$usuario'");
		$update->execute();	
	}
		
	}	
}
}	
}
?>


