<?php
// retorno5.php - Chamado quando o usuário ERRA a falta
session_start();
include_once('../../paginas/conn.php');
date_default_timezone_set("Brazil/East");

try {
    if (!isset($_SESSION['ID'])) {
        echo 'OK';
        exit;
    }

    $user_id = $_SESSION['ID'];
    
    // Definir tempo de espera para falta
    $vip_query = DB::conn()->prepare("SELECT * FROM vips WHERE id_user = ?");
    $vip_query->execute([$user_id]);
    $is_vip = $vip_query->rowCount() > 0;
    
    $tempo_espera = '+1 seconds'; // Falta liberada rapidamente para testes
    $proxima_falta = date("Y-m-d H:i:s", strtotime($tempo_espera));
    
    // Apenas resetar a falta sem contar gol
    $update_erro = DB::conn()->prepare("UPDATE usuarios SET falta = 0, bola1 = 0, Tempo_Falta = ? WHERE ID = ?");
    $update_erro->execute([$proxima_falta, $user_id]);
    
} catch (Exception $e) {
    // Em caso de erro, apenas continua
}

http_response_code(200);
echo 'OK';
?>
