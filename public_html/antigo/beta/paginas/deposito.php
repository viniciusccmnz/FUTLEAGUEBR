<?php
include_once('conn.php');
session_start();
if(isset($_SESSION['Usuario'])){
	
	$banco = strip_tags($_POST['banc']);
	$forma = strip_tags($_POST['form']);
	$data = $_POST['date'];
	$horario = strip_tags($_POST['horari']);
	$numero = strip_tags($_POST['nrm']);
	$terminal = strip_tags($_POST["termin"]);
	$comentario = strip_tags($_POST["coment"]);
	$qtd = $_POST['QT'];
	
	$sql = DB::conn()->prepare("INSERT INTO deposito (id_user,banco, forma, data, horario, numero,terminal,qtd, comentario) VALUES ('".$_SESSION['ID']."','$banco','$forma','$data','$horario','$numero','$terminal','$qtd','$comentario')");
	$sql->execute();
	echo 'Formulario enviado para analise!';
			
		
		

	
	
}else{
echo '<script>location.href="index.php?pr=index"</script>';	
}
?>