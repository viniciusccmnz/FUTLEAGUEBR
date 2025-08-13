<?php
header("Access-Control-Allow-Origin: *");

session_start();

$id = $_SESSION['ID'];

$hostname = "localhost";
$bancodedados = "futlea52_kjgol_1";
$usuario = "futlea52_futleaguebr";
$senha = "Zugur0sh10199*7";

$data=date('d/m/Y');
$hora=	date('H:i:s');

$conexao=mysqli_connect('localhost','futlea52_futleaguebr','burro101997','futlea52_kjgol_1')or die('Erro de mysqli_select_db')or die("Erro de conexão 1");


$retorno=$_REQUEST['r'];
$tipo=$_REQUEST['t'];

$depois = date("Y/m/d H:i:s", strtotime('+8 min'));

$selecao=mysqli_query($conexao,"select * from usuarios WHERE ID = '".$_SESSION['ID']."' ");
$registros=mysqli_fetch_array($selecao);

$numero=$registros['Gols_Total'];
$total= $numero+1;

$numero1=$registros['Gols_Temporada'];
$total_temporada= $numero1+1;

$numero2=$registros['Gols_Rodada'];
$total_rodada= $numero2+1;

$numero3=$registros['Gols_Hora'];
$total_hora= $numero3+1;

$bola1=$registros['bola1'];
$bola2=$registros['bola2'];
$bola3=$registros['bola3'];


$codigo=$_SESSION['ID'];

$inserir=mysqli_query($conexao,"insert into retorno(usuario,retorno,data,hora,tipo)values('$codigo','$retorno','$data','$hora','$tipo')");

/*
if($retorno=='00'){

	
		if($tipo=331){
		$update=mysqli_query($conexao,"UPDATE usuarios SET penalti = 0, bola1= 0, Tempo_Penalti'$depois'
		WHERE ID = '".$_SESSION['ID']."'");
		}else{
			$update=mysqli_query($conexao,"UPDATE usuarios SET falta = 0, bola2= 0, Tempo_Falta='$depois'
			WHERE ID = '".$_SESSION['ID']."'");
		}
	
	
}

330 = Falha Penalty
331 = Gol Penalty
440 = Falta Perdida
441 = Gol Falta
550 = Trilha Perdida
5551 = Gol Trilha


*/

if($tipo==330){
	$update=mysqli_query($conexao,"UPDATE usuarios SET penalti = 0, bola1= 0, Tempo_Penalti='$depois'
		WHERE ID = '".$_SESSION['ID']."'");
	
}


if($tipo==331){
	
	if($bola1==3){
		
		$total=$total+1;
		$total_temporada=$total_temporada+1;
		$total_rodada=$total_rodada+1;
		$total_hora=$total_hora+1;	
		
	$update=mysqli_query($conexao,"UPDATE usuarios SET penalti = 0, bola1= 0, Tempo_Penalti='$depois', 
	Gols_Total ='$total',Gols_Temporada ='$total_temporada', Gols_Rodada ='$total_rodada', Gols_Hora = '$total_hora'
		WHERE ID = '".$_SESSION['ID']."'");	
		
		
	}else{
	
	
	$update=mysqli_query($conexao,"UPDATE usuarios SET penalti = 0, bola1= 0, Tempo_Penalti='$depois', 
	Gols_Total ='$total',Gols_Temporada ='$total_temporada', Gols_Rodada ='$total_rodada', Gols_Hora = '$total_hora'
		WHERE ID = '".$_SESSION['ID']."'");
	
	}
		
}

if($tipo==440){
	$update=mysqli_query($conexao,"UPDATE usuarios SET falta = 0, bola2= 0, Tempo_Falta='$depois'
		WHERE ID = '".$_SESSION['ID']."'");
	
}



if($tipo==441){
	
	if($bola2==3){
	
		$total=$total+1;
		$total_temporada=$total_temporada+1;
		$total_rodada=$total_rodada+1;
		$total_hora=$total_hora+1;
		
		$update=mysqli_query($conexao,"UPDATE usuarios SET falta = 0, bola2= 0, Tempo_Falta='$depois', 
	Gols_Total ='$total',Gols_Temporada ='$total_temporada', Gols_Rodada ='$total_rodada', Gols_Hora = '$total_hora'
		WHERE ID = '".$_SESSION['ID']."'");
		
	
	}else{
	
	$update=mysqli_query($conexao,"UPDATE usuarios SET falta = 0, bola2= 0, Tempo_Falta='$depois', 
	Gols_Total ='$total',Gols_Temporada ='$total_temporada', Gols_Rodada ='$total_rodada', Gols_Hora = '$total_hora'
		WHERE ID = '".$_SESSION['ID']."'");
	}
}


if($tipo==550){
	$update=mysqli_query($conexao,"UPDATE usuarios SET trilha = 0, bola2= 0, Tempo_Trilha='$depois'
		WHERE ID = '".$_SESSION['ID']."'");
	
}

if($tipo==551){

	
	
	
	if($bola3==3){
		
			$total=$total+1;
		$total_temporada=$total_temporada+1;
		$total_rodada=$total_rodada+1;
		$total_hora=$total_hora+1;
		
		
		$update=mysqli_query($conexao,"UPDATE usuarios SET trilha = 0, bola3= 0, Tempo_Trilha='$depois', 
	Gols_Total ='$total',Gols_Temporada ='$total_temporada', Gols_Rodada ='$total_rodada', Gols_Hora = '$total_hora'
		WHERE ID = '".$_SESSION['ID']."'");
		
	}else{
	
	$update=mysqli_query($conexao,"UPDATE usuarios SET trilha = 0, bola3= 0, Tempo_Trilha='$depois', 
	Gols_Total ='$total',Gols_Temporada ='$total_temporada', Gols_Rodada ='$total_rodada', Gols_Hora = '$total_hora'
		WHERE ID = '".$_SESSION['ID']."'");
		
	}
	
}

if($tipo==331 or $tipo ==441 or $tipo==551){

	
	
	//CONFIGURACOES
$configuracoes = DB::conn()->prepare("SELECT * FROM configuracoes");
$configuracoes->execute();

$conf = $configuracoes->fetchObject();

$TemporadaAgora = $conf->Campeonato;
$RodadaAgora = $conf->Rodada;
//USUARIO
$query = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
$query->execute();

$rs = $query->fetch();

$mc_cod = $rs["Penalti_Cod"];
$bola1 = $rs["bola1"];
$tempo = $rs["Tempo_Penalti"];
$time_user = $rs['Time'];
$VIP = $rs['VIP'];

$mc_id = $rs["ID"];
$mc_nivel = $rs["Nivel"];
$mc_time = $rs["Time"];

$penalti_cod = rand(1000,9999);
$goleiro1_conf = rand(1,6);
$goleiro2_conf = rand(1,6);

if ($goleiro1_conf == $goleiro2_conf) {
	$goleiro2_conf = $goleiro2_conf + 1;
}

if ($goleiro2_conf > 6) {
	$goleiro2_conf = 1;
}

$verificar_gol = 1;

if ($chute == $goleiro1_conf or $chute == $goleiro2_conf) {
	$verificar_gol = 0;
}

if ($verificar_gol == 1) {
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = '$RodadaAgora' AND time1 = '$time_user' AND time2 = '$time_user'");
$sql->execute();

if($sql->rowCount() == 0){
if($bola1 == 1){
$sql = DB::conn()->prepare("UPDATE times SET Gols_Time = Gols_Time+1, Gols = Gols+1 WHERE ID = '$time_user'");
$sql->execute();	
}elseif($bola1 == 2){
$sql = DB::conn()->prepare("UPDATE times SET Gols_Time = Gols_Time+2, Gols = Gols+2 WHERE ID = '$time_user'");
$sql->execute();	
}elseif($bola1 == 3){
$sql = DB::conn()->prepare("UPDATE times SET Gols_Time = Gols_Time+3, Gols = Gols+3 WHERE ID = '$time_user'");
$sql->execute();	
}
}else{
}

if($bola1 == 1){	
$sql = DB::conn()->prepare("UPDATE campeonatos SET placar1 = placar1+1 WHERE Rodada = '$RodadaAgora' AND time1 = '$time_user'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE campeonatos SET placar2 = placar2+1 WHERE Rodada = '$RodadaAgora' AND time2 = '$time_user'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora + 1, Gols_Rodada = Gols_Rodada + 1, Gols_Temporada = Gols_Temporada + 1, Gols_Total = Gols_Total + 1, Dinheiro = Dinheiro +20, penalti = 0, bola1 = 0, captcha = captcha +1,upnivel = upnivel+1 WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();
}elseif($bola1 == 2){
$sql = DB::conn()->prepare("UPDATE campeonatos SET placar1 = placar1+2 WHERE Rodada = '$RodadaAgora' AND time1 = '$time_user'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE campeonatos SET placar2 = placar2+2 WHERE Rodada = '$RodadaAgora' AND time2 = '$time_user'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora + 2, Gols_Rodada = Gols_Rodada + 2, Gols_Temporada = Gols_Temporada + 2, Gols_Total = Gols_Total + 2, Dinheiro = Dinheiro +40, penalti = 0, bola1 = 0, captcha = captcha +1,upnivel = upnivel+2 WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();	
}elseif($bola1 == 3){
$sql = DB::conn()->prepare("UPDATE campeonatos SET placar1 = placar1+3 WHERE Rodada = '$RodadaAgora' AND time1 = '$time_user'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE campeonatos SET placar2 = placar2+3 WHERE Rodada = '$RodadaAgora' AND time2 = '$time_user'");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora + 3, Gols_Rodada = Gols_Rodada + 3, Gols_Temporada = Gols_Temporada + 3, Gols_Total = Gols_Total + 3, Dinheiro = Dinheiro +60, penalti = 0, bola1 = 0, captcha = captcha +1,upnivel = upnivel+3 WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();
}
$tempo_chutar1 = date("Y/m/d H:i:s", strtotime("+4 mins"));
$tempo_chutar2 = date("Y/m/d H:i:s", strtotime("+8 mins"));	

if($VIP >= date('Y-m-d H:i:s')){
$sql = DB::conn()->prepare("UPDATE usuarios SET Tempo_Penalti = '$tempo_chutar1',penalti = 0,bola1 = 0, captcha = captcha +1, Penalti_Cod = '". $penalti_cod ."',Penalti_Acertos = Penalti_Acertos +1 WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();	
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET Tempo_Penalti = '$tempo_chutar2', penalti = 0, bola1 = 0, captcha = captcha +1, Penalti_Cod = '". $penalti_cod ."',Penalti_Acertos = Penalti_Acertos +1 WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();		
}

} else {
$tempo_chutar1 = date("Y/m/d H:i:s", strtotime("+4 mins"));
$tempo_chutar2 = date("Y/m/d H:i:s", strtotime("+8 mins"));	

if($VIP >= date('Y-m-d H:i:s')){
$sql = DB::conn()->prepare("UPDATE usuarios SET Tempo_Penalti = '$tempo_chutar1',penalti = 0,bola1 = 0, captcha = captcha +1, Penalti_Cod = '". $penalti_cod ."',Penalti_Erros = Penalti_Erros +1 WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();	
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET Tempo_Penalti = '$tempo_chutar2', penalti = 0, bola1 = 0, captcha = captcha +1, Penalti_Cod = '". $penalti_cod ."',Penalti_Erros = Penalti_Erros +1 WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();		
}

}
	
	
	
	
	
	
	
	
	
	
	
	
	
}


?>
