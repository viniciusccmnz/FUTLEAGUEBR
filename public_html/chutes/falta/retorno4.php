<?php
// retorno4.php - Chamado quando o usuário faz GOL na falta
session_start();
include_once('../../paginas/conn.php');
date_default_timezone_set("Brazil/East");

// Log para debug
error_log("retorno4.php executado - " . date('Y-m-d H:i:s'));

try {
    if (!isset($_SESSION['ID'])) {
        error_log("retorno4.php: Sessão não encontrada");
        echo 'OK';
        exit;
    }

    $user_id = $_SESSION['ID'];
    error_log("retorno4.php: Usuário ID: " . $user_id);
    
    // Buscar dados do usuário
    $query = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = ?");
    $query->execute([$user_id]);
    $user = $query->fetch(PDO::FETCH_ASSOC);
    
    if (!$user) {
        error_log("retorno4.php: Usuário não encontrado");
        echo 'OK';
        exit;
    }
    
    error_log("retorno4.php: Usuário encontrado - Time: " . $user['Time'] . ", Bola1: " . $user['bola1']);
    
    // Buscar configurações
    $config_query = DB::conn()->prepare("SELECT * FROM Configuracoes");
    $config_query->execute();
    $config = $config_query->fetch(PDO::FETCH_ASSOC);
    
    $rodada_atual = $config['Rodada'];
    $time_user = $user['Time'];
    $bola1 = $user['bola1'];
    
    error_log("retorno4.php: Rodada: " . $rodada_atual . ", Time: " . $time_user . ", Bola1: " . $bola1);
    
    // Definir tempo de espera para falta baseado no status VIP (igual ao penalti)
    $vip_query = DB::conn()->prepare("SELECT * FROM vips WHERE id_user = ?");
    $vip_query->execute([$user_id]);
    $is_vip = $vip_query->rowCount() > 0;
    
    $tempo_espera = $is_vip ? '+5 minutes' : '+10 minutes';
    $proxima_falta = date("Y-m-d H:i:s", strtotime($tempo_espera));
    
    error_log("retorno4.php: VIP: " . ($is_vip ? 'Sim' : 'Não') . ", Próxima falta: " . $proxima_falta);
    
    // Calcular multiplicador
    $multiplicador = 1;
    if ($bola1 == 2) $multiplicador = 2;
    if ($bola1 == 3) $multiplicador = 3;
    
    $gols_ganhos = 1 * $multiplicador;
    $dinheiro_ganho = 35 * $multiplicador; // Falta dá mais dinheiro que penalti
    $exp_ganha = 2 * $multiplicador; // Falta dá mais experiência que penalti
    
    error_log("retorno4.php: Multiplicador: " . $multiplicador . ", Gols: " . $gols_ganhos . ", Dinheiro: " . $dinheiro_ganho . ", EXP: " . $exp_ganha);
    
    // Verificar se não é auto-jogo
    $auto_jogo = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = ? AND time1 = ? AND time2 = ?");
    $auto_jogo->execute([$rodada_atual, $time_user, $time_user]);
    
    if ($auto_jogo->rowCount() == 0) {
        // Atualizar time
        $update_time = DB::conn()->prepare("UPDATE times SET Gols_Time = Gols_Time + ?, Gols = Gols + ? WHERE ID = ?");
        $update_time->execute([$gols_ganhos, $gols_ganhos, $time_user]);
        error_log("retorno4.php: Time atualizado - Gols adicionados: " . $gols_ganhos);
    } else {
        error_log("retorno4.php: Auto-jogo detectado - não atualizando time");
    }
    
    // Atualizar placares
    $update_placar1 = DB::conn()->prepare("UPDATE campeonatos SET placar1 = placar1 + ? WHERE Rodada = ? AND time1 = ?");
    $update_placar1->execute([$gols_ganhos, $rodada_atual, $time_user]);
    
    $update_placar2 = DB::conn()->prepare("UPDATE campeonatos SET placar2 = placar2 + ? WHERE Rodada = ? AND time2 = ?");
    $update_placar2->execute([$gols_ganhos, $rodada_atual, $time_user]);
    
    error_log("retorno4.php: Placares atualizados - Gols adicionados: " . $gols_ganhos);
    
    // Atualizar usuário - usar campos específicos para falta se existirem
    $update_user = DB::conn()->prepare("
        UPDATE usuarios SET 
            Gols_Hora = Gols_Hora + ?,
            Gols_Rodada = Gols_Rodada + ?,
            Gols_Temporada = Gols_Temporada + ?,
            Gols_Total = Gols_Total + ?,
            Dinheiro = Dinheiro + ?,
            upnivel = upnivel + ?,
            Falta_Acertos = Falta_Acertos + ?,
            falta = 0,
            bola1 = 0,
            Tempo_Falta = ?
        WHERE ID = ?
    ");
    $update_user->execute([
        $gols_ganhos, $gols_ganhos, $gols_ganhos, $gols_ganhos,
        $dinheiro_ganho, $exp_ganha, $gols_ganhos,
        $proxima_falta, $user_id
    ]);
    
    error_log("retorno4.php: Usuário atualizado - Gols, dinheiro e EXP adicionados");
    
} catch (Exception $e) {
    error_log("retorno4.php: Erro - " . $e->getMessage());
    // Em caso de erro, apenas continua
}

http_response_code(200);
echo 'OK';
?>
