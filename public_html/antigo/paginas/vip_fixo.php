<?php

include_once('conn.php');
date_default_timezone_set("Brazil/East");

$data = date("d/m");
$hora = date("H");
$min = date("i");
$sec = date("s");

if($min >= 54){
    $tempo = 0; 
}elseif($min >= 49){
    $tempo = 5;
}elseif($min >= 44){
    $tempo = 15;
}elseif($min >= 39){
    $tempo = 20;
}elseif($min >= 34){
    $tempo = 25;
}elseif($min >= 29){
    $tempo = 30;
}elseif($min >= 24){
    $tempo = 35;
}elseif($min >= 19){
    $tempo = 40;
}elseif($min >= 14){
    $tempo = 45;
}elseif($min >= 9){
    $tempo = 50;
}elseif($min >= 4){
    $tempo = 55;
}elseif($min >= 0){
    $tempo = 60;
}


//VIP FIXO
$db = DB::conn()->prepare("SELECT * FROM usuarios WHERE Tempo_Auto <= '" . date('Y/m/d H:i:s') . "' AND Tempo_Penalti <= '" . date('Y/m/d H:i:s') . "' AND Tempo_Falta <= '" . date('Y/m/d H:i:s') . "' AND Fixo = 1 AND VIP >= '" . date('Y-m-d H:i:s') . "'");
$db->execute();
while ($qr = $db->fetch()) {
    $id_user = $qr['ID'];
    $status = $qr['Status'];
    $fixo = $qr['Fixo'];
    $VIP = $qr['VIP'];
    $total_gols = $qr['Gols_Total'];
    $timeuser = $qr['Time'];

    $sql = DB::conn()->prepare("SELECT * FROM vip_fixo WHERE id_de = '$id_user' AND tempo = " . $tempo);
    $sql->execute();

    if ($sql->rowCount() == 0) {
        $sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Hora = Gols_Hora+1, Gols_Temporada = Gols_Temporada+1, Gols_Rodada = Gols_Rodada+1, Gols_Total = Gols_Total+1, Dinheiro = Dinheiro+10, upnivel = upnivel+1 WHERE ID = '$id_user' AND Tempo_Auto <= '" . date('Y/m/d H:i:s') . "' AND Tempo_Penalti <= '" . date('Y/m/d H:i:s') . "' AND Tempo_Falta <= '" . date('Y/m/d H:i:s') . "' AND Fixo = 1");
        $sql->execute();

        $sql = DB::conn()->prepare("INSERT INTO vip_fixo (id_de, tempo) VALUES ('$id_user','" . $tempo . "')");
        $sql->execute();
		
		$sql = DB::conn()->prepare("UPDATE times SET Gols_Time = Gols_Time+1, Gols = Gols+1 WHERE ID = '$timeuser'");
		$sql->execute();
		
		$sql = DB::conn()->prepare("UPDATE campeonatos SET placar1 = placar1+1 WHERE time1 = '$timeuser'");
		$sql->execute();
		
		$sql = DB::conn()->prepare("UPDATE campeonatos SET placar2 = placar2+1 WHERE time2 = '$timeuser'");
		$sql->execute();
    }
}

?>