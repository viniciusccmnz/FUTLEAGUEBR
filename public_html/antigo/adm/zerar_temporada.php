<?php
include_once('conexao.php');
date_default_timezone_set("Brazil/East");

$pegar_temporada = DB::conn()->prepare("SELECT Temporada FROM configuracoes");
$pegar_temporada->execute();

$row = $pegar_temporada->fetchObject();

$temporada = $row->Temporada;

//record hora e rodada
$sql = DB::conn()->prepare("SELECT * FROM record_hora LIMIT 1");
$sql->execute();
$rs = $sql->fetchObject();
$record_hora = $rs->user_id;

//record hora e rodada
$sql = DB::conn()->prepare("SELECT * FROM record_rodada LIMIT 1");
$sql->execute();
$rs = $sql->fetchObject();
$record_rodada = $rs->user_id;

//premiação
//add vip
$sql = DB::conn()->prepare("SELECT qtd FROM vips WHERE id_user = '$record_hora'");
$sql->execute();

if($sql->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO vips (id_user,qtd,dias) VALUES ('$record_hora','7','360')");
$inserir->execute();
}else{
$premio = DB::conn()->prepare("UPDATE vips SET qtd = qtd +7 WHERE id_user = '$record_hora'");
$premio->execute();	
}

//add vip
$sql = DB::conn()->prepare("SELECT qtd FROM vips WHERE id_user = '$record_rodada'");
$sql->execute();

if($sql->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO vips (id_user,qtd,dias) VALUES ('$record_rodada','9','360')");
$inserir->execute();
}else{
$premio = DB::conn()->prepare("UPDATE vips SET qtd = qtd +9 WHERE id_user = '$record_rodada'");
$premio->execute();	
}

//TOP HORA
$medalha = 0;

$query = DB::conn()->prepare("SELECT ID FROM usuarios ORDER BY Gols_Temporada DESC LIMIT 10");
$query->execute();
while($rs = $query->fetchObject()){
	$medalha = $medalha + 1;

	if ($medalha == 1) {
		$medalha_1 = $rs->ID;
	} else if ($medalha == 2) {
		$medalha_2 = $rs->ID;
	} else if ($medalha == 3) {
		$medalha_3 = $rs->ID;
	}else if ($medalha == 4) {
		$medalha_4 = $rs->ID;
	}else if ($medalha == 5) {
		$medalha_5 = $rs->ID;
	}elseif($medalha == 6){
		$medalha_6 = $rs->ID;	
	}elseif($medalha == 7){
		$medalha_7 = $rs->ID;	
	}elseif($medalha == 8){
		$medalha_8 = $rs->ID;		
	}elseif($medalha == 9){
		$medalha_9 = $rs->ID;		
	}elseif($medalha == 10){
		$medalha_10 = $rs->ID;		
	}
}

$select = DB::conn()->prepare("SELECT * FROM usuarios ORDER BY Gols_Temporada DESC LIMIT 10");
$select->execute();

if($select->rowCount() == 0){
	
}else{
while($rs = $select->fetch()){

if($rs['ID'] == $medalha_1){
//Primeiro agente tira a medalha do ultimo top 1 hora
$ultimo = DB::conn()->prepare("SELECT user_id FROM top1_temporada LIMIT 1");
$ultimo->execute();
//verificar se n tiver nada na tabela ele inseri
if($ultimo->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO top1_temporada (user_id) VALUES ('$medalha_1')");
$inserir->execute();

$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +30000, Top_Temporada = 1, Rank_temporada_1 = Rank_temporada_1 + 1 WHERE ID = '$medalha_1'");
$premio->execute();

//add vip
$sql = DB::conn()->prepare("SELECT qtd FROM vips WHERE id_user = '$medalha_1'");
$sql->execute();

if($sql->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO vips (id_user,qtd,dias) VALUES ('$medalha_1','20','360')");
$inserir->execute();
}else{
$premio = DB::conn()->prepare("UPDATE vips SET qtd = qtd +20 WHERE id_user = '$medalha_1'");
$premio->execute();	
}


//mensagem pro usuario
$data = date("d/m");
$hora = date("H:i");

$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) VALUES('".					$medalha_1."','".$medalha_1."','$data','$hora','1','0','t','30000','0','0')");
$msg->execute();		
}else{
$rs = $ultimo->fetchObject();
$ultimotop1 = $rs->user_id;

//agora agente pega o id do user top 1 e tira dele (mais antes precisamos verificar se ele ta no top 2 ou 3)
$verificar_top = DB::conn()->prepare("SELECT Top_Temporada FROM usuarios WHERE ID = '$ultimotop1'");
$verificar_top->execute();
$qr = $verificar_top->fetchObject();
$Tops = $qr->Top_Temporada;

if($Tops == 2 || $Tops == 3){
$aatt = DB::conn()->prepare("UPDATE top1_temporada SET user_id = '$medalha_1'");
$aatt->execute();	
}else{
$tirar_premio = DB::conn()->prepare("UPDATE usuarios SET Top_Temporada = 0 WHERE ID = '$ultimotop1'");
$tirar_premio->execute();
}
//atualiza o novo top 1
$aatt = DB::conn()->prepare("UPDATE top1_temporada SET user_id = '$medalha_1'");
$aatt->execute();

$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +30000, Top_Temporada = 1, Rank_temporada_1 = Rank_temporada_1 + 1 WHERE ID = '$medalha_1'");
$premio->execute();

//add vip
$sql = DB::conn()->prepare("SELECT qtd FROM vips WHERE id_user = '$medalha_1'");
$sql->execute();

if($sql->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO vips (id_user,qtd,dias) VALUES ('$medalha_1','20','360')");
$inserir->execute();
}else{
$premio = DB::conn()->prepare("UPDATE vips SET qtd = qtd +20 WHERE id_user = '$medalha_1'");
$premio->execute();	
}

//mensagem pro usuario
$data = date("d/m");
$hora = date("H:i");

$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) VALUES('".					$medalha_1."','".$medalha_1."','$data','$hora','1','0','t','30000','0','0')");
$msg->execute();
}	

}
elseif($rs['ID'] == $medalha_2){

//Primeiro agente tira a medalha do ultimo top 1 hora
$ultimo = DB::conn()->prepare("SELECT user_id FROM top2_temporada LIMIT 1");
$ultimo->execute();
//verificar se n tiver nada na tabela ele inseri
if($ultimo->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO top2_temporada (user_id) VALUES ('$medalha_2')");
$inserir->execute();

$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +25000, Top_Temporada = 2, Rank_temporada_2 = Rank_temporada_2 + 1 WHERE ID = '$medalha_2'");
$premio->execute();

//add vip
$sql = DB::conn()->prepare("SELECT qtd FROM vips WHERE id_user = '$medalha_2'");
$sql->execute();

if($sql->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO vips (id_user,qtd,dias) VALUES ('$medalha_2','5','360')");
$inserir->execute();
}else{
$premio = DB::conn()->prepare("UPDATE vips SET qtd = qtd +5 WHERE id_user = '$medalha_2'");
$premio->execute();	
}
	

//mensagem pro usuario
$data = date("d/m");
$hora = date("H:i");

$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) VALUES('".					$medalha_2."','".$medalha_2."','$data','$hora','2','0','t','25000','0','0')");
$msg->execute();	
}else{
$rs = $ultimo->fetchObject();
$ultimotop1 = $rs->user_id;

//agora agente pega o id do user top 1 e tira dele (mais antes precisamos verificar se ele ta no top 2 ou 3)
$verificar_top = DB::conn()->prepare("SELECT Top_Temporada FROM usuarios WHERE ID = '$ultimotop1'");
$verificar_top->execute();
$qr = $verificar_top->fetchObject();
$Tops = $qr->Top_Temporada;

if($Tops == 1 || $Tops == 3){
$aatt = DB::conn()->prepare("UPDATE top2_temporada SET user_id = '$medalha_2'");
$aatt->execute();	
}else{
$tirar_premio = DB::conn()->prepare("UPDATE usuarios SET Top_Temporada = 0 WHERE ID = '$ultimotop1'");
$tirar_premio->execute();
}
//atualiza o novo top 1
$aatt = DB::conn()->prepare("UPDATE top2_temporada SET user_id = '$medalha_2'");
$aatt->execute();

$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +25000, Top_Temporada = 2, Rank_temporada_2 = Rank_temporada_2 + 1 WHERE ID = '$medalha_2'");
$premio->execute();

//add vip
$sql = DB::conn()->prepare("SELECT qtd FROM vips WHERE id_user = '$medalha_2'");
$sql->execute();

if($sql->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO vips (id_user,qtd,dias) VALUES ('$medalha_2','5','360')");
$inserir->execute();
}else{
$premio = DB::conn()->prepare("UPDATE vips SET qtd = qtd +5 WHERE id_user = '$medalha_2'");
$premio->execute();	
}

//mensagem pro usuario
$data = date("d/m");
$hora = date("H:i");

$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) VALUES('".					$medalha_2."','".$medalha_2."','$data','$hora','2','0','t','25000','0','0')");
$msg->execute();
}	



}
elseif($rs['ID'] == $medalha_3){

//Primeiro agente tira a medalha do ultimo top 1 hora
$ultimo = DB::conn()->prepare("SELECT user_id FROM top3_temporada LIMIT 1");
$ultimo->execute();
//verificar se n tiver nada na tabela ele inseri
if($ultimo->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO top3_temporada (user_id) VALUES ('$medalha_3')");
$inserir->execute();

$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +20000, Top_Temporada = 3, Rank_temporada_3 = Rank_temporada_3 + 1 WHERE ID = '$medalha_3'");
$premio->execute();	

//add vip
$sql = DB::conn()->prepare("SELECT qtd FROM vips WHERE id_user = '$medalha_3'");
$sql->execute();

if($sql->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO vips (id_user,qtd,dias) VALUES ('$medalha_3','4','360')");
$inserir->execute();
}else{
$premio = DB::conn()->prepare("UPDATE vips SET qtd = qtd +4 WHERE id_user = '$medalha_3'");
$premio->execute();	
}

//mensagem pro usuario
$data = date("d/m");
$hora = date("H:i");

$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) VALUES('".					$medalha_3."','".$medalha_3."','$data','$hora','3','0','t','20000','0','0')");
$msg->execute();	
}else{
$rs = $ultimo->fetchObject();
$ultimotop1 = $rs->user_id;

//agora agente pega o id do user top 1 e tira dele (mais antes precisamos verificar se ele ta no top 2 ou 3)
$verificar_top = DB::conn()->prepare("SELECT Top_Temporada FROM usuarios WHERE ID = '$ultimotop1'");
$verificar_top->execute();
$qr = $verificar_top->fetchObject();
$Tops = $qr->Top_Temporada;

if($Tops == 1 || $Tops == 2){
$aatt = DB::conn()->prepare("UPDATE top3_temporada SET user_id = '$medalha_3'");
$aatt->execute();	
}else{
$tirar_premio = DB::conn()->prepare("UPDATE usuarios SET Top_Temporada = 0 WHERE ID = '$ultimotop1'");
$tirar_premio->execute();
}
//atualiza o novo top 1
$aatt = DB::conn()->prepare("UPDATE top3_temporada SET user_id = '$medalha_3'");
$aatt->execute();

$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +20000, Top_Temporada = 3, Rank_temporada_3 = Rank_temporada_3 + 1 WHERE ID = '$medalha_3'");
$premio->execute();

//add vip
$sql = DB::conn()->prepare("SELECT qtd FROM vips WHERE id_user = '$medalha_3'");
$sql->execute();

if($sql->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO vips (id_user,qtd,dias) VALUES ('$medalha_3','4','360')");
$inserir->execute();
}else{
$premio = DB::conn()->prepare("UPDATE vips SET qtd = qtd +4 WHERE id_user = '$medalha_3'");
$premio->execute();	
}

//mensagem pro usuario
$data = date("d/m");
$hora = date("H:i");

$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) VALUES('".					$medalha_3."','".$medalha_3."','$data','$hora','3','0','t','20000','0','0')");
$msg->execute();
}	

	
}
elseif($rs['ID'] == $medalha_4){
$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +15000, Rank_temporada_4 = Rank_temporada_4 + 1 WHERE ID = '$medalha_4'");
$premio->execute();

//add vip
$sql = DB::conn()->prepare("SELECT qtd FROM vips WHERE id_user = '$medalha_4'");
$sql->execute();

if($sql->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO vips (id_user,qtd,dias) VALUES ('$medalha_4','4','360')");
$inserir->execute();
}else{
$premio = DB::conn()->prepare("UPDATE vips SET qtd = qtd +4 WHERE id_user = '$medalha_4'");
$premio->execute();	
}	

//mensagem pro usuario
$data = date("d/m");
$hora = date("H:i");

$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) VALUES('".					$medalha_4."','".$medalha_4."','$data','$hora','4','0','t','15000','0','0')");
$msg->execute();
}
elseif($rs['ID'] == $medalha_5){
$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +10000, Rank_temporada_5 = Rank_temporada_5 + 1 WHERE ID = '$medalha_5'");
$premio->execute();	

//add vip
$sql = DB::conn()->prepare("SELECT qtd FROM vips WHERE id_user = '$medalha_5'");
$sql->execute();

if($sql->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO vips (id_user,qtd,dias) VALUES ('$medalha_5','3','360')");
$inserir->execute();
}else{
$premio = DB::conn()->prepare("UPDATE vips SET qtd = qtd +3 WHERE id_user = '$medalha_5'");
$premio->execute();	
}

//mensagem pro usuario
$data = date("d/m");
$hora = date("H:i");

$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) VALUES('".					$medalha_5."','".$medalha_5."','$data','$hora','5','0','t','10000','0','0')");
$msg->execute();	
}
elseif($rs['ID'] == $medalha_6){
$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +9000, Rank_temporada_6 = Rank_temporada_6 + 1 WHERE ID = '$medalha_6'");
$premio->execute();

//add vip
$sql = DB::conn()->prepare("SELECT qtd FROM vips WHERE id_user = '$medalha_6'");
$sql->execute();

if($sql->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO vips (id_user,qtd,dias) VALUES ('$medalha_6','3','360')");
$inserir->execute();
}else{
$premio = DB::conn()->prepare("UPDATE vips SET qtd = qtd +3 WHERE id_user = '$medalha_6'");
$premio->execute();	
}

//mensagem pro usuario
$data = date("d/m");
$hora = date("H:i");

$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) VALUES('".					$medalha_6."','".$medalha_6."','$data','$hora','6','0','t','9000','0','0')");
$msg->execute();		
}
elseif($rs['ID'] == $medalha_7){
$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +8000, Rank_temporada_7 = Rank_temporada_7 + 1 WHERE ID = '$medalha_7'");
$premio->execute();

//add vip
$sql = DB::conn()->prepare("SELECT qtd FROM vips WHERE id_user = '$medalha_7'");
$sql->execute();

if($sql->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO vips (id_user,qtd,dias) VALUES ('$medalha_7','3','360')");
$inserir->execute();
}else{
$premio = DB::conn()->prepare("UPDATE vips SET qtd = qtd +3 WHERE id_user = '$medalha_7'");
$premio->execute();	
}

//mensagem pro usuario
$data = date("d/m");
$hora = date("H:i");

$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) VALUES('".					$medalha_7."','".$medalha_7."','$data','$hora','7','0','t','8000','0','0')");
$msg->execute();		
}
elseif($rs['ID'] == $medalha_8){
$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +7000, Rank_temporada_8 = Rank_temporada_8 + 1 WHERE ID = '$medalha_8'");
$premio->execute();

//add vip
$sql = DB::conn()->prepare("SELECT qtd FROM vips WHERE id_user = '$medalha_8'");
$sql->execute();

if($sql->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO vips (id_user,qtd,dias) VALUES ('$medalha_8','2','360')");
$inserir->execute();
}else{
$premio = DB::conn()->prepare("UPDATE vips SET qtd = qtd +2 WHERE id_user = '$medalha_8'");
$premio->execute();	
}

//mensagem pro usuario
$data = date("d/m");
$hora = date("H:i");

$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) VALUES('".					$medalha_8."','".$medalha_8."','$data','$hora','8','0','t','7000','0','0')");
$msg->execute();		
}
elseif($rs['ID'] == $medalha_9){
$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +6000, Rank_temporada_9 = Rank_temporada_9 + 1 WHERE ID = '$medalha_9'");
$premio->execute();

//add vip
$sql = DB::conn()->prepare("SELECT qtd FROM vips WHERE id_user = '$medalha_9'");
$sql->execute();

if($sql->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO vips (id_user,qtd,dias) VALUES ('$medalha_9','2','360')");
$inserir->execute();
}else{
$premio = DB::conn()->prepare("UPDATE vips SET qtd = qtd +2 WHERE id_user = '$medalha_9'");
$premio->execute();	
}	

//mensagem pro usuario
$data = date("d/m");
$hora = date("H:i");

$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) VALUES('".					$medalha_9."','".$medalha_9."','$data','$hora','9','0','t','6000','0','0')");
$msg->execute();	
}
elseif($rs['ID'] == $medalha_10){
$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +5000, Rank_temporada_10 = Rank_temporada_10 + 1 WHERE ID = '$medalha_10'");
$premio->execute();

//add vip
$sql = DB::conn()->prepare("SELECT qtd FROM vips WHERE id_user = '$medalha_10'");
$sql->execute();

if($sql->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO vips (id_user,qtd,dias) VALUES ('$medalha_10','2','360')");
$inserir->execute();
}else{
$premio = DB::conn()->prepare("UPDATE vips SET qtd = qtd +2 WHERE id_user = '$medalha_10'");
$premio->execute();	
}

//mensagem pro usuario
$data = date("d/m");
$hora = date("H:i");

$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) VALUES('".					$medalha_10."','".$medalha_10."','$data','$hora','10','0','t','5000','0','0')");
$msg->execute();		
}

//while	
}	
}

//hora
$sql = DB::conn()->prepare("SELECT ID FROM usuarios ORDER BY RAND() LIMIT 1");
$sql->execute();
while($rs = $sql->fetch()){
$id_novo_record_hora = $rs['ID'];
$sql = DB::conn()->prepare("UPDATE record_hora SET user_id = '$id_novo_record_hora', user_gols = '0'");
$sql->execute();
}

//rodada
$sql = DB::conn()->prepare("SELECT ID FROM usuarios ORDER BY RAND() LIMIT 1");
$sql->execute();
while($rs = $sql->fetch()){
$id_novo_record_hora = $rs['ID'];
$sql = DB::conn()->prepare("UPDATE record_rodada SET user_id = '$id_novo_record_hora', user_gols = '0'");
$sql->execute();
}

$sql = DB::conn()->prepare("DELETE FROM vip_fixo");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Temporada = 0");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE configuracoes SET Rodada = 1,Campeonato = Campeonato +1, TotalTempo = 33");
$sql->execute();

//Fim
?>