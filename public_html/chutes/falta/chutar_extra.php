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
        // Buscar status VIP do usuário
        $query_vip = DB::conn()->prepare("SELECT VIP FROM usuarios WHERE ID = ?");
        $query_vip->execute([$user_id]);
        $rs_vip = $query_vip->fetchObject();
        
        // Definir tempo baseado no status VIP
        if ($rs_vip && $rs_vip->VIP > 0 && $rs_vip->VIP >= date('Y-m-d H:i:s')) {
            // Usuário VIP: 5 minutos
            $proxima_falta = date("Y-m/d H:i:s", strtotime("+5 mins"));
        } else {
            // Usuário normal: 10 minutos
            $proxima_falta = date("Y-m/d H:i:s", strtotime("+10 mins"));
        }
        
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
