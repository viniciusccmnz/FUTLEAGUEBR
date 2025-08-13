<?php
include_once('conn.php');
session_start();

	if(isset($_SERVER['REQUEST_METHOD']) == 'POST'){
	$tipo = $_POST['p'];
	$retorno = array();
	
	$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = ?");
    $sql->execute(array($_SESSION['ID']));
    $rs = $sql->fetch();
    $pontos = $rs['Pontos'];
	
	if($tipo == 'p'){
		
	if($pontos == 0){
	$retorno['pontos'] = 0;	
	}else{
	$sql = DB::conn()->prepare("UPDATE usuarios SET Pontos = Pontos-1,hab_penalti = hab_penalti+1 WHERE ID = ? ");
	
	if($sql->execute(array($_SESSION['ID']))){
		$retorno['status'] = 'ok';
		
		$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = ?");
		$sql->execute(array($_SESSION['ID']));
		$rs = $sql->fetch();
		$pontos1 = $rs['Pontos'];
		
		$retorno['pontos'] = $pontos1;
	}
	die(json_encode($retorno));
		
	}		
		
	}elseif($tipo == 'f'){	
	if($pontos == 0){
	$retorno['pontos'] = 0;	
	}else{
	$sql = DB::conn()->prepare("UPDATE usuarios SET Pontos = Pontos-1,hab_falta = hab_falta+1 WHERE ID = ? ");
	
	if($sql->execute(array($_SESSION['ID']))){
		$retorno['status'] = 'ok';
		
		$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = ?");
		$sql->execute(array($_SESSION['ID']));
		$rs = $sql->fetch();
		$pontos2 = $rs['Pontos'];
		
		$retorno['pontos'] = $pontos2;
	}
	die(json_encode($retorno));
	
	}
	}elseif($tipo == 't'){
	if($pontos == 0){
	$retorno['pontos'] = 0;	
	}else{
	$sql = DB::conn()->prepare("UPDATE usuarios SET Pontos = Pontos-1,hab_trilha = hab_trilha+1 WHERE ID = ? ");
	
	if($sql->execute(array($_SESSION['ID']))){
		$retorno['status'] = 'ok';
		
		$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = ?");
		$sql->execute(array($_SESSION['ID']));
		$rs = $sql->fetch();
		$pontos3 = $rs['Pontos'];
		
		$retorno['pontos'] = $pontos3;
	}
	die(json_encode($retorno));
		
	}
	}else{
		
	}	
}
?>