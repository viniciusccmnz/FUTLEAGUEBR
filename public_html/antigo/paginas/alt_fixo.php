<?php
session_start();
include_once('conn.php');
$id_user = $_SESSION['ID'];
$id = $_POST['id_user'];

if(isset($id_user)){
	
	//verificar se esses contrato pertence ao usuario
$sql = DB::conn()->prepare("SELECT * FROM contrato WHERE id_de = '".$_SESSION['ID']."'");
$sql->execute();

$rs = $sql->fetch();

$id_user2 = $rs['id_de'];

////
$sql = DB::conn()->prepare("SELECT * FROM contrato WHERE id_para = '$id' AND Fixo = 1");
$sql->execute();

if($sql->rowCount() == 0 && $id_user2 == $id_user){
	$sql = DB::conn()->prepare("UPDATE usuarios SET Fixo = 1, Rotativo = '0000-00-00 00:00:00' WHERE ID = '$id'");
	$sql->execute();
	
	$sql = DB::conn()->prepare("UPDATE contrato SET Fixo = 1 WHERE id_de = '$id_user' AND id_para = '$id'");
	$sql->execute();
}else{
	date_default_timezone_set("Brazil/East");
	$depois = date("Y-m-d H:i:s", strtotime('+1 min'));
	
	$sql = DB::conn()->prepare("UPDATE usuarios SET Fixo = 0, Rotativo = '$depois' WHERE ID = '$id'");
	$sql->execute();
	
	$sql = DB::conn()->prepare("UPDATE contrato SET Fixo = 0 WHERE id_de = '$id_user' AND id_para = '$id'");
	$sql->execute();
}

	
}else{
echo "<script>location.href='index.php?pr=index;</script>";		
}

?>