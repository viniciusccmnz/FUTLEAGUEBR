<?php
include_once('conn.php');
session_start();

if(isset( $_POST['check'] ) && isset($_SESSION['Usuario']) ){

$id_user = $_SESSION['ID'];
$a = explode(',' , $_POST['check']);

foreach( $a as $value ){

$sql = DB::conn()->prepare("DELETE FROM mensagens_usuario WHERE id_para = '$id_user' AND ID = '$value'");
$sql->execute();
}

}else{
echo '<script>location.href="index.php?pr=index"</script>';	
}
?>