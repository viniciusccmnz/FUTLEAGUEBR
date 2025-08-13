<?php
session_start();
include_once('conn.php');
if(isset($_SESSION['ID'])){
	$captcha = $_POST['captcha'];
	
	if(strtolower($captcha) <> strtolower($_SESSION['captchaCadastro'])){
		echo 1;
	}else{
		$sql = DB::conn()->prepare("UPDATE usuarios SET captcha = 0 WHERE ID = ?");
		$sql->execute(array($_SESSION['ID']));
	}
}
?>