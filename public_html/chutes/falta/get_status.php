<?php
session_start();
include_once('../../paginas/conn.php');

$status_nerfar = 0;

if(isset($_SESSION['ID'])) {
    // Verificar se o usuário é VIP (igual ao penalti)
    $sql = DB::conn()->prepare("SELECT * FROM vips WHERE id_user = ?");
    $sql->execute(array($_SESSION['ID']));
    
    if($sql->rowCount() > 0) {
        $status_nerfar = 1; // Usuário VIP
    } else {
        $status_nerfar = 0; // Usuário normal
    }
}

echo $status_nerfar;
?>
