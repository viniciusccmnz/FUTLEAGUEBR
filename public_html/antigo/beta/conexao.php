<?php

$hostname = "localhost";
$bancodedados = "futlea52_kjgol_1";
$usuario = "futlea52_futleaguebr";
$senha = "Zugur0sh10199*7";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}