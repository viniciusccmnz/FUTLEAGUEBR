</table></div></td><td valign='top' align='center'><table cellpadding='0' cellspacing='0' border=0 height=20>
	<tr><td><div style="position:relative;top:0;left:0;width:623;height:57;"><div style="width:623;height:57;background-image:url('img/layout/menu/topH.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:623;top:10;color:#515151;font-family:litoh;font-size:1em;">Contratos</div><div style="position:absolute;text-align:center;width:623;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Contratos</div></div></div></td></tr>
	<tr><td><div style="position:relative;top:0;left:0;width:623;min-height:300px; height:auto !important;  height:300px;background-image:url('img/layout/menu/midH.png');padding-top:8;">
<div style='position:relative;top:0;left:0;width:607;margin-left:9;'>
<style type="text/css">
#contratosu{
	width:580px;
	height:32px;
	border-bottom:1px solid #D9D9D9;

	cursor:pointer;
}
#contratosu:hover{
	background:#E0E0E0;
}
#contratosu .nivel{
	float:left;
	margin-top:4px;
	margin-left:3px;
}
#contratosu .nick{
	float:left;
	line-height:32px;
	margin-left:5px;
}
#contratosu .nick a{
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	color:#0189a2;
}
#contratosu .nick:hover{
	text-decoration:underline;
}
#contratosu .status{
	float:left;
	margin-top:13px;
	margin-left:10px;
}
#contratosu #uon{
	width:7px;
	height:7px;
	-moz-border-radius:100%;
	-webkit-border-radius:100%;
	background:#093;
	border-radius:100%;
}
#contratosu #uaus{
	width:7px;
	height:7px;
	-moz-border-radius:100%;
	-webkit-border-radius:100%;
	border-radius:100%;
	background:#F60;
}
#contratosu #uoff{
	width:7px;
	height:7px;
	-moz-border-radius:100%;
	-webkit-border-radius:100%;
	border-radius:100%;
	background:#900;
}
#contratosu .vip{
	float:left;
	margin-left:3px;
	font-family:Tahoma;
	font-size: 13px;
	color: #0189a2;
	font-weight: bold;
	letter-spacing: -1px;
	line-height:30px;
}
#contratosu #fixar{
	position:absolute;
	left:460px;
	margin-top:7px;
}
#contratosu .perg{
	position:absolute;
	line-height:32px;
	left:480;
	color:#111;
	font-size:12px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
}
#contratosu .mudarv{
	float:right;
	margin-right:10px;
	line-height:29px;

}
#contratosu .mudarv a{
	float:right;
	color:#900;
	font-weight:normal;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:13px;
}
#contratosu .mudarv a:hover{
	text-decoration:underline;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
$("input[name='status[]']").click(function(){
	var $this = $( this );//guardando o ponteiro em uma variavel, por performance 
	var status = $this.attr('checked') ? 1 : 0;
	var id = $this.next('input').val();
	
	$.post('paginas/alt_fixo.php',
	{
	id_user:id,
	}, function(res){

	});
	//fim do post
});
});
</script>
<?php
$destrancar = DB::conn()->prepare("SELECT Trancar FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
$destrancar->execute();
$rs = $destrancar->fetch();
$trancar = $rs["Trancar"];

//verificar se esses contrato pertence ao usuario
$sql = DB::conn()->prepare("SELECT * FROM contrato WHERE id_de = '".$_SESSION['ID']."' AND tempo >= '".date('Y-m-d H:i:s')."'");
$sql->execute();

$rs = $sql->fetch();

$id_user2 = $rs['id_de'];

if(isset($_SESSION['Usuario']) && $id_user2 && $trancar == 0){
?>
<span style="font-size:16px; color:#093; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; margin-left:45%;">Contratos</span>
<?php
$movimentacoes = DB::conn()->prepare("SELECT * FROM contrato WHERE id_de = '".$_SESSION['ID']."' ORDER BY ID DESC");
$movimentacoes->execute();

while($mov = $movimentacoes->fetch()){
	$id_user = $mov['id_para'];
	$tempo = $mov['tempo'];
	$fixo = $mov['Fixo'];
	$rem = strtotime(''.$tempo.'') - time();
?>
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

//pegar todos os dados do usuario
$pegar_Dados_user = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = ?");
$pegar_Dados_user->execute(array($id_user));

$rs = $pegar_Dados_user->fetch();
$nome_user = $rs['Usuario'];
$nivel = $rs['Nivel'];
$vip = $rs['VIP'];
$Cargo = $rs['Cargo'];
$time_anterior = $rs['Time'];
$status = $rs['Tempo_Auto'];
$status1 = $rs['Tempo_Penalti'];
$status2 = $rs['Tempo_Falta'];

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
<div id="contratosu">
<div class="nivel">
<img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0>
</div>
<span class="nick"><a href="index.php?pr=perfil&usuario=<?php echo urlencode($nome_user); ?>"><?php echo utf8_encode($nome_user); ?></a></span>
<span class="status">
<?php if($status >= date('Y/m/d H:i:s') && $status1 >= date('Y/m/d H:i:s') && $status2 >= date('Y/m/d H:i:s')){ ?>
<div id="uon"></div>
<?php }else if($status >= date('Y/m/d H:i:s') && $status1 <= date('Y/m/d H:i:s') && $status2 <= date('Y/m/d H:i:s')){ ?>
<div id="uaus"></div>
<?php }else if($status >= date('Y/m/d H:i:s') && $status1 <= date('Y/m/d H:i:s')){ ?>
<div id="uaus"></div>
<?php }else if($status >= date('Y/m/d H:i:s') && $status2 <= date('Y/m/d H:i:s')){ ?>
<div id="uaus"></div>
<?php }else{?>
<div id="uoff"></div>
<?php } ?>
</span>
<span class="vip">
<?php
$day = floor($rem / 86400);
$hr  = floor(($rem % 86400) / 3600);
$min = floor(($rem % 3600) / 60);
$sec = ($rem % 60);
echo 'VIP:';
if($day) echo "$day dias ";
if($hr) echo "$hr horas ";
if($min) echo "$min minutos ";
if($sec) echo "$sec segundos ";
?>
</span>
<div id="fixar">
<?php if($fixo == 1){ ?><form action="" method="post"><input checked="checked" type="checkbox" name="status[]" value="<?php echo $id_user; ?>" /><input type="hidden" name="status[]" value="<?php echo $id_user; ?>" /></form><?php }else{ ?> <form action="" method="post"><input type="checkbox" value="<?php echo $id_user; ?>" name="status[]" /><input type="hidden" name="status[]" value="<?php echo $id_user; ?>" /></form><?php } ?>
</div>
<span class="perg">Fixar?</span>
<span class="mudarv"><a href="index.php?pr=mudar_v&id_de=<?php echo $id_user2; ?>&id_para=<?php echo $id_user; ?>">Mudar</a></span>
</div>
<?php
}
?>
<?php 
}else{echo '<script>location.href="index.php?pr=index"</script>';}
?>    
</div></div></td></tr>
<tr><td><div style="position:relative;top:0;width:623;left:0;height:15px;"><img src='img/layout/menu/botH.png' border=0></div></td></tr>
	</table>
