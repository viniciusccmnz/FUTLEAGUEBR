<?php
// retorno5.php - Chamado quando o usuário ERRA a falta
session_start();
include_once('../../paginas/conn.php');
date_default_timezone_set("Brazil/East");

// Log para debug
error_log("retorno5.php executado - " . date('Y-m-d H:i:s'));

try {
    if (!isset($_SESSION['ID'])) {
        error_log("retorno5.php: Sessão não encontrada");
        echo 'OK';
        exit;
    }

    $user_id = $_SESSION['ID'];
    error_log("retorno5.php: Usuário ID: " . $user_id);
    
    // Definir tempo de espera para falta baseado no status VIP (igual ao penalti)
    $vip_query = DB::conn()->prepare("SELECT * FROM vips WHERE id_user = ?");
    $vip_query->execute([$user_id]);
    $is_vip = $vip_query->rowCount() > 0;
    
    $tempo_espera = $is_vip ? '+5 minutes' : '+10 minutes';
    $proxima_falta = date("Y-m-d H:i:s", strtotime($tempo_espera));
    
    error_log("retorno5.php: VIP: " . ($is_vip ? 'Sim' : 'Não') . ", Próxima falta: " . $proxima_falta);
    
    // Apenas resetar a falta sem contar gol
    $update_erro = DB::conn()->prepare("UPDATE usuarios SET falta = 0, bola1 = 0, Tempo_Falta = ? WHERE ID = ?");
    $update_erro->execute([$proxima_falta, $user_id]);
    
    error_log("retorno5.php: Falta resetada - próximo chute em: " . $proxima_falta);
    
} catch (Exception $e) {
    error_log("retorno5.php: Erro - " . $e->getMessage());
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