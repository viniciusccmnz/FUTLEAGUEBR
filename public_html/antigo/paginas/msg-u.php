<?php
include_once('conn.php');
session_start();
date_default_timezone_set("Brazil/East");

	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['ID'])){
		$de   = $_SESSION['ID'];
 		$para = $_POST['id_de'];
		$msg = strip_tags(trim(filter_input(INPUT_POST, 'msg_p')));
		$data = date("d/m");
		$hora = date("H:i");
		$retorno = array();
		
		if($de == $para){
		$retorno['status'] = 'igual';	
		}else{
		
		$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de, id_para,Data,Hora,Mensagem,Tipo) SELECT '$de', '$para', '$data', '$hora', '$msg', 'p' FROM DUAL WHERE NOT EXISTS(SELECT Mensagem FROM mensagens_usuario WHERE Hora = '$hora' AND id_de = '$de')");
		$sql->execute();
		$retorno['status'] = 'ok';
		}
		die(json_encode($retorno));
		
	}else{
		echo 'Entre no jogo para mandar msg!';	
	}
?>