<?php
//testar sistema
session_start();
include "conn.php";
date_default_timezone_set("Brazil/East");

if(isset($_SESSION['ID'])){
	
$query = DB::conn()->prepare("SELECT ID, Tempo_Auto,Gols_Total FROM usuarios WHERE ID = '". $_SESSION['ID'] ."'");
$query->execute();
$rs = $query->fetchObject();
$Tempo_Auto = $rs->Tempo_Auto;
$Gols_Total = $rs->Gols_Total;
$id_u = $rs->ID;

if($Tempo_Auto <= date('Y/m/d H:i:s')){

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

}else{


}

}


?>