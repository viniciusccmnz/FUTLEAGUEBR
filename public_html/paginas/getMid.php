<?php
include_once('conn.php');
?>
<table width=188 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  style="font-family: Tahoma, sans-serif;font-size: 10px;color: #363636;">
<?php
//TOP 5
$medalha = 0;

$query = DB::conn()->prepare("SELECT ID FROM usuarios ORDER BY Gols_Total DESC LIMIT 5");
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
$TopHora = DB::conn()->prepare("SELECT * FROM usuarios ORDER BY Gols_Hora DESC LIMIT 10");
$TopHora->execute();

if($TopHora->rowCount() == 0){
echo '<p>Nenhum usuário cadastrado</p>';	
}else{
	$numero1 = 1;
while($rs = $TopHora->fetch()){
?>
<?php
	$pegar_cargo = DB::conn()->prepare("SELECT Cargo,Representante FROM usuarios WHERE Usuario = ?");
	$pegar_cargo->execute(array($rs['Usuario']));
	
	$pesquisar_cargo = $pegar_cargo->fetch();
	$Cargo = $pesquisar_cargo['Cargo'];
	$rh = $pesquisar_cargo['Representante'];
?> 
<?php
	 $verificar_adm = DB::conn()->prepare("SELECT ADM FROM usuarios WHERE Usuario = '".$rs['Usuario']."'");
	 $verificar_adm->execute();
	 $fetch = $verificar_adm->fetchObject();
	 $Adm = $fetch->ADM;
?>
<?php
$top_H = DB::conn()->prepare("SELECT Top_Hora FROM usuarios WHERE Usuario = '".$rs['Usuario']."'");
$top_H->execute();

$fetch = $top_H->fetchObject();
$Top_hr = $fetch->Top_Hora;
?>
<?php
$top_R = DB::conn()->prepare("SELECT Top_Rodada FROM usuarios WHERE Usuario = '".$rs['Usuario']."'");
$top_R->execute();

$fetch = $top_R->fetchObject();
$Top_rd = $fetch->Top_Rodada;
?>
<?php
$top_T = DB::conn()->prepare("SELECT Top_Temporada FROM usuarios WHERE Usuario = '".$rs['Usuario']."'");
$top_T->execute();

$fetch = $top_T->fetchObject();
$Top_tm = $fetch->Top_Temporada;
?>
<?php
$pegarnometime = DB::conn()->prepare("SELECT Time FROM times WHERE ID = ?");
$pegarnometime->execute(array($rs['Time']));

$pegar_bd = $pegarnometime->fetch();
$nome_time_hora = $pegar_bd['Time'];
?>
<tr class='pQrow' onClick="document.location='?pr=perfil&amp;nome=<?php echo urlencode($rs['Usuario']); ?>'">
<td width=15 style="font-family: Tahoma, sans-serif;font-size: 11px;color: #6f6f6f;" align='center'><b><?php echo $numero1++; ?></b></td><td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td width=21><a href='?pr=time&amp;time=<?php echo utf8_encode($nome_time_hora); ?>'><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' width=93><?php if($rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
   if($Cargo == 4){
   ?>
<img src='img/c4.png' border=0>
    <?php
   }elseif($Cargo == 3){
   ?>
<img src='img/c3.png' border=0>
    <?php }elseif($Cargo == 2){ ?>
<img src='img/c2.png' border=0>
    <?php }elseif($Cargo == 1){ ?>
<img src='img/c1.png' border=0>
     <?php }else{} ?><?php if($rh == 1 && $Cargo > 0){ ?><img src='img/c5.png' border=0 style="margin-left:-4px;"><?php }elseif($rh == 1 && $Cargo == 0){ ?><img src='img/c5.png' border=0 style=""><?php } ?></td><td style="font-family: Helvetica, sans-serif;font-size: 11px;color: #6f6f6f;"><?php echo $rs['Gols_Hora']; ?></td></tr><tr><td height='1' colspan='9' style='padding-left:60'><img src='img/layout/menu/line.png' border=0></td></tr>
<?php }} ?>
</table>
<?php
$sql = DB::conn()->prepare("SELECT * FROM usuarios");
$sql->execute();
if($sql->rowCount() == 0){
}else{
while($rs = $sql->fetch()){
$Gols_Total = $rs['Gols_Total'];
$Nivel = $rs['Nivel'];
$id_u =  $rs['ID'];

//verificações
if($Gols_Total >=10 && $Nivel == 1){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '2'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=2, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '2', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 2)");
	$sql->execute();		
	}	
}elseif($Gols_Total >= 70 && $Nivel == 2){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '3'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=3, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."' ");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '3', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 3)");
	$sql->execute();	
	}
}elseif($Gols_Total >= 130 && $Nivel == 3){
$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '4'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=4, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '4', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 4)");
	$sql->execute();	
	}	
}elseif($Gols_Total >= 190 && $Nivel == 4){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '5'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=5, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."' ");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '5', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 5)");
	$sql->execute();
	}
}elseif($Gols_Total >= 250 && $Nivel == 5){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '6'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=6, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."' ");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '6', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 6)");
	$sql->execute();
	}
}
elseif($Gols_Total >= 330 && $Nivel == 6){
$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '7'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=7, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."' ");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '7', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 7)");
	$sql->execute();
	
	}
}
elseif($Gols_Total >= 504 && $Nivel == 7){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '8'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=8, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '8', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 8)");
	$sql->execute();
	}
}
elseif($Gols_Total >= 731 && $Nivel == 8){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '9'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=9, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '9', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 9)");
	$sql->execute();
	}
}
elseif($Gols_Total >= 1015 && $Nivel == 9){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '10'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=10, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '10', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 10)");
	$sql->execute();
	}
}
elseif($Gols_Total >= 1363 && $Nivel == 10){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '11'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=11, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '11', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND = Nivel 11)");
	$sql->execute();
	}
}
elseif($Gols_Total >= 1780 && $Nivel == 11){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '12'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=12, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '12', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 12)");
	$sql->execute();
	}
}
elseif($Gols_Total >= 2272 && $Nivel == 12){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '13'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=13, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '13', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 13)");
	$sql->execute();
	}
}
elseif($Gols_Total >= 2844 && $Nivel == 13){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '14'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=14, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '14', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 14)");
	$sql->execute();
	}	
}
elseif($Gols_Total >= 3498 && $Nivel == 14){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '15'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=15, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '15', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 15)");
	$sql->execute();
	}		
}
elseif($Gols_Total >= 4241 && $Nivel == 15){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '16'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=16, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '16', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 16)");
	$sql->execute();
	}
}
elseif($Gols_Total >= 5075 && $Nivel == 16){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '17'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=17, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '17', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 17)");
	$sql->execute();
	}
}
elseif($Gols_Total >= 6002 && $Nivel == 17){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '18'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=18, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '18', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 18)");
	$sql->execute();
	}
}
elseif($Gols_Total >= 13027 && $Nivel == 18){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '19'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=19, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '19', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 19)");
	$sql->execute();
	}
}
elseif($Gols_Total >= 21150 && $Nivel == 19){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '20'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=20, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '20', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 20)");
	$sql->execute();
	}
}
elseif($Gols_Total >= 33172 && $Nivel == 20){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '21'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=21, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '21', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 21)");
	$sql->execute();
	}
}
elseif($Gols_Total >= 42010 && $Nivel == 21){
$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '22'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=22, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '22', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 22)");
	$sql->execute();
	}
}elseif($Gols_Total >= 54000 && $Nivel == 22){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '23'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=23, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '23', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 23)");
	$sql->execute(); 
	}
}elseif($Gols_Total >= 65600 && $Nivel == 23){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '24'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=24, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '24', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 24)");
	$sql->execute();
	}
}elseif($Gols_Total >= 79941 && $Nivel == 24){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '25'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=25, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '25', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 25)");
	$sql->execute();
	}
}elseif($Gols_Total >= 95333 && $Nivel == 25){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '26'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=26, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '26', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 26)");
	$sql->execute();
	}
}elseif($Gols_Total >= 101000 && $Nivel == 26){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '27'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=27, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '27', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 27)");
	$sql->execute();
	}
}elseif($Gols_Total >= 150000 && $Nivel == 27){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '28'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=28, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '28', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 28)");
	$sql->execute();
	}
}elseif($Gols_Total >= 200000 && $Nivel == 28){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '29'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=29, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '29', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 29)");
	$sql->execute();
	}
}
elseif($Gols_Total >= 270000 && $Nivel == 29){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '30'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=30, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '30', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 30)");
	$sql->execute();
	}
}
elseif($Gols_Total >= 300000 && $Nivel == 30){
	$data = date("d/m");
	$hora = date("H:i");
	
	//verificar
	$veri = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$id_u."' AND nivel = '31'");
	$veri->execute();
	
	if($veri->rowCount() == 1){
		
	}else{
	$upar = DB::conn()->prepare("UPDATE usuarios SET Nivel=31, upnivel=0, Pontos = Pontos +1 WHERE ID='".$id_u."'");
	$upar->execute();
	
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de,id_para,Data,Hora,Conquista,Mensagem,Tipo,dinheiro,Nivel,Time) SELECT '$id_u', '$id_u', '$data', '$hora', '0', '0', 'up', '0', '31', '0' FROM DUAL WHERE NOT EXISTS(SELECT id_de FROM mensagens_usuario WHERE id_de = '$id_u' AND Nivel = 31)");
	$sql->execute();
	}
}
//fim	
}	
}
?>

<?php
$sql = DB::conn()->prepare("SELECT ip2 FROM usuarios WHERE Tempo_Auto <= '".date('Y/m/d H:i:s')."' AND Tempo_Penalti <= '".date('Y/m/d H:i:s')."' AND Tempo_Falta <= '".date('Y/m/d H:i:s')."' AND ip2 > 0");
$sql->execute();
if($sql->rowCount() == 0){
	
}else{
$sql = DB::conn()->prepare("UPDATE usuarios SET ip2 = ' ' WHERE Tempo_Auto <= '".date('Y/m/d H:i:s')."' AND Tempo_Penalti <= '".date('Y/m/d H:i:s')."' AND Tempo_Falta <= '".date('Y/m/d H:i:s')."'");	
$sql->execute();
}
?>
