<?php
include_once('conn.php');
session_start();

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


	$usuario = $_SESSION['ID'];
	$PegarDados = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = ? LIMIT 1");
	$PegarDados->execute(array($usuario));
	
	while($rs = $PegarDados->fetch()){
		$Gols_Total = $rs['Gols_Total'];
		$Gols_Temporada = $rs['Gols_Temporada'];
		$Gols_Rodada = $rs['Gols_Rodada'];
		$Gols_Hora = $rs['Gols_Hora'];
		$Dinheiro = $rs['Dinheiro'];
		$mc_nivel = $rs['Nivel'];
		$upnivel = $rs['upnivel'];
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

<div id="nivel_user" style="position:absolute; top:-40; cursor:pointer;">
<img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0>
</div>
<span style="position:absolute; top:-41; left:30; width:140;">
<?php
switch($mc_nivel){
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
	default: echo "<script>location.href='index.php?pr=sair';</script>";
	}
?>
</span>
<?php
	$infoUP = DB::conn()->prepare("SELECT * FROM niveis WHERE Nivel = '".$mc_nivel."'");
	$infoUP->execute();
	$rs = $infoUP->fetch();
	$mc_nivel_gols = $rs["Gols"];
?>

<span style="position:absolute; top:-23; left:38; width:140;"><?php echo $Gols_Total; ?>/<?php echo $mc_nivel_gols; ?></span>
<div id="progress_prox_nivel" style="position:absolute; top:-11; left:-1;">
<div id="barra_fundo" style="width:130px; height:3px; background:transparent; border:1px solid #222; border-radius:100px; -moz-border-radius:100px;-webkit-border-radius:100px;">
<?php
	$pasta = 'img/fundo_progress.png';
	$total = ceil(($Gols_Total*130)/$mc_nivel_gols);
		
	$return = '<div id="progress" style="width:'.$total.';height:3px;background:url('.$pasta.');border-radius:100px; -moz-border-radius:100px;-webkit-border-radius:100px;"></div>';
	echo $return;

?>
</div>
</div>
<span style="position:absolute;">Gols</span>
<span style="position:absolute; left:110;"><?php echo $Gols_Total; ?></span>
<span style="position:absolute; top:16;">Temporada</span>
<span style="position:absolute; top:16; left:110;"><?php echo $Gols_Temporada; ?></span>
<span style="position:absolute; top:31;">Rodada</span>
<span style="position:absolute; top:31; left:110;"><?php echo $Gols_Rodada; ?></span>
<span style="position:absolute; top:47;">Hora</span>
<span style="position:absolute; top:47; left:110;"><?php echo $Gols_Hora; ?></span>
<span style="position:absolute; top:62; color:#E1DE00; text-shadow:#8A911C 1px -1px, #8A911C -1px 1px, #8A911C 1px 1px, #8A911C -1px -1px;">Dinheiro</span>
<span style="position:absolute; top:62; left:110; color:#E1DE00; text-shadow:#8A911C 1px -1px, #8A911C -1px 1px, #8A911C 1px 1px, #8A911C -1px -1px;"><?php echo $Dinheiro; ?>$</span>
<?php } ?>