<?php
header('Content-Type: application/json; charset=utf-8');
$offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;
echo json_encode([
  'status' => true,
  'qtd_usuarios' => 0,
  'dados' => ''
], JSON_UNESCAPED_UNICODE);
