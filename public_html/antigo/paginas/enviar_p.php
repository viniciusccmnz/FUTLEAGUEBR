<?php
$id_de = $_GET['id_de'];
$id_para = $_GET['id_para'];

$query = DB::conn()->prepare("SELECT * FROM vips WHERE id_user = '".$_SESSION['ID']."'");
$query->execute();
$rs = $query->fetch();

$user_id = $rs['id_user'];
$qtd = $rs['qtd'];
//pegar o time do usuario
$sql = DB::conn()->prepare("SELECT Time FROM usuarios WHERE ID = '$id_de'");
$sql->execute();
$qr = $sql->fetch();

$time = $qr['Time'];


if(isset($_SESSION['Usuario']) && $qtd > 0){
	
$sql = DB::conn()->prepare("SELECT * FROM mensagens_usuario WHERE Tipo = 'pro' AND id_para = '$id_de'");
$sql->execute();

if($sql->rowCount() == 1){
echo '<script>alert("Você já enviou uma proposta para este usuário !");location.href="index.php?pr=index"</script>';	
}else{
	
$data = date("d/m");
$hora = date("H:i");

$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de, id_para, Data, Hora, Conquista, Mensagem, Tipo, dinheiro, Nivel, Time) VALUES ('$id_de','$id_para','$data','$hora','0','0','pro','0','0','$time')");
$sql->execute();
echo '<script>alert("Proposta enviada !");location.href="index.php?pr=index"</script>';
}
}else{
echo '<script>location.href="index.php?pr=index"</script>';	
}
?>