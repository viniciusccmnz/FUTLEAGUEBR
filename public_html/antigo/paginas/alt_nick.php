<?php
session_start();
include_once('conn.php');
$id_user = $_SESSION['ID'];

if(isset($id_user)){
	
	$email_ant = $_POST['email_ant'];
	$newnick = $_POST['newnick'];
	
	//pegar dados do usuario
	$pegar_dados = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = ?");
	$pegar_dados->execute(array($id_user));
	
	$dados = $pegar_dados->fetchObject();
	
	$email_atual = $dados->Email;
	$Dinheiro = $dados->Dinheiro;
	
	$custo = 60000;
	
	//pegar email do bd e verificar se ja existe
	$query = DB::conn()->prepare("SELECT Email FROM usuarios WHERE Usuario = '$newnick'");
	$query->execute();
	$verificar = $query->rowCount();
	
	if(strlen($newnick) < 4){
	echo 'O nick precisa ter no minimo 4 caracteres';	
	}elseif(!preg_match("/^[a-z0-9\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\-]+\.[a-z]{2,4}$/i", $email_ant)){
	echo 'Formato de Email Invalido.';	
	}elseif($email_ant != $email_atual){
	echo 'Email Atual Invalido.';	
	}elseif($Dinheiro < $custo){
	echo 'Você não tem dinheiro suficiente para alterar nick.';	
	}elseif($verificar == 1){
	echo 'Este usuário já existe.';	
	}else{
	$alterar_nick = DB::conn()->prepare("UPDATE usuarios SET Usuario = '$newnick', Dinheiro = Dinheiro - '$custo' WHERE ID = ?");
	$alterar_nick->execute(array($id_user));
	echo 'Nick alterado -'.$newnick;	
	}

}else{
	echo 'Erro!';	
}
?>