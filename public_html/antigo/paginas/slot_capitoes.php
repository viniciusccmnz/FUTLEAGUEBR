<?php
$id_user = $_SESSION['ID'];
$destrancar = DB::conn()->prepare("SELECT Trancar FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
$destrancar->execute();
$rs = $destrancar->fetch();
$trancar = $rs["Trancar"];
//verificar se o usuario tem permissao
$sql = DB::conn()->prepare("SELECT Cargo, Time, ID FROM usuarios WHERE ID = '$id_user'");
$sql->execute();
$rs = $sql->fetch();
$Cargo = $rs['Cargo'];
$Time = $rs['Time'];
$id_de = $rs['ID'];
if(isset($_SESSION['Usuario']) && $trancar == 0 && $Cargo == 1 || $Cargo == 2){
?>
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
	<tr><td><div style="position:relative;top:0;left:0;width:623;height:57;"><div style="width:623;height:57;background-image:url('img/layout/menu/topH.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:623;top:10;color:#515151;font-family:litoh;font-size:1em;">Diretoria</div><div style="position:absolute;text-align:center;width:623;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Diretoria</div></div></div></td></tr>
	<tr><td><div style="position:relative;top:0;left:0;width:623;min-height:300px; height:auto !important;  height:300px;background-image:url('img/layout/menu/midH.png');padding-top:8;">
<div style='position:relative;top:0;left:0;width:607;margin-left:9;'>

<center>
<div id="id_vips" style="font-family: Helvetica, sans-serif, Arial; font-size:16px; margin-bottom:5px;">Slots de Capitão</div>
<div id="resultado" style="margin-top:20px;">

<table width="322" border="1" cellpadding="0" cellspacing="0">
  <tr style="background:#666;">
    <td width="175" height="24">Usuário</td>
    <td width="60">Status</td>
    
    <td width="79"></td>
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
	$selecionar_contratos = DB::conn()->prepare("SELECT * FROM usuarios WHERE Time = '$Time'");
	$selecionar_contratos->execute();
	while($rs = $selecionar_contratos->fetch()){
		$cargos = $rs['Cargo'];

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

  </tr>

  <tr>
    <td>
 <?php
if($cargos == 0 || $cargos == 3){
 ?>    
    <div id="nivel" style="float:left; margin-left:6px;"><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_6){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_7){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_8){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_9){  ?>top3_g.gif<?php }elseif($rs["ID"] == $medalha_10){  ?>top3_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0> </div>
    <div id="user" style="line-height:25px; float:left; margin-left:5px;"><?php if ($rs['VIP'] >= date('Y-m-d H:i:s')) { ?><span class='cVip'><?php echo utf8_encode($rs['Usuario']);?></span><?php } else { ?><span class='cVipx' style="color:#333;"><?php echo utf8_encode($rs['Usuario']);?></span><?php } ?>
   <?php if($rs['Cargo'] == 3){ ?><img src='img/c3.png' border=0><?php }else{} ?>
    
    
    </div>
    </td>
    <td>
    <center>
    <?php
	if($rs["Status"] > 0){
	?>
    <div id="status" style="width:15px; height:15px; background:#090; border-radius:100%;"></div>
    <?php
	}else{
	?>
    <div id="status" style="width:15px; height:15px; background:#900; border-radius:100%;"></div>
    <?php } ?>
    </center>
    </td>
   
    <td>
    
    <center>
    <span style=" height:26px; background:#069; padding:4px 7px; border-radius:2px; font-size:12px;">
  
   <?php
   if($cargos == 3){
   ?>
    <a href="index.php?pr=remover_c&id_para=<?php echo $rs["ID"] ?>&id_de=<?php echo $id_de; ?>" style="color:#FFF; font-size:12px;">Remover</a>
    <?php }else{ ?>
     <a href="index.php?pr=capitao_add&id_para=<?php echo $rs["ID"] ?>&id_de=<?php echo $id_de; ?>" style="color:#FFF; font-size:12px;">Adicionar</a>
     <?php } ?>
    </span>
    </center>
    </td>
  </tr>
 <?php }}?>
</table>
</div>

</center>
</div></div></td></tr>
<tr><td><div style="position:relative;top:0;width:623;left:0;height:15px;"><img src='img/layout/menu/botH.png' border=0></div></td></tr>
</table>

<?php }else{echo '<script>location.href="index.php?pr=index"</script>';} ?>