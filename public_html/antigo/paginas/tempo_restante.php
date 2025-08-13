<?php
include_once('conn.php');
date_default_timezone_set("Brazil/East");

$horas = 23 - date("H");
$minutos = 59 - date("i");
$segundos = 59 - date("s");

if($minutos == 4 && $segundos == 59 || $minutos == 5 && $segundos == 0){
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
	
$sql = DB::conn()->prepare("SELECT * FROM vip_fixo WHERE id_de = '$id_user' AND tempo = 5");
$sql->execute();

if($sql->rowCount() == 1){
//faz nada	
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora+1, Gols_Temporada = Gols_Temporada+1, Gols_Rodada = Gols_Rodada+1, Gols_Total = Gols_Total+1, Dinheiro = Dinheiro+10, upnivel = upnivel+1 WHERE ID = '$id_user' AND Tempo_Auto <= '".date('Y/m/d H:i:s')."' AND Fixo = 1");
$sql->execute();

$sql = DB::conn()->prepare("INSERT INTO vip_fixo (id_de, tempo) SELECT '$id_user','5' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM vip_fixo WHERE id_de = '$id_user' AND tempo = 5)");
$sql->execute();
}			
}	
//	
$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE bola1 = 0 OR bola2 = 0 ORDER BY RAND() LIMIT 2");
$sql->execute();
if($sql->rowCount() == 0){
}else{
	$time_inserir = array();
	foreach($sql as $time){
	$time_inserir[] = $time['ID'];
	
	$sql = DB::conn()->prepare("UPDATE usuarios SET bola1 = 3 WHERE ID = '".$time_inserir[0]."'");
	$sql->execute();
	$sql = DB::conn()->prepare("UPDATE usuarios SET bola2 = 3 WHERE ID = '".$time_inserir[1]."'");
	$sql->execute();
	}
}

// vip fixo

}elseif($minutos == 9 && $segundos == 59 || $minutos == 10 && $segundos == 0){
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
	
$sql = DB::conn()->prepare("SELECT * FROM vip_fixo WHERE id_de = '$id_user' AND tempo = 10");
$sql->execute();

if($sql->rowCount() == 1){
//faz nada	
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora+1, Gols_Temporada = Gols_Temporada+1, Gols_Rodada = Gols_Rodada+1, Gols_Total = Gols_Total+1, Dinheiro = Dinheiro+10, upnivel = upnivel+1 WHERE ID = '$id_user' AND Tempo_Auto <= '".date('Y/m/d H:i:s')."' AND Fixo = 1");
$sql->execute();

$sql = DB::conn()->prepare("INSERT INTO vip_fixo (id_de, tempo) SELECT '$id_user','10' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM vip_fixo WHERE id_de = '$id_user' AND tempo = 10)");
$sql->execute();
}			
}
//	
$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE bola1 = 0 OR bola2 = 0 ORDER BY RAND() LIMIT 2");
$sql->execute();
if($sql->rowCount() == 0){
}else{
	$time_inserir = array();
	foreach($sql as $time){
	$time_inserir[] = $time['ID'];
	
	$sql = DB::conn()->prepare("UPDATE usuarios SET bola1 = 3 WHERE ID = '".$time_inserir[0]."'");
	$sql->execute();
	$sql = DB::conn()->prepare("UPDATE usuarios SET bola2 = 3 WHERE ID = '".$time_inserir[1]."'");
	$sql->execute();
	}
}

}elseif($minutos == 14 && $segundos == 59 || $minutos == 15 && $segundos == 0){
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
	
$sql = DB::conn()->prepare("SELECT * FROM vip_fixo WHERE id_de = '$id_user' AND tempo = 15");
$sql->execute();

if($sql->rowCount() == 1){
//faz nada	
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora+1, Gols_Temporada = Gols_Temporada+1, Gols_Rodada = Gols_Rodada+1, Gols_Total = Gols_Total+1, Dinheiro = Dinheiro+10, upnivel = upnivel+1 WHERE ID = '$id_user' AND Tempo_Auto <= '".date('Y/m/d H:i:s')."' AND Fixo = 1");
$sql->execute();

$sql = DB::conn()->prepare("INSERT INTO vip_fixo (id_de, tempo) SELECT '$id_user','15' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM vip_fixo WHERE id_de = '$id_user' AND tempo = 15)");
$sql->execute();
}			
}
//	
$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE bola1 = 0 OR bola2 = 0 ORDER BY RAND() LIMIT 2");
$sql->execute();
if($sql->rowCount() == 0){
}else{
	$time_inserir = array();
	foreach($sql as $time){
	$time_inserir[] = $time['ID'];
	
	$sql = DB::conn()->prepare("UPDATE usuarios SET bola1 = 3 WHERE ID = '".$time_inserir[0]."'");
	$sql->execute();
	$sql = DB::conn()->prepare("UPDATE usuarios SET bola2 = 3 WHERE ID = '".$time_inserir[1]."'");
	$sql->execute();
	}
}
	
}elseif($minutos == 19 && $segundos == 59 || $minutos == 20 && $segundos == 0){
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
	
$sql = DB::conn()->prepare("SELECT * FROM vip_fixo WHERE id_de = '$id_user' AND tempo = 20");
$sql->execute();

if($sql->rowCount() == 1){
//faz nada	
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora+1, Gols_Temporada = Gols_Temporada+1, Gols_Rodada = Gols_Rodada+1, Gols_Total = Gols_Total+1, Dinheiro = Dinheiro+10, upnivel = upnivel+1 WHERE ID = '$id_user' AND Tempo_Auto <= '".date('Y/m/d H:i:s')."' AND Fixo = 1");
$sql->execute();

$sql = DB::conn()->prepare("INSERT INTO vip_fixo (id_de, tempo) SELECT '$id_user','20' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM vip_fixo WHERE id_de = '$id_user' AND tempo = 20)");
$sql->execute();
}			
}
}elseif($minutos == 24 && $segundos == 59 || $minutos == 25 && $segundos == 0){
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
	
$sql = DB::conn()->prepare("SELECT * FROM vip_fixo WHERE id_de = '$id_user' AND tempo = 25");
$sql->execute();

if($sql->rowCount() == 1){
//faz nada	
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora+1, Gols_Temporada = Gols_Temporada+1, Gols_Rodada = Gols_Rodada+1, Gols_Total = Gols_Total+1, Dinheiro = Dinheiro+10, upnivel = upnivel+1 WHERE ID = '$id_user' AND Tempo_Auto <= '".date('Y/m/d H:i:s')."' AND Fixo = 1");
$sql->execute();

$sql = DB::conn()->prepare("INSERT INTO vip_fixo (id_de, tempo) SELECT '$id_user','25' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM vip_fixo WHERE id_de = '$id_user' AND tempo = 25)");
$sql->execute();
}			
}
//	
$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE bola1 = 0 OR bola2 = 0 ORDER BY RAND() LIMIT 2");
$sql->execute();
if($sql->rowCount() == 0){
}else{
	$time_inserir = array();
	foreach($sql as $time){
	$time_inserir[] = $time['ID'];
	
	$sql = DB::conn()->prepare("UPDATE usuarios SET bola1 = 3 WHERE ID = '".$time_inserir[0]."'");
	$sql->execute();
	$sql = DB::conn()->prepare("UPDATE usuarios SET bola2 = 3 WHERE ID = '".$time_inserir[1]."'");
	$sql->execute();
	}
}

}elseif($minutos == 29 && $segundos == 59 || $minutos == 30 && $segundos == 0){
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
	
$sql = DB::conn()->prepare("SELECT * FROM vip_fixo WHERE id_de = '$id_user' AND tempo = 30");
$sql->execute();

if($sql->rowCount() == 1){
//faz nada	
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora+1, Gols_Temporada = Gols_Temporada+1, Gols_Rodada = Gols_Rodada+1, Gols_Total = Gols_Total+1, Dinheiro = Dinheiro+10, upnivel = upnivel+1 WHERE ID = '$id_user' AND Tempo_Auto <= '".date('Y/m/d H:i:s')."' AND Fixo = 1");
$sql->execute();

$sql = DB::conn()->prepare("INSERT INTO vip_fixo (id_de, tempo) SELECT '$id_user','30' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM vip_fixo WHERE id_de = '$id_user' AND tempo = 30)");
$sql->execute();
}			
}
// prata
$sql1 = DB::conn()->prepare("SELECT * FROM usuarios WHERE bola1 = 0 OR bola2 = 0 ORDER BY RAND() LIMIT 2");
$sql1->execute();
if($sql1->rowCount() == 0){
}else{
	$time_inserir1 = array();
	foreach($sql1 as $time1){
	$time_inserir1[] = $time1['ID'];
	
	$sql2 = DB::conn()->prepare("UPDATE usuarios SET bola1 = 2 WHERE ID = '".$time_inserir1[0]."'");
	$sql2->execute();
	$sql2 = DB::conn()->prepare("UPDATE usuarios SET bola2 = 2 WHERE ID = '".$time_inserir1[1]."'");
	$sql2->execute();
	}
}
}elseif($minutos == 34 && $segundos == 59 || $minutos == 35 && $segundos == 0){
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
	
$sql = DB::conn()->prepare("SELECT * FROM vip_fixo WHERE id_de = '$id_user' AND tempo = 35");
$sql->execute();

if($sql->rowCount() == 1){
//faz nada	
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora+1, Gols_Temporada = Gols_Temporada+1, Gols_Rodada = Gols_Rodada+1, Gols_Total = Gols_Total+1, Dinheiro = Dinheiro+10, upnivel = upnivel+1 WHERE ID = '$id_user' AND Tempo_Auto <= '".date('Y/m/d H:i:s')."' AND Fixo = 1");
$sql->execute();

$sql = DB::conn()->prepare("INSERT INTO vip_fixo (id_de, tempo) SELECT '$id_user','35' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM vip_fixo WHERE id_de = '$id_user' AND tempo = 35)");
$sql->execute();
}			
}
//	
$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE bola1 = 0 OR bola2 = 0 ORDER BY RAND() LIMIT 2");
$sql->execute();
if($sql->rowCount() == 0){
}else{
	$time_inserir = array();
	foreach($sql as $time){
	$time_inserir[] = $time['ID'];
	
	$sql = DB::conn()->prepare("UPDATE usuarios SET bola1 = 3 WHERE ID = '".$time_inserir[0]."'");
	$sql->execute();
	$sql = DB::conn()->prepare("UPDATE usuarios SET bola2 = 3 WHERE ID = '".$time_inserir[1]."'");
	$sql->execute();
	}
}
	
}elseif($minutos == 39 && $segundos == 59 || $minutos == 40 && $segundos == 0){
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
	
$sql = DB::conn()->prepare("SELECT * FROM vip_fixo WHERE id_de = '$id_user' AND tempo = 40");
$sql->execute();

if($sql->rowCount() == 1){
//faz nada	
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora+1, Gols_Temporada = Gols_Temporada+1, Gols_Rodada = Gols_Rodada+1, Gols_Total = Gols_Total+1, Dinheiro = Dinheiro+10, upnivel = upnivel+1 WHERE ID = '$id_user' AND Tempo_Auto <= '".date('Y/m/d H:i:s')."' AND Fixo = 1");
$sql->execute();

$sql = DB::conn()->prepare("INSERT INTO vip_fixo (id_de, tempo) SELECT '$id_user','40' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM vip_fixo WHERE id_de = '$id_user' AND tempo = 40)");
$sql->execute();
}			
}
// prata
$sql1 = DB::conn()->prepare("SELECT * FROM usuarios WHERE bola1 = 0 OR bola2 = 0 ORDER BY RAND() LIMIT 2");
$sql1->execute();
if($sql1->rowCount() == 0){
}else{
	$time_inserir1 = array();
	foreach($sql1 as $time1){
	$time_inserir1[] = $time1['ID'];
	
	$sql2 = DB::conn()->prepare("UPDATE usuarios SET bola1 = 2 WHERE ID = '".$time_inserir1[0]."'");
	$sql2->execute();
	$sql2 = DB::conn()->prepare("UPDATE usuarios SET bola2 = 2 WHERE ID = '".$time_inserir1[1]."'");
	$sql2->execute();
	}
}
}elseif($minutos == 44 && $segundos == 59 || $minutos == 45 && $segundos == 0){
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
	
$sql = DB::conn()->prepare("SELECT * FROM vip_fixo WHERE id_de = '$id_user' AND tempo = 45");
$sql->execute();

if($sql->rowCount() == 1){
//faz nada	
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora+1, Gols_Temporada = Gols_Temporada+1, Gols_Rodada = Gols_Rodada+1, Gols_Total = Gols_Total+1, Dinheiro = Dinheiro+10, upnivel = upnivel+1 WHERE ID = '$id_user' AND Tempo_Auto <= '".date('Y/m/d H:i:s')."' AND Fixo = 1");
$sql->execute();

$sql = DB::conn()->prepare("INSERT INTO vip_fixo (id_de, tempo) SELECT '$id_user','45' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM vip_fixo WHERE id_de = '$id_user' AND tempo = 45)");
$sql->execute();
}			
}
//	
$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE bola1 = 0 OR bola2 = 0 ORDER BY RAND() LIMIT 2");
$sql->execute();
if($sql->rowCount() == 0){
}else{
	$time_inserir = array();
	foreach($sql as $time){
	$time_inserir[] = $time['ID'];
	
	$sql = DB::conn()->prepare("UPDATE usuarios SET bola1 = 3 WHERE ID = '".$time_inserir[0]."'");
	$sql->execute();
	$sql = DB::conn()->prepare("UPDATE usuarios SET bola2 = 3 WHERE ID = '".$time_inserir[1]."'");
	$sql->execute();
	}
}

// prata

}elseif($minutos == 49 && $segundos == 59 || $minutos == 50 && $segundos == 0){
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
	
$sql = DB::conn()->prepare("SELECT * FROM vip_fixo WHERE id_de = '$id_user' AND tempo = 50");
$sql->execute();

if($sql->rowCount() == 1){
//faz nada	
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora+1, Gols_Temporada = Gols_Temporada+1, Gols_Rodada = Gols_Rodada+1, Gols_Total = Gols_Total+1, Dinheiro = Dinheiro+10, upnivel = upnivel+1 WHERE ID = '$id_user' AND Tempo_Auto <= '".date('Y/m/d H:i:s')."' AND Fixo = 1");
$sql->execute();

$sql = DB::conn()->prepare("INSERT INTO vip_fixo (id_de, tempo) SELECT '$id_user','50' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM vip_fixo WHERE id_de = '$id_user' AND tempo = 50)");
$sql->execute();
}			
}
// prata

$sql1 = DB::conn()->prepare("SELECT * FROM usuarios WHERE bola1 = 0 OR bola2 = 0 ORDER BY RAND() LIMIT 2");
$sql1->execute();
if($sql1->rowCount() == 0){
}else{
	$time_inserir1 = array();
	foreach($sql1 as $time1){
	$time_inserir1[] = $time1['ID'];
	
	$sql2 = DB::conn()->prepare("UPDATE usuarios SET bola1 = 2 WHERE ID = '".$time_inserir1[0]."'");
	$sql2->execute();
	$sql2 = DB::conn()->prepare("UPDATE usuarios SET bola2 = 2 WHERE ID = '".$time_inserir1[1]."'");
	$sql2->execute();
	}
}	
}elseif($minutos == 54 && $segundos == 59 || $minutos == 55 && $segundos == 0){
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
	
$sql = DB::conn()->prepare("SELECT * FROM vip_fixo WHERE id_de = '$id_user' AND tempo = 55");
$sql->execute();

if($sql->rowCount() == 1){
//faz nada	
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora+1, Gols_Temporada = Gols_Temporada+1, Gols_Rodada = Gols_Rodada+1, Gols_Total = Gols_Total+1, Dinheiro = Dinheiro+10, upnivel = upnivel+1 WHERE ID = '$id_user' AND Tempo_Auto <= '".date('Y/m/d H:i:s')."' AND Fixo = 1");
$sql->execute();

$sql = DB::conn()->prepare("INSERT INTO vip_fixo (id_de, tempo) SELECT '$id_user','55' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM vip_fixo WHERE id_de = '$id_user' AND tempo = 55)");
$sql->execute();
}			
}
//	
$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE bola1 = 0 OR bola2 = 0 ORDER BY RAND() LIMIT 2");
$sql->execute();
if($sql->rowCount() == 0){
}else{
	$time_inserir = array();
	foreach($sql as $time){
	$time_inserir[] = $time['ID'];
	
	$sql = DB::conn()->prepare("UPDATE usuarios SET bola1 = 3 WHERE ID = '".$time_inserir[0]."'");
	$sql->execute();
	$sql = DB::conn()->prepare("UPDATE usuarios SET bola2 = 3 WHERE ID = '".$time_inserir[1]."'");
	$sql->execute();
	}
}

}elseif($minutos == 0 && $segundos == 0){
//	
$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE bola1 = 0 OR bola2 = 0 ORDER BY RAND() LIMIT 2");
$sql->execute();
if($sql->rowCount() == 0){
}else{
	$time_inserir = array();
	foreach($sql as $time){
	$time_inserir[] = $time['ID'];
	
	$sql = DB::conn()->prepare("UPDATE usuarios SET bola1 = 3 WHERE ID = '".$time_inserir[0]."'");
	$sql->execute();
	$sql = DB::conn()->prepare("UPDATE usuarios SET bola2 = 3 WHERE ID = '".$time_inserir[1]."'");
	$sql->execute();
	}
}	
}elseif($minutos == 59 && $segundos == 58 || $minutos == 59 && $segundos == 59){
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


