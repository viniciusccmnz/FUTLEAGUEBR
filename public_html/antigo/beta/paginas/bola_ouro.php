<?php
include_once('conn.php');
date_default_timezone_set("Brazil/East");
$horas = 23 - date("H");
$minutos = 59 - date("i");
$segundos = 59 - date("s");

if($minutos == 5 && $segundos == 0){
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
}elseif($minutos == 10 && $segundos == 0){
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
}elseif($minutos == 15 && $segundos == 0){
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
}if($minutos == 20 && $segundos == 0){
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
}elseif($minutos == 25 && $segundos == 0){
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
}elseif($minutos == 30 && $segundos == 0){
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
}elseif($minutos == 35 && $segundos == 0){
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
}elseif($minutos == 40 && $segundos == 0){
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
}elseif($minutos == 45 && $segundos == 0){
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
}elseif($minutos == 50 && $segundos == 0){
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
}elseif($minutos == 55 && $segundos == 0){
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
}elseif($minutos == 59 && $segundos == 58){
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
}
?>