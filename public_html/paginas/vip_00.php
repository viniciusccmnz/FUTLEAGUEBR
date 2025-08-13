<?php
include_once('conn.php');
date_default_timezone_set("Brazil/East");
session_start();
$data = date("d/m");
$hora = date("H");
$min  = date("i");
$sec = date("s");

if($min == 58 && $sec == 58){
//VIP FIXO
$db = DB::conn()->prepare("SELECT * FROM usuarios WHERE Tempo_Auto <= '".date('Y/m/d H:i:s')."' AND Fixo = 1 AND VIP >= '".date('Y-m-d H:i:s')."'");
$db->execute();
while($qr = $db->fetch()){
	$id_user = $qr['ID'];
	$status = $qr['Status'];
	$fixo = $qr['Fixo'];
	$VIP = $qr['VIP'];
	$total_gols = $qr['Gols_Total'];
	$timeuser = $qr['Time'];
	
$sql = DB::conn()->prepare("SELECT * FROM vip_fixo WHERE id_de = '$id_user' AND tempo = 0");
$sql->execute();

if($sql->rowCount() == 1){
//faz nada	
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora+1, Gols_Temporada = Gols_Temporada+1, Gols_Rodada = Gols_Rodada+1, Gols_Total = Gols_Total+1, Dinheiro = Dinheiro+10, upnivel = upnivel+1 WHERE ID = '$id_user' AND Tempo_Auto <= '".date('Y/m/d H:i:s')."' AND Fixo = 1");
$sql->execute();

$sql = DB::conn()->prepare("INSERT INTO vip_fixo (id_de, tempo) SELECT '$id_user','0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM vip_fixo WHERE id_de = '$id_user' AND tempo = 0)");
$sql->execute();
}			
}
}
?>
