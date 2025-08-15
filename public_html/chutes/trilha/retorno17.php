<?php
// retorno17.php - Chamado quando o usuário ERRA na trilha
session_start();
include_once('../../paginas/conn.php');
date_default_timezone_set("Brazil/East");

try {
    if (!isset($_SESSION['ID'])) {
        echo 'OK';
        exit;
    }

    $user_id = $_SESSION['ID'];
    
    // Definir tempo de espera para trilha baseado no status VIP
    $vip_query = DB::conn()->prepare("SELECT * FROM vips WHERE id_user = ?");
    $vip_query->execute([$user_id]);
    $is_vip = $vip_query->rowCount() > 0;
    
    $tempo_espera = $is_vip ? '+5 minutes' : '+9 minutes';
    $proxima_trilha = date("Y-m-d H:i:s", strtotime($tempo_espera));
    
    // Apenas resetar a trilha sem contar gol
    $update_erro = DB::conn()->prepare("UPDATE usuarios SET trilha = 0, bola3 = 0, Tempo_Trilha = ? WHERE ID = ?");
    $update_erro->execute([$proxima_trilha, $user_id]);
    
} catch (Exception $e) {
    // Em caso de erro, apenas continua
}

http_response_code(200);
echo 'OK';
?>

<script>
setTimeout(function() {
    window.parent.location.href = '../../index.php?pr=';
}, 1000);
</script>
