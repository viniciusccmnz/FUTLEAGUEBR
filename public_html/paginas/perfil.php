<style type="text/css">
.activess{
	outline:none;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	padding:4px 14px;
	font-size:13px;
	font-family:Arial;
	font-weight:normal;
	border:1px solid #3866a3;
	text-decoration:none;
	background:-moz-linear-gradient( center top, #63b8ee 5%, #468ccf 100% );
	background:-ms-linear-gradient( top, #63b8ee 5%, #468ccf 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#63b8ee', endColorstr='#468ccf');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #63b8ee), color-stop(100%, #468ccf) );
	background-color:#63b8ee;
	color:#ededed;
	display:inline-block;
	text-shadow:1px 1px 0px #7cacde;
 	-webkit-box-shadow:inset 1px 1px 0px 0px #bee2f9;
 	-moz-box-shadow:inset 1px 1px 0px 0px #bee2f9;
 	box-shadow:inset 1px 1px 0px 0px #bee2f9;
}.activess:hover {
	background:-moz-linear-gradient( center top, #468ccf 5%, #63b8ee 100% );
	background:-ms-linear-gradient( top, #468ccf 5%, #63b8ee 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#468ccf', endColorstr='#63b8ee');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #468ccf), color-stop(100%, #63b8ee) );
	background-color:#468ccf;
}
#msgu{
	position:absolute;
	top:368px;
	left:180px;
	width:320px;
}
#msgus{
	margin-top:6px;
	margin-left:0;
	display:inline-block;
}
#avatar{
	position:absolute;
	top:20px;
	left:180px;
}
#comvip{
	background:url(img/vip.png);
	width:17px;
	height:7px;
	position:absolute;
	top:337px;
	left:435px;
}
#semvip{
	background:url(img/vip_fixo.png);
	width:41px;
	height:8px;
	position:absolute;
	top:337px;
	left:423px;
}
#representanteu{
	background:url(img/representante.png);
	width:79px;
	height:7px;
	position:absolute;
	top:354px;
	left:404px;
}
.tooltip{
   position:absolute;
   display:none;
   padding: 5px;
   background:#222222;
   color: #FFF;
   -moz-border-radius:5px;
   -webkit-border-radius:5px;
    border-radius:4px;
	font-size:14px;
	letter-spacing:-1px;
	font-family:Verdana;
	text-shadow: rgba(0,0,0,0.3) 0px 1px;
	z-index: 9999999999999999999999;
	opacity: 0.9;
}
</style>
<?php
$nome_user = $_GET['nome'];
?>
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
?>
<?php
//pegar dados
$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE Usuario = ?");
$sql->execute(array($nome_user));
$rs = $sql->fetch();
$mc_nivel = $rs['Nivel'];
$total_gols = $rs['Gols_Total'];
$id_user = $rs['ID'];
$upnivel = $rs['upnivel'];
$tim = $rs['Time'];
$representante = $rs['Representante'];
$vip = $rs['VIP'];
$fixo = $rs['Fixo'];

?>

<?php
$pegar_time = DB::conn()->prepare("SELECT * FROM times WHERE ID = ?");
$pegar_time->execute(array($rs['Time']));
$rss = $pegar_time->fetch();
?>

<?php
	 $verificar_adm = DB::conn()->prepare("SELECT ADM FROM usuarios WHERE ID = '".$rs['ID']."'");
	 $verificar_adm->execute();
	 $fetch = $verificar_adm->fetchObject();
	 $Adm = $fetch->ADM;
?>
<?php
$top_H = DB::conn()->prepare("SELECT Top_Hora FROM usuarios WHERE ID = '".$rs['ID']."'");
$top_H->execute();

$fetch = $top_H->fetchObject();
$Top_hr = $fetch->Top_Hora;
?>
<?php
$top_R = DB::conn()->prepare("SELECT Top_Rodada FROM usuarios WHERE ID = '".$rs['ID']."'");
$top_R->execute();

$fetch = $top_R->fetchObject();
$Top_rd = $fetch->Top_Rodada;
?>
<?php
$top_T = DB::conn()->prepare("SELECT Top_Temporada FROM usuarios WHERE ID = '".$rs['ID']."'");
$top_T->execute();

$fetch = $top_T->fetchObject();
$Top_tm = $fetch->Top_Temporada;
?>
</table></div></td><td valign='top' align='center'><table cellpadding='0' cellspacing='0' border=0 height=20>
	<tr><td><div style="position:relative;top:0;left:0;width:623;height:57;"><div style="width:623;height:57;background-image:url('img/layout/menu/topH.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:623;top:10;color:#515151;font-family:litoh;font-size:1em;"><?php echo utf8_encode($nome_user); ?></div><div style="position:absolute;text-align:center;width:623;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;"><?php echo utf8_encode($nome_user); ?></div></div></div></td></tr>
	<tr><td><div style="position:relative;top:0;left:0;width:623;min-height:510px; height:auto !important;  height:500px;background-image:url('img/layout/menu/midH.png');padding-top:8;">
<div style='position:relative;top:0;left:0;width:607;margin-left:9;'>
<div style="width:603px; height:auto;  margin:0 auto; background:url(img/linha.png); height:400px;">

<div id="uvip" style=" font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:13px; color:#222; position:absolute; left:86px; top:5px;">
<?php
if(isset($_SESSION['Usuario'])){
$sql = DB::conn()->prepare("SELECT * FROM times WHERE Presidente = '".$_SESSION['ID']."'");
$sql->execute();
if($sql->rowCount() == 0){
}else{
$q = $sql->fetchObject();
$presidente = $q->Presidente;
$time_r = $q->ID;

if($time_r == $tim){

$sql = DB::conn()->prepare("SELECT * FROM vips WHERE id_user = '".$id_user."'");
$sql->execute();
if($sql->rowCount() == 0){
}else{
$qr = $sql->fetchObject();
$qtd = $qr->qtd;
echo $qtd." Vip's";	
}
}
}
}
?>
</div>

<div id="meu-time" style="position:absolute; left:74; top:42; width:70px; height:70px; background:url(img/gr/Times_g/<?php echo $rs['Time']; ?>.png); cursor:pointer;" onClick="document.location='?pr=time&amp;time=<?php echo utf8_encode($rss['Time']); ?>'">
<center></center>
</div>
<div id="nome_time" style="width:80px; position:absolute; left:69; top:117; font-family:visitor; font-size:0.8em; color:#000; cursor:pointer;" onClick="document.location='?pr=time&amp;time=<?php echo utf8_encode($rss['Time']); ?>'">
<center><?php echo utf8_encode($rss['Time']); ?></center>
</div>
<div id="nome_div" style="top:146; position:absolute; left:69; width:80px; font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#6F6F6F 1px -1px, #6F6F6F -1px 1px, #6F6F6F 1px 1px, #6F6F6F -1px -1px;">
<center>divis&atilde;o</center>
</div>
<div id="divisao_img" style="position:absolute; left:69; top:168px; width:80px;">
<center><img src="img/alf/<?php echo $rs['divisao']; ?>.png" /></center>
</div>
<div id="titulos" style="top:208; position:absolute; left:69; width:80px; font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#6F6F6F 1px -1px, #6F6F6F -1px 1px, #6F6F6F 1px 1px, #6F6F6F -1px -1px;">
<center>titulos</center>
</div>
<div id="tit1" style="position:absolute; top:227; left:55;">
<img src="img/perf/1.png" />
</div>
<div id="titulo1" style="position:absolute; top:229; left:85; font-family:Liberation; color:#9F1111; font-size:15px; font-weight:bold;">
<?php echo $rs['titulo_1']; ?>
</div>
<div id="titulo2" style="position:absolute; top:252; left:85; font-family:Liberation; color:#9F1111; font-size:15px; font-weight:bold;">
<?php echo $rs['titulo_2']; ?>
</div>
<div id="titulo3" style="position:absolute; top:276; left:85; font-family:Liberation; color:#9F1111; font-size:15px; font-weight:bold;">
<?php echo $rs['titulo_3']; ?>
</div>

<div id="titulo1" style="position:absolute; top:229; left:145; font-family:Liberation; color:#9F1111; font-size:15px; font-weight:bold;">
<?php echo $rs['titulo_4']; ?>
</div>
<div id="titulo2" style="position:absolute; top:252; left:145; font-family:Liberation; color:#9F1111; font-size:15px; font-weight:bold;">
<?php echo $rs['titulo_5']; ?>
</div>
<div id="titulo3" style="position:absolute; top:276; left:145; font-family:Liberation; color:#9F1111; font-size:15px; font-weight:bold;">
<?php echo $rs['titulo_6']; ?>
</div>
<div id="tit2" style="position:absolute; top:227; left:113;">
<img src="img/perf/2.png" />
</div>
<div id="data-cad" style="top:304; position:absolute; left:18; width:80px; font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#6F6F6F 1px -1px, #6F6F6F -1px 1px, #6F6F6F 1px 1px, #6F6F6F -1px -1px;">
<center>cadastro</center>
</div>
<div id="ultima-en" style="top:320; position:absolute; left:34; width:80px; font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#6F6F6F 1px -1px, #6F6F6F -1px 1px, #6F6F6F 1px 1px, #6F6F6F -1px -1px;">
<center>ultima entrada</center>
</div>
<div id="troca" style="top:336; position:absolute; left:28; width:80px; font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#6F6F6F 1px -1px, #6F6F6F -1px 1px, #6F6F6F 1px 1px, #6F6F6F -1px -1px;">
<center>troca: 
	<?php 
	
	if($rs['Tempo_Troca'] <= date('Y-m-d H:i:s')){
		echo 'Livre.';
	}else{
	$rem = strtotime(''.$rs['Tempo_Troca'].'') - time();
	$day = floor($rem / 86400);
	$hr  = floor(($rem % 86400) / 3600);
	$min = floor(($rem % 3600) / 60);
	$sec = ($rem % 60);
	if($day) echo "$day dias ";
	}
	
	 ?>
</center>
</div>
<div id="data-cad1" style="top:304; position:absolute; left:110; width:80px; font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#6F6F6F 1px -1px, #6F6F6F -1px 1px, #6F6F6F 1px 1px, #6F6F6F -1px -1px;">
<center><?php echo $rs['Cadastro']; ?></center>
</div>
<div id="ultima-en1" style="top:320; position:absolute; left:110; width:80px; font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#6F6F6F 1px -1px, #6F6F6F -1px 1px, #6F6F6F 1px 1px, #6F6F6F -1px -1px;">
<center><?php echo $rs['Ultima_Entrada']; ?></center>
</div>

<div id="meu-nivel" style="position:absolute; left:375; top:42; background:url(img/fundo-ni.png); width:38px; height:38px;">
<img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0 style="margin-top:7px; margin-left:5px; cursor:pointer;">
</div>
<div id="nome-nivel" style="font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#6F6F6F 1px -1px, #6F6F6F -1px 1px, #6F6F6F 1px 1px, #6F6F6F -1px -1px; position:absolute; top:56; left:418; width:140px;">
<?php
switch($rs['Nivel']){
	case 1: echo 'Aprendiz - 1'; 
	break;
	case 2: echo 'Perna de Pau - 2'; 
	break;
	case 3: echo 'Amador - 3'; 
	break;
	case 4: echo 'Junior Sub-12 - 4'; 
	break;
	case 5: echo 'Junior Sub-16 - 5'; 
	break;
	case 6: echo 'Estrela - 6'; 
	break;
	case 7: echo 'Revelação - 7'; 
	break;
	case 8: echo 'Boleiro - 8'; 
	break;
	case 9: echo 'Intermedio - 9'; 
	break;
	case 10: echo 'Driblador Intermedio - 10'; 
	break;
	case 11: echo 'Craque Intermedio - 11'; 
	break;
	case 12: echo 'Artilheiro Intermedio - 12'; 
	break;
	case 13: echo 'Habilidoso - 13'; 
	break;
	case 14: echo 'Gênio - 14'; 
	break;
	case 15: echo 'Chuteira de Bronze - 15'; 
	break;
	case 16: echo 'Driblador - 16'; 
	break;
	case 17: echo 'Craque - 17'; 
	break;
	case 18: echo 'Artilheiro - 18'; 
	break;
	case 19: echo 'Inovador - 19'; 
	break;
	case 20: echo 'Experiente - 20'; 
	break;
	case 21: echo 'Chuteira Prateada - 21'; 
	break;
	case 22: echo 'Fenómeno - 22'; 
	break;
	case 23: echo 'Grande Driblador - 23'; 
	break;
	case 24: echo 'Grande Craque - 24'; 
	break;
	case 25: echo 'Grande Artilheiro - 25'; 
	break;
	case 26: echo 'Fabuloso - 26'; 
	break;
	case 27: echo 'Berserk - 27'; 
	break;
	case 28: echo 'Chuteira Dourada - 28'; 
	break;
	case 29: echo 'Lendario Junior - 29'; 
	break;
	case 30: echo 'Artilheiro Gold - 30'; 
	break;
	case 31: echo 'Lendario - 31'; 
	break;
	case 32: echo 'Nao definido - 32'; 
	break;																													
	default: echo "Melhor do PTGOL";
	}
?>

</div>
<?php
$sql = DB::conn()->prepare("SELECT * FROM niveis WHERE Nivel = '$mc_nivel'");
$sql->execute();
$rsr = $sql->fetch();
$gols_nivel = $rsr['Gols'];
?>
<div style="font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#6F6F6F 1px -1px, #6F6F6F -1px 1px, #6F6F6F 1px 1px, #6F6F6F -1px -1px; position:absolute; top:107; left:370;">
<span style="position:absolute; top:-23; width:132; left:6px;"><center><?php echo $total_gols ; ?>/<?php echo $gols_nivel;?></center></span>
<div id="progress_prox_nivel" style="position:absolute; top:-11; left:6;">
<div id="barra_fundo" style="width:130px; height:4px; background:transparent; border:1px solid #222; border-radius:100px; -moz-border-radius:100px;-webkit-border-radius:100px;">
<?php
	$pasta = 'img/fundo1.png';
	
	$total = ceil(($total_gols *130)/$gols_nivel);
	
	$return = '<div id="progress" style="width:'.$total.';height:4px;background:url('.$pasta.');border-radius:100px; -moz-border-radius:100px;-webkit-border-radius:100px;"></div>';
	echo $return;

?>

</div>
</div>
</div>
<div id="total" style="font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#6F6F6F 1px -1px, #6F6F6F -1px 1px, #6F6F6F 1px 1px, #6F6F6F -1px -1px; position:absolute; top:107; left:380; width:140px; ">
gols
</div>
<div id="tempo" style="font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#6F6F6F 1px -1px, #6F6F6F -1px 1px, #6F6F6F 1px 1px, #6F6F6F -1px -1px; position:absolute; top:122; left:380; width:140px; ">
temporada
</div>
<div id="rod" style="font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#6F6F6F 1px -1px, #6F6F6F -1px 1px, #6F6F6F 1px 1px, #6F6F6F -1px -1px; position:absolute; top:136; left:380; width:140px; ">
rodada
</div>
<div id="hor" style="font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#6F6F6F 1px -1px, #6F6F6F -1px 1px, #6F6F6F 1px 1px, #6F6F6F -1px -1px; position:absolute; top:151; left:380; width:140px; ">
hora
</div>
<div id="dinhe" style="font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#6F6F6F 1px -1px, #6F6F6F -1px 1px, #6F6F6F 1px 1px, #6F6F6F -1px -1px; position:absolute; top:166; left:380; width:140px; ">
dinheiro
</div>
<div id="penalti" style="font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#6F6F6F 1px -1px, #6F6F6F -1px 1px, #6F6F6F 1px 1px, #6F6F6F -1px -1px; position:absolute; top:181; left:380; width:140px; ">
Penalti
</div>
<div id="penalti" style="font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#6F6F6F 1px -1px, #6F6F6F -1px 1px, #6F6F6F 1px 1px, #6F6F6F -1px -1px; position:absolute; top:196; left:380; width:140px; ">
passe
</div>
<div id="penalti" style="font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#6F6F6F 1px -1px, #6F6F6F -1px 1px, #6F6F6F 1px 1px, #6F6F6F -1px -1px;position:absolute; top:211; left:380; width:140px; ">
Sorte
</div>
<div id="total" style="font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#6F6F6F 1px -1px, #6F6F6F -1px 1px, #6F6F6F 1px 1px, #6F6F6F -1px -1px; position:absolute; top:107; left:456; width:140px; ">
<?php echo $rs['Gols_Total']; ?>
</div>
<div id="tempo" style="font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#6F6F6F 1px -1px, #6F6F6F -1px 1px, #6F6F6F 1px 1px, #6F6F6F -1px -1px; position:absolute; top:122; left:456; width:140px; ">
<?php echo $rs['Gols_Temporada']; ?>
</div>
<div id="rod" style="font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#6F6F6F 1px -1px, #6F6F6F -1px 1px, #6F6F6F 1px 1px, #6F6F6F -1px -1px; position:absolute; top:136; left:456; width:140px; ">
<?php echo $rs['Gols_Rodada']; ?>
</div>
<div id="hor" style="font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#6F6F6F 1px -1px, #6F6F6F -1px 1px, #6F6F6F 1px 1px, #6F6F6F -1px -1px; position:absolute; top:151; left:456; width:140px; ">
<?php echo $rs['Gols_Hora']; ?>
</div>
<div id="dinhe" style="font-family:visitor; font-size:0.8em; color:#FFFF00; text-shadow:#989F00 1px -1px, #989F00 -1px 1px, #989F00 1px 1px, #989F00 -1px -1px; position:absolute; top:166; left:456; width:140px; ">
<?php echo $rs['Dinheiro']; ?>$
</div>
<div id="hor" style="font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#6F6F6F 1px -1px, #6F6F6F -1px 1px, #6F6F6F 1px 1px, #6F6F6F -1px -1px; position:absolute; top:181; left:456; width:140px; ">
<?php echo $rs['Penalti_Acertos']; ?>/<?php echo $rs['Penalti_Erros']; ?>
</div>
<div id="hor" style="font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#6F6F6F 1px -1px, #6F6F6F -1px 1px, #6F6F6F 1px 1px, #6F6F6F -1px -1px; position:absolute; top:196; left:456; width:140px; ">
<?php echo $rs['Falta_Acertos']; ?>/<?php echo $rs['Falta_Erros']; ?>
</div>
<div id="hor" style="font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#6F6F6F 1px -1px, #6F6F6F -1px 1px, #6F6F6F 1px 1px, #6F6F6F -1px -1px; position:absolute; top:211; left:456; width:140px; ">
<?php if($rs['Sorte'] == 1000){echo 'Com Sorte';}else{echo 'Sem Sorte';} ?>
</div>
<div id="vipfixo" style="position:absolute; top:65; left:510; width:140px; ">
<?php
if($rs['Tempo_Auto'] >= date('Y/m/d H:i:s') && $rs['Tempo_Penalti'] >= date('Y/m/d H:i:s') && $rs['Tempo_Falta'] >= date('Y/m/d H:i:s')){
?>
<img src="img/on.png" />
<?php }elseif($rs['Tempo_Auto'] <= date('Y/m/d H:i:s') && $rs['Fixo'] == 1){ ?>
<img src="img/fixo.png" />
<?php
}elseif($rs['Tempo_Auto'] >= date('Y/m/d H:i:s') && $rs['Tempo_Penalti'] <= date('Y/m/d H:i:s') && $rs['Tempo_Falta'] <= date('Y/m/d H:i:s')){
?>
<img src="img/auto.png" />
<?php
}elseif($rs['Tempo_Auto'] >= date('Y/m/d H:i:s') && $rs['Tempo_Penalti'] <= date('Y/m/d H:i:s')){
?>
<img src="img/auto.png" />
<?php
}elseif($rs['Tempo_Auto'] >= date('Y/m/d H:i:s')&& $rs['Tempo_Falta'] <= date('Y/m/d H:i:s')){
?>
<img src="img/auto.png" />
<?php }else{ ?>

<img src="img/off.png" />
<?php } ?>
</div>
<div id="hab" style=" position:absolute; top:233; left:385; width:114px; height:99px; background:url(img/hab_f.png); ">
<span id="pontos" style="font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#222222 1px -1px, #222222 -1px 1px, #222222 1px 1px, #222222 -1px -1px; position:absolute; left:56px; top:43px;"><?php echo $rs['Pontos']; ?></span>
<span id="hab_p" style="font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#222222 1px -1px, #222222 -1px 1px, #222222 1px 1px, #222222 -1px -1px; position:absolute; left:45px; top:22px;"><?php echo $rs['hab_penalti']; ?></span>
<?php
if($rs['Htempo'] > 0){
?>
<div id="blest-on" style="background:url(img/blest-on.png); width:33px; height:33px; position:absolute; left:61px;"></div>
<?php }else{ ?>
<div id="blest-off" style="background:url(img/blest-off.png); width:25px; height:25px; position:absolute; left:65px; top:4px;"></div>
<?php } ?>
<span id="hab_bt" style="font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#222222 1px -1px, #222222 -1px 1px, #222222 1px 1px, #222222 -1px -1px; position:absolute; left:86px; top:22px;"><?php echo $rs['Htempo']; ?></span>
<?php
if($rs['Hfalta'] > 0){
?>
<div id="blesf-on" style="background:url(img/blessf-on.png); width:34px; height:34px; position:absolute; left:78px; top:32px;"></div>
<?php }else{ ?>
<div id="blesf-off" style="background:url(img/blesf-off.png); width:34px; height:34px; position:absolute; left:78px; top:32px;"></div>
<?php } ?>
<span id="hab_f" style="font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#222222 1px -1px, #222222 -1px 1px, #222222 1px 1px, #222222 -1px -1px; position:absolute; left:31px; top:54px;"><?php echo $rs['hab_falta']; ?></span>
<span id="hab_bf" style="font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#222222 1px -1px, #222222 -1px 1px, #222222 1px 1px, #222222 -1px -1px; position:absolute; left:103px; top:54px;"><?php echo $rs['Hfalta']; ?></span>
<?php
if($rs['Htrilha'] > 0){
?>
<div id="blestr-on" style="background:url(img/blestr-on.png); width:27px; height:27px; position:absolute; left:65px; top:68px;"></div>
<?php }else{ ?>
<div id="blestr-on" style="background:url(img/blestr-off.png); width:27px; height:27px; position:absolute; left:65px; top:68px;"></div>
<?php } ?>
<span id="hab_t" style="font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#222222 1px -1px, #222222 -1px 1px, #222222 1px 1px, #222222 -1px -1px; position:absolute; left:45px; top:86px;"><?php echo $rs['hab_trilha']; ?></span>
<span id="hab_btr" style="font-family:visitor; font-size:0.8em; color:#FFF; text-shadow:#222222 1px -1px, #222222 -1px 1px, #222222 1px 1px, #222222 -1px -1px; position:absolute; left:88px; top:86px;"><?php echo $rs['Htrilha']; ?></span>
</div>
<div id="blesed" style="position:absolute; top:350px; left:270px;">
<?php
if($rs['T_hab_t'] >= date('Y/m/d H:i:s')){
?>
<div id="blesedt" rel="tooltip" title="<?php
$rem = strtotime(''.$rs['T_hab_t'].'') - time();
$hr  = floor(($rem % 86400) / 3600);
$min = floor(($rem % 3600) / 60);
$sec = ($rem % 60);

if(strlen($hr) < 2){
echo '0'.$hr.':';
if($min) echo "$min:";		
}else{
if($hr) echo "$hr:";
if($min) echo "$min:";
if($sec) echo "$sec";	
}
if(strlen($sec) < 2){
echo '0'.$sec;	
}else{
if($sec) echo "$sec";	
}

?>" style="background:url(img/bless-t.png); width:13px; height:13px; float:left;"></div>
<?php } ?>
<?php
if($rs['T_hab_f'] >= date('Y/m/d H:i:s')){
?>
<div id="blesedf" rel="tooltip" title="<?php
$rem1 = strtotime(''.$rs['T_hab_f'].'') - time();
$hr1  = floor(($rem1 % 86400) / 3600);
$min1 = floor(($rem1 % 3600) / 60);
$sec1 = ($rem1 % 60);

if(strlen($hr1) < 2){
echo '0'.$hr1.':';
if($min1) echo "$min1:";		
}else{
if($hr1) echo "$hr1:";
if($min1) echo "$min1:";
if($sec1) echo "$sec1";	
}
if(strlen($sec1) < 2){
echo '0'.$sec1;	
}else{
if($sec1) echo "$sec1";	
}
?>" style="background:url(img/bless-f.png); width:13px; height:13px;float:left; margin-left:4px;"></div>
<?php } ?>
<?php
if($rs['T_hab_tr'] >= date('Y/m/d H:i:s')){
?>
<div id="blesedtr" rel="tooltip" title="<?php
$rem2 = strtotime(''.$rs['T_hab_tr'].'') - time();
$hr2  = floor(($rem2 % 86400) / 3600);
$min2 = floor(($rem % 3600) / 60);
$sec2 = ($rem2 % 60);

if(strlen($hr2) < 2){
echo '0'.$hr2.':';
if($min2) echo "$min2:";		
}else{
if($hr2) echo "$hr2:";
if($min2) echo "$min2:";
if($sec2) echo "$sec2";	
}
if(strlen($sec2) < 2){
echo '0'.$sec2;	
}else{
if($sec2) echo "$sec2";	
}
?>" style="background:url(img/bless-tr.png); width:11px; height:11px;float:left;margin-left:4px"></div>
<?php } ?>
</div>
<script>
$(function(){
 $("*[rel=tooltip]").hover(function(e){
   var title = $(this).attr('title');
     $(this).data('titleText', title).removeAttr('title');
       $("body").append('<div class="tooltip">'+title+'</div>');
        $('.tooltip').css({
          top : e.pageY - 50,
           left : e.pageX + 20
      }).fadeIn(); 
   }, function(){
      $(this).attr('title', $(this).data('titleText'));
      $('.tooltip').remove();
   }).mousemove(function(e){
      $('.tooltip').css({
       top : e.pageY - 38,
       left : e.pageX - 20
      })
   })  
});
</script>
<div id="avatar">
<img src="img/avatar.png" width="200" height="320" />
</div>
<?php
if($rs['Fixo'] == 0 && $rs['VIP'] >= date('Y-m-d H:i:s')){
?>
<div id="comvip"></div>
<?php }elseif($rs['Fixo'] == 1 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?>
<div id="semvip"></div>
<?php } ?>
<?php if($representante == 1){ ?>
<div id="representanteu"></div>
<?php } ?>
<div id="msgu">
<form action="" method="post">
    <textarea name="mensagem" id="msgg" cols="50" rows="4" placeholder="Escreva aqui sua mensagem" class="campos3" style="width:100%;"></textarea>
    <a href="" class="activess" id="msgus">Enviar</a>
    <input type="hidden" name="a" value="<?php echo $id_user; ?>" id="iduser" />
</form>
</div>
<script type="text/javascript">
$("#msgus").click(function(event){
	event.preventDefault();
	
	var msg_p = $('#msgg').val();
	var id_de = $("#iduser").val();
	
	if($('#msgg').val()==$('#msgg').attr('placeholder')){
		alert('Digite algo...');	
	}else{
		$.ajax({
			method: 'POST',
			url:"paginas/msg-u.php",
			data: {id_de:id_de, msg_p:msg_p},
			dataType:"json",
			success: function(retorno){
				if(retorno.status == 'ok'){
					alert('Mensagem enviada!');
					$("#msgu").fadeOut();
				}
				if(retorno.status == 'igual'){
					alert('Você não pode enviar msg para vc mesmo!');
					$("#msgu").fadeOut();
				}
			}
	});			
	}
})
</script>
</div>
<div id="historico" style="position:absolute; top:360; left:28; font-family:Liberation; color:#000; font-size:11px; width:120px;">
<span style="display:block; margin-left:0; font-weight:bold;">Recordes</span>
<div style="display:grid; grid-template-columns: 1fr auto; row-gap:4px; column-gap:6px; width:100%; margin-top:4px;">
    <div style="background:#EEEEEE; padding:1px 4px;">Hora</div>
    <div style="background:#EEEEEE; padding:1px 4px; text-align:right;"><?php echo $rs['Record_Hora'] ?></div>
    <div style="background:#E4E4E4; padding:1px 4px;">Rodada</div>
    <div style="background:#E4E4E4; padding:1px 4px; text-align:right;"><?php echo $rs['Record_Rodada'] ?></div>
    <div style="background:#EEEEEE; padding:1px 4px;">Temporada</div>
    <div style="background:#EEEEEE; padding:1px 4px; text-align:right;"><?php echo $rs['Record_Temporada'] ?></div>
    <div style="background:#E4E4E4; padding:1px 4px;">Hora na Temporada</div>
    <div style="background:#E4E4E4; padding:1px 4px; text-align:right;"><?php echo $rs['Hora_tempo'] ?></div>
    <div style="background:#EEEEEE; padding:1px 4px;">Rodada na Temporada</div>
    <div style="background:#EEEEEE; padding:1px 4px; text-align:right;"><?php echo $rs['Rodada_tempo'] ?></div>
</div>
</div>

<div id="user" style="position:absolute; top:18; left:380; width:140px; ">
<span style="color:#FFF; text-shadow:#000000 1px -1px, #000000 -1px 1px, #000000 1px 1px, #000000 -1px -1px; font-weight:bold; letter-spacing:3px; font-size:19px; font-family:Liberation;"><?php echo utf8_encode($nome_user); ?></span>
</div>
</div>
</div></div></td></tr>
<tr><td><div style="position:relative;top:0;width:623;left:0;height:15px;"><img src='img/layout/menu/botH.png' border=0></div></td></tr>
	</table>
