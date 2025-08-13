<?php

session_start();

$id = $_SESSION['ID'];

$hostname = "localhost";
$bancodedados = "futlea52_kjgol_1";
$usuario = "futlea52_futleaguebr";
$senha = "Zugur0sh10199*7";

$conexao=mysqli_connect('localhost','futlea52_futleaguebr','burro101997','futlea52_kjgol_1')or die('Erro de mysqli_select_db')or die("Erro de conexão 1");


$retorno=$_REQUEST['r'];

if($retorno=='11'){
	$retorno=1;
	$inserir=mysqli_query($conexao,"insert into retorno(retorno,usuario)values('$retorno','$id')");
}else{
	$retorno=0;
	$inserir=mysqli_query($conexao,"insert into retorno(retorno,usuario)values('$retorno','$id')");	
}
?>
<script>
	location.retorno="index.php"
</script>