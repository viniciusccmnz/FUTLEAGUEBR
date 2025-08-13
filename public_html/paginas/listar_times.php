<?php
include('conn.php');

$id = $_GET['id'];
$listar = DB::conn()->prepare("SELECT ID ,Time FROM times WHERE ID = '$id' LIMIT 1");
$listar->execute();
while($row = $listar->fetchObject()){
	echo '<img width="85" height="85" src="img\gr\Times_g/'.$row->ID.'.png" />';
	}
?>