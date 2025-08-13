<?php
include_once('conn.php');
date_default_timezone_set("Brazil/East");
session_start();
if(!isset($_SESSION['Usuario'])){
	$usuario = utf8_decode($_POST['usuario']);
	$senha = $_POST['senha'];
	$email = strip_tags($_POST['email']);
	$sexo = $_POST['sexo'];
	$time = $_POST['times'];
	$ip = $_SERVER["REMOTE_ADDR"];
	$auto_cod = rand(1000,9999);
	$penalti_cod = rand(1000,9999);
	$passe_certo_cod = rand(1000,9999);
	
	if(strlen($usuario) < 4){
	echo 'O campo usuario precisa ter no minimo 4 caracteres !';	
	}elseif(strlen($senha) < 6){
		echo 'O campo senha precisa ter no minimo 6 caracteres !';
	}elseif(!preg_match("/^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\-]+\.[a-z]{2,4}$/i", $email)){
		echo 'Informe um email valido';
	}else{
		//verifica se o usuario passou o limite de cadastro por dia que é 4
		$sql = DB::conn()->prepare("SELECT * FROM cadastro_historico WHERE IP = '$ip' AND Dia = '".date('d/m/y')."'");
		$sql->execute();
		
		if($sql->rowCount() == 4){
		echo 'Limite para criar contas são 4 por dia :(';	
		}else{
		$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE Usuario = '$usuario'");
		$sql->execute();	
		
		if($sql->rowCount() == 1){
			echo 'Este usuário já existe!';
		}else{
		$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE Email = '$email'");
		$sql->execute();
		
		if($sql->rowCount() == 1){
			echo 'E-mail já cadastrado!';
		}
		else{
		$data = date("d/m/y");
		$hora = date("H:i");
		$logging = time();
		$sql = DB::conn()->prepare("INSERT INTO usuarios (Usuario, Senha, Email, Time, Nivel, VIP, Fixo, Dinheiro, Sexo, Cadastro, Ultima_Entrada, divisao, ADM, IP, Troca,opcoes_chute,Status,Auto_Cod,Penalti_Cod,Falta_Cod,Pontos) VALUES ('$usuario','$senha','$email','$time','1','0000-00-00 00:00:00','0','0','$sexo','$data','$data','10','0','$ip','0','c','0','$auto_cod','$penalti_cod','$passe_certo_cod',1)");
		$sql->execute();
		
		$sql = DB::conn()->prepare("INSERT INTO cadastro_historico (user,IP, Dia) VALUES ('$usuario','$ip','$data')");
		$sql->execute();
		
		echo 'Cadastro realizado com sucesso!';
		}
			
		}
		
	}
}
}
?>