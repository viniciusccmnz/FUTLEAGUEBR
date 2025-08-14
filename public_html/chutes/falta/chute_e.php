<?php
// Arquivo para processamento de chutes especiais da falta
header('Content-Type: application/json; charset=utf-8');

$response = [
    'status' => true,
    'message' => 'Chute processado com sucesso',
    'resultado' => 'gol' // ou 'defesa', 'errou', etc.
];

echo json_encode($response, JSON_UNESCAPED_UNICODE);
