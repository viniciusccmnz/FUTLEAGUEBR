<?php
date_default_timezone_set("Brazil/East");
$id_de = $_GET['id_de'];
$id_para = $_GET['id_para'];
$id_time = $_GET['idtime'];

//verificar se o usuario tem vips
$sql = DB::conn()->prepare("SELECT * FROM vips WHERE id_user = '".$id_de."'");
$sql->execute();

$rs = $sql->fetchObject();

$iduser_vip = $rs->id_user;
$qtd = $rs->qtd;
$dias = $rs->dias;

//pegar dados do usuario q vai receber
$sql = DB::conn()->prepare("SELECT * FROM mensagens_usuario WHERE Tipo = 'pro' AND id_para = '$id_para'");
$sql->execute();

$qr = $sql->fetch();

$user_id_para = $qr['id_para'];
$id_contrato = $qr['ID'];

if(isset($_SESSION['ID']) && $qtd > 0){
$tempo_dias_vip =  $dias;
$tempo_fim_vip  = date('Y-m-d H:i:s',mktime(date('H') + $tempo_dias_vip  ,date('i'),date('s'),date('m'),date('d'),date('Y')));

//pegar dados do usuario
$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '$id_para'");
$sql->execute();
$rs = $sql->fetch();

$cargo = $rs['Cargo'];
$troca = $rs['Troca'];
$tempo_troca = $rs['Tempo_Troca'];
$time = $rs['Time'];

if($id_time == $time){

	$sql = DB::conn()->prepare("UPDATE usuarios SET Fixo = 0,  VIP = '$tempo_fim_vip' WHERE ID = '$id_para'");
	$sql->execute();
	
	$sql = DB::conn()->prepare("UPDATE vips SET qtd = qtd -1 WHERE id_user = '$id_de'");
	$sql->execute();
		
	$sql = DB::conn()->prepare("DELETE FROM mensagens_usuario WHERE ID = '$id_contrato'");
	$sql->execute();
	
	$sql = DB::conn()->prepare("SELECT * FROM contrato WHERE id_para = '$id_para'");
	$sql->execute();
	
	if($sql->rowCount() == 1){
		
	}else{
	$sql = DB::conn()->prepare("INSERT INTO contrato (id_de, id_para, Fixo, tempo) VALUES ('$id_de','$id_para','0','$tempo_fim_vip')");
	$sql->execute();	
	}
	
	
	echo '<script>;location.href="index.php?pr=recados"</script>';
	
}else{
if($troca < 3 && $tempo_troca <= date('Y-m-d H:i:s')){
	if($cargo == 1){
	
	//tempo 6 dias
	$inicio  = 144;
	$fim  = date('Y-m-d H:i:s',mktime(date('H') + $inicio  ,date('i'),date('s'),date('m'),date('d'),date('Y')));	
		
	$sql = DB::conn()->prepare("UPDATE times SET Presidente = 0 WHERE Presidente = '$id_para' AND ID = '$time'");
	$sql->execute();
	
	$sql = DB::conn()->prepare("UPDATE usuarios SET Cargo = 0, Fixo = 0, Time = '$id_time', VIP = '$tempo_fim_vip',Tempo_Troca = '$fim', Troca = Troca +1 WHERE ID = '$id_para'");
	$sql->execute();
	
	$sql = DB::conn()->prepare("UPDATE vips SET qtd = qtd -1 WHERE id_user = '$id_de'");
	$sql->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO contrato (id_de, id_para, Fixo, tempo) VALUES ('$id_de','$id_para','0','$tempo_fim_vip')");
	$sql->execute();
	
	$movimentacoes = DB::conn()->prepare("INSERT INTO movimentacoes (id_user, id_time_ant, id_time_atl) VALUES ('$id_para','$time','$id_time')");
	$movimentacoes->execute();
	
	$sql = DB::conn()->prepare("DELETE FROM mensagens_usuario WHERE ID = '$id_contrato'");
	$sql->execute();
	echo '<script>location.href="index.php?pr=recados"</script>';	
		
	}else{
		
			$inicio  = 144;
	$fim  = date('Y-m-d H:i:s',mktime(date('H') + $inicio  ,date('i'),date('s'),date('m'),date('d'),date('Y')));
		$sql = DB::conn()->prepare("UPDATE usuarios SET Cargo = 0, Fixo = 0, Time = '$id_time', VIP = '$tempo_fim_vip',Tempo_Troca = '$fim', Troca = Troca +1 WHERE ID = '$id_para'");
	$sql->execute();
	
	$sql = DB::conn()->prepare("UPDATE vips SET qtd = qtd -1 WHERE id_user = '$id_de'");
	$sql->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO contrato (id_de, id_para, Fixo, tempo) VALUES ('$id_de','$id_para','0','$tempo_fim_vip')");
	$sql->execute();
	
	$movimentacoes = DB::conn()->prepare("INSERT INTO movimentacoes (id_user, id_time_ant, id_time_atl) VALUES ('$id_para','$time','$id_time')");
	$movimentacoes->execute();
	
	$sql = DB::conn()->prepare("DELETE FROM mensagens_usuario WHERE ID = '$id_contrato'");
	$sql->execute();
	echo '<script>location.href="index.php?pr=recados"</script>';		
	}
	
	}else{
	echo '<script>alert("Sua troca não está livre");location.href="index.php?pr=recados"</script>';	
	}	


}

	
}else{
echo '<script>location.href="index.php?pr=index"</script>';	
}
?>