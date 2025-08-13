</table></div></td><td valign='top' align='center'><table cellpadding='0' cellspacing='0' border=0 height=20>
	<tr><td><div style="position:relative;top:0;left:0;width:623;height:57;"><div style="width:623;height:57;background-image:url('img/layout/menu/topH.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:623;top:10;color:#515151;font-family:litoh;font-size:1em;">Movimentações</div><div style="position:absolute;text-align:center;width:623;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Movimentações</div></div></div></td></tr>
	<tr><td><div style="position:relative;top:0;left:0;width:623;min-height:300px; height:auto !important;  height:300px;background-image:url('img/layout/menu/midH.png');padding-top:8;">
<div style='position:relative;top:0;left:0;width:607;margin-left:9;'>
<table width=550 height='1' border='0' align='center' cellpadding='0' cellspacing='0' class='sofT'>
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

$movimentacoes = DB::conn()->prepare("SELECT * FROM movimentacoes ORDER BY ID DESC");
$movimentacoes->execute();

while($mov = $movimentacoes->fetch()){
	$id_user = $mov['id_user'];
	$time_anterior = $mov['id_time_ant'];
	$time_atual = $mov['id_time_atl'];	

?>
<?php
//pegar todos os dados do usuario
$pegar_Dados_user = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = ?");
$pegar_Dados_user->execute(array($id_user));

$rs = $pegar_Dados_user->fetch();
$nome_user = $rs['Usuario'];
$nivel = $rs['Nivel'];
$vip = $rs['VIP'];
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
//pegar nome do time anterior
$nome_time1 = DB::conn()->prepare("SELECT Time FROM times WHERE ID = ?");
$nome_time1->execute(array($time_anterior));

$dados = $nome_time1->fetch();

$time_ant = $dados['Time'];
?>
<?php
//pegar nome do time atual
$nome_time2 = DB::conn()->prepare("SELECT Time FROM times WHERE ID = ?");
$nome_time2->execute(array($time_atual));

$dados2 = $nome_time2->fetch();

$time_atl = $dados2['Time'];
?>     
    <tr background='img/frank2.jpg' onMouseOver="mOvr(this)" onMouseOut="mOut(this)" onClick="document.location='?pr=perfil&amp;nome=<?php echo utf8_encode($nome_user); ?>'">
		<td  width=30><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0></td><td valign='middle' >
        <?php if($vip >= 1){ ?><span class='cVip'><?php echo utf8_encode($nome_user); ?></span><?php }else{ ?><span class='cVipx'><?php echo utf8_encode($nome_user); ?></span><?php } ?><?php
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
     <?php }else{} ?>
        </td>
        <td><a href='?pr=time&amp;time=<?php echo utf8_encode($time_ant); ?>'><div style="float:left; margin-top:2px;"><img  width='20' height='20' src='img\gr\Times_g\<?php echo $time_anterior; ?>.png' border=0></div><div style="margin-top:5px; margin-left:5px;"><?php echo utf8_encode($time_ant); ?></div></a></td><td width=90><img src='img/seta.png' width="20" height="20" border=0 style="margin-left:60px;"></td><td><a href='?pr=time&amp;time=<?php echo utf8_encode($time_atl); ?>'><div style="float:left; margin-top:2px; margin-left:60px;"><img  width='20' height='20' src='img\gr\Times_g\<?php echo $time_atual; ?>.png' border=0></div><div style="margin-top:5px; margin-left:5px;"><?php echo utf8_encode($time_atl); ?></div></a></td><tr><td bgcolor='#D2D2D2' height='1' colspan='9'></td></tr><tr>
<?php
}
?>        
        
        </tr></table>   
</div></div></td></tr>
<tr><td><div style="position:relative;top:0;width:623;left:0;height:15px;"><img src='img/layout/menu/botH.png' border=0></div></td></tr>
	</table>
