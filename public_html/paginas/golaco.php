<?php
$Paginas = isset($_REQUEST['pr']) ? $_REQUEST['pr'] : 'index';
// sanitiza para evitar caminhos inválidos
$Paginas = preg_replace('/[^a-zA-Z0-9_]/', '', (string)$Paginas);
if ($Paginas === '') {
    $Paginas = 'index';
}
?>

