<?php
session_start();
include_once('conn.php');

if(isset($_SERVER['REQUEST_METHOD']) == 'POST'){
	$id_user = $_SESSION['ID'];
	$id_time = $_POST['id_tm'];
	$retorno = array();
	
	//configuracoes
	$query = DB::conn()->prepare("SELECT Troca, Campeonato FROM configuracoes");
	$query->execute();
	$rs = $query->fetchObject();
	
	$trocas_total = $rs->Troca;
	$temporada = $rs->Campeonato;
	
	//tempo 6 dias
	$tempo_dias_vip  = 144;
	$tempo_fim_vip  = date('Y-m-d H:i:s',mktime(date('H') + $tempo_dias_vip  ,date('i'),date('s'),date('m'),date('d'),date('Y')));
	
	//pegar dados do usuario
	$pegar_dados = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = ?");
	$pegar_dados->execute(array($id_user));
	
	$dados = $pegar_dados->fetchObject();

	$Cargo = $dados->Cargo;
	$custo = 40000;
	$Dinheiro = $dados->Dinheiro;
	$Time = $dados->Time;
	
	if($Cargo == 1){
	//
	$sql = DB::conn()->prepare("UPDATE times SET Presidente = 0 WHERE Presidente = '$id_user' AND ID = '$Time'");
	$sql->execute();
	//alterar o novo time
	$alterar_time = DB::conn()->prepare("UPDATE usuarios SET Time = '$id_time', Dinheiro = Dinheiro - '$custo', Cargo = 0, Troca = Troca+1,Tempo_Troca = '$tempo_fim_vip' WHERE ID = ?");
	
	if($alterar_time->execute(array($id_user))){
	
	//inseri na tabela movimentações
	$movimentacoes = DB::conn()->prepare("INSERT INTO movimentacoes (id_user, id_time_ant, id_time_atl) VALUES (?,?,?)");
	$movimentacoes->execute(array($id_user,$Time,$id_time));

	//
	$nome_t = DB::conn()->prepare('SELECT Time FROM times WHERE ID = ?');
	$nome_t->execute(array($id_time));
	
	$rs = $nome_t->fetchObject();
	$novo_time_n1 = $rs->Time;
	$retorno['time'] = $novo_time_n1;
	}
	die(json_encode($retorno));
	}elseif($Cargo >= 2){
		//alterar o novo time
	$alterar_time = DB::conn()->prepare("UPDATE usuarios SET Time = '$id_time', Dinheiro = Dinheiro - '$custo', Cargo = 0, Troca = Troca+1,Tempo_Troca = '$tempo_fim_vip' WHERE ID = ?");
	
	if($alterar_time->execute(array($id_user))){
	
	//inseri na tabela movimentações
	$movimentacoes = DB::conn()->prepare("INSERT INTO movimentacoes (id_user, id_time_ant, id_time_atl) VALUES (?,?,?)");
	$movimentacoes->execute(array($id_user,$Time,$id_time));

	//
	$nome_t = DB::conn()->prepare('SELECT Time FROM times WHERE ID = ?');
	$nome_t->execute(array($id_time));
	
	$rs = $nome_t->fetchObject();
	$novo_time_n2 = $rs->Time;
	$retorno['time'] = $novo_time_n2;	
	}
	die(json_encode($retorno));
	}
	else{
			//alterar o novo time
	$alterar_time = DB::conn()->prepare("UPDATE usuarios SET Time = '$id_time', Dinheiro = Dinheiro - '$custo', Troca = Troca+1,Tempo_Troca = '$tempo_fim_vip' WHERE ID = ?");
	
	if($alterar_time->execute(array($id_user))){
	
	//inseri na tabela movimentações
	$movimentacoes = DB::conn()->prepare("INSERT INTO movimentacoes (id_user, id_time_ant, id_time_atl) VALUES (?,?,?)");
	$movimentacoes->execute(array($id_user,$Time,$id_time));
	
	//
	$nome_t = DB::conn()->prepare('SELECT Time FROM times WHERE ID = ?');
	$nome_t->execute(array($id_time));
	
	$rs = $nome_t->fetchObject();
	$novo_time_n = $rs->Time;
	$retorno['time'] = $novo_time_n;
	}
	die(json_encode($retorno));
	}	
	
	
}
?>