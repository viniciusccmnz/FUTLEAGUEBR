</table></div></td><td valign='top' align='center'><table cellpadding='0' cellspacing='0' border=0><tr><td><table cellpadding='0' cellspacing='0' border=0 height=20>

	<tr><td><div style="position:relative;top:0;left:0;width:204;height:57;"><div style="width:204;height:57;background-image:url('img/layout/menu/topL.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:204;top:10;color:#515151;font-family:litoh;font-size:1em;">Hora</div><div style="position:absolute;text-align:center;width:204;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Hora</div></div></div></td></tr>

	<tr><td style='height:268;'><div style="position:relative;top:0;left:6;width:192;height:100%;background-image:url('img/layout/menu/midL.png');padding-top:8;"  ><div style="position:relative;left:2;width:100%;height:100%;" id='phora'><table width=188 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  style="font-family: Tahoma, sans-serif;font-size: 10px;color: #363636;">

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

<td width=15 style="font-family: Tahoma, sans-serif;font-size: 11px;color: #6f6f6f;" align='center'><b><?php echo $numero1++; ?></b></td><td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){ ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){ ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td width=21><a href='?pr=time&amp;time=<?php echo utf8_encode($nome_time_hora); ?>'><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' width=93><?php if($rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php

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

</table></div></div></td></tr>

            

	<tr><td><div style="position:relative;top:0;width:192;left:6;height:15px;"><img src='img/layout/menu/botL.png' border=0></div></td></tr>

	</table></td><td><table cellpadding='0' cellspacing='0' border=0 height=20>

	<tr><td><div style="position:relative;top:0;left:0;width:204;height:57;"><div style="width:204;height:57;background-image:url('img/layout/menu/topL.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:204;top:10;color:#515151;font-family:litoh;font-size:1em;">Rodada</div><div style="position:absolute;text-align:center;width:204;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Rodada</div></div></div></td></tr>

	<tr><td style='height:268;'><div style="position:relative;top:0;left:6;width:192;height:100%;background-image:url('img/layout/menu/midL.png');padding-top:8;"  >

    

    <div style="position:relative;left:2;width:100%;height:100%;" id='part'><table width=188 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  style="font-family: Tahoma, sans-serif;font-size: 10px;color: #363636;">

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







$TopRodada = DB::conn()->prepare("SELECT * FROM usuarios ORDER BY Gols_Rodada DESC LIMIT 10");

$TopRodada->execute();



if($TopRodada->rowCount() == 0){

echo '<p>Nenhum usuário cadastrado</p>';	

}else{

	$numero2 = 1;

while($rs = $TopRodada->fetch()){

?>

<?php

	$pegar_cargo = DB::conn()->prepare("SELECT Cargo,Representante FROM usuarios WHERE Usuario = ?");

	$pegar_cargo->execute(array($rs['Usuario']));

	

	$pesquisar_cargo = $pegar_cargo->fetch();

	$Cargo = $pesquisar_cargo['Cargo'];

	$rh1 = $pesquisar_cargo['Representante'];

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

$nome_time_Rodada = $pegar_bd['Time'];

?>    

<tr class='pQrow' onClick="document.location='?pr=perfil&amp;nome=<?php echo urlencode($rs['Usuario']); ?>'">

<td width=15 style="font-family: Tahoma, sans-serif;font-size: 11px;color: #6f6f6f;" align='center'><b><?php echo $numero2++; ?></b></td><td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){ ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){ ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td width=21><a href='?pr=time&amp;time=<?php echo utf8_encode($nome_time_Rodada); ?>'><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' width=93><?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php

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

     <?php }else{} ?><?php if($rh1 == 1 && $Cargo > 0){ ?><img src='img/c5.png' border=0 style="margin-left:-4px;"><?php }elseif($rh1 == 1 && $Cargo == 0){ ?><img src='img/c5.png' border=0 style=""><?php } ?></td><td style="font-family: Helvetica, sans-serif;font-size: 11px;color: #6f6f6f;"><?php echo $rs['Gols_Rodada']; ?></td></tr>          

<tr><td height='1' colspan='9' style='padding-left:60'><img src='img/layout/menu/line.png' border=0></td></tr>

<?php }}?>        

</table></div></div></td></tr>

	<tr><td><div style="position:relative;top:0;width:192;left:6;height:15px;"><img src='img/layout/menu/botL.png' border=0></div></td></tr>

	</table></td><td><table cellpadding='0' cellspacing='0' border=0 height=20>

	<tr><td><div style="position:relative;top:0;left:0;width:204;height:57;"><div style="width:204;height:57;background-image:url('img/layout/menu/topL.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:204;top:10;color:#515151;font-family:litoh;font-size:1em;">Temporada</div><div style="position:absolute;text-align:center;width:204;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Temporada</div></div></div></td></tr>

	<tr><td style='height:268;'><div style="position:relative;top:0;left:6;width:192;height:100%;background-image:url('img/layout/menu/midL.png');padding-top:8;"  >

    

<div style="position:relative;left:2;width:100%;height:100%;" id='ptep'><table width=188 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  style="font-family: Tahoma, sans-serif;font-size: 10px;color: #363636;">

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





$TopTemporada = DB::conn()->prepare("SELECT * FROM usuarios ORDER BY Gols_Temporada DESC LIMIT 10");

$TopTemporada->execute();



if($TopTemporada->rowCount() == 0){

echo '<p>Nenhum usuário cadastrado</p>';	

}else{

	$numero3 = 1;

while($rs = $TopTemporada->fetch()){

?>

<?php

	$pegar_cargo = DB::conn()->prepare("SELECT Cargo,Representante FROM usuarios WHERE Usuario = ?");

	$pegar_cargo->execute(array($rs['Usuario']));

	

	$pesquisar_cargo = $pegar_cargo->fetch();

	$Cargo = $pesquisar_cargo['Cargo'];

	$rh2 = $pesquisar_cargo['Representante'];

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

$nome_time_Temporada= $pegar_bd['Time'];

?>

<tr class='pQrow' onClick="document.location='?pr=perfil&amp;nome=<?php echo urlencode($rs['Usuario']); ?>'">

<td width=15 style="font-family: Tahoma, sans-serif;font-size: 11px;color: #6f6f6f;" align='center'><b><?php echo $numero3++; ?></b></td><td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){ ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){ ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td width=21><a href='?pr=time&amp;time=<?php echo utf8_encode($nome_time_Temporada); ?>'><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' width=93><?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php

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

     <?php }else{} ?><?php if($rh2 == 1 && $Cargo > 0){ ?><img src='img/c5.png' border=0 style="margin-left:-4px;"><?php }elseif($rh2 == 1 && $Cargo == 0){ ?><img src='img/c5.png' border=0 style=""><?php } ?></td><td style="font-family: Helvetica, sans-serif;font-size: 11px;color: #6f6f6f;"><?php echo $rs['Gols_Temporada']; ?></td></tr><tr><td height='1' colspan='9' style='padding-left:60'><img src='img/layout/menu/line.png' border=0></td></tr>

<?php }} ?>

</table></div></div></td></tr>

	<tr><td><div style="position:relative;top:0;width:192;left:6;height:15px;"><img src='img/layout/menu/botL.png' border=0></div></td></tr>

	</table></td></tr>

<tr><td colspan=3>

<table cellpadding='0' cellspacing='0' border=0 height=20 width=100%><tr><td align='center'><table cellpadding='0' cellspacing='0' border=0 height=20>

	<tr><td><div style="position:relative;top:0;left:0;width:204;height:57;"><div style="width:204;height:57;background-image:url('img/layout/menu/topL.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:204;top:13;color:#515151;font-family:litoh;font-size:0.7em;">Record Hora na Temp</div><div style="position:absolute;text-align:center;width:204;top:12;color:#e8f4e1;font-family:litoh;font-size:0.7em;">Record Hora na Temp</div></div></div></td></tr>

	<tr><td style='height:auto;'><div style="position:relative;top:0;left:6;width:192;height:100%;background-image:url('img/layout/menu/midL.png');padding-top:8;"  ><div style="position:relative;left:2;width:100%;height:100%;" id='precordhrtep'><table width=188 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  style="font-family: Tahoma, sans-serif;font-size: 10px;color: #363636;">

<?php

$medalha = 0;



$query = DB::conn()->prepare("SELECT ID FROM usuarios ORDER BY Gols_Total DESC LIMIT 10");

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



$pegar_record = DB::conn()->prepare("SELECT * FROM record_hora LIMIT 1");

$pegar_record->execute();



if($pegar_record->rowCount() == 0){

$inserir_anonymo = DB::conn()->prepare("INSERT INTO record_hora (user_id, user_gols) VALUES ('1','0')");

$inserir_anonymo->execute();	

}else{

$rs = $pegar_record->fetchObject();

$pegar_id_record = $rs->user_id;

$pegar_gols_hora = $rs->user_gols;	

}

?>

<?php

$pegar_dados_do_userrecord = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$pegar_id_record."'");

$pegar_dados_do_userrecord->execute();



while($rs = $pegar_dados_do_userrecord->fetch()){

	$timeid = $rs['Time'];

?>

<?php

$sql = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '".$timeid."'");

$sql->execute();

$rs1 = $sql->fetchObject();

$time1 = $rs1->Time;

?>

<?php

	$pegar_cargo = DB::conn()->prepare("SELECT Cargo,Representante FROM usuarios WHERE Usuario = ?");

	$pegar_cargo->execute(array($rs['Usuario']));

	

	$pesquisar_cargo = $pegar_cargo->fetch();

	$Cargo = $pesquisar_cargo['Cargo'];

	$rh3 = $pesquisar_cargo['Representante'];

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

<tr class='pQrow' onClick="document.location='?pr=perfil&amp;nome=<?php echo urlencode($rs["Usuario"]); ?>'">

<td width=15 style="font-family: Tahoma, sans-serif;font-size: 11px;color: #6f6f6f;" align='center'><b>1</b></td><td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){ ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){ ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td width=21><a href="?pr=time&amp;time=<?php echo utf8_encode($time1); ?>"><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' width=93><?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php

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

     <?php }else{} ?><?php if($rh3 == 1 && $Cargo > 0){ ?><img src='img/c5.png' border=0 style="margin-left:-4px;"><?php }elseif($rh3 == 1 && $Cargo == 0){ ?><img src='img/c5.png' border=0 style=""><?php } ?></td><td style="font-family: Helvetica, sans-serif;font-size: 11px;color: #6f6f6f;"><?php echo $pegar_gols_hora; ?></td></tr><tr><td height='1' colspan='9' style='padding-left:60'><img src='img/layout/menu/line.png' border=0></td></tr>

<?php } ?>

</table></div></div></td></tr>

	<tr><td><div style="position:relative;top:0;width:192;left:6;height:15px;"><img src='img/layout/menu/botL.png' border=0></div></td></tr>

	</table></td><td align='center'><table cellpadding='0' cellspacing='0' border=0 height=20>

	<tr><td><div style="position:relative;top:0;left:0;width:204;height:57;"><div style="width:204;height:57;background-image:url('img/layout/menu/topL.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:204;top:13;color:#515151;font-family:litoh;font-size:0.7em;">Record Rodada na Temp</div><div style="position:absolute;text-align:center;width:204;top:12;color:#e8f4e1;font-family:litoh;font-size:0.7em;">Record Rodada na Temp</div></div></div></td></tr>

	<tr><td style='height:auto;'><div style="position:relative;top:0;left:6;width:192;height:100%;background-image:url('img/layout/menu/midL.png');padding-top:8;"  ><div style="position:relative;left:2;width:100%;height:100%;" id='precordarttep'><table width=188 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  style="font-family: Tahoma, sans-serif;font-size: 10px;color: #363636;">

<?php

$medalha = 0;



$query = DB::conn()->prepare("SELECT ID FROM usuarios ORDER BY Gols_Total DESC LIMIT 10");

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

	} else if ($medalha == 6){

		$medalha_6 = $rs->ID;	

	} else if ($medalha == 7){

		$medalha_7 = $rs->ID;	

	} else if ($medalha == 8){

		$medalha_8 = $rs->ID;		

	} else if ($medalha == 9){

		$medalha_9 = $rs->ID;		

	} else if ($medalha == 10){

		$medalha_10 = $rs->ID;		

	}

}



$pegar_record = DB::conn()->prepare("SELECT * FROM record_rodada LIMIT 1");

$pegar_record->execute();



if($pegar_record->rowCount() == 0){

$inserir_anonymo = DB::conn()->prepare("INSERT INTO record_rodada (user_id, user_gols) VALUES ('1','0')");

$inserir_anonymo->execute();

}else{

$rs = $pegar_record->fetchObject();

$pegar_id_record = $rs->user_id;

$pegar_gols_hora = $rs->user_gols;	

}

?>

<?php

$pegar_dados_do_userrecord = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$pegar_id_record."'");

$pegar_dados_do_userrecord->execute();



while($rs = $pegar_dados_do_userrecord->fetch()){

	$timeid1 = $rs['Time'];

?>

<?php

$sql = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '".$timeid1."'");

$sql->execute();

$rs2 = $sql->fetchObject();

$time2 = $rs2->Time;

?>

<?php

	$pegar_cargo = DB::conn()->prepare("SELECT Cargo,Representante FROM usuarios WHERE Usuario = ?");

	$pegar_cargo->execute(array($rs['Usuario']));

	

	$pesquisar_cargo = $pegar_cargo->fetch();

	$Cargo = $pesquisar_cargo['Cargo'];

	$rh4 = $pesquisar_cargo['Representante'];

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

<tr class='pQrow' onClick="document.location='?pr=perfil&amp;nome=<?php echo urlencode($rs["Usuario"]); ?>'">

<td width=15 style="font-family: Tahoma, sans-serif;font-size: 11px;color: #6f6f6f;" align='center'><b>1</b></td><td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){ ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){ ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td width=21><a href="?pr=time&amp;time=<?php echo utf8_encode($time2); ?>"><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' width=93><?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php

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

     <?php }else{} ?><?php if($rh4 == 1 && $Cargo > 0){ ?><img src='img/c5.png' border=0 style="margin-left:-4px;"><?php }elseif($rh4 == 1 && $Cargo == 0){ ?><img src='img/c5.png' border=0 style=""><?php } ?></td><td style="font-family: Helvetica, sans-serif;font-size: 11px;color: #6f6f6f;"><?php echo $pegar_gols_hora; ?></td></tr>

<?php } ?>

<tr><td height='1' colspan='9' style='padding-left:60'><img src='img/layout/menu/line.png' border=0></td></tr></table></div></div></td></tr>

	<tr><td><div style="position:relative;top:0;width:192;left:6;height:15px;"><img src='img/layout/menu/botL.png' border=0></div></td></tr>

	</table></td></tr></table>

</td></tr>

</table></div></div></td></tr>

<table cellpadding='0' cellspacing='0' border=0 height=20>

	<tr><td><div style="position:relative;top:0;left:0;width:623;height:57;"><div style="width:623;height:57;background-image:url('img/layout/menu/topH.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:623;top:10;color:#515151;font-family:litoh;font-size:1em;">Destaques</div><div style="position:absolute;text-align:center;width:623;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Destaques</div></div></div></td></tr>

	<tr><td><div style="position:relative;top:0;left:0;width:623;min-height:200px; height:auto !important;  height:300px;background-image:url('img/layout/menu/midH.png');padding-top:8;">

<div style='position:relative;top:0;left:0;width:623;'>

<?php

$configuracoes = DB::conn()->prepare("SELECT * FROM configuracoes");

$configuracoes->execute();



$conf = $configuracoes->fetchObject();



$TemporadaAgora = $conf->Campeonato;

$RodadaAgora = $conf->Rodada;



$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = '$RodadaAgora' ORDER BY placar1 DESC, placar2 DESC LIMIT 3");

$sql->execute();

if($sql->rowCount() == 0){

	

}else{

while($rs = $sql->fetch()){

	$time1 = $rs['time1'];

	$time2 = $rs['time2'];

	$placar1 = $rs['placar1'];

	$placar2 = $rs['placar2'];	

?>

<?php

$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time1'");

$pegar_nome_t->execute();

while($rs1 = $pegar_nome_t->fetch()){

$time_n1 = $rs1['Time'];

}

?>

<?php

$pegar_nome_t2 = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time2'");

$pegar_nome_t2->execute();

while($rs2 = $pegar_nome_t2->fetch()){

$time_n2 = $rs2['Time'];

}

?>

<center>

<div style="position:relative;width:460;height:89;background-image:url('img/placar/fundoplacar.png');">

<div style="position:absolute;width:42;height:66;left:208;top:17;background-image:url('img/placar/xizin.png');"></div>

<a href="index.php?pr=time&amp;time=<?php echo utf8_encode($time_n1); ?>"><div style="position:absolute;width:66;height:70;left:18;top:10;">

<img width="73" height="73" src="img/gr/Times_g/<?php echo $time1 ?>.png" />

</div></a>

<a href="index.php?pr=time&amp;time=<?php echo utf8_encode($time_n2); ?>"><div style="position:absolute;width:66;height:70;left:375;top:10;">

<img width="73" height="73" src="img/gr/Times_g/<?php echo $time2 ?>.png" />

</div></a>

<div style="position:absolute;left:91;top:74;color:#FFFFFF;font-family:visitor;font-size:0.8em;"><?php echo utf8_encode($time_n1); ?></div>

<div style="position:absolute;left:251;top:74;width:120;color:#FFFFFF;font-family:visitor;font-size:0.8em;text-align:right;"><?php echo utf8_encode($time_n2); ?></div>

<div style="position:absolute;left:85;top:20;color:#FFFFFF;font-family:Arial;font-weight:bold;font-size:1.6em;text-align:right;width:120;"><?php echo $placar1 ?></div>

<div style="position:absolute;left:250;top:20;color:#FFFFFF;font-family:Arial;font-weight:bold;font-size:1.6em;"><?php echo $placar2 ?></div>

</div>

</center>

<?php }} ?>  

</div></div></td></tr>