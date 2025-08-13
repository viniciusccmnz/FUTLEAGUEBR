<?php
include_once('conn.php');
date_default_timezone_set("Brazil/East");
$data = date("d/m");
$hora = date("H");
$min  = date("i");

$sql = DB::conn()->prepare("SELECT ADM FROM usuarios WHERE ID = ?");
$sql->execute(array($_SESSION['ID']));
$rs = $sql->fetch();
$ADM = $rs['ADM'];

if(isset($_SESSION['ID']) && $ADM == 1){
//TOP HORA
$medalha = 0;

$query = DB::conn()->prepare("SELECT ID FROM usuarios ORDER BY Gols_Hora DESC LIMIT 10");
$query->execute();
while($rs = $query->fetchObject()){
	$medalha = $medalha + 1;

	if ($medalha == 1) {
		$medalha_1 = $rs->ID;
	} else if ($medalha == 2) {
		$medalha_2 = $rs->ID;
	} else if ($medalha == 3) {
		$medalha_3 = $rs->ID;
	}else if ($medalha == 4) {
		$medalha_4 = $rs->ID;
	}else if ($medalha == 5) {
		$medalha_5 = $rs->ID;
	}elseif($medalha == 6){
		$medalha_6 = $rs->ID;	
	}elseif($medalha == 7){
		$medalha_7 = $rs->ID;	
	}elseif($medalha == 8){
		$medalha_8 = $rs->ID;		
	}elseif($medalha == 9){
		$medalha_9 = $rs->ID;		
	}elseif($medalha == 10){
		$medalha_10 = $rs->ID;		
	}
}

$select = DB::conn()->prepare("SELECT * FROM usuarios ORDER BY Gols_Hora DESC LIMIT 10");
$select->execute();

if($select->rowCount() == 0){
	
}else{
while($rs = $select->fetch()){
	if($rs['ID'] == $medalha_1){
		//buscando o record da hora
		$sql = DB::conn()->prepare("SELECT * FROM record_hora");
		$sql->execute();
		$rs = $sql->fetchObject();
		
		$gols_record_h = $rs->user_gols;
		//VERIFICAR SE O USUARIO BATEU O RECORD DA HORA NA TEMPORADA
		$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$medalha_1."'");
		$sql->execute();
		
		$rs = $sql->fetchObject();
		
		$Gols_Hora = $rs->Gols_Hora;
		$Record_Hora_user = $rs->Record_Hora;
		
		//verificação
		if($Gols_Hora > $gols_record_h){
		$sql = DB::conn()->prepare("UPDATE record_hora SET user_id = '".$medalha_1."', user_gols = '$Gols_Hora'");
		$sql->execute();	
		}elseif($Gols_Hora == $gols_record_h){
			
		}
		//verificar se eu bati meu proprio record
		if($Gols_Hora > $Record_Hora_user){
		$sql = DB::conn()->prepare("UPDATE usuarios SET Record_Hora = '$Gols_Hora' WHERE ID = '".$medalha_1."'");
		$sql->execute();	
		}elseif($Gols_Hora == $Record_Hora_user){
			
		}
		
		//agora agente pega o id do ultimo top 1 e tira dele (mais antes precisamos verificar se ele ta no top 2 ou 3)
		$verificar_top = DB::conn()->prepare("SELECT ID FROM usuarios WHERE ID = '".$medalha_1."' AND Top_Hora = 1 LIMIT 1");
		$verificar_top->execute();
		$qr = $verificar_top->fetchObject();
		$ultimotop1h = $verificar_top->ID;
		
		if($ultimotop1h == $medalha_2){
			//o ultimo usuario está no top 2 hora
			
		}elseif($ultimotop1h == $medalha_3){
			//o ultimo usuario esta no top 3
			
		}else{
			//se n estiver no 1,2,3 ele tira a medalha
			$tirar_premio = DB::conn()->prepare("UPDATE usuarios SET Top_Hora = 0 WHERE ID = '$ultimotop1h'");
			$tirar_premio->execute();
		}
		
		//agora ele da o premio para quem ficou no 1 na hora
		$data = date("d/m");
		$hora = date("H:i");
		$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +200, Top_Hora = 1, Rank_hora_1 = Rank_hora_1 + 1 WHERE ID = '$medalha_1'");
		$premio->execute();
		//msg
		$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '".$medalha_1."','".$medalha_1."','$data','$hora','1','0','h','200','0','0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '".$medalha_1."' AND Data = '$data' AND Hora = '$hora')");
		$msg->execute();
		}elseif($rs['ID'] == $medalha_2){
			//agora agente pega o id do ultimo top 1 e tira dele (mais antes precisamos verificar se ele ta no top 2 ou 3)
		$verificar_top2 = DB::conn()->prepare("SELECT ID FROM usuarios WHERE ID = '".$medalha_2."' AND Top_Hora = 2 LIMIT 1");
		$verificar_top2->execute();
		$qr2 = $verificar_top2->fetchObject();
		$ultimotop2h = $verificar_top2->ID;
		
		if($ultimotop2h == $medalha_1){
			//o ultimo usuario está no top 1 hora
			
		}elseif($ultimotop2h == $medalha_3){
			//o ultimo usuario esta no top 3
			
		}else{
			//se n estiver no 1,3 ele tira a medalha
			$tirar_premio = DB::conn()->prepare("UPDATE usuarios SET Top_Hora = 0 WHERE ID = '$ultimotop2h'");
			$tirar_premio->execute();
		}
		//agora ele da o premio para quem ficou no 2 na hora
		$data = date("d/m");
		$hora = date("H:i");
		$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +150, Top_Hora = 2, Rank_hora_2 = Rank_hora_2 + 1 WHERE ID = '".$medalha_2."'");
		$premio->execute();
		//msg
		$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '".$medalha_2."','".$medalha_2."','$data','$hora','2','0','h','150','0','0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '".$medalha_2."' AND Data = '$data' AND Hora = '$hora')");
		$msg->execute();
		
		}elseif($rs['ID'] == $medalha_3){
				//agora agente pega o id do ultimo top 1 e tira dele (mais antes precisamos verificar se ele ta no top 2 ou 3)
		$verificar_top3 = DB::conn()->prepare("SELECT ID FROM usuarios WHERE ID = '".$medalha_3."' AND Top_Hora = 3 LIMIT 1");
		$verificar_top3->execute();
		$qr3 = $verificar_top3->fetchObject();
		$ultimotop3h = $verificar_top3->ID;
		
		if($ultimotop3h == $medalha_1){
			//o ultimo usuario está no top 1 hora
			
		}elseif($ultimotop3h == $medalha_2){
			//o ultimo usuario esta no top 3
			
		}else{
			//se n estiver no 1,3 ele tira a medalha
			$tirar_premio = DB::conn()->prepare("UPDATE usuarios SET Top_Hora = 0 WHERE ID = '$ultimotop3h'");
			$tirar_premio->execute();
		}
		//agora ele da o premio para quem ficou no 2 na hora
		$data = date("d/m");
		$hora = date("H:i");
		$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +140, Top_Hora = 3, Rank_hora_3 = Rank_hora_3 + 1 WHERE ID = '".$medalha_3."'");
		$premio->execute();
		//msg
		$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '".$medalha_3."','".$medalha_3."','$data','$hora','3','0','h','140','0','0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '".$medalha_3."' AND Data = '$data' AND Hora = '$hora')");
		$msg->execute();
	}elseif($rs['ID'] == $medalha_4){
		$data = date("d/m");
		$hora = date("H:i");
		
		$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +130, Rank_hora_4 = Rank_hora_4 + 1 WHERE ID = '".$medalha_4."'");
		$premio->execute();
		//msg
		$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '".$medalha_4."','".$medalha_4."','$data','$hora','4','0','h','130','0','0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '".$medalha_4."' AND Data = '$data' AND Hora = '$hora')");
		$msg->execute();
	}elseif($rs['ID'] == $medalha_5){
		$data = date("d/m");
		$hora = date("H:i");
		
		$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +120, Rank_hora_5 = Rank_hora_5 + 1 WHERE ID = '".$medalha_5."'");
		$premio->execute();
		//msg
		$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '".$medalha_5."','".$medalha_5."','$data','$hora','5','0','h','120','0','0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '".$medalha_5."' AND Data = '$data' AND Hora = '$hora')");
		$msg->execute();
	}elseif($rs['ID'] == $medalha_6){
		$data = date("d/m");
		$hora = date("H:i");
		
		$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +110, Rank_hora_6 = Rank_hora_6 + 1 WHERE ID = '".$medalha_6."'");
		$premio->execute();
		//msg
		$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '".$medalha_6."','".$medalha_6."','$data','$hora','6','0','h','110','0','0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '".$medalha_6."' AND Data = '$data' AND Hora = '$hora')");
		$msg->execute();
	}elseif($rs['ID'] == $medalha_7){
		$data = date("d/m");
		$hora = date("H:i");
		
		$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +100, Rank_hora_7 = Rank_hora_7 + 1 WHERE ID = '".$medalha_7."'");
		$premio->execute();
		//msg
		$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '".$medalha_7."','".$medalha_7."','$data','$hora','7','0','h','100','0','0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '".$medalha_7."' AND Data = '$data' AND Hora = '$hora')");
		$msg->execute();
	}elseif($rs['ID'] == $medalha_8){
		$data = date("d/m");
		$hora = date("H:i");
		
		$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +90, Rank_hora_8 = Rank_hora_8 + 1 WHERE ID = '".$medalha_8."'");
		$premio->execute();
		//msg
		$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '".$medalha_8."','".$medalha_8."','$data','$hora','8','0','h','90','0','0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '".$medalha_8."' AND Data = '$data' AND Hora = '$hora')");
		$msg->execute();
	}elseif($rs['ID'] == $medalha_9){
		$data = date("d/m");
		$hora = date("H:i");
		
		$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +80, Rank_hora_9 = Rank_hora_9 + 1 WHERE ID = '".$medalha_9."'");
		$premio->execute();
		//msg
		$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '".$medalha_9."','".$medalha_9."','$data','$hora','9','0','h','80','0','0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '".$medalha_9."' AND Data = '$data' AND Hora = '$hora')");
		$msg->execute();
	}elseif($rs['ID'] == $medalha_10){
				$data = date("d/m");
		$hora = date("H:i");
		
		$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +90, Rank_hora_10 = Rank_hora_10 + 1 WHERE ID = '".$medalha_10."'");
		$premio->execute();
		//msg
		$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '".$medalha_10."','".$medalha_10."','$data','$hora','10','0','h','70','0','0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '".$medalha_10."' AND Data = '$data' AND Hora = '$hora')");
		$msg->execute();
	}
}}
$sql = DB::conn()->prepare("DELETE FROM vip_fixo");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = 0");
$sql->execute();
}
//Fim
?>