<?php
// Configurações da Trilha
session_start();

// Verificar se o usuário está logado
if(!isset($_SESSION['ID'])) {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => 'Usuário não autenticado']);
    exit;
}

// Incluir conexão com banco
include_once("../../paginas/conn.php");

// Buscar informações do usuário
$user_id = $_SESSION['ID'];
$query = DB::conn()->prepare("SELECT ID, Tempo_Trilha, trilha, bola3, hab_trilha, uso_bless_trilha FROM usuarios WHERE ID = ?");
$query->execute(array($user_id));
$user = $query->fetch();

// Configurações do jogo
$config = [
    'user_id' => $user_id,
    'pode_jogar' => false,
    'bless_ativo' => 0,
    'habilidade_trilha' => $user['hab_trilha'] ?? 0,
    'tempo_restante' => 0
];

// Verificar se pode jogar trilha
if($user['trilha'] == 1) {
    $config['pode_jogar'] = true;
} else {
    // Verificar se o tempo já expirou
    $tempo_atual = time();
    $tempo_trilha = strtotime($user['Tempo_Trilha']);
    if($tempo_atual >= $tempo_trilha) {
        $config['pode_jogar'] = true;
    } else {
        $config['tempo_restante'] = $tempo_trilha - $tempo_atual;
    }
}

// Verificar se tem bless ativo
if($user['uso_bless_trilha'] && strtotime($user['uso_bless_trilha']) > time()) {
    $config['bless_ativo'] = 1;
}

// Retornar configuração
header('Content-Type: application/json');
echo json_encode($config);
?>
