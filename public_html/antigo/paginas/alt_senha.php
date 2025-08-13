<?php
session_start();
include_once('conn.php');
$id_user = $_SESSION['ID'];
	
	$senha_atual = $_POST['senhaant'];
	$nova_senha  = md5($_POST['novas']);
	$email_at    = $_POST['emailant'];
	
	//pegar dados do usuario
	$pegar_dados = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = ?");
	$pegar_dados->execute(array($id_user));
	
	$dados = $pegar_dados->fetch();
	
	$email_atual = $dados["Email"];
	$senha_at = $dados["Senha"];
	
	if(strlen($nova_senha) < 6){
	echo 'A nova senha precisa ter no minimo 6 caracteres!';	
	}elseif($email_at != $email_atual){
	echo 'Email atual invalido!';	
	}elseif($senha_atual != $senha_at){
	echo 'Senha atual invalida!';	
	}else{
	$alt = DB::conn()->prepare("UPDATE usuarios SET Senha = '$nova_senha' WHERE ID = ?");
	$alt->execute(array($id_user));
	echo 'Senha alterada!';	
	}
		