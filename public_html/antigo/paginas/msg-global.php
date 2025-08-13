<?php
include_once('conn.php');
session_start();
date_default_timezone_set("Brazil/East");
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$usuario = strip_tags($_SESSION['ID']);
		$mensagem = strip_tags($_POST['mensagem']);
		$data = date("d/m");
		$hora = date("H:i");
		$tempo = date('Y-m-d H:i:s', strtotime('+1 min'));
		
		$sql = DB::conn()->prepare("INSERT INTO mensagens_global (id_de,mensagem,data,hora) SELECT '$usuario','$mensagem','$data','$hora' FROM DUAL WHERE NOT EXISTS(SELECT mensagem FROM mensagens_global WHERE id_de = '$usuario' AND hora = '$hora')");
		$sql->execute();
		
		$query = DB::conn()->prepare("UPDATE usuarios SET tempo_global = '$tempo' WHERE ID = '".$_SESSION['ID']."'");
		$query->execute();
		
		$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = ?");
		$sql->execute(array($_SESSION['ID']));
		$rs = $sql->fetch();
		$user = $rs['Usuario'];
		$nivel = $rs['Nivel'];
		$time = $rs['Time'];
		$vip = $rs['VIP'];
		$tempo_global = $rs['tempo_global'];
		
		$retorno = array();
		$retorno['usuario']  = $user;
		$retorno['nivel']    = $nivel;
		$retorno['time']     = $time;
		$retorno['mensagem'] = $mensagem;
		$retorno['data']     = $data;
		$retorno['hora']     = $hora;
		$retorno['tempo_global'] = $tempo_global;
		$retorno['status']   = 'ok';
		
		if($vip > 0 && $vip >= date('Y-m-d H:i:s')){
		$retorno['vip'] = 1;
		}else{
		$retorno['vip'] = 0;	
		}
		}else{
		$retorno['status']  = 'no';	
		}
		die(json_encode($retorno));
	
?>