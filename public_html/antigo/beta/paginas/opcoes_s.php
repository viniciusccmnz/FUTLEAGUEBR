<?php
session_start();
include_once('conn.php');
$id_user = $_SESSION['ID'];
$opcoes  = $_POST['opcoes'];

if(isset($_SESSION['ID'])){
	$sql = DB::conn()->prepare("UPDATE usuarios SET opcoes_chute = '$opcoes' WHERE ID = ?");
	$sql->execute(array($id_user));
}else{
	echo "Erro";	
}
?>