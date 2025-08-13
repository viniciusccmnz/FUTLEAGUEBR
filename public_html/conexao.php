<?php

$hostname = getenv('DB_HOST') ?: '127.0.0.1';
$bancodedados = getenv('DB_NAME') ?: 'futleaguebr';
$usuario = getenv('DB_USER') ?: 'root';
$senha = getenv('DB_PASS') ?: '';

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}