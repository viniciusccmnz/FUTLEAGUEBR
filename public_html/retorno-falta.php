<?php
header("Access-Control-Allow-Origin: *");

session_start();

$id = $_SESSION['ID'];



$hostname = "localhost";
$bancodedados = "futlea52_kjgol_1";
$usuario = "futlea52_futleaguebr";
$senha = "Zugur0sh10199*7";

$data=date('Y-m-d');
$hora=	date('H:i:s');

$_SESSION['hora']=$hora;




	$min=substr($hora,3,2);
	$min = $min+2;

	$atual=substr($_SESSION['hora'],3,2);


if(isset($_SESSION['min'])){
	
	echo "Existe sessão</br>";
	
}else{
	$_SESSION['min']=$min;
	
	echo "não existe sessão</br>";
	
	$_SESSION['min']=$min;
	
	
}

echo "sessão com +1: ".$_SESSION['min'];

echo "</br>Atual: ".$atual;

	
	
	
if($atual>=$_SESSION['min']){	
echo "</br>Menor ou igual</br>";
	
	$_SESSION['min']=$min;
	
	
	

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
$data=date('Y-m-d');




$inserir=mysqli_query($conexao,"insert into retorno(usuario,retorno,data,hora,tipo)values('$codigo','$retorno','$data','$hora','$tipo')");



$hora = strtotime($hora);

$selecao_faltas=mysqli_query($conexao,"select * from retorno WHERE hora='$hora' and data='$data' and usuario='$codigo'  ");
$numero_faltas=mysqli_num_rows($selecao_faltas);
$registros=mysqli_fetch_array($selecao_faltas);




if($tipo==440){
	
	
	$selecao_faltas=mysqli_query($conexao,"select * from retorno WHERE hora='$hora' and data='$data'  and usuario='$codigo'  ");
	$numero_faltas=mysqli_num_rows($selecao_faltas);
	
	if($numero_faltas==0){
	
	$update=mysqli_query($conexao,"UPDATE usuarios SET falta = 0, bola2= 0, Tempo_Falta='$depois'
		WHERE ID = '".$_SESSION['ID']."'");
	
	}
		
}



if($tipo==441){
	
	if($bola2==3){
	
		$total=$total+1;
		$total_temporada=$total_temporada+1;
		$total_rodada=$total_rodada+1;
		$total_hora=$total_hora+1;
		
		
		$selecao_faltas=mysqli_query($conexao,"select * from retorno WHERE hora='$hora' and data='$data'  and usuario='$codigo'  ");
	$numero_faltas=mysqli_num_rows($selecao_faltas);
	
	if($numero_faltas==0){
		
		
		$update=mysqli_query($conexao,"UPDATE usuarios SET falta = 0, bola2= 0, Tempo_Falta='$depois', 
	Gols_Total ='$total',Gols_Temporada ='$total_temporada', Gols_Rodada ='$total_rodada', Gols_Hora = '$total_hora'
		WHERE ID = '".$_SESSION['ID']."'");
	}
	
	}else{
		
		$selecao_faltas=mysqli_query($conexao,"select * from retorno WHERE hora='$hora' and data='$data'  and usuario='$codigo'");
	$numero_faltas=mysqli_num_rows($selecao_faltas);
	
	if($numero_faltas==0){
	
	$update=mysqli_query($conexao,"UPDATE usuarios SET falta = 0, bola2= 0, Tempo_Falta='$depois', 
	Gols_Total ='$total',Gols_Temporada ='$total_temporada', Gols_Rodada ='$total_rodada', Gols_Hora = '$total_hora'
		WHERE ID = '".$_SESSION['ID']."'");
	}
		
	}
}
}

?>
