<?php
// Arquivo para processar chute da falta
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
        // Buscar status VIP do usuário (igual ao penalti)
        $query_vip = DB::conn()->prepare("SELECT * FROM vips WHERE id_user = ?");
        $query_vip->execute([$user_id]);
        $is_vip = $query_vip->rowCount() > 0;
        
        // Definir tempo baseado no status VIP (igual ao penalti)
        $tempo_espera = $is_vip ? '+5 minutes' : '+10 minutes';
        $proxima_falta = date("Y-m-d H:i:s", strtotime($tempo_espera));
        
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
