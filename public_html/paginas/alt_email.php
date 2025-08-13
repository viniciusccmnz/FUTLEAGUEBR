<?php
session_start();
include_once('conn.php');
$id_user = $_SESSION['ID'];

if(isset($id_user)){
	
	$email_ant = $_POST['emailant'];
	$email_new = $_POST['novoe'];
	
	//pegar dados do usuario
	$pegar_dados = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = ?");
	$pegar_dados->execute(array($id_user));
	
	$dados = $pegar_dados->fetchObject();
	
	$email_atual = $dados->Email;
	
	//pegar email do bd e verificar se ja existe
	$query = DB::conn()->prepare("SELECT Email FROM usuarios WHERE Email = '$email_new'");
	$query->execute();
	$verificar = $query->rowCount();
	
	if(!preg_match("/^[a-z0-9\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\-]+\.[a-z]{2,4}$/i", $email_ant)){
	echo 'Formato de Email Invalido.';	
    }elseif(!preg_match("/^[a-z0-9\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\-]+\.[a-z]{2,4}$/i", $email_new)){
	echo 'Formato de Email Invalido.';
	}elseif($email_ant != $email_atual){
	echo 'Email Atual Invalido.';	
	}elseif($verificar == 1){
	echo 'Este Email já está sendo utilizado.';	
	}else{
	$alterar_nick = DB::conn()->prepare("UPDATE usuarios SET Email = '$email_new' WHERE ID = ?");
	$alterar_nick->execute(array($id_user));
	echo 'Novo Email alterado -'.$email_new;	
	}
	
}else{
	echo 'Erro!';	
}
?>