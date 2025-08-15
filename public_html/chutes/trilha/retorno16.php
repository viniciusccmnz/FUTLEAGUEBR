<?php
// retorno16.php - Chamado quando o usuário faz GOL na trilha
session_start();
include_once('../../paginas/conn.php');
date_default_timezone_set("Brazil/East");

try {
    if (!isset($_SESSION['ID'])) {
        echo 'OK';
        exit;
    }

    $user_id = $_SESSION['ID'];
    
    // Buscar dados do usuário
    $query = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = ?");
    $query->execute([$user_id]);
    $user = $query->fetch(PDO::FETCH_ASSOC);
    
    if (!$user) {
        echo 'OK';
        exit;
    }
    
    // Buscar configurações
    $config_query = DB::conn()->prepare("SELECT * FROM Configuracoes");
    $config_query->execute();
    $config = $config_query->fetch(PDO::FETCH_ASSOC);
    
    $rodada_atual = $config['Rodada'];
    $time_user = $user['Time'];
    $bola3 = $user['bola3'];
    
    // Definir tempo de espera para trilha baseado no status VIP
    $vip_query = DB::conn()->prepare("SELECT * FROM vips WHERE id_user = ?");
    $vip_query->execute([$user_id]);
    $is_vip = $vip_query->rowCount() > 0;
    
    $tempo_espera = $is_vip ? '+5 minutes' : '+9 minutes';
    $proxima_trilha = date("Y-m-d H:i:s", strtotime($tempo_espera));
    
    // Calcular multiplicador
    $multiplicador = 1;
    if ($bola3 == 2) $multiplicador = 2;
    if ($bola3 == 3) $multiplicador = 3;
    
    $gols_ganhos = 1 * $multiplicador;
    $dinheiro_ganho = 25 * $multiplicador; // Trilha dá dinheiro médio
    $exp_ganha = 1 * $multiplicador;
    
    // Verificar se não é auto-jogo
    $auto_jogo = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = ? AND time1 = ? AND time2 = ?");
    $auto_jogo->execute([$rodada_atual, $time_user, $time_user]);
    
    if ($auto_jogo->rowCount() == 0) {
        // Atualizar time
        $update_time = DB::conn()->prepare("UPDATE times SET Gols_Time = Gols_Time + ?, Gols = Gols + ? WHERE ID = ?");
        $update_time->execute([$gols_ganhos, $gols_ganhos, $time_user]);
    }
    
    // Atualizar placares
    $update_placar1 = DB::conn()->prepare("UPDATE campeonatos SET placar1 = placar1 + ? WHERE Rodada = ? AND time1 = ?");
    $update_placar1->execute([$gols_ganhos, $rodada_atual, $time_user]);
    
    $update_placar2 = DB::conn()->prepare("UPDATE campeonatos SET placar2 = placar2 + ? WHERE Rodada = ? AND time2 = ?");
    $update_placar2->execute([$gols_ganhos, $rodada_atual, $time_user]);
    
    // Atualizar usuário
    $update_user = DB::conn()->prepare("
        UPDATE usuarios SET 
            Gols_Hora = Gols_Hora + ?,
            Gols_Rodada = Gols_Rodada + ?,
            Gols_Temporada = Gols_Temporada + ?,
            Gols_Total = Gols_Total + ?,
            Dinheiro = Dinheiro + ?,
            upnivel = upnivel + ?,
            Trilha_Acertos = Trilha_Acertos + ?,
            trilha = 0,
            bola3 = 0,
            Tempo_Trilha = ?
        WHERE ID = ?
    ");
    $update_user->execute([
        $gols_ganhos, $gols_ganhos, $gols_ganhos, $gols_ganhos,
        $dinheiro_ganho, $exp_ganha, $gols_ganhos,
        $proxima_trilha, $user_id
    ]);
    
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
