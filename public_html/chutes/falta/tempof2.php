<?php
// Arquivo para atualizar tempo da falta
session_start();
include("../../conexao.php");

if (!isset($_SESSION['ID'])) {
    echo "";
    exit;
}

$user_id = $_SESSION['ID'];

// Busca o tempo atual da falta
$query = DB::conn()->prepare("SELECT Tempo_Falta FROM usuarios WHERE ID = ?");
$query->execute([$user_id]);
$rs = $query->fetchObject();

if ($rs) {
    $tempo_falta = $rs->Tempo_Falta;
    $tempo_restante = strtotime($tempo_falta) - time();
    
    if ($tempo_restante > 0) {
        $minutos = floor($tempo_restante / 60);
        $segundos = $tempo_restante % 60;
        echo sprintf("%02d:%02d", $minutos, $segundos);
    } else {
        echo "00:00";
    }
} else {
    echo "00:00";
}
?>
