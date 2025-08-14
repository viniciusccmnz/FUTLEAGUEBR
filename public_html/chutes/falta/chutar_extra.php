<?php
// Arquivo para processar chute extra da falta
session_start();
include("../../sys/conectar.php");

if (!isset($_SESSION['ID'])) {
    echo "";
    exit;
}

$user_id = $_SESSION['ID'];

// Busca informações do usuário
$query = DB::conn()->prepare("SELECT falta, Tempo_Falta FROM usuarios WHERE ID = ?");
$query->execute([$user_id]);
$rs = $query->fetchObject();

if ($rs) {
    $falta = $rs->falta;
    $tempo_falta = $rs->Tempo_Falta;
    
    // Verifica se pode chutar
    if ($falta == 1 || strtotime($tempo_falta) <= time()) {
        // Libera para chutar novamente após 2 segundos (para teste)
        $proxima_falta = date("Y-m-d H:i:s", strtotime("+2 seconds"));
        
        $update = DB::conn()->prepare("UPDATE usuarios SET falta = 0, Tempo_Falta = ? WHERE ID = ?");
        $update->execute([$proxima_falta, $user_id]);
        
        echo "OK";
    } else {
        echo "WAIT";
    }
} else {
    echo "ERROR";
}
?>
