</table></div></td><td valign='top' align='center'><table cellpadding='0' cellspacing='0' border=0 height=20>
	<tr><td><div style="position:relative;top:0;left:0;width:623;height:57;"><div style="width:623;height:57;background-image:url('img/layout/menu/topH.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:623;top:10;color:#515151;font-family:litoh;font-size:1em;">Divisão de Jogadores</div><div style="position:absolute;text-align:center;width:623;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Divisão de Jogadores</div></div></div></td></tr>
	<tr><td><div style="position:relative;top:0;left:0;width:623;min-height:300px; height:auto !important;  height:300px;background-image:url('img/layout/menu/midH.png');padding-top:8;">
<div style='position:relative;top:0;left:0;width:607;margin-left:9;'>
<style type="text/css">
.divisao{
	display:none;
}
#menu li{
	text-decoration:none;
	list-style:none;
}
</style>
<?php
if(isset($_SESSION['ID'])){
$sql = DB::conn()->prepare("SELECT divisao FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
$sql->execute();
$rs = $sql->fetch();
$divisao =  $rs['divisao'];	
}
?>
<script type="text/javascript">
$(function(){
	$("<?php if(!isset($_SESSION['ID'])){ ?>.divisao<?php }else{ ?>#div<?php echo $divisao; ?><?php } ?>:first").show();
	$("#menu a").click(function(){	
	$(".divisao").hide();	
	var div = $(this).attr('href');
	$(div).show();
	return false;
	})
		
})
</script>
<div id="menu">
<li><a href="#div1"><div style='position:absolute; margin-left:158px; margin-top:-5px;'><img src='img/alf/1.png' /></div></a></li>
<li><a href="#div2"><div style="position:absolute; margin-left:186px; margin-top:-5px;"><img src="img/alf/2.png" /></div></a></li>
<li><a href="#div3"><div style="position:absolute; margin-left:214px; margin-top:-5px;"><img src="img/alf/3.png" /></div></a></li>
<li><a href="#div4"><div style="position:absolute; margin-left:242px; margin-top:-5px;"><img src="img/alf/4.png" /></div></a></li>
<li><a href="#div5"><div id="" style=" position:absolute; margin-left:270px; margin-top:-5px;"><img src="img/alf/5.png" /></div></a></li>
<li><a href="#div6"><div id="" style="position:absolute;  margin-top:-5px; margin-left:298px;"><img src="img/alf/6.png" /></div></a></li>
<li><a href="#div7"><div id="" style="position:absolute;  margin-top:-5px; margin-left:326px;"><img src="img/alf/7.png" /></div></a></li>
<li><a href="#div8"><div style="position:absolute; margin-left:354px; margin-top:-5px;"><img src="img/alf/8.png" /></div></a></li>
<li><a href="#div9"><div style="position:absolute; margin-left:382px; margin-top:-5px;"><img src="img/alf/9.png" /></div></a></li>
<li><a href="#div10"><div style="position:absolute; margin-left:410px; margin-top:-5px;"><img src="img/alf/10.png" /></div></a></li>
</div>
<div id="div1" class="divisao">
<br /><br/>
<center>
<table border='0' cellpadding='0' cellspacing='0' class='verd' width=470 align='center'>
	

    
	<tr><td width=1 valign='top'><table width=233 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='helvTab'>

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
   
   
   $sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE divisao = 1 ORDER BY Gols_Rodada DESC");
   $sql->execute();
   $num = 1;
   while($rs = $sql->fetch()){
	   $Cargo = $rs['Cargo'];
	   $dv = $rs['divisao'];
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
    <tr bgcolor='<?php if(isset($_SESSION['Usuario'])){if($rs['Usuario'] == $_SESSION['Usuario']){echo '#BBFFBB';}else{echo '#FCFCFC';} }else{echo '#FCFCFC';} ?>' onClick="document.location='?pr=perfil&amp;nome=Lionel_Messi'">
	<td width=20 align='center' bgcolor='#CCCCCC'><?php echo $num++; ?></td><td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td  width=25><a href='?pr=time&amp;time=<?php echo utf8_encode($nome_time_hora); ?>'><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' >&nbsp;<?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
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
     <?php }else{} ?></td><td><?php echo $rs['Gols_Rodada']; ?></td></tr><tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr>
<?php  }?>  
    
<?php
if(isset($_SESSION['Usuario'])){
$sql = DB::conn()->prepare("SELECT divisao,Gols_Rodada FROM usuarios WHERE Usuario = '".$_SESSION['Usuario']."'");
$sql->execute();
$q = $sql->fetchObject();
$divisao = $q->divisao;	

$gols_rodada = $q->Gols_Rodada;
}
?> 
<?php

$sql = DB::conn()->prepare("SELECT count(*) as divisao FROM usuarios WHERE divisao = 1");
$sql->execute();
$q = $sql->fetchObject();
$dvr = $q->divisao;	

?> 
<?php
$meta = 730;
$sql = DB::conn()->prepare("SELECT count(*) as ID FROM usuarios WHERE divisao = 1 AND Gols_Rodada > '$meta'");
$sql->execute();
$q = $sql->fetchObject();
$ids = $q->ID;	
?>
<?php
$sql = DB::conn()->prepare("SELECT count(*) as ID FROM usuarios WHERE divisao = 1 AND Gols_Rodada < '$meta'");
$sql->execute();
$q = $sql->fetchObject();
$idss = $q->ID;	
?>  

    <tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr></table></td><td valign='top'><table border="0" cellpadding="0" height=40 cellspacing="2" class="sofT2">
	<tr>
		<td height=20><img src="img/seta_verde.png" height="20" width="20" border=0></td><td bgcolor='#e4e4e4' width=70 style="padding-left: 5;" ><b><?php echo $ids; ?></b></td>
		<td><img src="img/seta_red.png" height="20" width="20" border=0></td><td bgcolor='#e4e4e4' width=70 style="padding-left: 5;" ><b>20%</b></td>
	</tr>
	<tr>
		<td><img src="img/users.png" border=0></td><td bgcolor='#e4e4e4' height=20 style="padding-left: 5;"><?php echo $dvr; ?></td>
		<td align="center"><b>20%</b></td><td bgcolor='#e4e4e4'style="padding-left: 5;"><?php echo $idss; ?></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=40>
         <?php
		if(isset($_SESSION['Usuario'])){
		if($divisao == 1){
			echo 'Você é dessa divisão';
			}else{
			echo 'Você não é dessa divisão';	
			}	
		}else{
		echo 'Entre no jogo para saber qual é sua divisao.';	
		}
		?>
        </td>
	</tr>
	<tr>
		<td colspan=4 align=center height=20 bgcolor=""><div style="width:auto; color:#FFF; line-height:18px; height:20px; background:<?php if(isset($_SESSION['Usuario']) && $divisao == 1){if($gols_rodada < $meta){ echo '#900;';}elseif($gols_rodada == $meta){echo '#C60;';}else{echo '#0C0;';} }else{echo '#AAAAAA';} ?>">
        <?php
		if(isset($_SESSION['Usuario'])&& $divisao == 1){
		if($gols_rodada < $meta){
		echo 'Você está caindo.';	
		}elseif($gols_rodada == $meta){
			echo 'Você está permanecendo.';
			}else{
			echo 'Você está subindo';	
			}
		}else{
			echo 'Você não é dessa divisao.';
			}
		?>
        </div></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=70 align="center"><table width=223 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='sofT'>
<tr><td colspan=9 bgcolor='#DADADA' align=center height=15>Ultimo campeão</td></tr><tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr>
<?php
$sql = DB::conn()->prepare("SELECT * FROM ultimo_campeao_div1");
$sql->execute();
if($sql->rowCount() == 0){
echo '';	
}else{
$rs = $sql->fetch();
$id_capeaodv_1 = $rs['user_id'];
?>

<?php
$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '$id_capeaodv_1'");
$sql->execute();
$rs = $sql->fetch();
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
<?php
$pegarnometime = DB::conn()->prepare("SELECT Time FROM times WHERE ID = ?");
$pegarnometime->execute(array($rs['Time']));

$pegar_bd = $pegarnometime->fetch();
$nome_time_hora = $pegar_bd['Time'];
?>  
<tr bgcolor='' onMouseOver="mOvr(this)" onMouseOut="mOut(this,'')" onClick="document.location='?pr=perfil&amp;nome=[BFR]Leo'">
	<td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td  width=25><a href='?pr=time&amp;time=<?php echo utf8_encode($nome_time_hora); ?>'><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' >&nbsp;<?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
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
     <?php }else{}} ?></td></tr></table></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=70 align="center">Sobe 200<br>Cai 0<br>Limite Infinito</td>
	</tr>
</table></td></tr>
</table>
</center>
</div>
<div id="div2" class="divisao">
<br /><br/>
<center>
<table border='0' cellpadding='0' cellspacing='0' class='verd' width=470 align='center'>
	

    
	<tr><td width=1 valign='top'><table width=233 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='helvTab'>

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
   
   
   $sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE divisao = 2 ORDER BY Gols_Rodada DESC");
   $sql->execute();
   $num = 1;
   while($rs = $sql->fetch()){
	   $Cargo = $rs['Cargo'];
	   $dv = $rs['divisao'];
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
    <tr bgcolor='<?php if(isset($_SESSION['Usuario'])){if($rs['Usuario'] == $_SESSION['Usuario']){echo '#BBFFBB';}else{echo '#FCFCFC';} }else{echo '#FCFCFC';} ?>' onClick="document.location='?pr=perfil&amp;nome=Lionel_Messi'">
	<td width=20 align='center' bgcolor='#CCCCCC'><?php echo $num++; ?></td><td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td  width=25><a href='?pr=time&amp;time=<?php echo utf8_encode($nome_time_hora); ?>'><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' >&nbsp;<?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
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
     <?php }else{} ?></td><td><?php echo $rs['Gols_Rodada']; ?></td></tr><tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr>
<?php  }?>  
    
<?php
if(isset($_SESSION['Usuario'])){
$sql = DB::conn()->prepare("SELECT divisao,Gols_Rodada FROM usuarios WHERE Usuario = '".$_SESSION['Usuario']."'");
$sql->execute();
$q = $sql->fetchObject();
$divisao = $q->divisao;	

$gols_rodada = $q->Gols_Rodada;
$meta = 650;
}
?> 
<?php

$sql = DB::conn()->prepare("SELECT count(*) as divisao FROM usuarios WHERE divisao = 2");
$sql->execute();
$q = $sql->fetchObject();
$dvr = $q->divisao;	

?> 
<?php
$sql = DB::conn()->prepare("SELECT count(*) as ID FROM usuarios WHERE divisao = 2 AND Gols_Rodada > '$meta'");
$sql->execute();
$q = $sql->fetchObject();
$ids = $q->ID;	
?>
<?php
$sql = DB::conn()->prepare("SELECT count(*) as ID FROM usuarios WHERE divisao = 2 AND Gols_Rodada < '$meta'");
$sql->execute();
$q = $sql->fetchObject();
$idss = $q->ID;	
?>  

    <tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr></table></td><td valign='top'><table border="0" cellpadding="0" height=40 cellspacing="2" class="sofT2">
	<tr>
		<td height=20><img src="img/seta_verde.png" height="20" width="20" border=0></td><td bgcolor='#e4e4e4' width=70 style="padding-left: 5;" ><b><?php echo $ids; ?></b></td>
		<td><img src="img/seta_red.png" height="20" width="20" border=0></td><td bgcolor='#e4e4e4' width=70 style="padding-left: 5;" ><b>20%</b></td>
	</tr>
	<tr>
		<td><img src="img/users.png" border=0></td><td bgcolor='#e4e4e4' height=20 style="padding-left: 5;"><?php echo $dvr; ?></td>
		<td align="center"><b>20%</b></td><td bgcolor='#e4e4e4'style="padding-left: 5;"><?php echo $idss; ?></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=40>
         <?php
		if(isset($_SESSION['Usuario'])){
		if($divisao == 2){
			echo 'Você é dessa divisão';
			}else{
			echo 'Você não é dessa divisão';	
			}	
		}else{
		echo 'Entre no jogo para saber qual é sua divisao.';	
		}
		?>
        </td>
	</tr>
	<tr>
		<td colspan=4 align=center height=20 bgcolor=""><div style="width:auto; color:#FFF; line-height:18px; height:20px; background:<?php if(isset($_SESSION['Usuario']) && $divisao == 2){if($gols_rodada < $meta){ echo '#900;';}elseif($gols_rodada == $meta){echo '#C60;';}else{echo '#0C0;';} }else{echo '#AAAAAA';} ?>">
        <?php
		if(isset($_SESSION['Usuario']) && $divisao == 2){
		if($gols_rodada < $meta){
		echo 'Você está caindo.';	
		}elseif($gols_rodada == $meta){
			echo 'Você está permanecendo.';
			}else{
			echo 'Você está subindo';	
			}
		}else{
			echo 'Você não é dessa divisao.';
			}
		?>
        </div></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=70 align="center"><table width=223 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='sofT'>
<tr><td colspan=9 bgcolor='#DADADA' align=center height=15>Ultimo campeão</td></tr><tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr>
<?php
$sql = DB::conn()->prepare("SELECT * FROM ultimo_campeao_div2");
$sql->execute();
if($sql->rowCount() == 0){
echo '';	
}else{
$rs = $sql->fetch();
$id_capeaodv_1 = $rs['user_id'];
?>

<?php
$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '$id_capeaodv_1'");
$sql->execute();
$rs = $sql->fetch();
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
<?php
$pegarnometime = DB::conn()->prepare("SELECT Time FROM times WHERE ID = ?");
$pegarnometime->execute(array($rs['Time']));

$pegar_bd = $pegarnometime->fetch();
$nome_time_hora = $pegar_bd['Time'];
?>  
<tr bgcolor='' onMouseOver="mOvr(this)" onMouseOut="mOut(this,'')" onClick="document.location='?pr=perfil&amp;nome=[BFR]Leo'">
	<td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td  width=25><a href='?pr=time&amp;time=<?php echo utf8_encode($nome_time_hora); ?>'><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' >&nbsp;<?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
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
     <?php }else{} }?></td></tr></table></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=70 align="center">Sobe 200<br>Cai 0<br>Limite Infinito</td>
	</tr>
</table></td></tr>
</table>
</center>
</div>
<div id="div3" class="divisao">
<br /><br/>
<center>
<table border='0' cellpadding='0' cellspacing='0' class='verd' width=470 align='center'>
	

    
	<tr><td width=1 valign='top'><table width=233 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='helvTab'>

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
   
   
   $sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE divisao = 3 ORDER BY Gols_Rodada DESC");
   $sql->execute();
   $num = 1;
   while($rs = $sql->fetch()){
	   $Cargo = $rs['Cargo'];
	   $dv = $rs['divisao'];
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
    <tr bgcolor='<?php if(isset($_SESSION['Usuario'])){if($rs['Usuario'] == $_SESSION['Usuario']){echo '#BBFFBB';}else{echo '#FCFCFC';} }else{echo '#FCFCFC';} ?>' onClick="document.location='?pr=perfil&amp;nome=Lionel_Messi'">
	<td width=20 align='center' bgcolor='#CCCCCC'><?php echo $num++; ?></td><td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td  width=25><a href='?pr=time&amp;time=<?php echo utf8_encode($nome_time_hora); ?>'><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' >&nbsp;<?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
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
     <?php }else{} ?></td><td><?php echo $rs['Gols_Rodada']; ?></td></tr><tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr>
<?php  }?>  
    
<?php
if(isset($_SESSION['Usuario'])){
$sql = DB::conn()->prepare("SELECT divisao,Gols_Rodada FROM usuarios WHERE Usuario = '".$_SESSION['Usuario']."'");
$sql->execute();
$q = $sql->fetchObject();
$divisao = $q->divisao;	

$gols_rodada = $q->Gols_Rodada;
$meta = 500;
}
?> 
<?php

$sql = DB::conn()->prepare("SELECT count(*) as divisao FROM usuarios WHERE divisao = 3");
$sql->execute();
$q = $sql->fetchObject();
$dvr = $q->divisao;	

?> 
<?php
$sql = DB::conn()->prepare("SELECT count(*) as ID FROM usuarios WHERE divisao = 3 AND Gols_Rodada > '$meta'");
$sql->execute();
$q = $sql->fetchObject();
$ids = $q->ID;	
?>
<?php
$sql = DB::conn()->prepare("SELECT count(*) as ID FROM usuarios WHERE divisao = 3 AND Gols_Rodada < '$meta'");
$sql->execute();
$q = $sql->fetchObject();
$idss = $q->ID;	
?>  

    <tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr></table></td><td valign='top'><table border="0" cellpadding="0" height=40 cellspacing="2" class="sofT2">
	<tr>
		<td height=20><img src="img/seta_verde.png" height="20" width="20" border=0></td><td bgcolor='#e4e4e4' width=70 style="padding-left: 5;" ><b><?php echo $ids; ?></b></td>
		<td><img src="img/seta_red.png" height="20" width="20" border=0></td><td bgcolor='#e4e4e4' width=70 style="padding-left: 5;" ><b>20%</b></td>
	</tr>
	<tr>
		<td><img src="img/users.png" border=0></td><td bgcolor='#e4e4e4' height=20 style="padding-left: 5;"><?php echo $dvr; ?></td>
		<td align="center"><b>20%</b></td><td bgcolor='#e4e4e4'style="padding-left: 5;"><?php echo $idss; ?></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=40>
         <?php
		if(isset($_SESSION['Usuario'])){
		if($divisao == 3){
			echo 'Você é dessa divisão';
			}else{
			echo 'Você não é dessa divisão';	
			}	
		}else{
		echo 'Entre no jogo para saber qual é sua divisao.';	
		}
		?>
        </td>
	</tr>
	<tr>
		<td colspan=4 align=center height=20 bgcolor=""><div style="width:auto; color:#FFF; line-height:18px; height:20px; background:<?php if(isset($_SESSION['Usuario']) && $divisao == 3){if($gols_rodada < $meta){ echo '#900;';}elseif($gols_rodada == $meta){echo '#C60;';}else{echo '#0C0;';} }else{echo '#AAAAAA';} ?>">
        <?php
		if(isset($_SESSION['Usuario']) && $divisao == 3){
		if($gols_rodada < $meta){
		echo 'Você está caindo.';	
		}elseif($gols_rodada == $meta){
			echo 'Você está permanecendo.';
			}else{
			echo 'Você está subindo';	
			}
		}else{
			echo 'Você não é dessa divisao.';
			}
		?>
        </div></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=70 align="center"><table width=223 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='sofT'>
<tr><td colspan=9 bgcolor='#DADADA' align=center height=15>Ultimo campeão</td></tr><tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr>
<?php
$sql = DB::conn()->prepare("SELECT * FROM ultimo_campeao_div3");
$sql->execute();
if($sql->rowCount() == 0){
echo '';	
}else{
$rs = $sql->fetch();
$id_capeaodv_1 = $rs['user_id'];

?>

<?php
$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '$id_capeaodv_1'");
$sql->execute();
$rs = $sql->fetch();
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
<?php
$pegarnometime = DB::conn()->prepare("SELECT Time FROM times WHERE ID = ?");
$pegarnometime->execute(array($rs['Time']));

$pegar_bd = $pegarnometime->fetch();
$nome_time_hora = $pegar_bd['Time'];
?>  
<tr bgcolor='' onMouseOver="mOvr(this)" onMouseOut="mOut(this,'')" onClick="document.location='?pr=perfil&amp;nome=[BFR]Leo'">
	<td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td  width=25><a href='?pr=time&amp;time=<?php echo utf8_encode($nome_time_hora); ?>'><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' >&nbsp;<?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
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
     <?php }else{} }?></td></tr></table></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=70 align="center">Sobe 200<br>Cai 0<br>Limite Infinito</td>
	</tr>
</table></td></tr>
</table>
</center>
</div>
<div id="div4" class="divisao">
<br /><br/>
<center>
<table border='0' cellpadding='0' cellspacing='0' class='verd' width=470 align='center'>
	

    
	<tr><td width=1 valign='top'><table width=233 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='helvTab'>

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
   
   
   $sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE divisao = 4 ORDER BY Gols_Rodada DESC");
   $sql->execute();
   $num = 1;
   while($rs = $sql->fetch()){
	   $Cargo = $rs['Cargo'];
	   $dv = $rs['divisao'];
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
    <tr bgcolor='<?php if(isset($_SESSION['Usuario'])){if($rs['Usuario'] == $_SESSION['Usuario']){echo '#BBFFBB';}else{echo '#FCFCFC';} }else{echo '#FCFCFC';} ?>' onClick="document.location='?pr=perfil&amp;nome=Lionel_Messi'">
	<td width=20 align='center' bgcolor='#CCCCCC'><?php echo $num++; ?></td><td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td  width=25><a href='?pr=time&amp;time=<?php echo utf8_encode($nome_time_hora); ?>'><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' >&nbsp;<?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
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
     <?php }else{} ?></td><td><?php echo $rs['Gols_Rodada']; ?></td></tr><tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr>
<?php  }?>  
    
<?php
if(isset($_SESSION['Usuario'])){
$sql = DB::conn()->prepare("SELECT divisao,Gols_Rodada FROM usuarios WHERE Usuario = '".$_SESSION['Usuario']."'");
$sql->execute();
$q = $sql->fetchObject();
$divisao = $q->divisao;	

$gols_rodada = $q->Gols_Rodada;
$meta = 450;
}
?> 
<?php

$sql = DB::conn()->prepare("SELECT count(*) as divisao FROM usuarios WHERE divisao = 4");
$sql->execute();
$q = $sql->fetchObject();
$dvr = $q->divisao;	

?> 
<?php
$sql = DB::conn()->prepare("SELECT count(*) as ID FROM usuarios WHERE divisao = 4 AND Gols_Rodada > '$meta'");
$sql->execute();
$q = $sql->fetchObject();
$ids = $q->ID;	
?>
<?php
$sql = DB::conn()->prepare("SELECT count(*) as ID FROM usuarios WHERE divisao = 4 AND Gols_Rodada < '$meta'");
$sql->execute();
$q = $sql->fetchObject();
$idss = $q->ID;	
?>  

    <tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr></table></td><td valign='top'><table border="0" cellpadding="0" height=40 cellspacing="2" class="sofT2">
	<tr>
		<td height=20><img src="img/seta_verde.png" height="20" width="20" border=0></td><td bgcolor='#e4e4e4' width=70 style="padding-left: 5;" ><b><?php echo $ids; ?></b></td>
		<td><img src="img/seta_red.png" height="20" width="20" border=0></td><td bgcolor='#e4e4e4' width=70 style="padding-left: 5;" ><b>20%</b></td>
	</tr>
	<tr>
		<td><img src="img/users.png" border=0></td><td bgcolor='#e4e4e4' height=20 style="padding-left: 5;"><?php echo $dvr; ?></td>
		<td align="center"><b>20%</b></td><td bgcolor='#e4e4e4'style="padding-left: 5;"><?php echo $idss; ?></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=40>
         <?php
		if(isset($_SESSION['Usuario'])){
		if($divisao == 4){
			echo 'Você é dessa divisão';
			}else{
			echo 'Você não é dessa divisão';	
			}	
		}else{
		echo 'Entre no jogo para saber qual é sua divisao.';	
		}
		?>
        </td>
	</tr>
	<tr>
		<td colspan=4 align=center height=20 bgcolor=""><div style="width:auto; color:#FFF; line-height:18px; height:20px; background:<?php if(isset($_SESSION['Usuario']) && $divisao == 4){if($gols_rodada < $meta){ echo '#900;';}elseif($gols_rodada == $meta){echo '#C60;';}else{echo '#0C0;';} }else{echo '#AAAAAA';} ?>">
        <?php
		if(isset($_SESSION['Usuario']) && $divisao == 4){
		if($gols_rodada < $meta){
		echo 'Você está caindo.';	
		}elseif($gols_rodada == $meta){
			echo 'Você está permanecendo.';
			}else{
			echo 'Você está subindo';	
			}
		}else{
			echo 'Você não é dessa divisao.';
			}
		?>
        </div></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=70 align="center"><table width=223 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='sofT'>
<tr><td colspan=9 bgcolor='#DADADA' align=center height=15>Ultimo campeão</td></tr><tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr>
<?php
$sql = DB::conn()->prepare("SELECT * FROM ultimo_campeao_div4");
$sql->execute();
if($sql->rowCount() == 0){
echo '';	
}else{
$rs = $sql->fetch();
$id_capeaodv_1 = $rs['user_id'];

?>

<?php
$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '$id_capeaodv_1'");
$sql->execute();
$rs = $sql->fetch();
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
<?php
$pegarnometime = DB::conn()->prepare("SELECT Time FROM times WHERE ID = ?");
$pegarnometime->execute(array($rs['Time']));

$pegar_bd = $pegarnometime->fetch();
$nome_time_hora = $pegar_bd['Time'];
?>  
<tr bgcolor='' onMouseOver="mOvr(this)" onMouseOut="mOut(this,'')" onClick="document.location='?pr=perfil&amp;nome=[BFR]Leo'">
	<td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td  width=25><a href='?pr=time&amp;time=<?php echo utf8_encode($nome_time_hora); ?>'><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' >&nbsp;<?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
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
     <?php }else{} }?></td></tr></table></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=70 align="center">Sobe 200<br>Cai 0<br>Limite Infinito</td>
	</tr>
</table></td></tr>
</table>
</center>
</div>
<div id="div5" class="divisao">
<br /><br/>
<center>
<table border='0' cellpadding='0' cellspacing='0' class='verd' width=470 align='center'>
	

    
	<tr><td width=1 valign='top'><table width=233 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='helvTab'>

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
   
   
   $sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE divisao = 5 ORDER BY Gols_Rodada DESC");
   $sql->execute();
   $num = 1;
   while($rs = $sql->fetch()){
	   $Cargo = $rs['Cargo'];
	   $dv = $rs['divisao'];
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
    <tr bgcolor='<?php if(isset($_SESSION['Usuario'])){if($rs['Usuario'] == $_SESSION['Usuario']){echo '#BBFFBB';}else{echo '#FCFCFC';} }else{echo '#FCFCFC';} ?>' onClick="document.location='?pr=perfil&amp;nome=Lionel_Messi'">
	<td width=20 align='center' bgcolor='#CCCCCC'><?php echo $num++; ?></td><td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td  width=25><a href='?pr=time&amp;time=<?php echo utf8_encode($nome_time_hora); ?>'><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' >&nbsp;<?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
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
     <?php }else{} ?></td><td><?php echo $rs['Gols_Rodada']; ?></td></tr><tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr>
<?php  }?>  
    
<?php
if(isset($_SESSION['Usuario'])){
$sql = DB::conn()->prepare("SELECT divisao,Gols_Rodada FROM usuarios WHERE Usuario = '".$_SESSION['Usuario']."'");
$sql->execute();
$q = $sql->fetchObject();
$divisao = $q->divisao;	

$gols_rodada = $q->Gols_Rodada;
$meta = 400;
}
?> 
<?php

$sql = DB::conn()->prepare("SELECT count(*) as divisao FROM usuarios WHERE divisao = 5");
$sql->execute();
$q = $sql->fetchObject();
$dvr = $q->divisao;	

?> 
<?php
$sql = DB::conn()->prepare("SELECT count(*) as ID FROM usuarios WHERE divisao = 5 AND Gols_Rodada > '$meta'");
$sql->execute();
$q = $sql->fetchObject();
$ids = $q->ID;	
?>
<?php
$sql = DB::conn()->prepare("SELECT count(*) as ID FROM usuarios WHERE divisao = 5 AND Gols_Rodada < '$meta'");
$sql->execute();
$q = $sql->fetchObject();
$idss = $q->ID;	
?>  

    <tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr></table></td><td valign='top'><table border="0" cellpadding="0" height=40 cellspacing="2" class="sofT2">
	<tr>
		<td height=20><img src="img/seta_verde.png" height="20" width="20" border=0></td><td bgcolor='#e4e4e4' width=70 style="padding-left: 5;" ><b><?php echo $ids; ?></b></td>
		<td><img src="img/seta_red.png" height="20" width="20" border=0></td><td bgcolor='#e4e4e4' width=70 style="padding-left: 5;" ><b>20%</b></td>
	</tr>
	<tr>
		<td><img src="img/users.png" border=0></td><td bgcolor='#e4e4e4' height=20 style="padding-left: 5;"><?php echo $dvr; ?></td>
		<td align="center"><b>20%</b></td><td bgcolor='#e4e4e4'style="padding-left: 5;"><?php echo $idss; ?></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=40>
         <?php
		if(isset($_SESSION['Usuario'])){
		if($divisao == 5){
			echo 'Você é dessa divisão';
			}else{
			echo 'Você não é dessa divisão';	
			}	
		}else{
		echo 'Entre no jogo para saber qual é sua divisao.';	
		}
		?>
        </td>
	</tr>
	<tr>
		<td colspan=4 align=center height=20 bgcolor=""><div style="width:auto; color:#FFF; line-height:18px; height:20px; background:<?php if(isset($_SESSION['Usuario']) && $divisao == 5){if($gols_rodada < $meta){ echo '#900;';}elseif($gols_rodada == $meta){echo '#C60;';}else{echo '#0C0;';} }else{echo '#AAAAAA';} ?>">
        <?php
		if(isset($_SESSION['Usuario']) && $divisao == 5){
		if($gols_rodada < $meta){
		echo 'Você está caindo.';	
		}elseif($gols_rodada == $meta){
			echo 'Você está permanecendo.';
			}else{
			echo 'Você está subindo';	
			}
		}else{
			echo 'Você não é dessa divisao.';
			}
		?>
        </div></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=70 align="center"><table width=223 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='sofT'>
<tr><td colspan=9 bgcolor='#DADADA' align=center height=15>Ultimo campeão</td></tr><tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr>
<?php
$sql = DB::conn()->prepare("SELECT * FROM ultimo_campeao_div5");
$sql->execute();
if($sql->rowCount() == 0){
echo '';	
}else{
$rs = $sql->fetch();
$id_capeaodv_1 = $rs['user_id'];

?>

<?php
$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '$id_capeaodv_1'");
$sql->execute();
$rs = $sql->fetch();
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
<?php
$pegarnometime = DB::conn()->prepare("SELECT Time FROM times WHERE ID = ?");
$pegarnometime->execute(array($rs['Time']));

$pegar_bd = $pegarnometime->fetch();
$nome_time_hora = $pegar_bd['Time'];
?>  
<tr bgcolor='' onMouseOver="mOvr(this)" onMouseOut="mOut(this,'')" onClick="document.location='?pr=perfil&amp;nome=[BFR]Leo'">
	<td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td  width=25><a href='?pr=time&amp;time=<?php echo utf8_encode($nome_time_hora); ?>'><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' >&nbsp;<?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
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
     <?php }else{} }?></td></tr></table></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=70 align="center">Sobe 200<br>Cai 0<br>Limite Infinito</td>
	</tr>
</table></td></tr>
</table>
</center>
</div>
<div id="div6" class="divisao">
<br /><br/>
<center>
<table border='0' cellpadding='0' cellspacing='0' class='verd' width=470 align='center'>
	

    
	<tr><td width=1 valign='top'><table width=233 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='helvTab'>

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
   
   
   $sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE divisao = 6 ORDER BY Gols_Rodada DESC");
   $sql->execute();
   $num = 1;
   while($rs = $sql->fetch()){
	   $Cargo = $rs['Cargo'];
	   $dv = $rs['divisao'];
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
    <tr bgcolor='<?php if(isset($_SESSION['Usuario'])){if($rs['Usuario'] == $_SESSION['Usuario']){echo '#BBFFBB';}else{echo '#FCFCFC';} }else{echo '#FCFCFC';} ?>' onClick="document.location='?pr=perfil&amp;nome=Lionel_Messi'">
	<td width=20 align='center' bgcolor='#CCCCCC'><?php echo $num++; ?></td><td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td  width=25><a href='?pr=time&amp;time=<?php echo utf8_encode($nome_time_hora); ?>'><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' >&nbsp;<?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
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
     <?php }else{} ?></td><td><?php echo $rs['Gols_Rodada']; ?></td></tr><tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr>
<?php  }?>  
    
<?php
if(isset($_SESSION['Usuario'])){
$sql = DB::conn()->prepare("SELECT divisao,Gols_Rodada FROM usuarios WHERE Usuario = '".$_SESSION['Usuario']."'");
$sql->execute();
$q = $sql->fetchObject();
$divisao = $q->divisao;	

$gols_rodada = $q->Gols_Rodada;
$meta = 350;
}
?> 
<?php

$sql = DB::conn()->prepare("SELECT count(*) as divisao FROM usuarios WHERE divisao = 6");
$sql->execute();
$q = $sql->fetchObject();
$dvr = $q->divisao;	

?> 
<?php
$sql = DB::conn()->prepare("SELECT count(*) as ID FROM usuarios WHERE divisao = 6 AND Gols_Rodada > '$meta'");
$sql->execute();
$q = $sql->fetchObject();
$ids = $q->ID;	
?>
<?php
$sql = DB::conn()->prepare("SELECT count(*) as ID FROM usuarios WHERE divisao = 6 AND Gols_Rodada < '$meta'");
$sql->execute();
$q = $sql->fetchObject();
$idss = $q->ID;	
?>  

    <tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr></table></td><td valign='top'><table border="0" cellpadding="0" height=40 cellspacing="2" class="sofT2">
	<tr>
		<td height=20><img src="img/seta_verde.png" height="20" width="20" border=0></td><td bgcolor='#e4e4e4' width=70 style="padding-left: 5;" ><b><?php echo $ids; ?></b></td>
		<td><img src="img/seta_red.png" height="20" width="20" border=0></td><td bgcolor='#e4e4e4' width=70 style="padding-left: 5;" ><b>20%</b></td>
	</tr>
	<tr>
		<td><img src="img/users.png" border=0></td><td bgcolor='#e4e4e4' height=20 style="padding-left: 5;"><?php echo $dvr; ?></td>
		<td align="center"><b>20%</b></td><td bgcolor='#e4e4e4'style="padding-left: 5;"><?php echo $idss; ?></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=40>
         <?php
		if(isset($_SESSION['Usuario'])){
		if($divisao == 6){
			echo 'Você é dessa divisão';
			}else{
			echo 'Você não é dessa divisão';	
			}	
		}else{
		echo 'Entre no jogo para saber qual é sua divisao.';	
		}
		?>
        </td>
	</tr>
	<tr>
		<td colspan=4 align=center height=20 bgcolor=""><div style="width:auto; color:#FFF; line-height:18px; height:20px; background:<?php if(isset($_SESSION['Usuario']) && $divisao == 6){if($gols_rodada < $meta){ echo '#900;';}elseif($gols_rodada == $meta){echo '#C60;';}else{echo '#0C0;';} }else{echo '#AAAAAA';} ?>">
        <?php
		if(isset($_SESSION['Usuario']) && $divisao == 6){
		if($gols_rodada < $meta){
		echo 'Você está caindo.';	
		}elseif($gols_rodada == $meta){
			echo 'Você está permanecendo.';
			}else{
			echo 'Você está subindo';	
			}
		}else{
			echo 'Você não é dessa divisao.';
			}
		?>
        </div></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=70 align="center"><table width=223 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='sofT'>
<tr><td colspan=9 bgcolor='#DADADA' align=center height=15>Ultimo campeão</td></tr><tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr>
<?php
$sql = DB::conn()->prepare("SELECT * FROM ultimo_campeao_div6");
$sql->execute();
if($sql->rowCount() == 0){
echo '';	
}else{
$rs = $sql->fetch();
$id_capeaodv_1 = $rs['user_id'];

?>

<?php
$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '$id_capeaodv_1'");
$sql->execute();
$rs = $sql->fetch();
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
<?php
$pegarnometime = DB::conn()->prepare("SELECT Time FROM times WHERE ID = ?");
$pegarnometime->execute(array($rs['Time']));

$pegar_bd = $pegarnometime->fetch();
$nome_time_hora = $pegar_bd['Time'];
?>  
<tr bgcolor='' onMouseOver="mOvr(this)" onMouseOut="mOut(this,'')" onClick="document.location='?pr=perfil&amp;nome=[BFR]Leo'">
	<td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td  width=25><a href='?pr=time&amp;time=<?php echo utf8_encode($nome_time_hora); ?>'><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' >&nbsp;<?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
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
     <?php }else{} }?></td></tr></table></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=70 align="center">Sobe 200<br>Cai 0<br>Limite Infinito</td>
	</tr>
</table></td></tr>
</table>
</center>
</div>
<div id="div7" class="divisao">
<br /><br/>
<center>
<table border='0' cellpadding='0' cellspacing='0' class='verd' width=470 align='center'>
	

    
	<tr><td width=1 valign='top'><table width=233 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='helvTab'>

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
   
   
   $sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE divisao = 7 ORDER BY Gols_Rodada DESC");
   $sql->execute();
   $num = 1;
   while($rs = $sql->fetch()){
	   $Cargo = $rs['Cargo'];
	   $dv = $rs['divisao'];
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
    <tr bgcolor='<?php if(isset($_SESSION['Usuario'])){if($rs['Usuario'] == $_SESSION['Usuario']){echo '#BBFFBB';}else{echo '#FCFCFC';} }else{echo '#FCFCFC';} ?>' onClick="document.location='?pr=perfil&amp;nome=Lionel_Messi'">
	<td width=20 align='center' bgcolor='#CCCCCC'><?php echo $num++; ?></td><td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td  width=25><a href='?pr=time&amp;time=<?php echo utf8_encode($nome_time_hora); ?>'><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' >&nbsp;<?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
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
     <?php }else{} ?></td><td><?php echo $rs['Gols_Rodada']; ?></td></tr><tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr>
<?php  }?>  
    
<?php
if(isset($_SESSION['Usuario'])){
$sql = DB::conn()->prepare("SELECT divisao,Gols_Rodada FROM usuarios WHERE Usuario = '".$_SESSION['Usuario']."'");
$sql->execute();
$q = $sql->fetchObject();
$divisao = $q->divisao;	

$gols_rodada = $q->Gols_Rodada;
$meta = 290;
}
?> 
<?php

$sql = DB::conn()->prepare("SELECT count(*) as divisao FROM usuarios WHERE divisao = 7");
$sql->execute();
$q = $sql->fetchObject();
$dvr = $q->divisao;	

?> 
<?php
$sql = DB::conn()->prepare("SELECT count(*) as ID FROM usuarios WHERE divisao = 7 AND Gols_Rodada > '$meta'");
$sql->execute();
$q = $sql->fetchObject();
$ids = $q->ID;	
?>
<?php
$sql = DB::conn()->prepare("SELECT count(*) as ID FROM usuarios WHERE divisao = 7 AND Gols_Rodada < '$meta'");
$sql->execute();
$q = $sql->fetchObject();
$idss = $q->ID;	
?>  

    <tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr></table></td><td valign='top'><table border="0" cellpadding="0" height=40 cellspacing="2" class="sofT2">
	<tr>
		<td height=20><img src="img/seta_verde.png" height="20" width="20" border=0></td><td bgcolor='#e4e4e4' width=70 style="padding-left: 5;" ><b><?php echo $ids; ?></b></td>
		<td><img src="img/seta_red.png" height="20" width="20" border=0></td><td bgcolor='#e4e4e4' width=70 style="padding-left: 5;" ><b>20%</b></td>
	</tr>
	<tr>
		<td><img src="img/users.png" border=0></td><td bgcolor='#e4e4e4' height=20 style="padding-left: 5;"><?php echo $dvr; ?></td>
		<td align="center"><b>20%</b></td><td bgcolor='#e4e4e4'style="padding-left: 5;"><?php echo $idss; ?></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=40>
         <?php
		if(isset($_SESSION['Usuario'])){
		if($divisao == 7){
			echo 'Você é dessa divisão';
			}else{
			echo 'Você não é dessa divisão';	
			}	
		}else{
		echo 'Entre no jogo para saber qual é sua divisao.';	
		}
		?>
        </td>
	</tr>
	<tr>
		<td colspan=4 align=center height=20 bgcolor=""><div style="width:auto; color:#FFF; line-height:18px; height:20px; background:<?php if(isset($_SESSION['Usuario']) && $divisao == 7){if($gols_rodada < $meta){ echo '#900;';}elseif($gols_rodada == $meta){echo '#C60;';}else{echo '#0C0;';} }else{echo '#AAAAAA';} ?>">
        <?php
		if(isset($_SESSION['Usuario']) && $divisao == 7){
		if($gols_rodada < $meta){
		echo 'Você está caindo.';	
		}elseif($gols_rodada == $meta){
			echo 'Você está permanecendo.';
			}else{
			echo 'Você está subindo';	
			}
		}else{
			echo 'Você não é dessa divisao.';
			}
		?>
        </div></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=70 align="center"><table width=223 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='sofT'>
<tr><td colspan=9 bgcolor='#DADADA' align=center height=15>Ultimo campeão</td></tr><tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr>
<?php
$sql = DB::conn()->prepare("SELECT * FROM ultimo_campeao_div7");
$sql->execute();
if($sql->rowCount() == 0){
echo '';	
}else{
$rs = $sql->fetch();
$id_capeaodv_1 = $rs['user_id'];

?>

<?php
$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '$id_capeaodv_1'");
$sql->execute();
$rs = $sql->fetch();
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
<?php
$pegarnometime = DB::conn()->prepare("SELECT Time FROM times WHERE ID = ?");
$pegarnometime->execute(array($rs['Time']));

$pegar_bd = $pegarnometime->fetch();
$nome_time_hora = $pegar_bd['Time'];
?>  
<tr bgcolor='' onMouseOver="mOvr(this)" onMouseOut="mOut(this,'')" onClick="document.location='?pr=perfil&amp;nome=[BFR]Leo'">
	<td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td  width=25><a href='?pr=time&amp;time=<?php echo utf8_encode($nome_time_hora); ?>'><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' >&nbsp;<?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
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
     <?php }else{} }?></td></tr></table></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=70 align="center">Sobe 200<br>Cai 0<br>Limite Infinito</td>
	</tr>
</table></td></tr>
</table>
</center>
</div>
<div id="div8" class="divisao">
<br /><br/>
<center>
<table border='0' cellpadding='0' cellspacing='0' class='verd' width=470 align='center'>
	

    
	<tr><td width=1 valign='top'><table width=233 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='helvTab'>

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
   
   
   $sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE divisao = 8 ORDER BY Gols_Rodada DESC");
   $sql->execute();
   $num = 1;
   while($rs = $sql->fetch()){
	   $Cargo = $rs['Cargo'];
	   $dv = $rs['divisao'];
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
    <tr bgcolor='<?php if(isset($_SESSION['Usuario'])){if($rs['Usuario'] == $_SESSION['Usuario']){echo '#BBFFBB';}else{echo '#FCFCFC';} }else{echo '#FCFCFC';} ?>' onClick="document.location='?pr=perfil&amp;nome=Lionel_Messi'">
	<td width=20 align='center' bgcolor='#CCCCCC'><?php echo $num++; ?></td><td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td  width=25><a href='?pr=time&amp;time=<?php echo utf8_encode($nome_time_hora); ?>'><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' >&nbsp;<?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
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
     <?php }else{} ?></td><td><?php echo $rs['Gols_Rodada']; ?></td></tr><tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr>
<?php  }?>  
    
<?php
if(isset($_SESSION['Usuario'])){
$sql = DB::conn()->prepare("SELECT divisao,Gols_Rodada FROM usuarios WHERE Usuario = '".$_SESSION['Usuario']."'");
$sql->execute();
$q = $sql->fetchObject();
$divisao = $q->divisao;	

$gols_rodada = $q->Gols_Rodada;
$meta = 250;
}
?> 
<?php

$sql = DB::conn()->prepare("SELECT count(*) as divisao FROM usuarios WHERE divisao = 8");
$sql->execute();
$q = $sql->fetchObject();
$dvr = $q->divisao;	

?> 
<?php
$sql = DB::conn()->prepare("SELECT count(*) as ID FROM usuarios WHERE divisao = 8 AND Gols_Rodada > '$meta'");
$sql->execute();
$q = $sql->fetchObject();
$ids = $q->ID;	
?>
<?php
$sql = DB::conn()->prepare("SELECT count(*) as ID FROM usuarios WHERE divisao = 8 AND Gols_Rodada < '$meta'");
$sql->execute();
$q = $sql->fetchObject();
$idss = $q->ID;	
?>  

    <tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr></table></td><td valign='top'><table border="0" cellpadding="0" height=40 cellspacing="2" class="sofT2">
	<tr>
		<td height=20><img src="img/seta_verde.png" height="20" width="20" border=0></td><td bgcolor='#e4e4e4' width=70 style="padding-left: 5;" ><b><?php echo $ids; ?></b></td>
		<td><img src="img/seta_red.png" height="20" width="20" border=0></td><td bgcolor='#e4e4e4' width=70 style="padding-left: 5;" ><b>20%</b></td>
	</tr>
	<tr>
		<td><img src="img/users.png" border=0></td><td bgcolor='#e4e4e4' height=20 style="padding-left: 5;"><?php echo $dvr; ?></td>
		<td align="center"><b>20%</b></td><td bgcolor='#e4e4e4'style="padding-left: 5;"><?php echo $idss; ?></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=40>
         <?php
		if(isset($_SESSION['Usuario'])){
		if($divisao == 8){
			echo 'Você é dessa divisão';
			}else{
			echo 'Você não é dessa divisão';	
			}	
		}else{
		echo 'Entre no jogo para saber qual é sua divisao.';	
		}
		?>
        </td>
	</tr>
	<tr>
		<td colspan=4 align=center height=20 bgcolor=""><div style="width:auto; color:#FFF; line-height:18px; height:20px; background:<?php if(isset($_SESSION['Usuario']) && $divisao == 8){if($gols_rodada < $meta){ echo '#900;';}elseif($gols_rodada == $meta){echo '#C60;';}else{echo '#0C0;';} }else{echo '#AAAAAA';} ?>">
        <?php
		if(isset($_SESSION['Usuario']) && $divisao == 8){
		if($gols_rodada < $meta){
		echo 'Você está caindo.';	
		}elseif($gols_rodada == $meta){
			echo 'Você está permanecendo.';
			}else{
			echo 'Você está subindo';	
			}
		}else{
			echo 'Você não é dessa divisao.';
			}
		?>
        </div></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=70 align="center"><table width=223 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='sofT'>
<tr><td colspan=9 bgcolor='#DADADA' align=center height=15>Ultimo campeão</td></tr><tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr>
<?php
$sql = DB::conn()->prepare("SELECT * FROM ultimo_campeao_div8");
$sql->execute();
if($sql->rowCount() == 0){
echo '';	
}else{
$rs = $sql->fetch();
$id_capeaodv_1 = $rs['user_id'];

?>

<?php
$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '$id_capeaodv_1'");
$sql->execute();
$rs = $sql->fetch();
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
<?php
$pegarnometime = DB::conn()->prepare("SELECT Time FROM times WHERE ID = ?");
$pegarnometime->execute(array($rs['Time']));

$pegar_bd = $pegarnometime->fetch();
$nome_time_hora = $pegar_bd['Time'];
?>  
<tr bgcolor='' onMouseOver="mOvr(this)" onMouseOut="mOut(this,'')" onClick="document.location='?pr=perfil&amp;nome=[BFR]Leo'">
	<td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td  width=25><a href='?pr=time&amp;time=<?php echo utf8_encode($nome_time_hora); ?>'><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' >&nbsp;<?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
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
     <?php }else{} }?></td></tr></table></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=70 align="center">Sobe 200<br>Cai 0<br>Limite Infinito</td>
	</tr>
</table></td></tr>
</table>
</center>
</div>
<div id="div9" class="divisao">
<br /><br/>
<center>
<table border='0' cellpadding='0' cellspacing='0' class='verd' width=470 align='center'>
	

    
	<tr><td width=1 valign='top'><table width=233 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='helvTab'>

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
   
   
   $sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE divisao = 9 ORDER BY Gols_Rodada DESC");
   $sql->execute();
   $num = 1;
   while($rs = $sql->fetch()){
	   $Cargo = $rs['Cargo'];
	   $dv = $rs['divisao'];
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
    <tr bgcolor='<?php if(isset($_SESSION['Usuario'])){if($rs['Usuario'] == $_SESSION['Usuario']){echo '#BBFFBB';}else{echo '#FCFCFC';} }else{echo '#FCFCFC';} ?>' onClick="document.location='?pr=perfil&amp;nome=Lionel_Messi'">
	<td width=20 align='center' bgcolor='#CCCCCC'><?php echo $num++; ?></td><td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td  width=25><a href='?pr=time&amp;time=<?php echo utf8_encode($nome_time_hora); ?>'><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' >&nbsp;<?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
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
     <?php }else{} ?></td><td><?php echo $rs['Gols_Rodada']; ?></td></tr><tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr>
<?php  }?>  
    
<?php
if(isset($_SESSION['Usuario'])){
$sql = DB::conn()->prepare("SELECT divisao,Gols_Rodada FROM usuarios WHERE Usuario = '".$_SESSION['Usuario']."'");
$sql->execute();
$q = $sql->fetchObject();
$divisao = $q->divisao;	

$gols_rodada = $q->Gols_Rodada;
$meta = 200;
}
?> 
<?php

$sql = DB::conn()->prepare("SELECT count(*) as divisao FROM usuarios WHERE divisao = 9");
$sql->execute();
$q = $sql->fetchObject();
$dvr = $q->divisao;	

?> 
<?php
$sql = DB::conn()->prepare("SELECT count(*) as ID FROM usuarios WHERE divisao = 9 AND Gols_Rodada > '$meta'");
$sql->execute();
$q = $sql->fetchObject();
$ids = $q->ID;	
?>
<?php
$sql = DB::conn()->prepare("SELECT count(*) as ID FROM usuarios WHERE divisao = 9 AND Gols_Rodada < '$meta'");
$sql->execute();
$q = $sql->fetchObject();
$idss = $q->ID;	
?>  

    <tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr></table></td><td valign='top'><table border="0" cellpadding="0" height=40 cellspacing="2" class="sofT2">
	<tr>
		<td height=20><img src="img/seta_verde.png" height="20" width="20" border=0></td><td bgcolor='#e4e4e4' width=70 style="padding-left: 5;" ><b><?php echo $ids; ?></b></td>
		<td><img src="img/seta_red.png" height="20" width="20" border=0></td><td bgcolor='#e4e4e4' width=70 style="padding-left: 5;" ><b>20%</b></td>
	</tr>
	<tr>
		<td><img src="img/users.png" border=0></td><td bgcolor='#e4e4e4' height=20 style="padding-left: 5;"><?php echo $dvr; ?></td>
		<td align="center"><b>20%</b></td><td bgcolor='#e4e4e4'style="padding-left: 5;"><?php echo $idss; ?></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=40>
         <?php
		if(isset($_SESSION['Usuario'])){
		if($divisao == 9){
			echo 'Você é dessa divisão';
			}else{
			echo 'Você não é dessa divisão';	
			}	
		}else{
		echo 'Entre no jogo para saber qual é sua divisao.';	
		}
		?>
        </td>
	</tr>
	<tr>
		<td colspan=4 align=center height=20 bgcolor=""><div style="width:auto; color:#FFF; line-height:18px; height:20px; background:<?php if(isset($_SESSION['Usuario']) && $divisao == 9){if($gols_rodada < $meta){ echo '#900;';}elseif($gols_rodada == $meta){echo '#C60;';}else{echo '#0C0;';} }else{echo '#AAAAAA';} ?>">
        <?php
		if(isset($_SESSION['Usuario']) && $divisao == 9){
		if($gols_rodada < $meta){
		echo 'Você está caindo.';	
		}elseif($gols_rodada == $meta){
			echo 'Você está permanecendo.';
			}else{
			echo 'Você está subindo';	
			}
		}else{
			echo 'Você não é dessa divisao.';
			}
		?>
        </div></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=70 align="center"><table width=223 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='sofT'>
<tr><td colspan=9 bgcolor='#DADADA' align=center height=15>Ultimo campeão</td></tr><tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr>
<?php
$sql = DB::conn()->prepare("SELECT * FROM ultimo_campeao_div9");
$sql->execute();
if($sql->rowCount() == 0){
echo '';	
}else{
$rs = $sql->fetch();
$id_capeaodv_1 = $rs['user_id'];

?>

<?php
$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '$id_capeaodv_1'");
$sql->execute();
$rs = $sql->fetch();
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
<?php
$pegarnometime = DB::conn()->prepare("SELECT Time FROM times WHERE ID = ?");
$pegarnometime->execute(array($rs['Time']));

$pegar_bd = $pegarnometime->fetch();
$nome_time_hora = $pegar_bd['Time'];
?>  
<tr bgcolor='' onMouseOver="mOvr(this)" onMouseOut="mOut(this,'')" onClick="document.location='?pr=perfil&amp;nome=[BFR]Leo'">
	<td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td  width=25><a href='?pr=time&amp;time=<?php echo utf8_encode($nome_time_hora); ?>'><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' >&nbsp;<?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
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
     <?php }else{} }?></td></tr></table></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=70 align="center">Sobe 200<br>Cai 0<br>Limite Infinito</td>
	</tr>
</table></td></tr>
</table>
</center>
</div>
<div id="div10" class="divisao">
<br /><br/>
<center>
<table border='0' cellpadding='0' cellspacing='0' class='verd' width=470 align='center'>
	

    
	<tr><td width=1 valign='top'><table width=233 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='helvTab'>

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
   
   
   $sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE divisao = 10 ORDER BY Gols_Rodada DESC");
   $sql->execute();
   $num = 1;
   while($rs = $sql->fetch()){
	   $Cargo = $rs['Cargo'];
	   $dv = $rs['divisao'];
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
    <tr bgcolor='<?php if(isset($_SESSION['Usuario'])){if($rs['Usuario'] == $_SESSION['Usuario']){echo '#BBFFBB';}else{echo '#FCFCFC';} }else{echo '#FCFCFC';} ?>' onClick="document.location='?pr=perfil&amp;nome=<?php echo utf8_encode(urlencode($rs['Usuario'])); ?>'">
	<td width=20 align='center' bgcolor='#CCCCCC'><?php echo $num++; ?></td><td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td  width=25><a href='?pr=time&amp;time=<?php echo utf8_encode($nome_time_hora); ?>'><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' >&nbsp;<?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
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
     <?php }else{} ?></td><td><?php echo $rs['Gols_Rodada']; ?></td></tr><tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr>
<?php  }?>  
    
<?php
if(isset($_SESSION['Usuario'])){
$sql = DB::conn()->prepare("SELECT divisao,Gols_Rodada FROM usuarios WHERE Usuario = '".$_SESSION['Usuario']."'");
$sql->execute();
$q = $sql->fetchObject();
$divisao = $q->divisao;	

$gols_rodada = $q->Gols_Rodada;
$meta = 100;
}
?> 
<?php

$sql = DB::conn()->prepare("SELECT count(*) as divisao FROM usuarios WHERE divisao = 10");
$sql->execute();
$q = $sql->fetchObject();
$dvr = $q->divisao;	

?> 
<?php
$sql = DB::conn()->prepare("SELECT count(*) as ID FROM usuarios WHERE divisao = 10 AND Gols_Rodada > '$meta'");
$sql->execute();
$q = $sql->fetchObject();
$ids = $q->ID;	
?>
<?php
$sql = DB::conn()->prepare("SELECT count(*) as ID FROM usuarios WHERE divisao = 10 AND Gols_Rodada < '$meta'");
$sql->execute();
$q = $sql->fetchObject();
$idss = $q->ID;	
?>  

    <tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr></table></td><td valign='top'><table border="0" cellpadding="0" height=40 cellspacing="2" class="sofT2">
	<tr>
		<td height=20><img src="img/seta_verde.png" height="20" width="20" border=0></td><td bgcolor='#e4e4e4' width=70 style="padding-left: 5;" ><b><?php echo $ids; ?></b></td>
		<td><img src="img/seta_red.png" height="20" width="20" border=0></td><td bgcolor='#e4e4e4' width=70 style="padding-left: 5;" ><b>20%</b></td>
	</tr>
	<tr>
		<td><img src="img/users.png" border=0></td><td bgcolor='#e4e4e4' height=20 style="padding-left: 5;"><?php echo $dvr; ?></td>
		<td align="center"><b>20%</b></td><td bgcolor='#e4e4e4'style="padding-left: 5;"><?php echo $idss; ?></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=40>
         <?php
		if(isset($_SESSION['Usuario'])){
		if($divisao == 10){
			echo 'Você é dessa divisão';
			}else{
			echo 'Você não é dessa divisão';	
			}	
		}else{
		echo 'Entre no jogo para saber qual é sua divisao.';	
		}
		?>
        </td>
	</tr>
	<tr>
		<td colspan=4 align=center height=20 bgcolor=""><div style="width:auto; color:#FFF; line-height:18px; height:20px; background:<?php if(isset($_SESSION['Usuario']) && $divisao == 10){if($gols_rodada < $meta){ echo '#900;';}elseif($gols_rodada == $meta){echo '#C60;';}else{echo '#0C0;';} }else{echo '#AAAAAA';} ?>">
        <?php
		if(isset($_SESSION['Usuario']) && $divisao == 10){
		if($gols_rodada < $meta){
		echo 'Você está caindo.';	
		}elseif($gols_rodada == $meta){
			echo 'Você está permanecendo.';
			}else{
			echo 'Você está subindo';	
			}
		}else{
			echo 'Você não é dessa divisao.';
			}

		?>
        </div></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=70 align="center"><table width=223 height='1' border='0' valign='' cellpadding='0' cellspacing='0'  class='sofT'>
<tr><td colspan=9 bgcolor='#DADADA' align=center height=15>Ultimo campeão</td></tr><tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td><tr>
<?php
$sql = DB::conn()->prepare("SELECT * FROM ultimo_campeao_div10");
$sql->execute();
if($sql->rowCount() == 0){
echo '';	
}else{
$rs = $sql->fetch();
$id_capeaodv_1 = $rs['user_id'];

?>

<?php
$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '$id_capeaodv_1'");
$sql->execute();
$rs = $sql->fetch();
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
<?php
$pegarnometime = DB::conn()->prepare("SELECT Time FROM times WHERE ID = ?");
$pegarnometime->execute(array($rs['Time']));

$pegar_bd = $pegarnometime->fetch();
$nome_time_hora = $pegar_bd['Time'];
?>  
<tr bgcolor='' onMouseOver="mOvr(this)" onMouseOut="mOut(this,'')" onClick="document.location='?pr=perfil&amp;nome=[BFR]Leo'">
	<td  width=10><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td  width=25><a href='?pr=time&amp;time=<?php echo utf8_encode($nome_time_hora); ?>'><img src='img/gr/Times_p/<?php echo $rs['Time']; ?>.png' border=0></a></td><td valign='middle' >&nbsp;<?php if($rs['VIP'] > 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($rs['Usuario']); ?></span><?php } ?><?php
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
     <?php }else{} }?></td></tr></table></td>
	</tr>
	<tr>
		<td colspan=4 align=center height=70 align="center">Sobe 200<br>Cai 0<br>Limite Infinito</td>
	</tr>
</table></td></tr>
</table>
</center>
</div>
</div></div></td></tr>
<tr><td><div style="position:relative;top:0;width:623;left:0;height:15px;"><img src='img/layout/menu/botH.png' border=0></div></td></tr>
	</table>
