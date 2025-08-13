<?php
$id_user = $_SESSION['ID'];
$id_para = $_GET['id_para'];
$id_de = $_GET['id_de'];

//verificar se o usuario tem permissao
$sql = DB::conn()->prepare("SELECT Cargo, Time FROM usuarios WHERE ID = '$id_de'");
$sql->execute();
$rs = $sql->fetch();
$Cargo = $rs['Cargo'];
$Time = $rs['Time'];
if(isset($_SESSION['Usuario']) && $Cargo == 1){
	//verificar se o usuario tem vip
$sql = DB::conn()->prepare("SELECT VIP FROM usuarios WHERE ID = '$id_para'");
$sql->execute();

$rs = $sql->fetch();

$vip = $rs['VIP'];

if($vip > 0 && $vip >= date('Y-m-d H:i:s')){
$sql = DB::conn()->prepare("UPDATE usuarios SET Cargo = 2 WHERE ID = '$id_para'");
$sql->execute();

	$data = date("d/m");
	$hora = date("H:i");
	$tipo = 'Diretores';
	$acao = 'Adicionou';

$sql = DB::conn()->prepare("INSERT INTO historico_cargos (id_de, id_para, tipo, data, hora, Time, Acao) VALUES ('$id_de','$id_para','$tipo','$data','$hora','$Time','$acao')");
$sql->execute();

echo '<script>alert("OK");location.href="index.php?pr=slot_diretores"</script>';	
}else{
echo '<script>alert("Usuario sem VIP");location.href="index.php?pr=slot_diretores"</script>';	
}
?>

<?php }else{echo '<script>location.href="index.php?pr=index"</script>';} ?>