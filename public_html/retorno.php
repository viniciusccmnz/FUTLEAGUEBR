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


$hora_atual=$_SESSION['hora']=date('H:i');


$conexao=mysqli_connect('localhost','futlea52_futleaguebr','burro101997','futlea52_kjgol_1')or die('Erro de mysqli_select_db')or die("Erro de conexão 1");


$retorno=$_REQUEST['r'];
$tipo=$_REQUEST['t'];

//$depois = date("Y/m/d H:i:s", strtotime('+8 min'));



$selecao=mysqli_query($conexao,"select * from usuarios WHERE ID = '".$_SESSION['ID']."' ");
$registros=mysqli_fetch_array($selecao);

$selecao1=mysqli_query($conexao,"select * from vips WHERE id_user = '".$_SESSION['ID']."' ");
$results=mysqli_num_rows($selecao1);

if($results>=1){
	$depois = date("Y/m/d H:i:s", strtotime('+5 mins'));

}else{
	$depois = date("Y/m/d H:i:s", strtotime('+9 mins'));
	
}



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

$_SESSION['hora']=$hora;
if(isset($_SESSION['contador'])){
	

	
}else{
	$_SESSION['contador']=0;
	
}


if($_SESSION['contador']==0){

$inserir=mysqli_query($conexao,"insert into retorno(usuario,retorno,data,hora,tipo,rand)values('$codigo','$retorno','$data','$hora','$tipo','$rand')");
}

/*


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

if($_SESSION['contador']==0){
	

	

	if($tipo==440){




		$update=mysqli_query($conexao,"UPDATE usuarios SET falta = 0, bola2= 0, Tempo_Falta='$depois'
			WHERE ID = '".$_SESSION['ID']."'");



	}



	if($tipo==441){


	$hora_nova=date('H:i');

		if($hora_atual==$hora_nova){




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
	}}
}

	
	
// TRILHA - Sistema novo implementado (retorno16.php e retorno17.php)
// Lógica antiga removida para evitar conflitos

$_SESSION['contador']=$_SESSION['contador']+1;

if($_SESSION['contador']>=100){
	$_SESSION['contador']=0;
}

echo $_SESSION['contador'];

?>

