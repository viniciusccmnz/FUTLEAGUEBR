<?php
$destrancar = DB::conn()->prepare("SELECT Trancar FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
$destrancar->execute();
$rs = $destrancar->fetch();
$trancar = $rs["Trancar"];

if(isset($_SESSION['Usuario']) && $trancar == 0){
?>
</table></div></td><td valign='top' align='center'><table cellpadding='0' cellspacing='0' border=0 height=20>
	<tr><td><div style="position:relative;top:0;left:0;width:623;height:57;"><div style="width:623;height:57;background-image:url('img/layout/menu/topH.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:623;top:10;color:#515151;font-family:litoh;font-size:1em;">Mensagens</div><div style="position:absolute;text-align:center;width:623;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Mensagens</div></div></div></td></tr>
	<tr><td><div style="position:relative;top:0;left:0;width:623;min-height:300px; height:auto !important;  height:300px;background-image:url('img/layout/menu/midH.png');padding-top:8;">
<style type="text/css">
.css_btn_class {
	font-size:13px;
	font-family:Arial;
	font-weight:normal;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #dcdcdc;
	padding:4px 18px;
	text-decoration:none;
	background:-moz-linear-gradient( center top, #f9f9f9 5%, #e9e9e9 100% );
	background:-ms-linear-gradient( top, #f9f9f9 5%, #e9e9e9 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f9f9f9', endColorstr='#e9e9e9');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #f9f9f9), color-stop(100%, #e9e9e9) );
	background-color:#f9f9f9;
	color:#666666;
	display:inline-block;
	text-shadow:1px 1px 0px #ffffff;
 	-webkit-box-shadow:inset 1px 1px 0px 0px #ffffff;
 	-moz-box-shadow:inset 1px 1px 0px 0px #ffffff;
 	box-shadow:inset 1px 1px 0px 0px #ffffff;
	margin-bottom:6px;
	outline:none;
}.css_btn_class:hover {
	background:-moz-linear-gradient( center top, #e9e9e9 5%, #f9f9f9 100% );
	background:-ms-linear-gradient( top, #e9e9e9 5%, #f9f9f9 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e9e9e9', endColorstr='#f9f9f9');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #e9e9e9), color-stop(100%, #f9f9f9) );
	background-color:#e9e9e9;
}
#aling{
	width:400px;
	margin-left:40px;
	float:left;
}

.css_btn_class1 {
	font-size:13px;
	font-family:Arial;
	font-weight:normal;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #dcdcdc;
	padding:4px 14px;
	text-decoration:none;
	background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
	background:-ms-linear-gradient( top, #ededed 5%, #dfdfdf 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #ededed), color-stop(100%, #dfdfdf) );
	background-color:#ededed;
	color:#777777;
	display:inline-block;
	text-shadow:1px 1px 0px #ffffff;
 	-webkit-box-shadow:inset 1px 1px 0px 0px #ffffff;
 	-moz-box-shadow:inset 1px 1px 0px 0px #ffffff;
 	box-shadow:inset 1px 1px 0px 0px #ffffff;
	margin-bottom:6px;
	margin-right:10px;
}.css_btn_class1:hover {
	background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
	background:-ms-linear-gradient( top, #dfdfdf 5%, #ededed 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #dfdfdf), color-stop(100%, #ededed) );
	background-color:#dfdfdf;
}.css_btn_class1:active {
	position:relative;
	top:1px;
}
#aling1{
	float:right;
}
ul#nav-aba{
	list-style:none;
}
#aling li{
	display:inline;
}
.aba{
	display:none;
}
.actives{
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
}.actives:hover {
	background:-moz-linear-gradient( center top, #468ccf 5%, #63b8ee 100% );
	background:-ms-linear-gradient( top, #468ccf 5%, #63b8ee 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#468ccf', endColorstr='#63b8ee');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #468ccf), color-stop(100%, #63b8ee) );
	background-color:#468ccf;
}
.activess{
	margin-top:5px;
	margin-left:120px;
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
#todos{
	width:auto;
}
#fundomsg{
	background:#EAF000;
	width:590px;
	height:auto;
	border-bottom:1px solid #000;
	margin-left:3px;
	padding-top:5px;
	padding-right:5px;
	padding-left:5px;
}

#fundomsg3{
	width:590px;
	height:auto;
	margin-left:3px;
	padding-top:5px;
	padding-right:5px;
	padding-left:5px;
}
#fundomsg3 #nivel{
	margin-left:3px;
	float:left;
}
#fundomsg3 #time{
	float:left;
}
#fundomsg3 .usuario{
	font-family:Liberation;
	font-size:14px;
	margin-top:1px;
	margin-left:-59px;
}
#fundomsg3 .data{
	margin-top:22px;
	margin-left:1px;
	font-size:11px;
	color:#333;
	font-family:Liberation;
	float:left;
}
#fundomsg3 .mensagem{
	font-family:Liberation;
	font-size:15px;
	white-space: normal;
	
}

#fundomsg1{
	background:#00B200;
	width:590px;
	height:auto;
	border-bottom:1px solid #000;
	margin-left:3px;
	padding-top:5px;
	padding-right:5px;
	padding-left:5px;
}
#fundomsg1 #nivel{
	margin-left:3px;
	float:left;
}
#fundomsg1 #time{
	float:left;
}
#fundomsg1 .usuario{
	font-family:Liberation;
	font-size:14px;
	margin-top:1px;
	margin-left:-59px;
}
#fundomsg1 .data{
	margin-top:22px;
	margin-left:1px;
	font-size:11px;
	color:#333;
	font-family:Liberation;
	float:left;
}
#fundomsg1 .mensagem{
	font-family:Liberation;
	font-size:15px;
	white-space: normal;
}

#fundomsg #nivel{
	margin-left:3px;
	float:left;
}
#fundomsg #time{
	float:left;
}
#fundomsg .usuario{
	font-family:Liberation;
	font-size:14px;
	margin-top:1px;
	margin-left:-59px;
}
#fundomsg .data{
	margin-top:22px;
	margin-left:1px;
	font-size:11px;
	color:#333;
	font-family:Liberation;
	float:left;
}

#fundomsg .mensagem{
	font-family:Liberation;
	font-size:15px;
	white-space: normal;
}
.msg{
	font-family:Liberation;
	font-size:15px;
	white-space: normal;
	float:left;	
}
.css_btn_class2 {
	font-size:14px;
	font-family:Arial;
	font-weight:normal;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #83c41a;
	padding:5px 14px;
	text-decoration:none;
	background:-moz-linear-gradient( center top, #b8e356 5%, #a5cc52 100% );
	background:-ms-linear-gradient( top, #b8e356 5%, #a5cc52 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#b8e356', endColorstr='#a5cc52');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #b8e356), color-stop(100%, #a5cc52) );
	background-color:#b8e356;
	color:#ffffff;
	display:inline-block;
	text-shadow:1px 1px 0px #86ae47;
 	-webkit-box-shadow:inset 1px 1px 0px 0px #d9fbbe;
 	-moz-box-shadow:inset 1px 1px 0px 0px #d9fbbe;
 	box-shadow:inset 1px 1px 0px 0px #d9fbbe;
	float:left;
	margin-top:5px;
	margin-left:210px;
}.css_btn_class2:hover {
	background:-moz-linear-gradient( center top, #a5cc52 5%, #b8e356 100% );
	background:-ms-linear-gradient( top, #a5cc52 5%, #b8e356 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#a5cc52', endColorstr='#b8e356');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #a5cc52), color-stop(100%, #b8e356) );
	background-color:#a5cc52;
}.css_btn_class2:active {
	position:relative;
	top:1px;
}

.css_btn_class3 {
	font-size:14px;
	font-family:Arial;
	font-weight:normal;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #d83526;
	padding:5px 14px;
	text-decoration:none;
	background:-moz-linear-gradient( center top, #fc8d83 5%, #e4685d 100% );
	background:-ms-linear-gradient( top, #fc8d83 5%, #e4685d 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fc8d83', endColorstr='#e4685d');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #fc8d83), color-stop(100%, #e4685d) );
	background-color:#fc8d83;
	color:#ffffff;
	display:inline-block;
	text-shadow:1px 1px 0px #b23e35;
 	-webkit-box-shadow:inset 1px 1px 0px 0px #f7c5c0;
 	-moz-box-shadow:inset 1px 1px 0px 0px #f7c5c0;
 	box-shadow:inset 1px 1px 0px 0px #f7c5c0;
	float:right;
	margin-right:200px;
	margin-top:6px;
	
}.css_btn_class3:hover {
	background:-moz-linear-gradient( center top, #e4685d 5%, #fc8d83 100% );
	background:-ms-linear-gradient( top, #e4685d 5%, #fc8d83 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e4685d', endColorstr='#fc8d83');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #e4685d), color-stop(100%, #fc8d83) );
	background-color:#e4685d;
}.css_btn_class3:active {
	position:relative;
	top:1px;
}
#msg-global{
	margin-left:150px;
	margin-bottom:10px;
}
#msg-global textarea{
	width:320px;
}
.tempo{
	font-family:Arial;
	font-weight:normal;
	color:#900;
	font-size:15px;
	font-weight:bold;
	margin-left:70px;
}
.tempo1{
	font-family:Arial;
	font-weight:normal;
	color:#900;
	font-size:15px;
	font-weight:bold;
	margin-left:40px;
	display:none;
}
</style>
<script type="text/javascript">
$(function(){
	$(".css_btn_class:first").addClass("actives").show();
	$(".aba:first").show();
	$("#aling a").click(function(){
	$(".css_btn_class").removeClass('actives');
	$(this).addClass('actives');	
	$(".aba").hide();	
	var div = $(this).attr('href');
	$(div).show();
	return false;
	})
		
})
</script>
<script type="text/javascript">
function marcardesmarcar(){

var itens = document.getElementsByName('check[]');

        if(marcar){
            document.getElementById('select-t t');
        }else{
            document.getElementById('select-t t');
        }

        var i = 0;
        for(i=0; i<itens.length;i++){
            itens[i].checked = marcar;
        }

}
</script>
<script type="text/javascript">
function excluir_todas(){

if( $('#marcar:checked').length == 0 ){
		alert('Selecione almenos 1 mensagem');
	}else if($('#marcar:checked').length == 1){
	var val = new Array();
		
		$('#marcar:checked').each(function(){
			val.push($(this).val());
			
		});

		$.ajax({
			url:'paginas/excluir.php',
			type:'POST',
			data:'check=' + val,
			success:function(data){
			location.href = "index.php?pr=recados";
			}
		});
	}else{
		var qtd = $('#marcar:checked').length;
		if(confirm("Tem certeza que deseja excluir todas as mensagens ?")) {
		var val = new Array();
		
		$('#marcar:checked').each(function(){
			val.push($(this).val());
			
		});

		$.ajax({
			url:'paginas/excluir.php',
			type:'POST',
			data:'check=' + val,
			success:function(data){
			location.href = "index.php?pr=recados";
			}
		});
	}
	}
	return false;

}
</script>
<div style='position:relative;top:0;left:0;width:607;margin-left:9;'>
<div id="aling">
<li><a href="#todos" class="css_btn_class">Todos</a></li>
<li><a href="#privado" class="css_btn_class">Particulares</a></li>
<li><a href="#times" class="css_btn_class">Times</a></li>
<li><a href="#propostas" class="css_btn_class">Propostas</a></li>
<li><a href="#avisos" class="css_btn_class">Avisos</a></li>
<li><a href="#conquistas" class="css_btn_class">Conquistas</a></li>
<li><a href="#global" class="css_btn_class" style="width:135px; text-align:center;">Global</a>
</div>
<div id="aling1">
<a href="" onclick="javascript:excluir_todas();" class="css_btn_class1">Apagar Selecionadas</a><Br/>
<a href="javascript:marcardesmarcar(this.checked);" class="css_btn_class1">Selecionar Todas</a>
</div>
<BR/><BR/><BR/><Br/>
<div id="todos" class="aba">
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

$msg_top1 = DB::conn()->prepare("SELECT * FROM mensagens_usuario WHERE id_para = '".$_SESSION['ID']."' ORDER BY ID DESC");
$msg_top1->execute();

if($msg_top1->rowCount() == 0){
echo '<p style="margin-left:70px; float:left;">Nenhuma mensagem recente.</p>';	
}else{
	while($ds = $msg_top1->fetch()){
		$tipo_msg = $ds['Tipo'];
		$conquist = $ds['Conquista'];
		$timeu = $ds['Time'];
		

?>
<?php
	$pegar_cargo = DB::conn()->prepare("SELECT Cargo FROM usuarios WHERE ID = ?");
	$pegar_cargo->execute(array($ds['id_de']));
	
	$pesquisar_cargo = $pegar_cargo->fetch();
	$Cargo = $pesquisar_cargo['Cargo'];
?>
<?php
	$dados = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$ds['id_de']."'");
	$dados->execute();
	
	$rs = $dados->fetch();
?>
<?php
$dadoT = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '".$rs['Time']."'");
$dadoT->execute();

$rrs = $dadoT->fetch();
$time_nome = $rrs['Time'];
?>
<?php
	 $verificar_adm = DB::conn()->prepare("SELECT ADM FROM usuarios WHERE ID = '".$ds['id_de']."'");
	 $verificar_adm->execute();
	 $fetch = $verificar_adm->fetchObject();
	 $Adm = $fetch->ADM;
?>
<?php
$top_H = DB::conn()->prepare("SELECT Top_Hora FROM usuarios WHERE ID = '".$ds['id_de']."'");
$top_H->execute();

$fetch = $top_H->fetchObject();
$Top_hr = $fetch->Top_Hora;
?>
<?php
$top_R = DB::conn()->prepare("SELECT Top_Rodada FROM usuarios WHERE ID = '".$ds['id_de']."'");
$top_R->execute();

$fetch = $top_R->fetchObject();
$Top_rd = $fetch->Top_Rodada;
?>
<?php
$top_T = DB::conn()->prepare("SELECT Top_Temporada FROM usuarios WHERE ID = '".$ds['id_de']."'");
$top_T->execute();

$fetch = $top_T->fetchObject();
$Top_tm = $fetch->Top_Temporada;
?>
<div id="fundomsg">
<div style="float:right; margin-top:5px;"><input name="check[]" type="checkbox" id="marcar" value="<?php echo $ds['ID']; ?>" />
</div>
<div id="nivel">
<img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0 style="cursor:pointer;">
</div>
<div id="time"><a href="index.php?pr=time&time=<?php echo utf8_encode($time_nome); ?>"><img src="img/gr/Times_p/<?php echo $rs["Time"]; ?>.png" /></a></div>
<span class="usuario" style="font-family:Liberation; font-size:14px; <?php if($ds['Conquista'] == 1 || $ds['Conquista'] == 2 || $ds['Conquista'] == 3){ ?> margin-left:-247px; <?php }elseif($ds['Tipo'] == 'up'){ ?> margin-left:-247px;<?php }elseif($ds['Tipo'] == 'pro'){ ?> margin-left:-290px;<?php } ?>"><?php if($rs['VIP'] >= 1 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><a href="index.php?pr=perfil&nome=<?php echo urlencode($rs["Usuario"]);?>"><span style="color:#0088A1;"><?php echo utf8_encode($rs["Usuario"]); ?></span></a><?php }else{ ?><a href="index.php?pr=perfil&nome=<?php echo urlencode($rs["Usuario"]);?>"><span style="color:#000000;"><?php echo utf8_encode($rs["Usuario"]); ?></span></a><?php } ?><?php
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
     <?php }else{}?></span>
<span class="data"><?php echo $ds['Data']; ?> <?php echo $ds['Hora']; ?></span>
<?php if($ds["Tipo"] == 'p'){ ?>

<span class="mensagem" onClick="javascript:change_responder_<?php echo $ds['id_de'];?>();"  style="cursor:pointer;">
<?php echo utf8_encode(utf8_decode($ds['Mensagem'])); ?>
</span>
<div id="responder_<?php echo $ds['id_de']; ?>" class="resp" style="margin-top:30px; margin-left:160px; display:none;">
<form action="" method="post">
<textarea name="responder" id="privado_<?php echo $ds['id_de']; ?>" cols="50" rows="5" placeholder="Escreva aqui sua mensagem" class="campos3" style="display:none; margin-top:-20px;"></textarea><br/>
</form>
<a href="" class="activess" id="button1_<?php echo $ds['id_de']; ?>" data-id="<?php echo $ds['id_de'];?>" style="display:none; margin-top:-15px;">Responder</a>
</div>
<?php }elseif($ds['Tipo'] == 'h' || $ds['Tipo'] == 'r' || $ds['Tipo'] == 't'){ ?>
<span class="mensagem">
<?php if($ds["Conquista"] <= 3){ ?>
<div id="time" style="margin-left:140px; margin-top:10px; float:left;">
<?php if($ds["Tipo"] == 'h'){ ?>
<img src="img/icons/hora_<?php echo $ds['Conquista']; ?>.gif" style="margin-top:30px; margin-left:25px;" />
<?php }elseif($ds["Tipo"] == 'r'){ ?>
<img src="img/icons/med_<?php echo $ds['Conquista']; ?>.gif" style="margin-top:30px; margin-left:25px;" />
<?php }elseif($ds["Tipo"] == 't'){ ?>
<img src="img/icons/trof_<?php echo $ds['Conquista']; ?>.gif" style="margin-top:30px; margin-left:25px;" />
<?php } ?>
</div>
<?php } ?>
<span class="msg" style="margin-top:20px; text-align:center; margin-left:25px;">
<?php if($ds["Tipo"] == 'h'){ ?>
Parabéns, você recebeu <b><?php echo $ds['dinheiro']; ?></b> de dinheiro pelo <?php echo $ds['Conquista']; ?>º lugar na artilharia da ultima hora.
<?php }elseif($ds['Tipo'] == 'r'){?>
Parabéns, você recebeu <b><?php echo $ds['dinheiro']; ?></b> de dinheiro <?php if($ds['Conquista'] == 1){echo 'e '."<b>1 unidade de vip's</b>";}else{} ?> pelo <?php echo $ds['Conquista']; ?>º lugar na artilharia da ultima rodada.
<?php }elseif($ds["Tipo"] == 't'){ ?>
Parabéns, você recebeu <b><?php echo $ds['dinheiro']; ?></b> de dinheiro <?php if($ds['Conquista'] == 1){echo 'e '."<b>20 unidade de vip's</b>";}elseif($ds["Conquista"] == 2){
echo 'e '."<b>5 unidade de vip's</b>";	
	}elseif($ds["Conquista"] == 3){echo 'e '."<b>4 unidade de vip's</b>";}elseif($ds["Conquista"] == 4){echo 'e '."<b>4 unidade de vip's</b>";}elseif($ds["Conquista"] == 5){echo 'e '."<b>3 unidade de vip's</b>";}elseif($ds["Conquista"] == 6){echo 'e '."<b>3 unidade de vip's</b>";}elseif($ds["Conquista"] == 7){echo 'e '."<b>3 unidade de vip's</b>";}elseif($ds["Conquista"] == 8){echo 'e '."<b>2 unidade de vip's</b>";}elseif($ds["Conquista"] == 9){echo 'e '."<b>2 unidade de vip's</b>";}elseif($ds["Conquista"] == 10){echo 'e '."<b>2 unidade de vip's</b>";}else{} ?> pelo <?php echo $ds['Conquista']; ?>º lugar na artilharia da ultima temporada.
</span>
<?php } ?>
</span>

<?php }elseif($ds['Tipo'] == 'up'){?>
<span class="mensagem">
<div id="time" style="margin-left:140px; margin-top:10px; float:left;">
<img src="img/icons/<?php echo $ds['Nivel']; ?>.gif" style="margin-top:40px; margin-left:25px;" />
</div>
<span class="msg" style="margin-top:20px; text-align:center; margin-left:90px;">
Parabéns você passou para o nível <?php echo $ds['Nivel']; ?>, agora você é <b>
<?php
switch($ds["Nivel"]){
	case 1: echo 'Aprendiz'; 
	break;
	case 2: echo 'Perna de Pau'; 
	break;
	case 3: echo 'Amador'; 
	break;
	case 4: echo 'Junior Sub-12'; 
	break;
	case 5: echo 'Junior Sub-16'; 
	break;
	case 6: echo 'Estrela'; 
	break;
	case 7: echo 'Revelação'; 
	break;
	case 8: echo 'Boleiro'; 
	break;
	case 9: echo 'Intermedio'; 
	break;
	case 10: echo 'Driblador Intermedio'; 
	break;
	case 11: echo 'Craque Intermedio'; 
	break;
	case 12: echo 'Artilheiro Intermedio'; 
	break;
	case 13: echo 'Habilidoso'; 
	break;
	case 14: echo 'Gênio'; 
	break;
	case 15: echo 'Chuteira de Bronze'; 
	break;
	case 16: echo 'Driblador'; 
	break;
	case 17: echo 'Craque'; 
	break;
	case 18: echo 'Artilheiro'; 
	break;
	case 19: echo 'Inovador'; 
	break;
	case 20: echo 'Experiente'; 
	break;
	case 21: echo 'Chuteira Prateada'; 
	break;
	case 22: echo 'Fenómeno'; 
	break;
	case 23: echo 'Grande Driblador'; 
	break;
	case 24: echo 'Grande Craque'; 
	break;
	case 25: echo 'Grande Artilheiro'; 
	break;
	case 26: echo 'Fabuloso'; 
	break;
	case 27: echo 'Berserk'; 
	break;
	case 28: echo 'Chuteira Dourada'; 
	break;
	case 29: echo 'Lendario Junior'; 
	break;
	case 30: echo 'Artilheiro Gold'; 
	break;
	case 31: echo 'Lendario'; 
	break;
	case 32: echo 'Nao definido'; 
	break;
	}
?>
 </b>
</span>
</span>
<?php }elseif($ds['Tipo'] == 'vip'){ ?>
<span class="mensagem">
<p style="text-align:left; white-space: normal;">
Você recebeu <strong><?php echo $ds['VIP']; ?> unidades de VIP's.</strong>
</p>
</span>
<?php }elseif($ds['Tipo'] == 'av'){?>
<span class="mensagem">
<?php echo utf8_encode(utf8_decode($ds['Mensagem'])); ?>
</span>
<?php }elseif($ds['Tipo'] == 'pro'){ ?>
<?php
$query = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$ds['id_de']."'");
$query->execute();

$qr = $query->fetch();
$timeuser = $qr['Time'];
?>
<?php
$query = DB::conn()->prepare("SELECT * FROM times WHERE ID = '".$timeuser."'");
$query->execute();

$qr2 = $query->fetch();
?>
<?php
$query = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
$query->execute();

$qr3 = $query->fetch();
$tim = $qr3['Time'];
?>
<span class="mensagem">
<div id="time" style="margin-left:140px; margin-top:10px; float:left;">
<img src="img/gr/Times_g/<?php echo $timeuser; ?>.png" width="90" height="90" style="margin-top:15px;" />
</div>
<span class="msg">
<?php
if($timeu == $tim){
?>
O usuário <strong><?php echo utf8_encode(urlencode($qr['Usuario'])); ?></strong>, está lhe oferecendo uma <strong>Renovação de Contrato</strong> do time <strong><?php echo $qr2['Time'];?></strong>. Deseja aceitar ?
<?php }else{ ?>
O usuário <strong><?php echo utf8_encode(urlencode($qr['Usuario'])); ?></strong>, está lhe oferecendo uma Proposta para o time <strong><?php echo $qr2['Time'];?></strong>. Deseja aceitar ?
<?php } ?>
</span>
<a href="index.php?pr=ac_pro&id_de=<?php echo $ds['id_de']; ?>&id_para=<?php echo $ds['id_para']; ?>&idtime=<?php echo $ds['Time']; ?>" class="css_btn_class2">Aceitar</a>
<a href="index.php?pr=rc_pro&id_para=<?php echo $ds['id_para']; ?>" class="css_btn_class3">Recusar</a>
</span>
<?php } ?>
<div style="clear:both; margin-bottom:20px;"></div>
</div>
<?php }}?>
</div>
<div id="privado" class="aba" >
<?php
if(isset($_SESSION['ID'])){
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



$msg_top1 = DB::conn()->prepare("SELECT * FROM mensagens_usuario WHERE id_para = '".$_SESSION['ID']."' AND Tipo = 'p' ORDER BY ID DESC");
$msg_top1->execute();

if($msg_top1->rowCount() == 0){
echo '<p style="margin-left:70px; float:left;">Nenhuma mensagem particular recente.</p>';	
}else{
	echo '<form method="post">';
	while($ds = $msg_top1->fetch()){
		$tipo_msg = $ds['Tipo'];
		

?>
<?php
	$pegar_cargo = DB::conn()->prepare("SELECT Cargo FROM usuarios WHERE ID = ?");
	$pegar_cargo->execute(array($ds['id_de']));
	
	$pesquisar_cargo = $pegar_cargo->fetch();
	$Cargo = $pesquisar_cargo['Cargo'];
?>
<?php
	$dados = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$ds['id_de']."'");
	$dados->execute();
	
	$rs = $dados->fetch();
?>
<?php
$dadoT = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '".$rs['Time']."'");
$dadoT->execute();

$rrs = $dadoT->fetch();
$time_nome = $rrs['Time'];
?>
<?php
	 $verificar_adm = DB::conn()->prepare("SELECT ADM FROM usuarios WHERE ID = '".$ds['id_de']."'");
	 $verificar_adm->execute();
	 $fetch = $verificar_adm->fetchObject();
	 $Adm = $fetch->ADM;
?>
<?php
$top_H = DB::conn()->prepare("SELECT Top_Hora FROM usuarios WHERE ID = '".$ds['id_de']."'");
$top_H->execute();

$fetch = $top_H->fetchObject();
$Top_hr = $fetch->Top_Hora;
?>
<?php
$top_R = DB::conn()->prepare("SELECT Top_Rodada FROM usuarios WHERE ID = '".$ds['id_de']."'");
$top_R->execute();

$fetch = $top_R->fetchObject();
$Top_rd = $fetch->Top_Rodada;
?>
<?php
$top_T = DB::conn()->prepare("SELECT Top_Temporada FROM usuarios WHERE ID = '".$ds['id_de']."'");
$top_T->execute();

$fetch = $top_T->fetchObject();
$Top_tm = $fetch->Top_Temporada;
?>
<div id="fundomsg">
<div style="float:right; margin-top:5px;"><input name="check[]" type="checkbox" id="marcar" value="<?php echo $ds['ID']; ?>" />
</div>
<div id="nivel">
<img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0 style="cursor:pointer;">
</div>
<div id="time"><a href="index.php?pr=time&time=<?php echo utf8_encode($time_nome); ?>"><img src="img/gr/Times_p/<?php echo $rs["Time"]; ?>.png" /></a></div>
<span class="usuario" style="font-family:Liberation; font-size:14px;">
<?php if($rs['VIP'] >= 1 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><a href="index.php?pr=perfil&nome=<?php echo urlencode($rs["Usuario"]);?>"><span style="color:#0088A1;"><?php echo utf8_encode($rs["Usuario"]); ?></span></a><?php }else{ ?><a href="index.php?pr=perfil&nome=<?php echo urlencode($rs["Usuario"]);?>"><span style="color:#000000;"><?php echo utf8_encode($rs["Usuario"]); ?></span></a><?php } ?><?php
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
     <?php }else{}?>
</span>
<span class="data"><?php echo $ds['Data']; ?> <?php echo $ds['Hora']; ?></span>
<span class="mensagem" onClick="javascript:change_responder_<?php echo $ds['id_de'];?>();"  style="cursor:pointer;">
<?php echo utf8_encode(utf8_decode($ds['Mensagem'])); ?>
</span>
<div id="responder_<?php echo $ds['id_de']; ?>" class="resp" style="margin-top:30px; margin-left:160px; display:none;">
<form action="" method="post">
<textarea name="responder" id="privado_<?php echo $ds['id_de']; ?>" cols="50" rows="5" placeholder="Escreva aqui sua mensagem" class="campos3" style="display:none;"></textarea><br/>
</form>
<a href="" class="activess" id="button1_<?php echo $ds['id_de']; ?>" data-id="<?php echo $ds['id_de'];?>" style="display:none;">Responder</a>
</div>
<div style="clear:both; margin-bottom:20px;"></div>
</div>
<script type="text/javascript">
responder<?php echo $ds['id_de']; ?> = 0;
function change_responder_<?php echo $ds['id_de']; ?>() {

		if (responder<?php echo $ds['id_de']; ?> == 0) {
			document.getElementById('responder_<?php echo $ds['id_de']; ?>').style.display = "block";
			document.getElementById('button1_<?php echo $ds['id_de']; ?>').style.display = "block";
			document.getElementById('button1_<?php echo $ds['id_de']; ?>').style.width = "61px";
			document.getElementById('privado_<?php echo $ds['id_de']; ?>').style.display = "block";
			responder<?php echo $ds['id_de']; ?> = 1;
		} else {
			document.getElementById('button1_<?php echo $ds['id_de']; ?>').style.display = "none";
			document.getElementById('privado_<?php echo $ds['id_de']; ?>').style.display = "none";
			document.getElementById('responder_<?php echo $ds['id_de']; ?>').style.display = "none";
			responder<?php echo $ds['id_de']; ?> = 0;
		}

}

//privade

$('#button1_<?php echo $ds['id_de']; ?>').click(function(e){
	e.preventDefault();
	
	var id_de = $(this).attr('data-id');
	var msg_p = document.getElementById('privado_<?php echo $ds['id_de']; ?>').value;
	
	$.ajax({
			method: 'POST',
			url:"paginas/msg-pri.php",
			data: {id_de:id_de, msg_p:msg_p},
			dataType:"json",
			success: function(retorno){
				if(retorno.status == 'ok'){
					document.getElementById('responder_<?php echo $ds['id_de']; ?>').style.display = "none";
				}
			}
	});
	
	return false;
})
</script>
<?php }}} ?>
</div>
<div id="times" class="aba">
<?php
if(isset($_SESSION['ID'])){
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
//pegar o id do time do usuario
$pegar_timeU = DB::conn()->prepare("SELECT Time FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
$pegar_timeU->execute();

$dadoU = $pegar_timeU->fetch();
$idU = $dadoU['Time'];


$msg_top1 = DB::conn()->prepare("SELECT * FROM mensagens_times WHERE  id_time = '".$idU."' ORDER BY ID DESC");
$msg_top1->execute();

if($msg_top1->rowCount() == 0){
echo '<p style="margin-left:70px; float:left;">Nenhuma mensagem do time recente.</p>';	
}else{
	echo '<form method="post">';
	while($ds = $msg_top1->fetch()){
		
		

?>
<?php
	$pegar_cargo = DB::conn()->prepare("SELECT Cargo FROM usuarios WHERE ID = ?");
	$pegar_cargo->execute(array($ds['id_de']));
	
	$pesquisar_cargo = $pegar_cargo->fetch();
	$Cargo = $pesquisar_cargo['Cargo'];
?>
<?php
	$dados = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$ds['id_de']."'");
	$dados->execute();
	
	$rs = $dados->fetch();
?>
<?php
$dadoT = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '".$rs['Time']."'");
$dadoT->execute();

$rrs = $dadoT->fetch();
$time_nome = $rrs['Time'];
?>
<?php
	 $verificar_adm = DB::conn()->prepare("SELECT ADM FROM usuarios WHERE ID = '".$ds['id_de']."'");
	 $verificar_adm->execute();
	 $fetch = $verificar_adm->fetchObject();
	 $Adm = $fetch->ADM;
?>
<?php
$top_H = DB::conn()->prepare("SELECT Top_Hora FROM usuarios WHERE ID = '".$ds['id_de']."'");
$top_H->execute();

$fetch = $top_H->fetchObject();
$Top_hr = $fetch->Top_Hora;
?>
<?php
$top_R = DB::conn()->prepare("SELECT Top_Rodada FROM usuarios WHERE ID = '".$ds['id_de']."'");
$top_R->execute();

$fetch = $top_R->fetchObject();
$Top_rd = $fetch->Top_Rodada;
?>
<?php
$top_T = DB::conn()->prepare("SELECT Top_Temporada FROM usuarios WHERE ID = '".$ds['id_de']."'");
$top_T->execute();

$fetch = $top_T->fetchObject();
$Top_tm = $fetch->Top_Temporada;
?>
<div id="fundomsg">
<div id="nivel">
<img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0 style="cursor:pointer;">
</div>
<div id="time"><a href="index.php?pr=time&time=<?php echo utf8_encode($time_nome); ?>"><img src="img/gr/Times_p/<?php echo $rs["Time"]; ?>.png" /></a></div>
<span class="usuario" style="font-family:Liberation; font-size:14px;"><?php if($rs['VIP'] >= 1 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><a href="index.php?pr=perfil&nome=<?php echo utf8_encode(urlencode($rs["Usuario"]));?>"><span style="color:#0088A1;"><?php echo utf8_encode($rs["Usuario"]); ?></span></a><?php }else{ ?><a href="index.php?pr=perfil&nome=<?php echo urlencode($rs["Usuario"]);?>"><span style="color:#000000;"><?php echo urlencode($rs["Usuario"]); ?></span></a><?php } ?><?php
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
     <?php }else{}?></span>
<span class="data"><?php echo $ds['data']; ?> <?php echo $ds['hora']; ?></span>
<span class="mensagem">
<?php echo utf8_encode($ds['mensagem']); ?>
</span>
<div style="clear:both; margin-bottom:20px;"></div>
</div>
<?php }}}?>
</div>
<div id="propostas" class="aba">
<?php
if(isset($_SESSION['ID'])){
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



$msg_top1 = DB::conn()->prepare("SELECT * FROM mensagens_usuario WHERE id_para = '".$_SESSION['ID']."'AND Tipo = 'pro' ORDER BY ID DESC");
$msg_top1->execute();

if($msg_top1->rowCount() == 0){
echo '<p style="margin-left:70px; float:left;">Nenhuma proposta recente.</p>';	
}else{
	echo '<form method="post">';
	while($ds = $msg_top1->fetch()){
		$tipo_msg = $ds['Tipo'];
		$timeu = $ds['Time'];
		$eu = $ds['id_para'];
		

?>
<?php
$sql = DB::conn()->prepare("SELECT * FROM mensagens_usuario WHERE id_para = '".$_SESSION['ID']."'AND Tipo = 'pro' ORDER BY ID DESC");
$sql->execute();
$qr = $sql->fetch();
$Timeeu = $qr['Time'];
?>
<?php
	$pegar_cargo = DB::conn()->prepare("SELECT Cargo FROM usuarios WHERE ID = ?");
	$pegar_cargo->execute(array($ds['id_de']));
	
	$pesquisar_cargo = $pegar_cargo->fetch();
	$Cargo = $pesquisar_cargo['Cargo'];
?>
<?php
	$dados = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$ds['id_de']."'");
	$dados->execute();
	
	$rs = $dados->fetch();
	$timeusuario = $rs['Time'];
?>
<?php
$dadoT = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '".$rs['Time']."'");
$dadoT->execute();

$rrs = $dadoT->fetch();
$time_nome = $rrs['Time'];
?>
<?php
	 $verificar_adm = DB::conn()->prepare("SELECT ADM FROM usuarios WHERE ID = '".$ds['id_de']."'");
	 $verificar_adm->execute();
	 $fetch = $verificar_adm->fetchObject();
	 $Adm = $fetch->ADM;
?>
<?php
$top_H = DB::conn()->prepare("SELECT Top_Hora FROM usuarios WHERE ID = '".$ds['id_de']."'");
$top_H->execute();

$fetch = $top_H->fetchObject();
$Top_hr = $fetch->Top_Hora;
?>
<?php
$top_R = DB::conn()->prepare("SELECT Top_Rodada FROM usuarios WHERE ID = '".$ds['id_de']."'");
$top_R->execute();

$fetch = $top_R->fetchObject();
$Top_rd = $fetch->Top_Rodada;
?>
<?php
$top_T = DB::conn()->prepare("SELECT Top_Temporada FROM usuarios WHERE ID = '".$ds['id_de']."'");
$top_T->execute();

$fetch = $top_T->fetchObject();
$Top_tm = $fetch->Top_Temporada;
?>
<?php
$query = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$ds['id_de']."'");
$query->execute();

$qr = $query->fetch();
$timeuser = $qr['Time'];
?>
<?php
$query = DB::conn()->prepare("SELECT * FROM times WHERE ID = '".$timeuser."'");
$query->execute();

$qr2 = $query->fetch();
?>
<div id="fundomsg1">
<div style="float:right; margin-right:2px; margin-top:5px;"><input name="check[]" type="checkbox" id="marcar" value="1" />
<input type="hidden" name="check[]" value="1" />
</div>
<div id="nivel">
<img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0 style="cursor:pointer;">
</div>
<div id="time"><a href="index.php?pr=time&time=<?php echo utf8_encode($time_nome); ?>"><img src="img/gr/Times_p/<?php echo $timeuser; ?>.png" /></a></div>
<span class="usuario" style="font-family:Liberation; font-size:14px;"><?php if($rs['VIP'] >= 1 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><span style="color:#0088A1;"><?php echo urlencode($rs["Usuario"]); ?></span><?php }else{ ?><span style="color:#000000;"><?php echo urlencode($rs["Usuario"]); ?></span><?php } ?><?php
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
     <?php }else{}?></span>
<span class="data"><?php echo $ds['Data']; ?> <?php echo $ds['Hora']; ?></span>
<span class="mensagem">
<div id="time" style="margin-left:140px; margin-top:10px; float:left;">
<img src="img/gr/Times_g/<?php echo $ds['Time']; ?>.png" width="90" height="90" style="margin-top:15px;" />
</div>
<span class="msg">
<?php
if($timeu == $Timeeu){
?>
O usuário <strong><?php echo utf8_encode(urlencode($qr['Usuario'])); ?></strong>, está lhe oferecendo uma <strong>renovação de contrato</strong> do time <strong><?php echo $qr2['Time'];?></strong>. Deseja aceitar ?
<?php }else{ ?>
O usuário <strong><?php echo utf8_encode(urlencode($qr['Usuario'])); ?></strong>, está lhe oferecendo uma proposta para o time <strong><?php echo $qr2['Time'];?></strong>. Deseja aceitar ?
<?php } ?>
</span>
<a href="index.php?pr=ac_pro&id_de=<?php echo $ds['id_de']; ?>&id_para=<?php echo $ds['id_para']; ?>&idtime=<?php echo $ds['Time']; ?>" class="css_btn_class2">Aceitar</a>
<a href="index.php?pr=rc_pro&id_para=<?php echo $ds['id_para']; ?>" class="css_btn_class3">Recusar</a>
</span>
<div style="clear:both; margin-bottom:20px;"></div>
</div>
<?php }}}?>
</div> 
<div id="avisos" class="aba">
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
//pegar o id do time do usuario
$pegar_timeU = DB::conn()->prepare("SELECT Time FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
$pegar_timeU->execute();

$dadoU = $pegar_timeU->fetch();
$idU = $dadoU['Time'];


$msg_top1 = DB::conn()->prepare("SELECT * FROM mensagens_usuario  WHERE id_para = '".$_SESSION['ID']."' AND Tipo = 'av' ORDER BY ID DESC LIMIT 30");
$msg_top1->execute();

if($msg_top1->rowCount() == 0){
echo '<p style="margin-left:70px; float:left;">Nenhum aviso recente.</p>';	
}else{
	echo '<form method="post">';
	while($ds = $msg_top1->fetch()){
?>
<?php
$dadosuser = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
$dadosuser->execute();

while($row = $dadosuser->fetch()){
?>
<?php
	$pegar_cargo = DB::conn()->prepare("SELECT Cargo FROM usuarios WHERE ID = ?");
	$pegar_cargo->execute(array($ds['id_de']));
	
	$pesquisar_cargo = $pegar_cargo->fetch();
	$Cargo = $pesquisar_cargo['Cargo'];
?>
<?php
	$dados = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$ds['id_de']."'");
	$dados->execute();
	
	$rs = $dados->fetch();
?>
<?php
$dadoT = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '".$rs['Time']."'");
$dadoT->execute();

$rrs = $dadoT->fetch();
$time_nome = $rrs['Time'];
?>
<?php
	 $verificar_adm = DB::conn()->prepare("SELECT ADM FROM usuarios WHERE ID = '".$ds['id_de']."'");
	 $verificar_adm->execute();
	 $fetch = $verificar_adm->fetchObject();
	 $Adm = $fetch->ADM;
?>
<?php
$top_H = DB::conn()->prepare("SELECT Top_Hora FROM usuarios WHERE ID = '".$ds['id_de']."'");
$top_H->execute();

$fetch = $top_H->fetchObject();
$Top_hr = $fetch->Top_Hora;
?>
<?php
$top_R = DB::conn()->prepare("SELECT Top_Rodada FROM usuarios WHERE ID = '".$ds['id_de']."'");
$top_R->execute();

$fetch = $top_R->fetchObject();
$Top_rd = $fetch->Top_Rodada;
?>
<?php
$top_T = DB::conn()->prepare("SELECT Top_Temporada FROM usuarios WHERE ID = '".$ds['id_de']."'");
$top_T->execute();

$fetch = $top_T->fetchObject();
$Top_tm = $fetch->Top_Temporada;
?>
<div id="fundomsg">
<div style="float:right; margin-top:5px;"><input name="check[]" type="checkbox" id="marcar" value="1" />
<input type="hidden" name="check[]" value="1" />
</div>
<div id="nivel"><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0 style="cursor:pointer;"></div>
<div id="time"><a href="index.php?pr=time&time=<?php echo utf8_encode($time_nome); ?>"><img src="img/gr/Times_p/<?php echo $rs["Time"]; ?>.png" /></a></div>
<span class="usuario" style="font-family:Liberation; font-size:14px;"><?php if($rs['VIP'] >= 1 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><a href="index.php?pr=perfil&nome=<?php echo utf8_encode($rs["Usuario"]);?>"><span style="color:#0088A1;"><?php echo urlencode($rs["Usuario"]); ?></span></a><?php }else{ ?><a href="index.php?pr=perfil&nome=<?php echo urlencode($rs["Usuario"]);?>"><span style="color:#000000;"><?php echo utf8_encode($rs["Usuario"]); ?></span></a><?php } ?><?php
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
     <?php }else{}?></span>
<span class="data"><?php echo $ds['Data']; ?> <?php echo $ds['Hora']; ?></span>
<span class="mensagem">
<?php echo utf8_encode($ds['Mensagem']); ?>
</span>
<div style="clear:both; margin-bottom:20px;"></div>
</div>
<?php }}}?>
</div>
<div id="conquistas" class="aba">
<?php
if(isset($_SESSION['ID'])){
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

$msg_top1 = DB::conn()->prepare("SELECT * FROM mensagens_usuario WHERE id_para = '".$_SESSION['ID']."'AND Conquista > 0 ORDER BY ID DESC");
$msg_top1->execute();

if($msg_top1->rowCount() == 0){
echo '<p style="margin-left:20px; float:left;">Nenhuma mensagem recente.</p>';	
}else{
	echo '<form method="post">';
	while($ds = $msg_top1->fetch()){
		$tipo_msg = $ds['Tipo'];
?>
<?php
	$pegar_cargo = DB::conn()->prepare("SELECT Cargo FROM usuarios WHERE ID = ?");
	$pegar_cargo->execute(array($ds['id_de']));
	
	$pesquisar_cargo = $pegar_cargo->fetch();
	$Cargo = $pesquisar_cargo['Cargo'];
?>
<?php
	$dados = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$ds['id_de']."'");
	$dados->execute();
	
	$rs = $dados->fetch();
?>
<?php
$dadoT = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '".$rs['Time']."'");
$dadoT->execute();

$rrs = $dadoT->fetch();
$time_nome = $rrs['Time'];
?>
<?php
	 $verificar_adm = DB::conn()->prepare("SELECT ADM FROM usuarios WHERE ID = '".$ds['id_de']."'");
	 $verificar_adm->execute();
	 $fetch = $verificar_adm->fetchObject();
	 $Adm = $fetch->ADM;
?>
<?php
$top_H = DB::conn()->prepare("SELECT Top_Hora FROM usuarios WHERE ID = '".$ds['id_de']."'");
$top_H->execute();

$fetch = $top_H->fetchObject();
$Top_hr = $fetch->Top_Hora;
?>
<?php
$top_R = DB::conn()->prepare("SELECT Top_Rodada FROM usuarios WHERE ID = '".$ds['id_de']."'");
$top_R->execute();

$fetch = $top_R->fetchObject();
$Top_rd = $fetch->Top_Rodada;
?>
<?php
$top_T = DB::conn()->prepare("SELECT Top_Temporada FROM usuarios WHERE ID = '".$ds['id_de']."'");
$top_T->execute();

$fetch = $top_T->fetchObject();
$Top_tm = $fetch->Top_Temporada;
?>
<div id="fundomsg">
<div style="float:right; margin-top:5px;"><input name="check[]" type="checkbox" id="marcar" value="1" />
</div>
<div id="nivel"><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0 style="cursor:pointer;"></div>
<div id="time"><a href="index.php?pr=time&time=<?php echo utf8_encode($time_nome); ?>"><img src="img/gr/Times_p/<?php echo $rs["Time"]; ?>.png" /></a></div>
<span class="usuario" style="font-family:Liberation; font-size:14px; <?php if($ds['Conquista'] == 1 || $ds['Conquista'] == 2 || $ds['Conquista'] == 3){ ?> margin-left:-247px; <?php } ?>"><?php if($rs['VIP'] >= 1){ ?><a href="index.php?pr=perfil&nome=<?php echo urlencode($rs["Usuario"]);?>"><span style="color:#0088A1;"><?php echo utf8_encode($rs["Usuario"]); ?></span></a><?php }else{ ?><a href="index.php?pr=perfil&nome=<?php echo urlencode($rs["Usuario"]);?>"><span style="color:#000000;"><?php echo utf8_encode($rs["Usuario"]); ?></span></a><?php } ?><?php
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
     <?php }else{}?></span>
<span class="data"><?php echo $ds['Data']; ?> <?php echo $ds['Hora']; ?></span>
<span class="mensagem">
<?php if($ds["Conquista"] <= 3){ ?>
<div id="time" style="margin-left:140px; margin-top:10px; float:left;">
<?php if($ds["Tipo"] == 'h'){ ?>
<img src="img/icons/hora_<?php echo $ds['Conquista']; ?>.gif" style="margin-top:30px; margin-left:25px;" />
<?php }elseif($ds["Tipo"] == 'r'){ ?>
<img src="img/icons/med_<?php echo $ds['Conquista']; ?>.gif" style="margin-top:30px; margin-left:25px;" />
<?php }elseif($ds["Tipo"] == 't'){ ?>
<img src="img/icons/trof_<?php echo $ds['Conquista']; ?>.gif" style="margin-top:30px; margin-left:25px;" />
<?php } ?>
</div>
<?php } ?>
<span class="msg" style="margin-top:20px; text-align:center; margin-left:25px;">
<?php if($ds["Tipo"] == 'h'){ ?>
Parabéns, você recebeu <b><?php echo $ds['dinheiro']; ?></b> de dinheiro pelo <?php echo $ds['Conquista']; ?>º lugar na artilharia da ultima hora.
<?php }elseif($ds['Tipo'] == 'r'){?>
Parabéns, você recebeu <b><?php echo $ds['dinheiro']; ?></b> de dinheiro <?php if($ds['Conquista'] == 1){echo 'e '."<b>1 unidade de vip's</b>";}else{} ?> pelo <?php echo $ds['Conquista']; ?>º lugar na artilharia da ultima rodada.
<?php }elseif($ds["Tipo"] == 't'){ ?>
Parabéns, você recebeu <b><?php echo $ds['dinheiro']; ?></b> de dinheiro <?php if($ds['Conquista'] == 1){echo 'e '."<b>20 unidade de vip's</b>";}elseif($ds["Conquista"] == 2){
echo 'e '."<b>5 unidade de vip's</b>";	
	}elseif($ds["Conquista"] == 3){echo 'e '."<b>4 unidade de vip's</b>";}elseif($ds["Conquista"] == 4){echo 'e '."<b>4 unidade de vip's</b>";}elseif($ds["Conquista"] == 5){echo 'e '."<b>3 unidade de vip's</b>";}elseif($ds["Conquista"] == 6){echo 'e '."<b>3 unidade de vip's</b>";}elseif($ds["Conquista"] == 7){echo 'e '."<b>3 unidade de vip's</b>";}elseif($ds["Conquista"] == 8){echo 'e '."<b>2 unidade de vip's</b>";}elseif($ds["Conquista"] == 9){echo 'e '."<b>2 unidade de vip's</b>";}elseif($ds["Conquista"] == 10){echo 'e '."<b>2 unidade de vip's</b>";}else{} ?> pelo <?php echo $ds['Conquista']; ?>º lugar na artilharia da ultima temporada.
<?php } ?>
</span>
</span>
<div style="clear:both; margin-bottom:20px;"></div>
</div>
<?php }}} ?>
</div>
<div id="global" class="aba">
<script type="text/javascript">
$(function(){
	$("#button").click(function(event){
		event.preventDefault();
		var mensagem = $("#msgg").val();
		
		if($('#msgg').val()==$('#msgg').attr('placeholder')){
		alert('Digite algo...');	
		}else{
		$.ajax({
			method: 'POST',
			url:"paginas/msg-global.php",
			data: {mensagem:mensagem},
			dataType:"json",
			success: function(retorno){
				if(retorno.status == 'ok'){
					$(".form").hide();
					var msg = '<div id="fundomsg3">';
						msg += '<div id="nivel"><img src="img/icons/' +retorno.nivel+ '.gif" /></div>';
						msg += '<div id="time"><img src="img/gr/Times_p/' +retorno.time+ '.png" /></div>';
						if(retorno.vip == 1){
							msg += '<a href="index.php?pr=perfil&nome='+retorno.usuario+'"><span class="usuario" style="color:0189a2;">' +retorno.usuario+ '</span></a>';
						}else{
						msg += '<a href="index.php?pr=perfil&nome='+retorno.usuario+'"><span class="usuario">' +retorno.usuario+ '</span></a>';	
						}
						msg += '<span class="data">' +retorno.data+ ' '+retorno.hora+'</span>';
						msg += '<span class="mensagem">' +retorno.mensagem+ '</span>';
						msg += '<div style="clear:both; margin-bottom:20px;"></div>';
						msg += '</div>';
						$("#ex").prepend(msg);
						$(".form").hide();
						document.getElementById('msgg').value = '';
												
						var interval = setInterval(function() {
						var data = new Date(retorno.tempo_global);
						var now = new Date();
						var timeDiff = data.getTime() - now.getTime();
						var seconds = Math.floor(timeDiff / 1000);
						
						$('.tempo').html(seconds);
						
						if(now >= data){
						$('.tempo').hide();
						$('.form').show();
						clearInterval(interval);
						}else{
						$('.form').hide();	
						$('.tempo').show();	
						}
						},1000);
					}else{
					alert('Ocorreu um erro');	
					}
				}
			})
			
		}
	});
	
	var interval1 = setInterval(function() {
	var tempo_global = $(".tempo").attr('data-id');
	var data1 = new Date(tempo_global);
	var now1 = new Date();
	var timeDiff1 = data1.getTime() - now1.getTime();
	var seconds1 = Math.floor(timeDiff1 / 1000);
	
	if(data1 <= now1){
	clearInterval(interval1);
	$('.tempo').hide();
	$('.form').show();
	}else{
	$(this).hide();	
	}
	$('.tempo').html(seconds1);
	
	
	},1000);
	//block
	var interval2 = setInterval(function() {
		
	var tempo_block = $('.tempo1').attr('data-id');
	var now2 = new Date();
	var tempo = new Date(tempo_block);
	var timeDiff2 = tempo.getTime() - now2.getTime();
	var secondss = Math.floor(timeDiff2 / 1000);
	var minutes = Math.floor(secondss / 60);
	minutes %= 60;
	secondss %= 60;
	
	if(secondss < 10){
	secondss = "0" + secondss;	
	}
	
	if(tempo > now2){
	$('.form').hide();
	$('.tempo').hide();
	$('.tempo1').show();
	$('.tempo1').html('Chat bloqueado por ' +minutes + ':' + secondss);	
	}else{
	clearInterval(interval2);
	$('.tempo1').hide();
	$('.form').show();	
	}
	
	},1000);
	
})
</script>
<div id="msg-global">
<?php
$query = DB::conn()->prepare("SELECT tempo_global, block FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
$query->execute();

$qr = $query->fetch();
$tempo_global = $qr['tempo_global'];
$tempo_block  = $qr['block'];
?>
<span class="tempo" data-id="<?php echo $tempo_global; ?>"></span>
<span class="tempo1" data-id="<?php echo $tempo_block; ?>"></span>
<?php
if($tempo_global <= date('Y-m-d H:i:s')){
?>
<div class="form">
<form action="" method="post">
<textarea name="mensagem" id="msgg" cols="50" rows="5" placeholder="Escreva aqui sua mensagem" class="campos3"></textarea><br/>
</form>
<a href="" class="activess" id="button">Enviar</a>
</div>
<?php } ?>
</div>
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
//pegar o id do time do usuario
$pegar_timeU = DB::conn()->prepare("SELECT Time FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
$pegar_timeU->execute();

$dadoU = $pegar_timeU->fetch();
$idU = $dadoU['Time'];


$msg_top1 = DB::conn()->prepare("SELECT * FROM mensagens_global ORDER BY ID DESC LIMIT 100");
$msg_top1->execute();

if($msg_top1->rowCount() == 0){
echo '<p style="margin-left:20px; float:left;">Nenhuma mensagem GLOBAL recente.</p>';	
}else{
	echo '<form method="post">';
	while($ds = $msg_top1->fetch()){
		$id_de = $ds['id_de'];
?>
<?php
$dadosuser = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
$dadosuser->execute();

while($row = $dadosuser->fetch()){
?>
<?php
	$pegar_cargo = DB::conn()->prepare("SELECT Cargo FROM usuarios WHERE ID = ?");
	$pegar_cargo->execute(array($ds['id_de']));
	
	$pesquisar_cargo = $pegar_cargo->fetch();
	$Cargo = $pesquisar_cargo['Cargo'];
?>
<?php
	$dados = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$ds['id_de']."'");
	$dados->execute();
	
	$rs = $dados->fetch();
?>
<?php
$dadoT = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '".$rs['Time']."'");
$dadoT->execute();

$rrs = $dadoT->fetch();
$time_nome = $rrs['Time'];
?>
<?php
	 $verificar_adm = DB::conn()->prepare("SELECT ADM FROM usuarios WHERE ID = '".$ds['id_de']."'");
	 $verificar_adm->execute();
	 $fetch = $verificar_adm->fetchObject();
	 $Adm = $fetch->ADM;
?>
<?php
$top_H = DB::conn()->prepare("SELECT Top_Hora FROM usuarios WHERE ID = '".$ds['id_de']."'");
$top_H->execute();

$fetch = $top_H->fetchObject();
$Top_hr = $fetch->Top_Hora;
?>
<?php
$top_R = DB::conn()->prepare("SELECT Top_Rodada FROM usuarios WHERE ID = '".$ds['id_de']."'");
$top_R->execute();

$fetch = $top_R->fetchObject();
$Top_rd = $fetch->Top_Rodada;
?>
<?php
$top_T = DB::conn()->prepare("SELECT Top_Temporada FROM usuarios WHERE ID = '".$ds['id_de']."'");
$top_T->execute();

$fetch = $top_T->fetchObject();
$Top_tm = $fetch->Top_Temporada;
?>
<div id="ex">
<div id="fundomsg3" class="t">
<div style="float:right; margin-top:5px;">
</div>
<div id="nivel"><img onMouseOver="mFig(this,'<?php echo $rs["Nivel"]; ?>')" onMouseOut="mFig(this,'<?php if($Adm == 1){ ?>100<?php }elseif($Adm == 2){ ?>200<?php }elseif($Adm == 3){ ?>300<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g<?php }elseif($Top_tm == 1){  ?>trof_1<?php }elseif($Top_tm == 2){  ?>trof_2<?php }elseif($Top_tm == 3){  ?>trof_3<?php }elseif($Top_rd == 1){  ?>med_1<?php }elseif($Top_rd == 2){  ?>med_2<?php }elseif($Top_rd == 3){  ?>med_3<?php }elseif($Top_hr == 1){ ?>hora_1<?php }elseif($Top_hr == 2){  ?>hora_2<?php }elseif($Top_hr == 3){  ?>hora_3<?php }else{  ?><?php echo $rs['Nivel'] ?><?php } ?>')" src='img/icons/<?php if($Adm == 1){ ?>100.gif<?php }elseif($Adm == 2){ ?>200.gif<?php }elseif($Adm == 3){ ?>300.gif<?php }elseif($rs['ID'] == $medalha_1){ ?>top1_g.gif<?php }elseif($rs["ID"] == $medalha_2){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_3){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_4){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($rs["ID"] == $medalha_5){ ?>top2_g.gif<?php }elseif($Top_tm == 1){  ?>trof_1.gif<?php }elseif($Top_tm == 2){  ?>trof_2.gif<?php }elseif($Top_tm == 3){  ?>trof_3.gif<?php }elseif($Top_rd == 1){  ?>med_1.gif<?php }elseif($Top_rd == 2){  ?>med_2.gif<?php }elseif($Top_rd == 3){  ?>med_3.gif<?php }elseif($Top_hr == 1){ ?>hora_1.gif<?php }elseif($Top_hr == 2){  ?>hora_2.gif<?php }elseif($Top_hr == 3){  ?>hora_3.gif<?php }else{ ?><?php echo $rs['Nivel'] ?>.gif<?php } ?>' border=0 style="cursor:pointer;"></div>
<div id="time"><a href="index.php?pr=time&time=<?php echo utf8_encode($time_nome); ?>"><img src="img/gr/Times_p/<?php echo $rs["Time"]; ?>.png" /></a></div>
<span class="usuario" style="font-family:Liberation; font-size:14px;"><?php if($rs['VIP'] >= 1 && $rs['VIP'] >= date('Y-m-d H:i:s')){ ?><a href="index.php?pr=perfil&nome=<?php echo urlencode($rs["Usuario"]);?>"><span style="color:#0088A1;"><?php echo utf8_encode($rs["Usuario"]); ?></span></a><?php }else{ ?><a href="index.php?pr=perfil&nome=<?php echo urlencode($rs["Usuario"]);?>"><span style="color:#000000;"><?php echo utf8_encode($rs["Usuario"]); ?></span></a><?php } ?><?php
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
     <?php }else{}?></span>
<span class="data"><?php echo $ds['data']; ?> <?php echo $ds['hora']; ?></span>
<span class="mensagem">
<?php echo utf8_encode(utf8_decode($ds['mensagem'])); ?>
</span>
<div style="clear:both; margin-bottom:20px;"></div>
</div>
</div>
<?php }}} ?>
</div>     
</div></div></td></tr>
<tr><td><div style="position:relative;top:0;width:623;left:0;height:15px;"><img src='img/layout/menu/botH.png' border=0></div></td></tr>
</table>
<?php }else{echo '<script>location.href="index.php?pr=index"</script>';} ?>