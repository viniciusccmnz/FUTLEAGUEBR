<?php

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

$codigo=$_SESSION['ID'];

$inserir=mysqli_query($conexao,"insert into retorno(usuario,retorno,data,hora)values('$tipo','$retorno','$data','$hora')");



