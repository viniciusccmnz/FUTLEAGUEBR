<?php
$id_user = $_SESSION['ID'];
$id_para = $_GET['id_para'];
$id_de = $_GET['id_de'];
$id_ant = $_GET['id_ant'];


//verificar se esses contrato pertence ao usuario
$sql = DB::conn()->prepare("SELECT * FROM contrato WHERE id_de = '".$_SESSION['ID']."'");
$sql->execute();

$rs = $sql->fetch();

$id_user2 = $rs['id_de'];

//pegar o vip do usuario anterior
$sql = DB::conn()->prepare("SELECT VIP, Fixo FROM usuarios WHERE ID = '$id_ant'");
$sql->execute();

$rs = $sql->fetch();

$vip_ant = $rs['VIP'];

if(isset($id_user) && $id_user2 == $id_de){
//alterando o vip
date_default_timezone_set("Brazil/East");
$depois = date("Y-m-d H:i:s", strtotime('+1 min'));
$sql = DB::conn()->prepare("UPDATE usuarios SET VIP = '$vip_ant', Fixo = 0,Rotativo = '$depois' WHERE ID = '$id_para'");
$sql->execute();

//alterar no contrato
$sql = DB::conn()->prepare("UPDATE contrato SET id_para = '$id_para', tempo = '$vip_ant', Fixo = 0 WHERE id_de = '$id_de' AND id_para = '$id_ant'");
$sql->execute();
	
//tirando o vip do usuario anterioor
$sql = DB::conn()->prepare("UPDATE usuarios SET VIP = '0000-00-00 00:00:00', Fixo = 0 WHERE ID = '$id_ant'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE contrato SET Fixo = 0 WHERE id_para = '$id_ant'");
$sql->execute();


echo '<script>alert("OK");location.href="index.php?pr=contratos"</script>';	
}
else{echo '<script>location.href="index.php?pr=index"</script>';} 


?>