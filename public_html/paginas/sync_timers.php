<?php
session_start();
include_once("conn.php");
header('Content-Type: application/json');

// Verificar se o usuário está logado
if (!isset($_SESSION['ID'])) {
    echo json_encode(['success' => false, 'error' => 'Usuário não autenticado']);
    exit;
}

$user_id = $_SESSION['ID'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    
    if ($input['action'] === 'sync') {
        try {
            // Buscar os tempos atuais do banco
            $query = DB::conn()->prepare("SELECT Tempo_Auto, Tempo_Penalti, Tempo_Falta, Tempo_Trilha FROM usuarios WHERE ID = ?");
            $query->execute(array($user_id));
            $tempos = $query->fetch();
            
            if ($tempos) {
                $tempos_restantes = [];
                
                // Calcular tempo restante para cada cronômetro
                $agora = time();
                
                // Auto
                $tempo_auto = strtotime($tempos['Tempo_Auto']);
                $tempos_restantes['auto'] = max(0, $tempo_auto - $agora);
                
                // Penalti
                $tempo_penalti = strtotime($tempos['Tempo_Penalti']);
                $tempos_restantes['penalti'] = max(0, $tempo_penalti - $agora);
                
                // Falta
                $tempo_falta = strtotime($tempos['Tempo_Falta']);
                $tempos_restantes['falta'] = max(0, $tempo_falta - $agora);
                
                // Trilha
                $tempo_trilha = strtotime($tempos['Tempo_Trilha']);
                $tempos_restantes['trilha'] = max(0, $tempo_trilha - $agora);
                
                echo json_encode([
                    'success' => true,
                    'timers' => $tempos_restantes,
                    'server_time' => $agora
                ]);
            } else {
                echo json_encode(['success' => false, 'error' => 'Usuário não encontrado']);
            }
            
        } catch (Exception $e) {
            echo json_encode(['success' => false, 'error' => 'Erro interno: ' . $e->getMessage()]);
        }
    } else {
        echo json_encode(['success' => false, 'error' => 'Ação inválida']);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Método não permitido']);
}
?>
