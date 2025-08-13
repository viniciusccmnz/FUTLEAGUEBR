<?php include("paginas/conn.php");
session_start();
date_default_timezone_set("Brazil/East");
?>
<?php
$cod           = $_GET['cod'];
$zagueiro 	   = $_GET['z'];
$meio_campista = $_GET['m'];
$atacante 	   = $_GET['a'];
$id = $_SESSION['ID'];
//dados do usuario
$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id."'");
$sql->execute();
$rs = $sql->fetchObject();
$id_u = $rs->ID;
$timeid = $rs->Time;
$timeu = $rs->Time;
$tempo = $rs->Tempo_Falta;
$Gols_Total = $rs->Gols_Total;

//CONFIGURACOES
$configuracoes = DB::conn()->prepare("SELECT * FROM Configuracoes");
$configuracoes->execute();

$conf = $configuracoes->fetchObject();

$TemporadaAgora = $conf->Campeonato;
$RodadaAgora = $conf->Rodada;

$sql1 = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = '$RodadaAgora'");
$sql1->execute();

while($rs1 = $sql1->fetch()){
	$time01 = $rs1['time1'];
	$time02 = $rs1['time2'];
}


if (!$cod or !$zagueiro or !$meio_campista or !$atacante) {
	echo "<script>location.href='index.php?pr=index';</script>";
}

if ($cod < 1000 or $cod > 9999) {
	echo "<script>location.href='index.php?pr=index';</script>";
}

if ($zagueiro != 1 and $zagueiro != 2 and $zagueiro != 3 and $zagueiro != 4) {
	echo "<script>location.href='index.php?pr=index';</script>";
}

if ($meio_campista != 1 and $meio_campista != 2 and $meio_campista != 3) {
	echo "<script>location.href='index.php?pr=index';</script>";
}

if ($atacante != 1 and $atacante != 2 and $atacante != 3) {
	echo "<script>location.href='index.php?pr=index';</script>";
}

$query = DB::conn()->prepare("SELECT Falta_Cod, ID, Nivel, Time, Sorte,VIP,falta,bola2,hab_trilha FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
$query->execute();
$rs = $query->fetchObject();

$mc_cod = $rs->Falta_Cod;
$vip = $rs->VIP;
$falta = $rs->falta;
$bola2 = $rs->bola2;
$hab_penalti = $rs->hab_trilha;

if ($cod != $mc_cod) {
	echo "<script>location.href='index.php?pr=index';</script>";
}
if ($falta == 0 || $bola2 == 0) {
	echo "<script>location.href='index.php?pr=index';</script>";
}

$mc_id = $rs->ID;
$mc_nivel = $rs->Nivel;
$mc_time = $rs->Time;
$mc_sorte = $rs->Sorte;

$passe_certo_cod = rand(1000,9999);
$zagueiro_conf = rand(1,4);
$meio_campista_conf = rand(1,3);
$atacante_conf = rand(1,3);

$verificar_gol = 1;
$verificar_gol_erro = 0;

if ($atacante == $atacante_conf) {
	$verificar_gol = 0;
	$verificar_gol_erro = 3;
}

if ($meio_campista == $meio_campista_conf) {
	$verificar_gol = 0;
	$verificar_gol_erro = 2;
}

if ($mc_sorte < 1000 and $zagueiro == $zagueiro_conf) {
	$verificar_gol = 0;
	$verificar_gol_erro = 1;
}

if ($verificar_gol == 1 && $tempo <= date('Y/m/d H:i:s')) {
//CONFIGURACOES
$configuracoes = DB::conn()->prepare("SELECT * FROM Configuracoes");
$configuracoes->execute();

$conf = $configuracoes->fetchObject();

$TemporadaAgora = $conf->Campeonato;
$RodadaAgora = $conf->Rodada;

//pegar dados do usuario
$dados_user = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = ?");
$dados_user->execute(array($_SESSION['ID']));

$rs = $dados_user->fetch();

$time_user = $rs['Time'];
$ordem = $rs['opcoes_chute'];
$VIP = $rs['VIP'];
$timeu = $rs['Time'];

///inicio
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
if($bola2 == 1){	
$sql = DB::conn()->prepare("UPDATE campeonatos SET placar1 = placar1+1 WHERE time1 = '$time_user'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE campeonatos SET placar2 = placar2+1 WHERE time2 = '$time_user'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora + 1, Gols_Rodada = Gols_Rodada + 1, Gols_Temporada = Gols_Temporada + 1, Gols_Total = Gols_Total + 1, Dinheiro = Dinheiro +30, falta = 0, bola2 = 0, captcha = captcha +1,upnivel = upnivel+1,Tempo_Falta = '$tempo_chutar1', Falta_Cod = '". $passe_certo_cod ."', Falta_Acertos = Falta_Acertos +1 WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();
}elseif($bola2 == 2){
$sql = DB::conn()->prepare("UPDATE campeonatos SET placar1 = placar1+2 WHERE time1 = '$time_user'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE campeonatos SET placar2 = placar2+2 WHERE time2 = '$time_user'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora + 2, Gols_Rodada = Gols_Rodada + 2, Gols_Temporada = Gols_Temporada + 2, Gols_Total = Gols_Total + 2, Dinheiro = Dinheiro +60, falta = 0, bola2 = 0, captcha = captcha +1,upnivel = upnivel+2,Tempo_Falta = '$tempo_chutar1', Falta_Cod = '". $passe_certo_cod ."', Falta_Acertos = Falta_Acertos +2 WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();	
}elseif($bola2 == 3){
$sql = DB::conn()->prepare("UPDATE campeonatos SET placar1 = placar1+3 WHERE time1 = '$time_user'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE campeonatos SET placar2 = placar2+3 WHERE time2 = '$time_user'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora + 3, Gols_Rodada = Gols_Rodada + 3, Gols_Temporada = Gols_Temporada + 3, Gols_Total = Gols_Total + 3, Dinheiro = Dinheiro +90, falta = 0, bola2 = 0, captcha = captcha +1,upnivel = upnivel+3,Tempo_Falta = '$tempo_chutar1', Falta_Cod = '". $passe_certo_cod ."', Falta_Acertos = Falta_Acertos +3 WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();
}

}

//fim

$tempo_chutar1 = date("Y/m/d H:i:s", strtotime("+4 mins"));
$tempo_chutar2 = date("Y/m/d H:i:s", strtotime("+8 mins"));	

if($vip >= date('Y-m-d H:i:s')){
$sql = DB::conn()->prepare("UPDATE usuarios SET Tempo_Falta = '$tempo_chutar1', falta = 0, bola2 = 0, captcha = captcha +1, Falta_Cod = '". $passe_certo_cod ."', Falta_Erros = Falta_Erros +1 WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();	
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET Tempo_Falta = '$tempo_chutar2',falta = 0, bola2 = 0, captcha = captcha +1, Falta_Cod = '". $passe_certo_cod ."', Falta_Erros = Falta_Erros +1 WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();	
}





if ($verificar_gol == 1) {
	echo "<script>location.href='index.php?pr=p_gol';</script>";
} else {
	echo "<script>location.href='index.php?pr=p_errou';</script>";
}
?>