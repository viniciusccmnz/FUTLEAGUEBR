<?php
include_once('conn.php');
date_default_timezone_set("Brazil/East");
$data = date("d/m");
$hora = date("H");
$min  = date("i");
$sec = date("s");

if($hora == 19 && $min == 0){
$configuracoes = DB::conn()->prepare("SELECT * FROM configuracoes");
$configuracoes->execute();

$conf = $configuracoes->fetchObject();
$RodadaAgora = $conf->Rodada;


//pegar dados do usuario
$dados_user = DB::conn()->prepare("SELECT * FROM usuarios");
$dados_user->execute();

$rs = $dados_user->fetch();

$ordem = $rs['opcoes_chute'];
$VIP = $rs['VIP'];
$timeu = $rs['Time'];

//DIVISAO DE ACESSO
$pegar_div = DB::conn()->prepare("SELECT ID,divisao, Gols_Rodada FROM usuarios");
$pegar_div->execute();
if($pegar_div->rowCount() == 0){
	
}else{
while($div = $pegar_div->fetch()){
	$divisao = $div['divisao'];
	$gols_rodada = $div['Gols_Rodada'];
	$id = $div['ID'];
	
//switch
switch($divisao){
case 1:

if($gols_rodada == 700){
	
}elseif($gols_rodada > 730){
$query = DB::conn()->prepare("SELECT ID FROM usuarios WHERE divisao = 1 ORDER BY Gols_Rodada DESC LIMIT 1");
$query->execute();

$rs = $query->fetchObject();
$user = $rs->ID;

$select = DB::conn()->prepare("SELECT user_id FROM ultimo_campeao_div1");
$select->execute();

if($select->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO ultimo_campeao_div1 (user_id) VALUES ('$user')");
$inserir->execute();		
}else{
$inserir = DB::conn()->prepare("UPDATE ultimo_campeao_div1 SET user_id = '$user'");
$inserir->execute();	
}	
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 2 WHERE Gols_Rodada < 700 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();	
}

break;

case 2:
if($gols_rodada == 600){
	
}elseif($gols_rodada > 650){
$query = DB::conn()->prepare("SELECT ID FROM usuarios WHERE divisao = 2 ORDER BY Gols_Rodada DESC LIMIT 1");
$query->execute();

$rs = $query->fetchObject();
$user = $rs->ID;

$select = DB::conn()->prepare("SELECT user_id FROM ultimo_campeao_div2");
$select->execute();

if($select->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO ultimo_campeao_div2 (user_id) VALUES ('$user')");
$inserir->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 1 WHERE Gols_Rodada > 650 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();		
}else{
$inserir = DB::conn()->prepare("UPDATE ultimo_campeao_div2 SET user_id = '$user'");
$inserir->execute();	
	
$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 1 WHERE Gols_Rodada > 650 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();
}
	
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 3 WHERE Gols_Rodada < 600 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();	
}
break;

case 3:
if($gols_rodada == 460){
	
}elseif($gols_rodada > 500){
$query = DB::conn()->prepare("SELECT ID FROM usuarios WHERE divisao = 3 ORDER BY Gols_Rodada DESC LIMIT 1");
$query->execute();

$rs = $query->fetchObject();
$user = $rs->ID;

$select = DB::conn()->prepare("SELECT user_id FROM ultimo_campeao_div3");
$select->execute();

if($select->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO ultimo_campeao_div3 (user_id) VALUES ('$user')");
$inserir->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 2 WHERE Gols_Rodada > 500 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();		
}else{
$inserir = DB::conn()->prepare("UPDATE ultimo_campeao_div3 SET user_id = '$user'");
$inserir->execute();	
	
$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 2 WHERE Gols_Rodada > 500 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();
}
	
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 4 WHERE Gols_Rodada < 460 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();	
}
break;

case 4:
if($gols_rodada == 420){
	
}elseif($gols_rodada > 450){
$query = DB::conn()->prepare("SELECT ID FROM usuarios WHERE divisao = 4 ORDER BY Gols_Rodada DESC LIMIT 1");
$query->execute();

$rs = $query->fetchObject();
$user = $rs->ID;

$select = DB::conn()->prepare("SELECT user_id FROM ultimo_campeao_div4");
$select->execute();

if($select->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO ultimo_campeao_div4 (user_id) VALUES ('$user')");
$inserir->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 3 WHERE Gols_Rodada > 450 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();		
}else{
$inserir = DB::conn()->prepare("UPDATE ultimo_campeao_div4 SET user_id = '$user'");
$inserir->execute();	
	
$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 3 WHERE Gols_Rodada > 450 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();
}
	
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 5 WHERE Gols_Rodada < 420 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();	
}
break;

case 5:
if($gols_rodada == 370){
	
}elseif($gols_rodada > 400){
$query = DB::conn()->prepare("SELECT ID FROM usuarios WHERE divisao = 5 ORDER BY Gols_Rodada DESC LIMIT 1");
$query->execute();

$rs = $query->fetchObject();
$user = $rs->ID;

$select = DB::conn()->prepare("SELECT user_id FROM ultimo_campeao_div5");
$select->execute();

if($select->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO ultimo_campeao_div5 (user_id) VALUES ('$user')");
$inserir->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 4 WHERE Gols_Rodada > 400 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();		
}else{
$inserir = DB::conn()->prepare("UPDATE ultimo_campeao_div5 SET user_id = '$user'");
$inserir->execute();	
	
$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 4 WHERE Gols_Rodada > 400 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();	
}

}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 6 WHERE Gols_Rodada < 370 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();	
}
break;

case 6:
if($gols_rodada == 320){
	
}elseif($gols_rodada > 350){
$query = DB::conn()->prepare("SELECT ID FROM usuarios WHERE divisao = 6 ORDER BY Gols_Rodada DESC LIMIT 1");
$query->execute();

$rs = $query->fetchObject();
$user = $rs->ID;

$select = DB::conn()->prepare("SELECT user_id FROM ultimo_campeao_div6");
$select->execute();

if($select->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO ultimo_campeao_div6 (user_id) VALUES ('$user')");
$inserir->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 5 WHERE Gols_Rodada > 350 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();	
}else{
$inserir = DB::conn()->prepare("UPDATE ultimo_campeao_div6 SET user_id = '$user'");
$inserir->execute();	
	
$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 5 WHERE Gols_Rodada > 350 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();	
}		


}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 7 WHERE Gols_Rodada < 320 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();	
}
break;

case 7:
if($gols_rodada == 260){
	
}elseif($gols_rodada > 290){
$query = DB::conn()->prepare("SELECT ID FROM usuarios WHERE divisao = 7 ORDER BY Gols_Rodada DESC LIMIT 1");
$query->execute();

$rs = $query->fetchObject();
$user = $rs->ID;

$select = DB::conn()->prepare("SELECT user_id FROM ultimo_campeao_div7");
$select->execute();

if($select->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO ultimo_campeao_div7 (user_id) VALUES ('$user')");
$inserir->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 6 WHERE Gols_Rodada > 290 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();
}else{
$inserir = DB::conn()->prepare("UPDATE ultimo_campeao_div7 SET user_id = '$user'");
$inserir->execute();	
	
$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 6 WHERE Gols_Rodada > 290 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();	
}		

}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 8 WHERE Gols_Rodada < 260 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();	
}
break;

case 8:
if($gols_rodada == 220){
	
}elseif($gols_rodada > 250){
$query = DB::conn()->prepare("SELECT ID FROM usuarios WHERE divisao = 8 ORDER BY Gols_Rodada DESC LIMIT 1");
$query->execute();

$rs = $query->fetchObject();
$user = $rs->ID;

$select = DB::conn()->prepare("SELECT user_id FROM ultimo_campeao_div8");
$select->execute();

if($select->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO ultimo_campeao_div8 (user_id) VALUES ('$user')");
$inserir->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 7 WHERE Gols_Rodada > 250 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();
}else{
$inserir = DB::conn()->prepare("UPDATE ultimo_campeao_div8 SET user_id = '$user'");
$inserir->execute();	
	
$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 7 WHERE Gols_Rodada > 250 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();	
}		
///		
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 9 WHERE Gols_Rodada < 220 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();	
}
break;

case 9:

if($gols_rodada == 180){
	
}elseif($gols_rodada > 200){
$query = DB::conn()->prepare("SELECT ID FROM usuarios WHERE divisao = 9 ORDER BY Gols_Rodada DESC LIMIT 1");
$query->execute();

$rs = $query->fetchObject();
$user = $rs->ID;

$select = DB::conn()->prepare("SELECT user_id FROM ultimo_campeao_div9");
$select->execute();

if($select->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO ultimo_campeao_div9 (user_id) VALUES ('$user')");
$inserir->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 8 WHERE Gols_Rodada > 200 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();	
}else{
$inserir = DB::conn()->prepare("UPDATE ultimo_campeao_div9 SET user_id = '$user'");
$inserir->execute();	
	
$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 8 WHERE Gols_Rodada > 200 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();	
}	
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 10 WHERE Gols_Rodada < 180 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();	
}

break;

case 10:
if($gols_rodada == 100){
	
}elseif($gols_rodada > 100){	
$query = DB::conn()->prepare("SELECT ID FROM usuarios WHERE divisao = 10 ORDER BY Gols_Rodada DESC LIMIT 1");
$query->execute();

$rs = $query->fetchObject();
$user = $rs->ID;

$select = DB::conn()->prepare("SELECT user_id FROM ultimo_campeao_div10");
$select->execute();

if($select->rowCount() == 0){
$inserir = DB::conn()->prepare("INSERT INTO ultimo_campeao_div10 (user_id) VALUES ('$user')");
$inserir->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 9 WHERE Gols_Rodada > 100 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();	
}else{

$inserir = DB::conn()->prepare("UPDATE ultimo_campeao_div10 SET user_id = '$user'");
$inserir->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET divisao = 9 WHERE Gols_Rodada > 100 AND ID = '$id' AND divisao = '$divisao'");
$sql->execute();	
}
	
}else{
	
}

break;
default: echo "ERRO";	
}	
//fim switch	
	}	
}
//fim

//TOP HORA
$medalha = 0;

$query = DB::conn()->prepare("SELECT ID FROM usuarios ORDER BY Gols_Rodada DESC LIMIT 10");
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

$select = DB::conn()->prepare("SELECT * FROM usuarios ORDER BY Gols_Rodada DESC LIMIT 10");
$select->execute();

if($select->rowCount() == 0){
	
}else{
while($rs = $select->fetch()){
	if($rs['ID'] == $medalha_1){
		//buscando o record da hora
		$sql = DB::conn()->prepare("SELECT * FROM record_rodada");
		$sql->execute();
		$rs = $sql->fetchObject();
		
		$gols_record_h = $rs->user_gols;
		//VERIFICAR SE O USUARIO BATEU O RECORD DA HORA NA TEMPORADA
		$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$medalha_1."'");
		$sql->execute();
		
		$rs = $sql->fetchObject();
		
		$Gols_Rodada = $rs->Gols_Rodada;
		$record_rodada_user = $rs->Record_Rodada;
		
		//verificação
		if($Gols_Rodada > $gols_record_h){
		$sql = DB::conn()->prepare("UPDATE record_rodada SET user_id = '".$medalha_1."', user_gols = '$Gols_Rodada'");
		$sql->execute();	
		}elseif($Gols_Rodada == $gols_record_h){
			
		}
		//verificar se eu bati meu proprio record
		if($Gols_Rodada > $record_rodada_user){
		$sql = DB::conn()->prepare("UPDATE usuarios SET Record_Rodada = '$Gols_Rodada' WHERE ID = '".$medalha_1."'");
		$sql->execute();	
		}elseif($Gols_Rodada == $record_rodada_user){
			
		}
		
		//agora agente pega o id do ultimo top 1 e tira dele (mais antes precisamos verificar se ele ta no top 2 ou 3)
		$verificar_top = DB::conn()->prepare("SELECT ID FROM usuarios WHERE Top_Rodada = 1 LIMIT 1");
		$verificar_top->execute();
		
		if($verificar_top->rowCount() == 0){
			//agora ele da o premio para quem ficou no 1 na hora
		$data = date("d/m");
		$hora = date("H:i");
		$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +800, Top_Rodada = 1, Rank_rodada_1 = Rank_rodada_1 + 1 WHERE ID = '$medalha_1'");
		$premio->execute();
		//msg
		$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '".$medalha_1."','".$medalha_1."','$data','$hora','1','0','r','800','0','0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '".$medalha_1."' AND Data = '$data' AND Hora = '$hora')");
		$msg->execute();
		}else{
		
		$qr = $verificar_top->fetchObject();
		$ultimotop1h = $qr->ID;
		
		if($ultimotop1h == $medalha_2){
			//o ultimo usuario está no top 2 hora
			
		}elseif($ultimotop1h == $medalha_3){
			//o ultimo usuario esta no top 3
			
		}else{
			//se n estiver no 1,2,3 ele tira a medalha
			$tirar_premio = DB::conn()->prepare("UPDATE usuarios SET Top_Rodada = 0 WHERE ID = '$ultimotop1h'");
			$tirar_premio->execute();
		}
		
		
		//agora ele da o premio para quem ficou no 1 na hora
		$data = date("d/m");
		$hora = date("H:i");
		$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +800, Top_Rodada = 1, Rank_rodada_1 = Rank_rodada_1 + 1 WHERE ID = '$medalha_1'");
		$premio->execute();
		//msg
		$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '".$medalha_1."','".$medalha_1."','$data','$hora','1','0','r','800','0','0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '".$medalha_1."' AND Data = '$data' AND Hora = '$hora')");
		$msg->execute();
		}
		
		//add vip
		$sql = DB::conn()->prepare("SELECT qtd FROM vips WHERE id_user = '$medalha_1'");
		$sql->execute();
		
		if($sql->rowCount() == 0){
		$inserir = DB::conn()->prepare("INSERT INTO vips (id_user,qtd,dias) VALUES ('$medalha_1','1','360')");
		$inserir->execute();
		}else{
		$premio = DB::conn()->prepare("UPDATE vips SET qtd = qtd +1 WHERE id_user = '$medalha_1'");
		$premio->execute();	
}
		}elseif($rs['ID'] == $medalha_2){
		//VERIFICAR SE O USUARIO BATEU O RECORD DA HORA NA TEMPORADA
		$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$medalha_2."'");
		$sql->execute();
		
		$rs = $sql->fetchObject();
		
		$Gols_Rodada = $rs->Gols_Rodada;
		$record_rodada_user = $rs->Record_Rodada;

//verificar se eu bati meu proprio record
		if($Gols_Rodada > $record_rodada_user){
		$sql = DB::conn()->prepare("UPDATE usuarios SET Record_Rodada = '$Gols_Rodada' WHERE ID = '".$medalha_2."'");
		$sql->execute();	
		}elseif($Gols_Rodada == $record_rodada_user){
			
		}	
		//agora agente pega o id do ultimo top 1 e tira dele (mais antes precisamos verificar se ele ta no top 2 ou 3)
		$verificar_top2 = DB::conn()->prepare("SELECT ID FROM usuarios WHERE Top_Rodada = 2 LIMIT 1");
		$verificar_top2->execute();
		
		if($verificar_top2->rowCount() == 0){
			//agora ele da o premio para quem ficou no 2 na hora
		$data = date("d/m");
		$hora = date("H:i");
		$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +750, Top_Rodada = 2, Rank_rodada_2 = Rank_rodada_2 + 1 WHERE ID = '".$medalha_2."'");
		$premio->execute();
		//msg
		$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '".$medalha_2."','".$medalha_2."','$data','$hora','2','0','r','750','0','0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '".$medalha_2."' AND Data = '$data' AND Hora = '$hora')");
		$msg->execute();
		}else{
		
		$qr2 = $verificar_top2->fetchObject();
		$ultimotop2h = $qr2->ID;
		
		if($ultimotop2h == $medalha_1){
			//o ultimo usuario está no top 1 hora
			
		}elseif($ultimotop2h == $medalha_3){
			//o ultimo usuario esta no top 30
			
		}else{
			//se n estiver no 1,3 ele tira a medalha
			$tirar_premio = DB::conn()->prepare("UPDATE usuarios SET Top_Rodada = 0 WHERE ID = '$ultimotop2h'");
			$tirar_premio->execute();
		}
		
		//agora ele da o premio para quem ficou no 2 na hora
		$data = date("d/m");
		$hora = date("H:i");
		$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +750, Top_Rodada = 2, Rank_rodada_2 = Rank_rodada_2 + 1 WHERE ID = '".$medalha_2."'");
		$premio->execute();
		//msg
		$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '".$medalha_2."','".$medalha_2."','$data','$hora','2','0','r','750','0','0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '".$medalha_2."' AND Data = '$data' AND Hora = '$hora')");
		$msg->execute();
		}
		}elseif($rs['ID'] == $medalha_3){
		//VERIFICAR SE O USUARIO BATEU O RECORD DA HORA NA TEMPORADA
		$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$medalha_3."'");
		$sql->execute();
		
		$rs = $sql->fetchObject();
		
		$Gols_Rodada = $rs->Gols_Rodada;
		$record_rodada_user = $rs->Record_Rodada;

//verificar se eu bati meu proprio record
		if($Gols_Rodada > $record_rodada_user){
		$sql = DB::conn()->prepare("UPDATE usuarios SET Record_Rodada = '$Gols_Rodada' WHERE ID = '".$medalha_3."'");
		$sql->execute();	
		}elseif($Gols_Rodada == $record_rodada_user){
			
		}
				//agora agente pega o id do ultimo top 1 e tira dele (mais antes precisamos verificar se ele ta no top 2 ou 3)
		$verificar_top3 = DB::conn()->prepare("SELECT ID FROM usuarios WHERE Top_Rodada = 3 LIMIT 1");
		$verificar_top3->execute();
		
		if($verificar_top3->rowCount() == 0){
			//agora ele da o premio para quem ficou no 2 na hora
		$data = date("d/m");
		$hora = date("H:i");
		$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +700, Top_Rodada = 3, Rank_rodada_3 = Rank_rodada_3 + 1 WHERE ID = '".$medalha_3."'");
		$premio->execute();
		//msg
		$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '".$medalha_3."','".$medalha_3."','$data','$hora','3','0','r','700','0','0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '".$medalha_3."' AND Data = '$data' AND Hora = '$hora')");
		$msg->execute();
		}else{
		
		$qr3 = $verificar_top3->fetchObject();
		$ultimotop3h = $qr3->ID;
		
		if($ultimotop3h == $medalha_1){
			//o ultimo usuario está no top 1 hora
			
		}elseif($ultimotop3h == $medalha_2){
			//o ultimo usuario esta no top 3
			
		}else{
			//se n estiver no 1,3 ele tira a medalha
			$tirar_premio = DB::conn()->prepare("UPDATE usuarios SET Top_Rodada = 0 WHERE ID = '$ultimotop3h'");
			$tirar_premio->execute();
		}
		
		//agora ele da o premio para quem ficou no 2 na hora
		$data = date("d/m");
		$hora = date("H:i");
		$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +700, Top_Rodada = 3, Rank_rodada_3 = Rank_rodada_3 + 1 WHERE ID = '".$medalha_3."'");
		$premio->execute();
		//msg
		$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '".$medalha_3."','".$medalha_3."','$data','$hora','3','0','r','700','0','0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '".$medalha_3."' AND Data = '$data' AND Hora = '$hora')");
		$msg->execute();
		}
	}elseif($rs['ID'] == $medalha_4){
		//VERIFICAR SE O USUARIO BATEU O RECORD DA HORA NA TEMPORADA
		$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$medalha_4."'");
		$sql->execute();
		
		$rs = $sql->fetchObject();
		
		$Gols_Rodada = $rs->Gols_Rodada;
		$record_rodada_user = $rs->Record_Rodada;

//verificar se eu bati meu proprio record
		if($Gols_Rodada > $record_rodada_user){
		$sql = DB::conn()->prepare("UPDATE usuarios SET Record_Rodada = '$Gols_Rodada' WHERE ID = '".$medalha_4."'");
		$sql->execute();	
		}elseif($Gols_Rodada == $record_rodada_user){
			
		}
		$data = date("d/m");
		$hora = date("H:i");
		
		$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +650, Rank_rodada_4 = Rank_rodada_4 + 1 WHERE ID = '".$medalha_4."'");
		$premio->execute();
		//msg
		$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '".$medalha_4."','".$medalha_4."','$data','$hora','4','0','r','650','0','0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '".$medalha_4."' AND Data = '$data' AND Hora = '$hora')");
		$msg->execute();
	}elseif($rs['ID'] == $medalha_5){
		//VERIFICAR SE O USUARIO BATEU O RECORD DA HORA NA TEMPORADA
		$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$medalha_5."'");
		$sql->execute();
		
		$rs = $sql->fetchObject();
		
		$Gols_Rodada = $rs->Gols_Rodada;
		$record_rodada_user = $rs->Record_Rodada;

//verificar se eu bati meu proprio record
		if($Gols_Rodada > $record_rodada_user){
		$sql = DB::conn()->prepare("UPDATE usuarios SET Record_Rodada = '$Gols_Rodada' WHERE ID = '".$medalha_5."'");
		$sql->execute();	
		}elseif($Gols_Rodada == $record_rodada_user){
			
		}
		$data = date("d/m");
		$hora = date("H:i");
		
		$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +600, Rank_rodada_5 = Rank_rodada_5 + 1 WHERE ID = '".$medalha_5."'");
		$premio->execute();
		//msg
		$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '".$medalha_5."','".$medalha_5."','$data','$hora','5','0','r','600','0','0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '".$medalha_5."' AND Data = '$data' AND Hora = '$hora')");
		$msg->execute();
	}elseif($rs['ID'] == $medalha_6){
		//VERIFICAR SE O USUARIO BATEU O RECORD DA HORA NA TEMPORADA
		$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$medalha_6."'");
		$sql->execute();
		
		$rs = $sql->fetchObject();
		
		$Gols_Rodada = $rs->Gols_Rodada;
		$record_rodada_user = $rs->Record_Rodada;

//verificar se eu bati meu proprio record
		if($Gols_Rodada > $record_rodada_user){
		$sql = DB::conn()->prepare("UPDATE usuarios SET Record_Rodada = '$Gols_Rodada' WHERE ID = '".$medalha_6."'");
		$sql->execute();	
		}elseif($Gols_Rodada == $record_rodada_user){
			
		}
		$data = date("d/m");
		$hora = date("H:i");
		
		$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +550, Rank_rodada_6 = Rank_rodada_6 + 1 WHERE ID = '".$medalha_6."'");
		$premio->execute();
		//msg
		$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '".$medalha_6."','".$medalha_6."','$data','$hora','6','0','r','550','0','0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '".$medalha_6."' AND Data = '$data' AND Hora = '$hora')");
		$msg->execute();
	}elseif($rs['ID'] == $medalha_7){
		//VERIFICAR SE O USUARIO BATEU O RECORD DA HORA NA TEMPORADA
		$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$medalha_7."'");
		$sql->execute();
		
		$rs = $sql->fetchObject();
		
		$Gols_Rodada = $rs->Gols_Rodada;
		$record_rodada_user = $rs->Record_Rodada;

//verificar se eu bati meu proprio record
		if($Gols_Rodada > $record_rodada_user){
		$sql = DB::conn()->prepare("UPDATE usuarios SET Record_Rodada = '$Gols_Rodada' WHERE ID = '".$medalha_7."'");
		$sql->execute();	
		}elseif($Gols_Rodada == $record_rodada_user){
			
		}
		$data = date("d/m");
		$hora = date("H:i");
		
		$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +500, Rank_rodada_7 = Rank_rodada_7 + 1 WHERE ID = '".$medalha_7."'");
		$premio->execute();
		//msg
		$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '".$medalha_7."','".$medalha_7."','$data','$hora','7','0','r','500','0','0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '".$medalha_7."' AND Data = '$data' AND Hora = '$hora')");
		$msg->execute();
	}elseif($rs['ID'] == $medalha_8){
		//VERIFICAR SE O USUARIO BATEU O RECORD DA HORA NA TEMPORADA
		$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$medalha_8."'");
		$sql->execute();
		
		$rs = $sql->fetchObject();
		
		$Gols_Rodada = $rs->Gols_Rodada;
		$record_rodada_user = $rs->Record_Rodada;

//verificar se eu bati meu proprio record
		if($Gols_Rodada > $record_rodada_user){
		$sql = DB::conn()->prepare("UPDATE usuarios SET Record_Rodada = '$Gols_Rodada' WHERE ID = '".$medalha_8."'");
		$sql->execute();	
		}elseif($Gols_Rodada == $record_rodada_user){
			
		}
		$data = date("d/m");
		$hora = date("H:i");
		
		$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +450, Rank_rodada_8 = Rank_rodada_8 + 1 WHERE ID = '".$medalha_8."'");
		$premio->execute();
		//msg
		$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '".$medalha_8."','".$medalha_8."','$data','$hora','8','0','r','450','0','0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '".$medalha_8."' AND Data = '$data' AND Hora = '$hora')");
		$msg->execute();
	}elseif($rs['ID'] == $medalha_9){
		//VERIFICAR SE O USUARIO BATEU O RECORD DA HORA NA TEMPORADA
		$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$medalha_9."'");
		$sql->execute();
		
		$rs = $sql->fetchObject();
		
		$Gols_Rodada = $rs->Gols_Rodada;
		$record_rodada_user = $rs->Record_Rodada;

//verificar se eu bati meu proprio record
		if($Gols_Rodada > $record_rodada_user){
		$sql = DB::conn()->prepare("UPDATE usuarios SET Record_Rodada = '$Gols_Rodada' WHERE ID = '".$medalha_9."'");
		$sql->execute();	
		}elseif($Gols_Rodada == $record_rodada_user){
			
		}
		$data = date("d/m");
		$hora = date("H:i");
		
		$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +400, Rank_rodada_9 = Rank_rodada_9 + 1 WHERE ID = '".$medalha_9."'");
		$premio->execute();
		//msg
		$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '".$medalha_9."','".$medalha_9."','$data','$hora','9','0','r','400','0','0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '".$medalha_9."' AND Data = '$data' AND Hora = '$hora')");
		$msg->execute();
	}elseif($rs['ID'] == $medalha_10){
		//VERIFICAR SE O USUARIO BATEU O RECORD DA HORA NA TEMPORADA
		$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$medalha_10."'");
		$sql->execute();
		
		$rs = $sql->fetchObject();
		
		$Gols_Rodada = $rs->Gols_Rodada;
		$record_rodada_user = $rs->Record_Rodada;

//verificar se eu bati meu proprio record
		if($Gols_Rodada > $record_rodada_user){
		$sql = DB::conn()->prepare("UPDATE usuarios SET Record_Rodada = '$Gols_Rodada' WHERE ID = '".$medalha_10."'");
		$sql->execute();	
		}elseif($Gols_Rodada == $record_rodada_user){
			
		}
		$data = date("d/m");
		$hora = date("H:i");
		
		$premio = DB::conn()->prepare("UPDATE usuarios SET Dinheiro = Dinheiro +350, Rank_rodada_10 = Rank_rodada_10 + 1 WHERE ID = '".$medalha_10."'");
		$premio->execute();
		//msg
		$msg = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '".$medalha_10."','".$medalha_10."','$data','$hora','10','0','r','350','0','0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '".$medalha_10."' AND Data = '$data' AND Hora = '$hora')");
		$msg->execute();
	}
}}

//campeonato

$sql = DB::conn()->prepare("DELETE FROM vip_fixo");
$sql->execute();

$sql = DB::conn()->prepare("DELETE FROM secadores");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE usuarios SET Gols_Rodada = 0");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE times SET id_time_secar = 0,Gols_Time = 0");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE configuracoes SET Temporada = Temporada -1");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE configuracoes SET Rodada = Rodada +1");
$sql->execute();

$sql = DB::conn()->prepare("UPDATE campeonatos SET placar1 = 0,placar2 = 0 WHERE Rodada = 10");
$sql->execute();

$pegar_temporada = DB::conn()->prepare("SELECT Temporada FROM configuracoes");
$pegar_temporada->execute();

$row = $pegar_temporada->fetchObject();

$temporada = $row->Temporada;

}
//Fim
?>