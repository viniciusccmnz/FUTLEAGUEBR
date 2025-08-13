<?php
session_start();
include_once('conn.php');
$id_user = $_SESSION['ID'];

if(isset($id_user)){
	
	$query = DB::conn()->prepare("UPDATE usuarios SET Trancar = 1 WHERE ID = ?");
	$query->execute(array($id_user));
	echo 'Conta trancada';	
	
}else{
	echo 'Erro!';	
}
?>