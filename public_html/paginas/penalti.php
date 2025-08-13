<?php
session_start();
//testar sistema
include_once('conn.php');

if(isset($_SESSION['ID'])){

$sql = DB::conn()->prepare("UPDATE usuarios SET penalti = 1 WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();

//verificar se é bola de ouro ou prata ou se é bola normal
$sql1 = DB::conn()->prepare("SELECT bola1 FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
$sql1->execute();

$rs = $sql1->fetch();
if($rs['bola1'] == 0){
	echo 1;
	$sql = DB::conn()->prepare("UPDATE usuarios SET bola1 = 1 WHERE ID = '".$_SESSION['ID']."'");
	$sql->execute();	
}else{
echo $rs['bola1'];	
}

	}
?>