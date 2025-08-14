<?php
// retorno5.php - Chamado quando o usuário ERRA
session_start();
include_once('../../paginas/conn.php');
date_default_timezone_set("Brazil/East");

try {
    if (!isset($_SESSION['ID'])) {
        echo 'OK';
        exit;
    }

    $user_id = $_SESSION['ID'];
    
    // Definir tempo de espera
    $vip_query = DB::conn()->prepare("SELECT * FROM vips WHERE id_user = ?");
    $vip_query->execute([$user_id]);
    $is_vip = $vip_query->rowCount() > 0;
    
    $tempo_espera = $is_vip ? '+4 minutes' : '+8 minutes';
    $proximo_penalti = date("Y-m-d H:i:s", strtotime($tempo_espera));
    
    // Apenas resetar o pênalti sem contar gol
    $update_erro = DB::conn()->prepare("UPDATE usuarios SET penalti = 0, bola1 = 0, Tempo_Penalti = ? WHERE ID = ?");
    $update_erro->execute([$proximo_penalti, $user_id]);
    
} catch (Exception $e) {
    // Em caso de erro, apenas continua
}

http_response_code(200);
echo 'OK';
?>

