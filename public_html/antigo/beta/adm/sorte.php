<?php
session_start();
include_once('conn.php');
if(isset($_SESSION['ID'])){
	
	$sql = DB::conn()->prepare("UPDATE usuarios SET Sorte = 1000");
	$sql->execute();
}
?>