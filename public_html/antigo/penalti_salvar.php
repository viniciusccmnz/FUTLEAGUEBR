<?php 
include("paginas/conn.php");
session_start();
date_default_timezone_set("Brazil/East");
?>
<?php
//$cod   = $_GET['cod'];
$chute = $_GET['id'];

//if (!$cod or !$chute) {
	
if (!$chute) {	
	
	echo "<script>location.href='index.php?pr=index';</script>";
}

/*if ($cod < 1000 or $cod > 9999) {
	echo "<script>location.href='index.php?pr=index';</script>";
}*/

if ($chute != 1 and $chute != 2 and $chute != 3 and $chute != 4 and $chute != 5 and $chute != 6) {
	echo "<script>location.href='index.php?pr=index';</script>";
}
//CONFIGURACOES
$configuracoes = DB::conn()->prepare("SELECT * FROM configuracoes");
$configuracoes->execute();

$conf = $configuracoes->fetchObject();

$TemporadaAgora = $conf->Campeonato;
$RodadaAgora = $conf->Rodada;
//USUARIO
$query = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
$query->execute();

$rs = $query->fetch();

$mc_cod = $rs["Penalti_Cod"];
$bola1 = $rs["bola1"];
$tempo = $rs["Tempo_Penalti"];
$time_user = $rs['Time'];
$VIP = $rs['VIP'];

$mc_id = $rs["ID"];
$mc_nivel = $rs["Nivel"];
$mc_time = $rs["Time"];

$penalti_cod = rand(1000,9999);
$goleiro1_conf = rand(1,6);
$goleiro2_conf = rand(1,6);

if ($goleiro1_conf == $goleiro2_conf) {
	$goleiro2_conf = $goleiro2_conf + 1;
}

if ($goleiro2_conf > 6) {
	$goleiro2_conf = 1;
}

$verificar_gol = 1;

if ($chute == $goleiro1_conf or $chute == $goleiro2_conf) {
	$verificar_gol = 0;
}

if ($verificar_gol == 1) {
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = '$RodadaAgora' AND time1 = '$time_user' AND time2 = '$time_user'");
$sql->execute();

if($sql->rowCount() == 0){
if($bola1 == 1){
$sql = DB::conn()->prepare("UPDATE times SET Gols_Time = Gols_Time+1, Gols = Gols+1 WHERE ID = '$time_user'");
$sql->execute();	
}elseif($bola1 == 2){
$sql = DB::conn()->prepare("UPDATE times SET Gols_Time = Gols_Time+2, Gols = Gols+2 WHERE ID = '$time_user'");
$sql->execute();	
}elseif($bola1 == 3){
$sql = DB::conn()->prepare("UPDATE times SET Gols_Time = Gols_Time+3, Gols = Gols+3 WHERE ID = '$time_user'");
$sql->execute();	
}
}else{
}

if($bola1 == 1){	
$sql = DB::conn()->prepare("UPDATE campeonatos SET placar1 = placar1+1 WHERE Rodada = '$RodadaAgora' AND time1 = '$time_user'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE campeonatos SET placar2 = placar2+1 WHERE Rodada = '$RodadaAgora' AND time2 = '$time_user'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora + 1, Gols_Rodada = Gols_Rodada + 1, Gols_Temporada = Gols_Temporada + 1, Gols_Total = Gols_Total + 1, Dinheiro = Dinheiro +20, penalti = 0, bola1 = 0, captcha = captcha +1,upnivel = upnivel+1 WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();
}elseif($bola1 == 2){
$sql = DB::conn()->prepare("UPDATE campeonatos SET placar1 = placar1+2 WHERE Rodada = '$RodadaAgora' AND time1 = '$time_user'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE campeonatos SET placar2 = placar2+2 WHERE Rodada = '$RodadaAgora' AND time2 = '$time_user'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora + 2, Gols_Rodada = Gols_Rodada + 2, Gols_Temporada = Gols_Temporada + 2, Gols_Total = Gols_Total + 2, Dinheiro = Dinheiro +40, penalti = 0, bola1 = 0, captcha = captcha +1,upnivel = upnivel+2 WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();	
}elseif($bola1 == 3){
$sql = DB::conn()->prepare("UPDATE campeonatos SET placar1 = placar1+3 WHERE Rodada = '$RodadaAgora' AND time1 = '$time_user'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE campeonatos SET placar2 = placar2+3 WHERE Rodada = '$RodadaAgora' AND time2 = '$time_user'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora + 3, Gols_Rodada = Gols_Rodada + 3, Gols_Temporada = Gols_Temporada + 3, Gols_Total = Gols_Total + 3, Dinheiro = Dinheiro +60, penalti = 0, bola1 = 0, captcha = captcha +1,upnivel = upnivel+3 WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();
}
$tempo_chutar1 = date("Y/m/d H:i:s", strtotime("+4 mins"));
$tempo_chutar2 = date("Y/m/d H:i:s", strtotime("+8 mins"));	

if($VIP >= date('Y-m-d H:i:s')){
$sql = DB::conn()->prepare("UPDATE usuarios SET Tempo_Penalti = '$tempo_chutar1',penalti = 0,bola1 = 0, captcha = captcha +1, Penalti_Cod = '". $penalti_cod ."',Penalti_Acertos = Penalti_Acertos +1 WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();	
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET Tempo_Penalti = '$tempo_chutar2', penalti = 0, bola1 = 0, captcha = captcha +1, Penalti_Cod = '". $penalti_cod ."',Penalti_Acertos = Penalti_Acertos +1 WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();		
}

} else {
$tempo_chutar1 = date("Y/m/d H:i:s", strtotime("+4 mins"));
$tempo_chutar2 = date("Y/m/d H:i:s", strtotime("+8 mins"));	

if($VIP >= date('Y-m-d H:i:s')){
$sql = DB::conn()->prepare("UPDATE usuarios SET Tempo_Penalti = '$tempo_chutar1',penalti = 0,bola1 = 0, captcha = captcha +1, Penalti_Cod = '". $penalti_cod ."',Penalti_Erros = Penalti_Erros +1 WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();	
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET Tempo_Penalti = '$tempo_chutar2', penalti = 0, bola1 = 0, captcha = captcha +1, Penalti_Cod = '". $penalti_cod ."',Penalti_Erros = Penalti_Erros +1 WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();		
}

}

if ($verificar_gol == 1) {
	echo "<script>location.href='index.php?pr=p_gol'</script>";
} else {
	echo "<script>location.href='index.php?pr=p_errou'</script>";
}
?>