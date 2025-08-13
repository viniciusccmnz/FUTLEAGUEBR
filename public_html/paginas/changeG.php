<?php
session_start();
include_once('conn.php');
	
	$frase = $_POST['frase'];

	$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = ?");
	$sql->execute(array($_SESSION['ID']));
	
	$qr = $sql->fetch();
	
	$time = $qr['Time'];
	$cargo = $qr['Cargo'];

if(isset($_SESSION['ID']) && $cargo == 1){
	$sql = DB::conn()->prepare("UPDATE times SET Texto = '$frase' WHERE Presidente = '".$_SESSION['ID']."' AND ID = '$time'");
	$sql->execute();
}
?>