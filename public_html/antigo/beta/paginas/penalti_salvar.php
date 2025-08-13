<?php include("paginas/conn.php");
session_start();
date_default_timezone_set("Brazil/East");
?>
<?php
$cod = $_GET['cod'];
$chute = $_GET['id'];
$id = $_SESSION['ID'];
//dados do usuario
$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id."'");
$sql->execute();
$rs = $sql->fetchObject();
$id_u = $rs->ID;
$timeid = $rs->Time;
$timeu = $rs->Time;
$tempo = $rs->Tempo_Penalti;
$Gols_Total = $rs->Gols_Total;
$bola_1 = $rs->bola1;

//CONFIGURACOES
$configuracoes = DB::conn()->prepare("SELECT * FROM Configuracoes");
$configuracoes->execute();

$conf = $configuracoes->fetchObject();

$TemporadaAgora = $conf->Campeonato;
$RodadaAgora = $conf->Rodada;


if (!$cod or !$chute) {
	echo "<script>location.href='index.php?pr=index';</script>";
}

if ($cod < 1000 or $cod > 9999) {
	echo "<script>location.href='index.php?pr=index';</script>";
}

if ($chute != 1 and $chute != 2 and $chute != 3 and $chute != 4 and $chute != 5 and $chute != 6) {
	echo "<script>location.href='index.php?pr=index';</script>";
}

$query = DB::conn()->prepare("SELECT Penalti_Cod, ID, Nivel, Time, VIP,penalti,bola1,bola_extra FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
$query->execute();
$rs = $query->fetchObject();

$mc_cod = $rs->Penalti_Cod;
$vip = $rs->VIP;
$penalti = $rs->penalti;
$bola1 = $rs->bola1;
$bola_extra = $rs->bola_extra;

$mc_id = $rs->ID;
$mc_nivel = $rs->Nivel;
$mc_time = $rs->Time;

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

if ($verificar_gol == 1 && $tempo <= date('Y/m/d H:i:s')) {
//CONFIGURACOES
$configuracoes = DB::conn()->prepare("SELECT * FROM Configuracoes");
$configuracoes->execute();

$conf = $configuracoes->fetchObject();

$TemporadaAgora = $conf->Campeonato;
$RodadaAgora = $conf->Rodada;

$sql1 = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = '$RodadaAgora' ");
$sql1->execute();

while($rs1 = $sql1->fetch()){
	$time01 = $rs1['time1'];
	$time02 = $rs1['time2'];
}

//pegar dados do usuario
$dados_user = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = ?");
$dados_user->execute(array($_SESSION['ID']));

$rs = $dados_user->fetch();

$time_user = $rs['Time'];
$ordem = $rs['opcoes_chute'];
$VIP = $rs['VIP'];
$timeu = $rs['Time'];

$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = '$RodadaAgora' AND time1 = '$time_user' OR time2 = '$time_user'");
$sql->execute();

if($sql->rowCount() == 0){
$sql = DB::conn()->prepare("UPDATE times SET Gols = Gols+1 WHERE ID = '$time_user'");
$sql->execute();
}else{
while($rs = $sql->fetch()){	
$time11 = $rs['time1'];
$time12 = $rs['time2'];

}
}
if($bola1 == 1){	
$sql = DB::conn()->prepare("UPDATE campeonatos SET placar1 = placar1+1 WHERE time1 = '$time_user'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE campeonatos SET placar2 = placar2+1 WHERE time2 = '$time_user'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora + 1, Gols_Rodada = Gols_Rodada + 1, Gols_Temporada = Gols_Temporada + 1, Gols_Total = Gols_Total + 1, Dinheiro = Dinheiro +20, penalti = 0, bola1 = 0, captcha = captcha +1, Penalti_Cod = '". $penalti_cod ."',Penalti_Acertos = Penalti_Acertos +1,upnivel = upnivel+1,Tempo_Penalti = '$tempo_chutar1' WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();
}elseif($bola1 == 2){
$sql = DB::conn()->prepare("UPDATE campeonatos SET placar1 = placar1+2 WHERE time1 = '$time_user'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE campeonatos SET placar2 = placar2+2 WHERE time2 = '$time_user'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora + 2, Gols_Rodada = Gols_Rodada + 2, Gols_Temporada = Gols_Temporada + 2, Gols_Total = Gols_Total + 2, Dinheiro = Dinheiro +40, penalti = 0, bola1 = 0, captcha = captcha +1, Penalti_Cod = '". $penalti_cod ."',Penalti_Acertos = Penalti_Acertos +2,upnivel = upnivel+2,Tempo_Penalti = '$tempo_chutar1' WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();	
}elseif($bola1 == 3){
$sql = DB::conn()->prepare("UPDATE campeonatos SET placar1 = placar1+3 WHERE time1 = '$time_user'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE campeonatos SET placar2 = placar2+3 WHERE time2 = '$time_user'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora + 3, Gols_Rodada = Gols_Rodada + 3, Gols_Temporada = Gols_Temporada + 3, Gols_Total = Gols_Total + 3, Dinheiro = Dinheiro +60, penalti = 0, bola1 = 0, captcha = captcha +1, Penalti_Cod = '". $penalti_cod ."',Penalti_Acertos = Penalti_Acertos +3,upnivel = upnivel+3,Tempo_Penalti = '$tempo_chutar1' WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();
}
	
}//fim bola extra
//fim

$tempo_chutar1 = date("Y/m/d H:i:s", strtotime("+4 mins"));
$tempo_chutar2 = date("Y/m/d H:i:s", strtotime("+8 mins"));	

//Erro
if($vip >= date('Y-m-d H:i:s')){
$sql = DB::conn()->prepare("UPDATE usuarios SET Tempo_Penalti = '$tempo_chutar1',penalti = 0,bola1 = 0, captcha = captcha +1, Penalti_Cod = '". $penalti_cod ."',Penalti_Erros = Penalti_Erros +1 WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();	
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET Tempo_Penalti = '$tempo_chutar2', penalti = 0, bola1 = 0, captcha = captcha +1, Penalti_Cod = '". $penalti_cod ."',Penalti_Erros = Penalti_Erros +1 WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();	
}

//Update na tabela Campeonatos//


if ($verificar_gol == 1) {
	echo "<script>location.href='index.php?pr=p_gol'</script>";
} else {
	echo "<script>location.href='index.php?pr=p_errou'</script>";
}
?>