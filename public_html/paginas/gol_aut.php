<?php
//testar sistema
session_start();
include "conn.php";
date_default_timezone_set("Brazil/East");

if(isset($_SESSION['ID'])){
$cod_ant = $_POST['code'];
	
$query = DB::conn()->prepare("SELECT ID, Tempo_Auto,Gols_Total FROM usuarios WHERE ID = '". $_SESSION['ID'] ."'");
$query->execute();
$rs = $query->fetchObject();
$Tempo_Auto = $rs->Tempo_Auto;
$Gols_Total = $rs->Gols_Total;
$id_u = $rs->ID;

if($Tempo_Auto <= date('Y/m/d H:i:s')){
$ip = $_SERVER['REMOTE_ADDR'];
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

$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = '$RodadaAgora' AND time1 = '$time_user' AND time2 = '$time_user'");
$sql->execute();

if($sql->rowCount() == 0){
	$sql = DB::conn()->prepare("UPDATE times SET Gols_Time = Gols_Time+1, Gols = Gols+1 WHERE ID = '$time_user'");
	$sql->execute();
}else{

}
//

	$sql = DB::conn()->prepare("UPDATE campeonatos SET placar1 = placar1+1 WHERE time1 = '$time_user'");
	$sql->execute();

	$sql = DB::conn()->prepare("UPDATE campeonatos SET placar2 = placar2+1 WHERE time2 = '$time_user'");
	$sql->execute();
//agora vamos pegar os dados do seu time
$dados_time = DB::conn()->prepare("SELECT id_time_secar FROM times WHERE ID = ?");
$dados_time->execute(array($time_user));

$rss = $dados_time->fetch();
$time_secar = $rss['id_time_secar'];

//verificações
if($ordem == 's' && $time_secar > 0){
$sql = DB::conn()->prepare("UPDATE secadores SET gols_secados = gols_secados+1 WHERE id_time = '$time_user' AND id_para = '$time_secar'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE campeonatos SET placar2 = placar2+1 WHERE time1 = '$time_secar'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE campeonatos SET placar1 = placar1+1 WHERE time2 = '$time_secar'");
$sql->execute();	
	
}elseif($ordem == 'c'){

}else{
	
}
//fim
	
$tempo_chutar1 = date("Y/m/d H:i:s", strtotime("+4 mins"));
$tempo_chutar2 = date("Y/m/d H:i:s", strtotime("+8 mins"));
$auto_cod = rand(1000,9999);

if ($VIP >= date('Y-m-d H:i:s')) {
	$tempo_chutar1 = date("Y/m/d H:i:s", strtotime("+4 mins"));
	$sql = DB::conn()->prepare("UPDATE usuarios SET Tempo_Auto = '". $tempo_chutar1 ."', ip2 = '$ip' WHERE ID = ('". $_SESSION['ID'] ."')");
	$sql->execute();	

}else {
	$tempo_chutar2 = date("Y/m/d H:i:s", strtotime("+8 mins"));
	$sql = DB::conn()->prepare("UPDATE usuarios SET Tempo_Auto = '". $tempo_chutar2 ."', ip2 = '$ip' WHERE ID = ('". $_SESSION['ID'] ."')");
	$sql->execute();
}
$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora+1, Gols_Temporada = Gols_Temporada+1, Gols_Rodada = Gols_Rodada+1, Gols_Total = Gols_Total+1, Dinheiro = Dinheiro+10, upnivel = upnivel+1,Auto_Cod = '". $auto_cod  ."' WHERE ID = '".$_SESSION['ID']."' LIMIT 1");
$sql->execute();

}else{


}

}


?>