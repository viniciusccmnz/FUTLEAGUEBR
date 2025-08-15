<?php
session_start();
//testar sistema
include_once('conn.php');

if(isset($_SESSION['ID'])){

// Resetar o status da trilha para permitir jogar
$sql = DB::conn()->prepare("UPDATE usuarios SET trilha = 1 WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();

//verificar se é bola de ouro ou prata ou se é bola normal
$sql1 = DB::conn()->prepare("SELECT bola3 FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
$sql1->execute();

$rs = $sql1->fetch();
if($rs['bola3'] == 0){
	echo 1;
	$sql = DB::conn()->prepare("UPDATE usuarios SET bola3 = 1 WHERE ID = '".$_SESSION['ID']."'");
	$sql->execute();	
}else{
echo $rs['bola3'];	
}

	}
?>