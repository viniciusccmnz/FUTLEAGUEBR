<?php
session_start();
include_once('conn.php');
$id_user = $_SESSION['ID'];

if(isset($id_user)){
	
//pegar dados do usuario
	$pegar_dados = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = ?");
	$pegar_dados->execute(array($id_user));
	
	$dados = $pegar_dados->fetchObject();
	
	$hab_penalti = $dados->hab_penalti;
	$hab_falta   = $dados->hab_falta;
	$hab_trilha  = $dados->hab_trilha;
	$nivel       = $dados->Nivel;
	
	$total = $hab_penalti + $hab_falta + $hab_trilha;
	
	if($nivel < 20){
	echo 'Só é possivel resetar conta a partir do nível 20!';	
	}else{
	
	$sql = DB::conn()->prepare("UPDATE usuarios SET Pontos = '$total', hab_penalti = 0, hab_falta = 0, hab_trilha = 0 WHERE ID = ? ");
	$sql->execute(array($id_user));
	echo 'Habilidades resetadas!';

	}
	
}else{
	echo 'Erro!';	
}
?>