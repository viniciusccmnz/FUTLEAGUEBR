<?php
session_start();
include_once('conn.php');
date_default_timezone_set("Brazil/East");
$id_user = $_SESSION['ID'];
$retorno = array();

if(isset($id_user)){
	
$verificar = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = ?");
$verificar->execute(array($id_user));
$rs = $verificar->fetch();
$vip = $rs['VIP'];

	if($vip >= date('Y-m-d H:i:s')){
		echo 'vip';
	}else{
		
	}
}
?>