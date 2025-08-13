<?php
session_start();
include_once('conn.php');
$id_user = $_SESSION['ID'];
$id_time = $_POST['id_tm'];

if(isset($id_user)){
	
	$configuracoes = DB::conn()->prepare("SELECT * FROM configuracoes");
	$configuracoes->execute();
	
	$conf = $configuracoes->fetchObject();
	
	$TemporadaAgora = $conf->Campeonato;
	$RodadaAgora = $conf->Rodada;
	//verificar se é presidente
	$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
	$sql->execute();
	$rs = $sql->fetch();
	
	$cargo = $rs['Cargo'];
	$time = $rs['Time'];
	
	//dados times
	$query = DB::conn()->prepare("SELECT * FROM times WHERE ID = '$time'");
	$query->execute();
	$qs = $query->fetch();
	$timm = $qs['id_time_secar'];
	
	//campeonato
	$qsl = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = '$RodadaAgora' AND time1 = '$id_time' AND time2 = '$time' OR time2 = '$id_time' AND time1 = '$time'");
	$qsl->execute();
	
	$qsl1 = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = '$RodadaAgora' AND time1 = '$id_time' OR time2 = '$id_time'");
	$qsl1->execute();
	
	if($id_time == ''){
	$sql = DB::conn()->prepare("UPDATE times SET id_time_secar = 0 WHERE ID = '$time' AND Presidente = '".$_SESSION['ID']."'");
	$sql->execute();
	//pegar o id do time
	$sql = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$timm'");
	$sql->execute();
	$rs = $sql->fetch();
	$nome_time = $rs['Time'];
	
	
	$sql = DB::conn()->prepare("DELETE FROM secadores WHERE id_para = '$timm'");
	$sql->execute();
	echo 'Você parou de secar o '. $nome_time.'!';	
	}
	elseif($id_time == $time){
		echo 'Você não pode secar seu proprio time!';	
	}
	elseif($timm > 0){
		echo 'Você já está secando um time!';	
	}elseif($qsl1->rowCount() == 0){
	echo 'Você não pode secar um time que está em treino';	
	}elseif($qsl->rowCount() == 1){
	echo 'Você não pode secar um time que está jogando contra sua equipe';			
	}else{
		if($cargo == 1){
		$sql = DB::conn()->prepare("UPDATE times SET id_time_secar = '$id_time' WHERE ID = '$time' AND Presidente = '".$_SESSION['ID']."'");
		$sql->execute();
		//se for 0 ele inseri o time
		$sql = DB::conn()->prepare("INSERT INTO secadores (id_para,id_time, gols_secados) VALUES ('$id_time','$time','0')");
		$sql->execute();
		echo 'Salvo : você está secando este time !';
		}
	}	
	
}else{
	echo "<script>location.href='index.php?pr=index;</script>";	
}
?>
