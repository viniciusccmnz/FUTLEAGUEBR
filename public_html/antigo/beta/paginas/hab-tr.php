<?php
include_once('conn.php');
session_start();
date_default_timezone_set("Brazil/East");
$user_id = $_SESSION['ID'];

if(isset($user_id)){
	
	$id_para = $_POST['id_para'];
	
	$sql = DB::conn()->prepare("SELECT* FROM usuarios WHERE ID = ? AND T_hab_tr <= ? AND h_trilha = ?");
	$sql->execute(array($user_id,date('Y/m/d H:i:s'),1));
	
	$rs = $sql->fetch();
	$htempo = $rs['h_trilha'];
	$Htempos = $rs['Htrilha'];
	$Hfaltas = $rs['Hfalta'];
	$Htrilha = $rs['Htrilha'];
	
	if($htempo == 0){
	}else{
	switch($Htempos){
		case 1:
			//tempo do bless
			$tempo_hab  = 12;
			$fim_hab  = date('Y/m/d H:i:s',mktime(date('H') + $tempo_hab  ,date('i'),date('s'),date('m'),date('d'),date('Y')));
			
			$tempo_h  = 2;
			$fim_t  = date('Y/m/d H:i:s',mktime(date('H') + $tempo_h  ,date('i'),date('s'),date('m'),date('d'),date('Y')));
			
			$sql = DB::conn()->prepare("UPDATE usuarios SET T_hab_tr = '$fim_hab', h_trilha = 0 WHERE ID = '$user_id'");
			$sql->execute();
			
			$sql = DB::conn()->prepare("UPDATE usuarios SET uso_bless_trilha = '$fim_t' WHERE ID = '$id_para'");
			$sql->execute();
		break;
		case 2:
					//tempo do bless
			$tempo_hab  = 10;
			$fim_hab  = date('Y/m/d H:i:s',mktime(date('H') + $tempo_hab  ,date('i'),date('s'),date('m'),date('d'),date('Y')));
			
			$tempo_h  = 2;
			$fim_t  = date('Y/m/d H:i:s',mktime(date('H') + $tempo_h  ,date('i'),date('s'),date('m'),date('d'),date('Y')));
			
			$sql = DB::conn()->prepare("UPDATE usuarios SET T_hab_tr = '$fim_hab', h_trilha = 0 WHERE ID = '$user_id'");
			$sql->execute();
			
			$sql = DB::conn()->prepare("UPDATE usuarios SET uso_bless_trilha = '$fim_t' WHERE ID = '$id_para'");
			$sql->execute();
		break;
		case 3:
					//tempo do bless
			$tempo_hab  = 9;
			$fim_hab  = date('Y/m/d H:i:s',mktime(date('H') + $tempo_hab  ,date('i'),date('s'),date('m'),date('d'),date('Y')));
			
			$tempo_h  = 3;
			$fim_t  = date('Y/m/d H:i:s',mktime(date('H') + $tempo_h  ,date('i'),date('s'),date('m'),date('d'),date('Y')));
			
			$sql = DB::conn()->prepare("UPDATE usuarios SET T_hab_tr = '$fim_hab', h_trilha = 0 WHERE ID = '$user_id'");
			$sql->execute();
			
			$sql = DB::conn()->prepare("UPDATE usuarios SET uso_bless_trilha = '$fim_t' WHERE ID = '$id_para'");
			$sql->execute();
		break;
		case 4:
					//tempo do bless
			$tempo_hab  = 8;
			$fim_hab  = date('Y/m/d H:i:s',mktime(date('H') + $tempo_hab  ,date('i'),date('s'),date('m'),date('d'),date('Y')));
			
			$tempo_h  = 3;
			$fim_t  = date('Y/m/d H:i:s',mktime(date('H') + $tempo_h  ,date('i'),date('s'),date('m'),date('d'),date('Y')));
			
			$sql = DB::conn()->prepare("UPDATE usuarios SET T_hab_tr = '$fim_hab', h_trilha = 0 WHERE ID = '$user_id'");
			$sql->execute();
			
			$sql = DB::conn()->prepare("UPDATE usuarios SET uso_bless_trilha = '$fim_t' WHERE ID = '$id_para'");
			$sql->execute();
		break;
		case 5:
					//tempo do bless
			$tempo_hab  = 7;
			$fim_hab  = date('Y/m/d H:i:s',mktime(date('H') + $tempo_hab  ,date('i'),date('s'),date('m'),date('d'),date('Y')));
			
			$tempo_h  = 4;
			$fim_t  = date('Y/m/d H:i:s',mktime(date('H') + $tempo_h  ,date('i'),date('s'),date('m'),date('d'),date('Y')));
			
			$sql = DB::conn()->prepare("UPDATE usuarios SET T_hab_tr = '$fim_hab', h_trilha = 0 WHERE ID = '$user_id'");
			$sql->execute();
			
			$sql = DB::conn()->prepare("UPDATE usuarios SET uso_bless_trilha = '$fim_t' WHERE ID = '$id_para'");
			$sql->execute();
		break;
		case 6:
					//tempo do bless
			$tempo_hab  = 6;
			$fim_hab  = date('Y/m/d H:i:s',mktime(date('H') + $tempo_hab  ,date('i'),date('s'),date('m'),date('d'),date('Y')));
			
			$tempo_h  = 4;
			$fim_t  = date('Y/m/d H:i:s',mktime(date('H') + $tempo_h  ,date('i'),date('s'),date('m'),date('d'),date('Y')));
			
			$sql = DB::conn()->prepare("UPDATE usuarios SET T_hab_tr = '$fim_hab', h_trilha = 0 WHERE ID = '$user_id'");
			$sql->execute();
			
			$sql = DB::conn()->prepare("UPDATE usuarios SET uso_bless_trilha = '$fim_t' WHERE ID = '$id_para'");
			$sql->execute();
		break;
		case 7:
					//tempo do bless
			$tempo_hab  = 5;
			$fim_hab  = date('Y/m/d H:i:s',mktime(date('H') + $tempo_hab  ,date('i'),date('s'),date('m'),date('d'),date('Y')));
			
			$tempo_h  = 5;
			$fim_t  = date('Y/m/d H:i:s',mktime(date('H') + $tempo_h  ,date('i'),date('s'),date('m'),date('d'),date('Y')));
			
			$sql = DB::conn()->prepare("UPDATE usuarios SET T_hab_tr = '$fim_hab', h_trilha = 0 WHERE ID = '$user_id'");
			$sql->execute();
			
			$sql = DB::conn()->prepare("UPDATE usuarios SET uso_bless_trilha = '$fim_t' WHERE ID = '$id_para'");
			$sql->execute();
		break;
		case 8:
					//tempo do bless
			$tempo_hab  = 4;
			$fim_hab  = date('Y/m/d H:i:s',mktime(date('H') + $tempo_hab  ,date('i'),date('s'),date('m'),date('d'),date('Y')));
			
			$tempo_h  = 5;
			$fim_t  = date('Y/m/d H:i:s',mktime(date('H') + $tempo_h  ,date('i'),date('s'),date('m'),date('d'),date('Y')));
			
			$sql = DB::conn()->prepare("UPDATE usuarios SET T_hab_tr = '$fim_hab', h_trilha = 0 WHERE ID = '$user_id'");
			$sql->execute();
			
			$sql = DB::conn()->prepare("UPDATE usuarios SET uso_bless_trilha = '$fim_t' WHERE ID = '$id_para'");
			$sql->execute();
		break;
		case 9:
					//tempo do bless
			$tempo_hab  = 3;
			$fim_hab  = date('Y/m/d H:i:s',mktime(date('H') + $tempo_hab  ,date('i'),date('s'),date('m'),date('d'),date('Y')));
			
			$tempo_h  = 6;
			$fim_t  = date('Y/m/d H:i:s',mktime(date('H') + $tempo_h  ,date('i'),date('s'),date('m'),date('d'),date('Y')));
			
			$sql = DB::conn()->prepare("UPDATE usuarios SET T_hab_tr = '$fim_hab', h_trilha = 0 WHERE ID = '$user_id'");
			$sql->execute();
			
			$sql = DB::conn()->prepare("UPDATE usuarios SET uso_bless_trilha = '$fim_t' WHERE ID = '$id_para'");
			$sql->execute();
		break;
		case 10:
					//tempo do bless
			$tempo_hab  = 2;
			$fim_hab  = date('Y/m/d H:i:s',mktime(date('H') + $tempo_hab  ,date('i'),date('s'),date('m'),date('d'),date('Y')));
			
			$tempo_h  = 6;
			$fim_t  = date('Y/m/d H:i:s',mktime(date('H') + $tempo_h  ,date('i'),date('s'),date('m'),date('d'),date('Y')));
			
			$sql = DB::conn()->prepare("UPDATE usuarios SET T_hab_tr = '$fim_hab', h_trilha = 0 WHERE ID = '$user_id'");
			$sql->execute();
			
			$sql = DB::conn()->prepare("UPDATE usuarios SET uso_bless_trilha = '$fim_t' WHERE ID = '$id_para'");
			$sql->execute();
		break;
	}	
}
	
}else{
echo 'Erro';	
}
?>