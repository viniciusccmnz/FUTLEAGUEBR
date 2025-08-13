<?php
session_start();
include_once('conn.php');
$id_user = $_SESSION['ID'];
$opcoes  = $_POST['opcoes'];

if(isset($_SESSION['ID'])){
	
	//dados do usuario
	$query = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '$id_user'");
	$query->execute();
	
	$rs = $query->fetch();
	$cargo = $rs['Cargo'];
	$time = $rs['Time'];
	
	if($cargo == 1 || $cargo == 2){
	$sql = DB::conn()->prepare("UPDATE usuarios SET opcoes_chute = '$opcoes' WHERE Time = '$time'");
	$sql->execute();
	}
	
}else{
	echo "Erro";	
}
?>