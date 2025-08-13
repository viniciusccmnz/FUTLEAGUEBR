<?php
$id_para = $_GET['id_para'];

//pegar dados do usuario q vai receber
$sql = DB::conn()->prepare("SELECT * FROM mensagens_usuario WHERE Tipo = 'pro' AND id_para = '$id_para'");
$sql->execute();

$qr = $sql->fetch();

$user_id_para = $qr['id_para'];
$id_contrato = $qr['ID'];

if(isset($_SESSION['ID'])){
	$sql = DB::conn()->prepare("DELETE FROM mensagens_usuario WHERE ID = '$id_contrato'");
	$sql->execute();
	echo '<script>location.href="index.php?pr=recados"</script>';		
}else{
echo '<script>location.href="index.php?pr=index"</script>';		
}
?>