<?php
session_start();
include "conn.php";
date_default_timezone_set("Brazil/East");
$query = DB::conn()->prepare("SELECT Tempo_Auto FROM usuarios WHERE ID = ('". $_SESSION['ID'] ."')");
$query->execute();
$rs = $query->fetchObject();
$mc_tempo_chutar = $rs->Tempo_Auto;
echo $mc_tempo_chutar;	
?>