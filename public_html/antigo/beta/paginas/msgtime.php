<?php
session_start();
include_once("conn.php");
date_default_timezone_set("Brazil/East");

$id_user = $_SESSION['ID'];

if(isset($id_user)){

	$user = $_SESSION['ID'];
	$msg = strip_tags(trim(filter_input(INPUT_POST, 'msg')));
	
	//verificar se tem cargo
	$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '$user'");
	$sql->execute();
	$rs = $sql->fetch();
	
	$Cargo = $rs['Cargo'];
	$Time = $rs['Time'];
	$data = date("d/m");
	$hora = date("H:i");
	
	if($Cargo == 1 || $Cargo == 2 || $Cargo == 3 || $Cargo == 4){
	//verificar repetição
	$sql = DB::conn()->prepare("SELECT * FROM mensagens_times WHERE id_de = '$user' AND mensagem = '".utf8_decode($msg)."' AND hora = '$hora'");
	$sql->execute();
	if($sql->rowCount() == 1){
	//faz nada	
	}else{
	//insere	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_times (id_time, id_de, mensagem, data, hora) VALUES ('$Time','$user','".utf8_decode($msg)."','$data','$hora')");
	$sql->execute();
	}	
	}
}	
?>