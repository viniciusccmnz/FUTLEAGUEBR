<?php
include_once('conn.php');
session_start();
date_default_timezone_set("Brazil/East");

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$de   = $_SESSION['ID'];
 		$para = $_POST['id_de'];
		$msg = strip_tags(trim(filter_input(INPUT_POST, 'msg_p')));
		$data = date("d/m");
		$hora = date("H:i");
		$retorno = array();
		
		$verificar = DB::conn()->prepare("SELECT * FROM mensagens_usuario WHERE Mensagem = ? AND Hora = ?");
		$verificar->execute(array($msg,$hora));
		
		if($verificar->rowCount() > 0){
		$retorno['status'] = 'no';
		}else{
		
		$addmsg = DB::conn()->prepare("INSERT INTO mensagens_usuario SET id_de = ?, id_para = ?,Data = ?, Hora = ?, Mensagem = ?, Tipo = ?");
		$dados = array($de,$para,$data,$hora,$msg,'p');
		
		if($addmsg->execute($dados)){
			$retorno['status'] = 'ok';
			
		}else{
			$retorno['status'] = 'no';	
		}
		}
		die(json_encode($retorno));
		
	}
?>