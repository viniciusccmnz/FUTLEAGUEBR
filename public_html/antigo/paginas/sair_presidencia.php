<?php
$id_user = $_SESSION['ID'];
$id_presidente = $_GET['id'];
//verificar se o usuario tem permissao
$sql = DB::conn()->prepare("SELECT Cargo, Time FROM usuarios WHERE ID = '$id_presidente'");
$sql->execute();
$rs = $sql->fetch();
$Cargo = $rs['Cargo'];
$Time = $rs['Time'];
if(isset($_SESSION['Usuario']) && $Cargo == 1){
$sql = DB::conn()->prepare("UPDATE times SET Presidente = 0 WHERE ID = '$Time'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET Cargo = 0 WHERE ID = '$id_presidente'");
$sql->execute();
echo '<script>location.href="index.php?pr=index"</script>';	
?>

<?php }else{echo '<script>location.href="index.php?pr=index"</script>';} ?>