<style type="text/css">
#form-contrato input{
	background:#838383;
	width:195px;
	height:28px;
	color:#FFF;
	border-radius:3px;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	padding-left:10px;
	font-family: Helvetica, sans-serif;
	border:0;
	box-shadow:inset 0 0 3px #000000;
	outline:none;

}
#form-contrato .btn{
	width:71px;
	height:27px;
	border:1px solid #151515;
	background:#333;
	border-radius:2px;
	cursor:pointer;
}
#form-contrato .btn:hover{
	background:#666;
}
#form-contrato select{
	height:24px;
	width:120px;
	font-family: Helvetica, sans-serif;
}
#resultado table{
	border:1px solid #CCC;
	border-collapse:collapse;
}
#resultado table tr td{
	color:#F7F7F7;
	text-align:center;
	font-family: Helvetica, sans-serif, Arial;
	font-size:14px;
}
#resultado table tr:hover{
	background:#F4F4F4;
	cursor:pointer;
}
</style>

</table></div></td><td valign='top' align='center'><table cellpadding='0' cellspacing='0' border=0 height=20>
<tr><td><div style="position:relative;top:0;left:0;width:623;height:57;"><div style="width:623;height:57;background-image:url('img/layout/menu/topH.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:623;top:10;color:#515151;font-family:litoh;font-size:1em;">Buscar Jogador</div><div style="position:absolute;text-align:center;width:623;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Buscar Jogador</div></div></div></td></tr>
<tr><td><div style="position:relative;top:0;left:0;width:623;min-height:300px; height:auto !important;  height:300px;background-image:url('img/layout/menu/midH.png');padding-top:8;">
<div id="form-contrato">
<center>
<div style="margin-top:10px;">
<form name="vips" action="" method="post">
<input type="text" name="usuario" placeholder='Nome do Usuario' id="usuario" />
<select name="Times" id="Times">
<option value="0">Todos</option>
<?php
$listar = DB::conn()->prepare("SELECT * FROM times ORDER BY Time ASC");
$listar->execute();
while($row = $listar->fetchObject()){	
$iddd = $row->ID;
?>
<option value="<?php echo $row->ID; ?>"><?php echo utf8_encode($row->Time); ?></option>
<?php } ?>
</select>
<input type="submit" name="acao" value="Buscar" class="btn" onclick="buscar()" />
</form>
</div>
<script type="text/javascript" src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<script type="text/javascript">
function buscar(){
	var usuario = $("#usuario").val();
	var id_time = document.getElementById('Times').value;
	event.preventDefault();
	
	$.post('paginas/buscar_users1.php',
	{
	user: usuario,	
	time_id:id_time,
	
	}, function(res){
		$("#resultado").html(res);		
	});
	//fim do post

}
</script>
<div id="resultado" style="padding:10px;">
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
	
	$buscar_usuario = utf8_decode($_POST['usu']);
	
	$select = DB::conn()->prepare("SELECT * FROM usuarios WHERE Usuario LIKE '%$buscar_usuario%'");
	$select->execute();
	if($select->rowCount() == 0){
		echo '<br />Usuario não encontrado !';
		}else{
			while($rs = $select->fetch()){
				$vip = $rs["VIP"];
				$status = $rs["Status"];

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
    <div id="user" style="line-height:25px; float:left; margin-left:5px;">
    <?php if($rs['VIP'] >= 1 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><a href="index.php?pr=perfil&nome=<?php echo urlencode($rs["Usuario"]);?>"><span style="color:#0088A1;"><?php echo utf8_encode($rs["Usuario"]); ?></span></a><?php }else{ ?><a href="index.php?pr=perfil&nome=<?php echo urlencode($rs["Usuario"]);?>"><span style="color:#000000;"><?php echo utf8_encode($rs["Usuario"]); ?></span></a><?php } ?>
    </div>
    </td>
    <td><img src="img/gr/Times_p/<?php echo $rs["Time"]; ?>.png" width="20" height="20" style="float:left;"/> <div style="color:#333; line-height:25px; float:left;"> <?php echo utf8_encode($time); ?></div></td>
    <td><span style="color:#333;"><?php echo $rs["Gols_Total"]; ?></span></td>
    <td>
    <center>
    <?php
	if($status > 0){
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
  <?php }} ?>
</table>
</div>
</center>
</div></div></td></tr>
<tr><td><div style="position:relative;top:0;width:623;left:0;height:15px;"><img src='img/layout/menu/botH.png' border=0></div></td></tr>
	</table>