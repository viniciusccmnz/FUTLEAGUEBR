<?php
session_start();
include_once('conn.php');
$id_user = $_SESSION['ID'];

if(isset($id_user)){
	$email_atual = $_POST['emailatual'];
	//VERIFICAR SE O EMAIL INFORMADO ESTÁ CORRETO
	$sql = DB::conn()->prepare("SELECT Email FROM usuarios WHERE ID = ?");
	$sql->execute(array($id_user));
	$rs = $sql->fetchObject();
	$email_agora = $rs->Email;
	
	if($email_atual != $email_agora){
	echo 'Email atual invalido!';	
	}else{
	$sql = DB::conn()->prepare("UPDATE usuarios SET Trancar = 0 WHERE ID = ?");
	$sql->execute(array($id_user));
	echo 'Conta destrancada!';	
	}	
}
?>