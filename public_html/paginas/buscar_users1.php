<?php
  include_once('conn.php');
?>
<table width="433" border="1" cellpadding="0" cellspacing="0">
  <tr style="background:#666;">
    <td width="151" height="24">Usuário</td>
    <td width="137">Time</td>
    <td width="57">Gols</td>
    <td width="78">Status</td>
  </tr>
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

	$usuario = $_POST["user"];
	$categoria = $_POST['time_id'];
	$buscar_usuario = $_POST["user"];
	
	if($categoria == 0){
	$select = DB::conn()->prepare("SELECT * FROM usuarios WHERE Usuario LIKE '%$buscar_usuario%'");
	$select->execute();
	
	if($select->rowCount() == 0){
		echo '<br />Usuario não encontrado !';
		}else{
			while($rs = $select->fetch()){
				$vip = $rs["VIP"];
				$status = $rs["Tempo_Auto"];
				
				
			
	
	
	
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
$selecionar_times = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '".$rs['Time']."'");
$selecionar_times->execute();
$row = $selecionar_times->fetchObject();
$time = $row->Time;
?>
<tr>
    <td>
    <div id="nivel" style="float:left; margin-left:6px;"><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></div>
    <div id="user" style="color:#333; line-height:25px; float:left; margin-left:5px;"><?php if($rs['VIP'] >= date('Y-m-d H:i:s')){ ?><a href="index.php?pr=perfil&nome=<?php echo urlencode($rs["Usuario"]);?>"><span style="color:#0088A1;"><?php echo utf8_encode($rs["Usuario"]); ?></span></a><?php }else{ ?><a href="index.php?pr=perfil&nome=<?php echo urlencode($rs["Usuario"]);?>"><span style="color:#000000;"><?php echo utf8_encode($rs["Usuario"]); ?></span></a><?php } ?></div>
    </td>
    <td><img src="img/gr/Times_p/<?php echo $rs["Time"]; ?>.png" width="20" height="20"  style="float:left;"/> <div style="color:#333; line-height:25px; float:left;"> <?php echo utf8_encode($time); ?></div></td>
    <td><span style="color:#333;"><?php echo $rs["Gols_Total"]; ?></span></td>
    <td>
    <center>
    <?php
	if($status >= date('Y-m-d H:i:s')){
	?>
    <div id="status" style="width:15px; height:15px; background:#090; border-radius:100%;"></div>
    <?php
	}else{
	?>
    <div id="status" style="width:15px; height:15px; background:#900; border-radius:100%;"></div>
    <?php } ?>
    </center>
    </td>
  </tr>
	
<?php
}}}else{

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
	
	$select = DB::conn()->prepare("SELECT * FROM usuarios WHERE Usuario LIKE '%$buscar_usuario%' AND Time = '$categoria'");
	$select->execute();
	if($select->rowCount() == 0){
		echo '<br />Usuario não encontrado !';
		}else{
			while($rs = $select->fetch()){
				$vip = $rs["VIP"];
				$status = $rs["Tempo_Auto"];

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
$selecionar_times = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '".$rs['Time']."'");
$selecionar_times->execute();
$row = $selecionar_times->fetchObject();
$time = $row->Time;
?>
<?php
$selecionar_times = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '".$rs['Time']."'");
$selecionar_times->execute();
$row = $selecionar_times->fetchObject();
$time = $row->Time;
?>
  <tr>
    <td>
    <div id="nivel" style="float:left; margin-left:6px;"><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></div>
    <div id="user" style="color:#333; line-height:25px; float:left; margin-left:5px;"><?php if($rs['VIP'] >= 1 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><a href="index.php?pr=perfil&nome=<?php echo urlencode($rs["Usuario"]);?>"><span style="color:#0088A1;"><?php echo utf8_encode($rs["Usuario"]); ?></span></a><?php }else{ ?><a href="index.php?pr=perfil&nome=<?php echo urlencode($rs["Usuario"]);?>"><span style="color:#000000;"><?php echo utf8_encode($rs["Usuario"]); ?></span></a><?php } ?></div>
    </td>
    <td><img src="img/gr/Times_p/<?php echo $rs["Time"]; ?>.png" width="20" height="20"  style="float:left;"/> <div style="color:#333; line-height:25px; float:left;"> <?php echo utf8_encode($time); ?></div></td>
    <td><span style="color:#333;"><?php echo $rs["Gols_Total"]; ?></span></td>
    <td>
    <center>
    <?php
	if($status >= date('Y-m-d H:i:s')){
	?>
    <div id="status" style="width:15px; height:15px; background:#090; border-radius:100%;"></div>
    <?php
	}else{
	?>
    <div id="status" style="width:15px; height:15px; background:#900; border-radius:100%;"></div>
    <?php } ?>
    </center>
    </td>
  </tr>
  <?php }}} ?>
</table>
