</table></div></td><td valign='top' align='center'><table cellpadding='0' cellspacing='0' border=0 height=20>
	<tr><td><div style="position:relative;top:0;left:0;width:623;height:57;"><div style="width:623;height:57;background-image:url('img/layout/menu/topH.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:623;top:10;color:#515151;font-family:litoh;font-size:1em;">Jogo Atual</div><div style="position:absolute;text-align:center;width:623;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Jogo Atual</div></div></div></td></tr>
	<tr><td><div style="position:relative;top:0;left:0;width:623;min-height:300px; height:auto !important;  height:300px;background-image:url('img/layout/menu/midH.png');padding-top:8;">
<div style='position:relative;top:0;left:0;width:607;margin-left:9;'>
<?php
$id_time = $_GET['id'];
//pegar configuracoes
$sql = DB::conn()->prepare("SELECT * FROM configuracoes");
$sql->execute();
$qr = $sql->fetchObject();

$rodada_atual = $qr->Rodada;
$temporada_atual = $qr->Campeonato;
//pegar os jogos
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = '". $rodada_atual ."' AND (time1 = '". $id_time ."' OR time2 = '". $id_time ."')");
$sql->execute();

if($sql->rowCount() == 0){
?>
<?php
$sql1 = DB::conn()->prepare("SELECT * FROM times WHERE ID = '$id_time'");
$sql1->execute();
$rs1 = $sql1->fetch();
$timen_treino = $rs1['Time'];
$gols_treino = $rs1['Gols_Time'];
?>
<div id="fundo" style="background:url(img/jogo_atual/fundo.png); width:523px; height:180px; position:relative;left:43; top:-15;">
<center>
<div id="rodada" style="background:url(img/jogo_atual/rodada.png); width:101px; height:23px; cursor:pointer; position:relative; top:7;" onclick="document.location='index.php?pr=calendario'">

</div>
<div id="direfenca" style="position:relative; top:13; font-family:visitor;font-size:0.8em; color:#000;">
diferença de gols 0

</div>
</center>
<span id="porc-red" style="color:#C50B41; font-size:12px; font-family: 'Liberation'; font-weight:bold; position:absolute; top:55; left:442;">0%</span>
<span id="porc-green" style="color:#008706; font-size:12px; font-family: 'Liberation'; font-weight:bold; position:absolute; top:55; left:40;">0%</span>

<div id="porcent" style="position:relative; top:40;">

<div id="red" style="background:url(img/jogo_atual/red.png); width:0px; height:18px; float:right;"></div>
<div id="green" style="background:url(img/jogo_atual/green1.png); width:510px; height:17px; float:left;"></div>

<div id="bola" style="background:url(img/jogo_atual/bolinha.png); width:18px; height:18px; float:right; top:-18; position:relative;">

</div>

<span id="porc-tot" style="color:#384ED5; font-size:12px; font-family: 'Liberation'; font-weight:bold; position:absolute; left:255; top:-18;">0%</span>
<div id="fundo" style="background:url(img/jogo_atual/fundo-ps.png); width:523px; height:36px; position:relative; top:61;">

<div id="placar1" style=" position:absolute; font-family: 'Ackbar'; font-size:23px; color:#FFF; text-shadow:#000 1px -1px 2px, #000 -1px 1px 2px, #000 1px 1px 2px, #000 -1px -1px 2px; left:60; top:5;">
<?php echo $gols_treino; ?>
</div>

<div id="placar2" style="float:right; position:absolute; font-family: 'Ackbar'; font-size:23px; color:#FFF; text-shadow:#000 1px -1px 2px, #000 -1px 1px 2px, #000 1px 1px 2px, #000 -1px -1px 2px; left:417; top:5;">
<?php echo $gols_treino; ?>
</div>
<center>
<div id="x" style="background:url(img/jogo_atual/x.png) no-repeat; width:29px; height:26px; position:relative; top:4;"></div>
<div id="serie" style="position:relative; top:-36; left:-4; font-family:visitor;font-size:0.8em; color:#000;">
Treino
</div>
</center>
<div id="time1" style="position:absolute; left:150; top:-29;"><img src="img/gr/Times_g/<?php echo $id_time; ?>.png" width="65" height="65" />
<div id="nome1" style="position:relative; top:5; left:-30;font-family: 'Aldo'; font-size:22px; font-weight:bold;"><?php echo utf8_encode($timen_treino); ?></div>
</div>
<div id="time2" style="position:absolute; left:310; top:-29;"><img src="img/gr/Times_g/<?php echo $id_time; ?>.png" width="65" height="65" /></div>
<div id="nome2" style="position:relative; left:340; top:1;font-family: 'Aldo'; font-size:22px; font-weight:bold;"><?php echo utf8_encode($timen_treino); ?></div>
</div>
</div>
</div>
<center>
<div style="margin-bottom:7px;"></div>
<div id="destaque" style="background:url(img/jogo_atual/destaque.png); width:523px; height:12px; position:relative; font-family:Arial, Helvetica, sans-serif; color:#FFF; font-size:11px; text-align:center;">
Destaque
</div>
</center>
<center>
<div id="fdu" style="background:url(img/jogo_atual/fundo-users.png); width:523px; height:300px;">
<div id="users_1" style="float:left; margin-top:15px; margin-left:8px;">
<table width=223 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='sofT'>
<?php
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


$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE Time = '$id_time' ORDER BY Gols_Rodada DESC LIMIT 10");
$sql->execute();
$num1 = 1;
while($rs = $sql->fetch()){
	$Cargo = $rs['Cargo'];
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
<tr onClick="document.location='?pr=perfil&amp;nome=<?php echo urlencode($rs['Usuario']); ?>'"><td align='center' style="font-family: Helvetica Narrow, sans-serif; font-size: 8px;" width=10><?php echo $num1++; ?></td>
			<td width=15><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0 style="margin-left:4px;"></td><td valign='middle' width=95><?php if($rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip' style="margin-left:10px;"><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx' style="margin-left:10px;"><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
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
     <?php }else{} ?></td><td align="right"><span style="margin-right:15px;"><?php echo $rs['Gols_Rodada']; ?></span></td></tr><tr><td background="img/jogo_atual/linha.png" height='3' colspan='9'></td><tr>
 <?php } ?>           
</table>            
</div>

<div id="users_2" style="float:right; margin-top:15px; margin-right:8px;">
<table width=223 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='sofT'>
<?php
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


$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE Time = '$id_time' ORDER BY Gols_Rodada DESC LIMIT 10");
$sql->execute();
$num1 = 1;
$n3 = 1;
while($rs = $sql->fetch()){
	$Cargo = $rs['Cargo'];
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
<tr onClick="document.location='?pr=perfil&amp;nome=<?php echo urlencode($rs['Usuario']); ?>'"><td align="right"><span style="margin-right:50px;"><?php echo $rs['Gols_Rodada']; ?></span></td>
<td valign='middle' width=95><?php if($rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip' style="margin-left:32px;"><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx' style="margin-left:32px;"><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
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
     <?php }else{} ?></td><td width=15><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0 style="margin-right:4px;"></td><td align='center' style="font-family: Helvetica Narrow, sans-serif; font-size: 8px;" width=10><?PHP echo $n3++; ?></td></tr><tr><td background="img/jogo_atual/linha.png" height='3' colspan='9'></td><tr>
<?php } ?>


            
</table>            
</div>
</div>
</center>
<center>
<div id="destaque" style="background:url(img/jogo_atual/destaque.png); width:523px; height:12px; position:relative; font-family:Arial, Helvetica, sans-serif; color:#FFF; font-size:11px; text-align:center;">
Secadores
</div>
</center>
</div>
<center>
<div id="fdu" style="background:url(img/jogo_atual/fundo-users.png); width:523px; min-height:30px; height:auto !important; ">
<div id="time_s1" style="float:left; margin-top:5px; margin-left:8px;">
<table width=223 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='sofT'>
<?php
$sql = DB::conn()->prepare("SELECT * FROM secadores WHERE id_para = '".$id_time."'");
$sql->execute();
$n = 1;
while($rs = $sql->fetch()){
	$secadores = $rs['gols_secados'];
	$id_secador = $rs['id_time'];
?>
<?php
$s = DB::conn()->prepare("SELECT * FROM times WHERE ID = '".$id_secador."'");
$s->execute();
while($rs = $s->fetch()){
$time = $rs['Time'];
?>
<tr onClick="document.location='?pr=time&amp;time=<?php echo utf8_encode($time); ?>'"><td align='center' style="font-family: Helvetica Narrow, sans-serif; font-size: 8px;" width=10><?php echo $n++; ?></td>
			<td width=15><img src='img/gr/Times_p/<?php echo $id_secador; ?>.png' border=0 style="margin-left:4px;"></td><td valign='middle' width=95><span class='cVipx' style="margin-left:3px;"><?php echo utf8_encode($time); ?></span></td><td align="right"><span style="margin-right:15px;"><?php echo $secadores; ?></span></td></tr><tr><td background="img/jogo_atual/linha.png" height='3' colspan='9'></td><tr>
<?php }} ?>          
</table>            
</div>

<div id="time_s2" style="float:right; margin-top:5px; margin-right:8px;">
<table width=223 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='sofT'>
<?php
$sql = DB::conn()->prepare("SELECT * FROM secadores WHERE id_para = '".$id_time."'");
$sql->execute();
$n2 = 1;
while($rs = $sql->fetch()){
	$secadores = $rs['gols_secados'];
	$id_secador = $rs['id_time'];
?>
<?php
$s = DB::conn()->prepare("SELECT * FROM times WHERE ID = '".$id_secador."'");
$s->execute();
while($rs = $s->fetch()){
$time = $rs['Time'];
?>
<tr onClick="document.location='?pr=perfil&amp;time=<?php echo utf8_encode($time); ?>'"><td align="right"><span style="margin-right:50px;"><?php echo $secadores; ?></span></td>
<td valign='middle' width=95><span class='cVipx' style=""><?php echo utf8_encode($time); ?></span></td><td width=15><img src='img/gr/Times_p/<?php echo $id_secador; ?>.png' border=0 style="margin-right:4px;"></td><td align='center' style="font-family: Helvetica Narrow, sans-serif; font-size: 8px;" width=10><?php echo $n2++; ?></td></tr><tr><td background="img/jogo_atual/linha.png" height='3' colspan='9'></td><tr>
<?php } } ?>
           
</table>            
<?php }else{ ?>
<?php
$rs = $sql->fetch();

$time1 = $rs['time1'];
$placar1 = $rs['placar1'];

$time2 = $rs['time2'];
$placar2 = $rs['placar2'];

?>
<?php
//calculo de porcentagens
if($placar1 < $placar2){
$placar_total = $placar1 + $placar2;
$p = ($placar1 / $placar_total) * 510;

$p2 = ($placar2 / $placar_total)*510;	

}elseif($placar1 > $placar2){
$placar_total = $placar1 + $placar2;
$p = ($placar2 / $placar_total) * 510;

$p2 = ($placar1 / $placar_total)*510;		
}elseif($placar1 == $placar2){
$p = 255;	
}


if ($placar1 > $placar2) {
	$rodada_placar_diferenca = $placar1 - $placar2;
} else if ($placar1 < $placar2) {
	$rodada_placar_diferenca = $placar2 - $placar1;
} else {
	$rodada_placar_diferenca = 0;
}

$placar_total = $placar1 + $placar2;

if($placar_total >= 0){

if($placar1 > $placar2){
$p_placar = ($placar1 / $placar_total)*510;
$p_exp = explode(".", $p_placar);
$p_placar = $p_exp[0];
	
}elseif($placar1 < $placar2){
$p_placar = ($placar2 / $placar_total) * 510;
$p_exp = explode(".", $p_placar);
$p_placar = $p_exp[0];
}elseif($placar1 == $placar2){
	$p_placar = 255;
}	
}else{
	
}
?>
<?php
$sql = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time1'");
$sql->execute();
$rs = $sql->fetch();

$Nomet1 = $rs['Time'];
?>
<?php
$sql = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time2'");
$sql->execute();
$rs = $sql->fetch();

$Nomet2 = $rs['Time'];
?>

<?php
$sql = DB::conn()->prepare("SELECT serie FROM times WHERE ID = '$id_time'");
$sql->execute();
$rs = $sql->fetch();

$serie = $rs['serie'];
?>
<div id="fundo" style="background:url(img/jogo_atual/fundo.png); width:523px; height:180px; position:relative;left:43; top:-15;">
<center>
<div id="rodada" style="background:url(img/jogo_atual/rodada.png); width:101px; height:23px; cursor:pointer; position:relative; top:7;" onclick="document.location='index.php?pr=calendario'">

</div>
<div id="direfenca" style="position:relative; top:13; font-family:visitor;font-size:0.8em; color:#000;">
diferença de gols <?php echo $rodada_placar_diferenca; ?>
<?php
$placar_total = $placar1 + $placar2;
if($placar1 > $placar2){
$green = ($placar1 / $placar_total)*100;
$p_exp = explode(".", $green);
$green = $p_exp[0];
	
}elseif($placar1 < $placar2){
$green = ($placar2 / $placar_total) * 100;
$p_exp = explode(".", $green);
$green = $p_exp[0];
}elseif($placar1 == $placar2){
$green = 50;	
}
//
if($placar1 > $placar2){
$placar_total = $placar1 + $placar2;
$red = $placar2 % $placar1 / 100;
}elseif($placar2 > $placar1){
$placar_total = $placar1 + $placar2;

$red = $placar1 % $placar2 / 100;//aki sonso
}elseif($placar1 == $placar2){
$red = 1;	
}

//calculo de porcentagens
if($placar1 < $placar2){
$placar_total = $placar1 + $placar2;

$ps = ($placar1 / $placar_total) * 100;

$ps1 = ($placar2 / $placar_total)*100;	

}elseif($placar1 > $placar2){
$placar_total = $placar1 + $placar2;
$ps = ($placar2 / $placar_total) * 100;

$p21 = ($placar1 / $placar_total)*100;		
}elseif($placar1 == $placar2){
	$ps = 50;
}
?>
</div>
</center>

<?php
if($placar1 < $placar2){
?>
<span id="porc-red" style="color:#C50B41; font-size:12px; font-family: 'Liberation'; font-weight:bold; position:absolute; top:55; left:40;"><?php echo number_format($ps,0,',','.'); ?>%</span>
<span id="porc-green" style="color:#008706; font-size:12px; font-family: 'Liberation'; font-weight:bold; position:absolute; top:55; left:442;"><?php echo $green; ?>%</span>

<div id="porcent" style="position:relative; top:40;">

<div id="red" style="background:url(img/jogo_atual/red.png); width:<?php echo number_format($p,0,',','.'); ?>px; height:18px; float:left;"></div>
<div id="green" style="background:url(img/jogo_atual/green.png); width:<?php echo $p_placar; ?>px; height:17px; float:right;"></div>

<div id="bola" style="background:url(img/jogo_atual/bolinha.png); width:18px; height:18px; float:left; top:-16; position:relative;">

</div>
<?php }else{ ?>
<span id="porc-red" style="color:#C50B41; font-size:12px; font-family: 'Liberation'; font-weight:bold; position:absolute; top:55; left:442;"><?php echo number_format($ps,0,',','.'); ?>%</span>
<span id="porc-green" style="color:#008706; font-size:12px; font-family: 'Liberation'; font-weight:bold; position:absolute; top:55; left:40;"><?php echo $green; ?>%</span>

<div id="porcent" style="position:relative; top:40;">

<div id="red" style="background:url(img/jogo_atual/red.png); width:<?php echo number_format($p,0,',','.'); ?>px; height:18px; float:right;"></div>
<div id="green" style="background:url(img/jogo_atual/green1.png); width:<?php echo $p_placar; ?>px; height:17px; float:left;"></div>

<div id="bola" style="background:url(img/jogo_atual/bolinha.png); width:18px; height:18px; float:right; top:-16; position:relative;">

</div>
<?php } ?>

<span id="porc-tot" style="color:#384ED5; font-size:12px; font-family: 'Liberation'; font-weight:bold; position:absolute; left:255; top:-18;"><?php echo number_format($red,0,',','.'); ?>%</span>
<div id="fundo" style="background:url(img/jogo_atual/fundo-ps.png); width:523px; height:36px; position:relative; top:61;">

<div id="placar1" style=" position:absolute; font-family: 'Ackbar'; font-size:23px; color:#FFF; text-shadow:#000 1px -1px 2px, #000 -1px 1px 2px, #000 1px 1px 2px, #000 -1px -1px 2px; left:60; top:5;">
<?php echo $placar1; ?>
</div>

<div id="placar2" style="float:right; position:absolute; font-family: 'Ackbar'; font-size:23px; color:#FFF; text-shadow:#000 1px -1px 2px, #000 -1px 1px 2px, #000 1px 1px 2px, #000 -1px -1px 2px; left:417; top:5;">
<?php echo $placar2; ?>
</div>
<center>
<div id="x" style="background:url(img/jogo_atual/x.png) no-repeat; width:29px; height:26px; position:relative; top:4;"></div>
<div id="serie" style="position:relative; top:-36; left:-4; font-family:visitor;font-size:0.8em; color:#000;">
série <?php echo $serie; ?>
</div>
</center>
<div id="time1" style="position:absolute; left:150; top:-29;"><img src="img/gr/Times_g/<?php echo $time1; ?>.png" width="65" height="65" />
<div id="nome1" style="position:relative; top:5; left:-30;font-family: 'Aldo'; font-size:22px; font-weight:bold;"><?php echo utf8_encode($Nomet1); ?></div>
</div>
<div id="time2" style="position:absolute; left:310; top:-29;"><img src="img/gr/Times_g/<?php echo $time2; ?>.png" width="65" height="65" /></div>
<div id="nome2" style="position:relative; left:340; top:5;font-family: 'Aldo'; font-size:22px; font-weight:bold;"><?php echo utf8_encode($Nomet2); ?></div>
</div>
</div>
</div>
<center>
<div style="margin-bottom:15px;"></div>
<div id="destaque" style="background:url(img/jogo_atual/destaque.png); width:523px; height:12px; position:relative; font-family:Arial, Helvetica, sans-serif; color:#FFF; font-size:11px; text-align:center;">
Destaque
</div>
</center>
<center>
<div id="fdu" style="background:url(img/jogo_atual/fundo-users.png); width:523px; height:300px;">
<div id="users_1" style="float:left; margin-top:15px; margin-left:8px;">
<table width=223 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='sofT'>
<?php
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


$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE Time = '$time1' ORDER BY Gols_Rodada DESC LIMIT 10");
$sql->execute();
$num1 = 1;
while($rs = $sql->fetch()){
	$Cargo = $rs['Cargo'];
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
<tr onClick="document.location='?pr=perfil&amp;nome=<?php echo urlencode($rs['Usuario']); ?>'"><td align='center' style="font-family: Helvetica Narrow, sans-serif; font-size: 8px;" width=10><?php echo $num1++; ?></td>
			<td width=15><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0 style="margin-left:4px;"></td><td valign='middle' width=95><?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip' style="margin-left:10px;"><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx' style="margin-left:10px;"><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
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
     <?php }else{} ?></td><td align="right"><span style="margin-right:15px;"><?php echo $rs['Gols_Rodada']; ?></span></td></tr><tr><td background="img/jogo_atual/linha.png" height='3' colspan='9'></td><tr>
 <?php } ?>           
</table>            
</div>

<div id="users_2" style="float:right; margin-top:15px; margin-right:8px;">
<table width=223 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='sofT'>
<?php
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


$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE Time = '$time2' ORDER BY Gols_Rodada DESC LIMIT 10");
$sql->execute();
$num1 = 1;
$n3 = 1;
while($rs = $sql->fetch()){
	$Cargo = $rs['Cargo'];
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
<tr onClick="document.location='?pr=perfil&amp;nome=<?php echo urlencode($rs['Usuario']); ?>'"><td align="right"><span style="margin-right:50px;"><?php echo $rs['Gols_Rodada']; ?></span></td>
<td valign='middle' width=95><?php if($rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip' style="margin-left:32px;"><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx' style="margin-left:32px;"><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
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
     <?php }else{} ?></td><td width=15><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0 style="margin-right:4px;"></td><td align='center' style="font-family: Helvetica Narrow, sans-serif; font-size: 8px;" width=10><?PHP echo $n3++; ?></td></tr><tr><td background="img/jogo_atual/linha.png" height='3' colspan='9'></td><tr>
<?php } ?>


            
</table>            
</div>
</div>
</center>
<center>
<div id="destaque" style="background:url(img/jogo_atual/destaque.png); width:523px; height:12px; position:relative; font-family:Arial, Helvetica, sans-serif; color:#FFF; font-size:11px; text-align:center;">
Secadores
</div>
</center>
</div>
<center>
<div id="fdu" style="background:url(img/jogo_atual/fundo-users.png); width:523px; min-height:30px; height:auto !important; ">
<div id="time_s1" style="float:left; margin-top:5px; margin-left:8px;">
<table width=223 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='sofT'>
<?php
$sql = DB::conn()->prepare("SELECT * FROM secadores WHERE id_para = '".$time1."'");
$sql->execute();
$n = 1;
while($rs = $sql->fetch()){
	$secadores = $rs['gols_secados'];
	$id_secador = $rs['id_time'];
?>
<?php
$s = DB::conn()->prepare("SELECT * FROM times WHERE ID = '".$id_secador."'");
$s->execute();
while($rs = $s->fetch()){
$time = $rs['Time'];
?>
<tr onClick="document.location='?pr=time&amp;time=<?php echo utf8_encode($time); ?>'"><td align='center' style="font-family: Helvetica Narrow, sans-serif; font-size: 8px;" width=10><?php echo $n++; ?></td>
			<td width=15><img src='img/gr/Times_p/<?php echo $id_secador; ?>.png' border=0 style="margin-left:4px;"></td><td valign='middle' width=95><span class='cVipx' style="margin-left:3px;"><?php echo utf8_encode($time); ?></span></td><td align="right"><span style="margin-right:15px;"><?php echo $secadores; ?></span></td></tr><tr><td background="img/jogo_atual/linha.png" height='3' colspan='9'></td><tr>
<?php }} ?>          
</table>            
</div>

<div id="time_s2" style="float:right; margin-top:5px; margin-right:8px;">
<table width=223 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='sofT'>
<?php
$sql = DB::conn()->prepare("SELECT * FROM secadores WHERE id_para = '".$time2."'");
$sql->execute();
$n2 = 1;
while($rs = $sql->fetch()){
	$secadores = $rs['gols_secados'];
	$id_secador = $rs['id_time'];
?>
<?php
$s = DB::conn()->prepare("SELECT * FROM times WHERE ID = '".$id_secador."'");
$s->execute();
while($rs = $s->fetch()){
$time = $rs['Time'];
?>
<tr onClick="document.location='?pr=perfil&amp;time=<?php echo utf8_encode($time); ?>'"><td align="right"><span style="margin-right:50px;"><?php echo $secadores; ?></span></td>
<td valign='middle' width=95><span class='cVipx' style=""><?php echo utf8_encode($time); ?></span></td><td width=15><img src='img/gr/Times_p/<?php echo $id_secador; ?>.png' border=0 style="margin-right:4px;"></td><td align='center' style="font-family: Helvetica Narrow, sans-serif; font-size: 8px;" width=10><?php echo $n2++; ?></td></tr><tr><td background="img/jogo_atual/linha.png" height='3' colspan='9'></td><tr>
<?php } } ?>


            
</table>            
<?php } ?>


</div>
</div></div></td></tr>
<tr><td><div style="position:relative;top:0;width:623;left:0;height:15px;"><img src='img/layout/menu/botH.png' border=0></div></td></tr>
	</table>
