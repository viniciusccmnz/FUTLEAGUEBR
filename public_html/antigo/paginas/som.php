<?php
session_start();
//testar sistema
include_once('conn.php');

if(isset($_SESSION['ID'])){

$sql = DB::conn()->prepare("UPDATE usuarios SET Som = 1 WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();

	}
?>