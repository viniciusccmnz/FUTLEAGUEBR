<?php
$jogo = $_GET['jogo'] ?? null;
if ($jogo) {
    $src = null;
    if ($jogo === 'penalty') {
        $src = '0001-penalty/index.php';
    } elseif ($jogo === 'trilha') {
        $src = '0001-trilha/index.php';
    } elseif ($jogo === 'falta') {
        $src = '0005-falta/index.php';
    }
    if ($src) {
        echo '<style>#chute-wrapper + table{display:none!important}</style>'
           . '<div id="chute-wrapper" style="position:relative; width:623px; height:360px; margin:0; overflow:hidden;">'
           . '<iframe src="' . $src . '" scrolling="no" style="position:absolute; top:-220px; left:0; width:100%; height:760px; border:0; display:block;"></iframe>'
           . '</div>';
    }
    return;
}
?>
</table></div></td><td valign='top' align='center'><table cellpadding='0' cellspacing='0' border=0 height=20>
    <tr><td><div style="position:relative;top:0;left:0;width:623;height:57;"><div style="width:623;height:57;background-image:url('img/layout/menu/topH.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:623;top:10;color:#515151;font-family:litoh;font-size:1em;">Calendario</div><div style="position:absolute;text-align:center;width:623;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Calendario</div></div></div></td></tr>
    <tr><td><div style="position:relative;top:0;left:0;width:623;min-height:300px; height:auto !important;  height:300px;background-image:url('img/layout/menu/midH.png');padding-top:8;">
<?php
// Embutir animações dentro do calendário conforme parâmetro "jogo"
$jogo = $_GET['jogo'] ?? null;
$src = null;
if ($jogo === 'penalty') {
    // Fallback para Construct embutido no calendário
    $src = '0001-penalty/index.php';
} elseif ($jogo === 'trilha') {
    $src = '0001-trilha/index.php';
} elseif ($jogo === 'falta') {
    // Última versão usada na falta (Construct)
    $src = '0005-falta/index.php';
}
if ($src) {
    echo '<div id="calendario-jogo" style="margin:8px;">'
        . '<iframe src="' . $src . '" width="100%" height="800" style="border:0;"></iframe>'
        . '</div>';
}
?>
<style type="text/css">
.css_btn_class {
	font-size:12px;
	font-family:Arial;
	font-weight:normal;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #dcdcdc;
	padding:4px 14px;
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
.css_btn_class2 {
	font-size:11px;
	font-family:Arial;
	font-weight:normal;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #dcdcdc;
	padding:4px 12px;
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
}.css_btn_class2:hover {
	background:-moz-linear-gradient( center top, #e9e9e9 5%, #f9f9f9 100% );
	background:-ms-linear-gradient( top, #e9e9e9 5%, #f9f9f9 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e9e9e9', endColorstr='#f9f9f9');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #e9e9e9), color-stop(100%, #f9f9f9) );
	background-color:#e9e9e9;
}

.css_btn_class3 {
	font-size:11px;
	font-family:Arial;
	font-weight:normal;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #dcdcdc;
	padding:4px 12px;
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
}.css_btn_class3:hover {
	background:-moz-linear-gradient( center top, #e9e9e9 5%, #f9f9f9 100% );
	background:-ms-linear-gradient( top, #e9e9e9 5%, #f9f9f9 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e9e9e9', endColorstr='#f9f9f9');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #e9e9e9), color-stop(100%, #f9f9f9) );
	background-color:#e9e9e9;
}

.css_btn_class1 {
	font-size:11px;
	font-family:Arial;
	font-weight:normal;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #dcdcdc;
	width:22px;
	height:20px;
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
	text-align:center;
	line-height:20px;
}.css_btn_class1:hover {
	background:-moz-linear-gradient( center top, #e9e9e9 5%, #f9f9f9 100% );
	background:-ms-linear-gradient( top, #e9e9e9 5%, #f9f9f9 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e9e9e9', endColorstr='#f9f9f9');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #e9e9e9), color-stop(100%, #f9f9f9) );
	background-color:#e9e9e9;
}

.brasileirao {
	font-size:11px;
	font-family:Arial;
	font-weight:normal;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #83c41a;
	width:22px;
	height:20px;
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
	margin-bottom:6px;
	outline:none;
	text-align:center;
	line-height:20px;
}.brasileirao:hover {
	background:-moz-linear-gradient( center top, #a5cc52 5%, #b8e356 100% );
	background:-ms-linear-gradient( top, #a5cc52 5%, #b8e356 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#a5cc52', endColorstr='#b8e356');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #a5cc52), color-stop(100%, #b8e356) );
	background-color:#a5cc52;
}

.brasil {
	font-size:11px;
	font-family:Arial;
	font-weight:normal;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #84bbf3;
	width:22px;
	height:20px;
	text-decoration:none;
	background:-moz-linear-gradient( center top, #bddbfa 5%, #80b5ea 100% );
	background:-ms-linear-gradient( top, #bddbfa 5%, #80b5ea 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bddbfa', endColorstr='#80b5ea');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #bddbfa), color-stop(100%, #80b5ea) );
	background-color:#bddbfa;
	color:#ffffff;
	display:inline-block;
	text-shadow:1px 1px 0px #528ecc;
 	-webkit-box-shadow:inset 1px 1px 0px 0px #dcecfb;
 	-moz-box-shadow:inset 1px 1px 0px 0px #dcecfb;
 	box-shadow:inset 1px 1px 0px 0px #dcecfb;
	margin-bottom:6px;
	outline:none;
	text-align:center;
	line-height:20px;
}.brasil:hover {
	background:-moz-linear-gradient( center top, #80b5ea 5%, #bddbfa 100% );
	background:-ms-linear-gradient( top, #80b5ea 5%, #bddbfa 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#80b5ea', endColorstr='#bddbfa');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #80b5ea), color-stop(100%, #bddbfa) );
	background-color:#80b5ea;
}

.regional {
	font-size:11px;
	font-family:Arial;
	font-weight:normal;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #ffaa22;
	width:22px;
	height:20px;
	text-decoration:none;
	background:-moz-linear-gradient( center top, #ffec64 5%, #ffab23 100% );
	background:-ms-linear-gradient( top, #ffec64 5%, #ffab23 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffec64', endColorstr='#ffab23');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #ffec64), color-stop(100%, #ffab23) );
	background-color:#ffec64;
	color:#ffffff;
	display:inline-block;
	text-shadow:1px 1px 0px #ffee66;
 	-webkit-box-shadow:inset 1px 1px 0px 0px #fff6af;
 	-moz-box-shadow:inset 1px 1px 0px 0px #fff6af;
 	box-shadow:inset 1px 1px 0px 0px #fff6af;
	margin-bottom:6px;
	outline:none;
	text-align:center;
	line-height:20px;
}.regional:hover {
	background:-moz-linear-gradient( center top, #ffab23 5%, #ffec64 100% );
	background:-ms-linear-gradient( top, #ffab23 5%, #ffec64 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffab23', endColorstr='#ffec64');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #ffab23), color-stop(100%, #ffec64) );
	background-color:#ffab23;
}

.representantes {
	font-size:11px;
	font-family:Arial;
	font-weight:normal;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #d83526;
	width:22px;
	height:20px;
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
	margin-bottom:6px;
	outline:none;
	text-align:center;
	line-height:20px;
}.representantes:hover {
	background:-moz-linear-gradient( center top, #e4685d 5%, #fc8d83 100% );
	background:-ms-linear-gradient( top, #e4685d 5%, #fc8d83 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e4685d', endColorstr='#fc8d83');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #e4685d), color-stop(100%, #fc8d83) );
	background-color:#e4685d;
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

.actives1{
	font-size:11px;
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
}.actives1:hover {
	background:-moz-linear-gradient( center top, #468ccf 5%, #63b8ee 100% );
	background:-ms-linear-gradient( top, #468ccf 5%, #63b8ee 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#468ccf', endColorstr='#63b8ee');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #468ccf), color-stop(100%, #63b8ee) );
	background-color:#468ccf;
}


#campeo{
	width:623px;
	margin-left:3px;
	float:left;
}
#campeo li{
	float:left;
	list-style:none;
	text-decoration:none;
	padding-left:3px;
}
.camp{
	display:none;
}
.cbcamp{
	display:none;
	width:600px;
	float:left;
}
#cbseries li{
	text-decoration:none;
	list-style:none;
	float:left;
	padding-left:3px;
}
#cbseries {
	float:left;
	margin-left:240px;	
}
.jogos{
	display:none;
	width:623px;
	text-align:center;
}
#njogos{
	width:280px;
	margin-left:165px;
	float:left;
	margin-top:10px;
}
#njogos li{
	float:left;
	list-style:none;
	text-decoration:none;
	padding-left:3px;
}
#series{
	margin-left:240px;
	float:left;
}

#series li{
	text-decoration:none;
	list-style:none;
	display:block;
	float:left;
	padding-left:3px;
}
.seriee{
	display:none;
}

.regiao{
	display:none;
}
#categoria{
	width:120px;
	position:absolute;
	top:35px;
	left:480px;
}
#categoria li{
	text-decoration:none;
	list-style:none;
}
#categoria li a{
	font-size:13px;
	font-family:Tahoma, Geneva, sans-serif;
	color:#333;
}
.linka{
	color:#F30;
	font-weight:bold;
}
.regiao{
	width:550px;
	margin-left:15px;
}
</style>
<?php
$configuracoes = DB::conn()->prepare("SELECT * FROM configuracoes");
$configuracoes->execute();

$conf = $configuracoes->fetchObject();
$RodadaAgora = $conf->Rodada;
?>
<script type="text/javascript">
$(function(){
	$(".css_btn_class:first").addClass("actives").show();
	$(".camp:first").show();
	$("#campeo a").click(function(){
	$(".css_btn_class").removeClass('actives');
	$(this).addClass('actives');	
	$(".camp").hide();	
	var div = $(this).attr('href');
	$(div).show();
	return false;
	})
		
})
</script>
<script type="text/javascript">
$(function(){
	$("#jg<?php echo $RodadaAgora; ?>:first").addClass("actives1").show();
	$("#j<?php echo $RodadaAgora; ?>:first").show();
	$("#njogos a").click(function(){
	$(".css_btn_class1").removeClass('actives1');
	$(".brasileirao").removeClass('actives1');
	$(".brasil").removeClass('actives1');
	$(".regional").removeClass('actives1');
	$(".representantes").removeClass('actives1');
	$(this).addClass('actives1');	
	$(".jogos").hide();	
	var div = $(this).attr('href');
	$(div).show();
	return false;
	})
		
})
</script>
<script type="text/javascript">
$(function(){
	$(".css_btn_class2:first").addClass("actives1").show();
	$(".seriee:first").show();
	$("#series a").click(function(){
	$(".css_btn_class2").removeClass('actives1');
	$(this).addClass('actives1');	
	$(".seriee").hide();	
	var div = $(this).attr('href');
	$(div).show();
	return false;
	})
		
})
</script>
<script type="text/javascript">
$(function(){
	$(".css_btn_class2:first").addClass("actives1").show();
	$(".cbcamp:first").show();
	$("#cbseries a").click(function(){
	$(".css_btn_class2").removeClass('actives1');
	$(this).addClass('actives1');	
	$(".cbcamp").hide();	
	var div = $(this).attr('href');
	$(div).show();
	return false;
	})
		
})
</script>
<script type="text/javascript">
$(function(){
	$(".reg:first").addClass("linka").show();
	$(".regiao:first").show();
	$("#Paulista1:first").show();
	$("#categoria a").click(function(){
	$(".reg").removeClass('linka');
	$(this).addClass('linka');	
	$(".regiao").hide();	
	var div = $(this).attr('href');
	$(div).show();
	return false;
	})
		
})
</script>
<div style='position:relative;top:0;left:0;width:607;margin-left:9;'>

<div id="campeo">
<li><a href="#ctodos" class="css_btn_class">Todos</a></li>
<li><a href="#cbrasileiro" class="css_btn_class">Campeonato Brasileiro</a></li>
<li><a href="#cbrasil" class="css_btn_class">Copa do Brasil</a></li>
<li><a href="#cregional" class="css_btn_class">Regional</a></li>
<li><a href="#cptgol" class="css_btn_class">KJ GOL</a></li>
<li><a href="#clibertadores" class="css_btn_class">Libertadores</a></li>
</div>

<div id="ctodos" class="camp">

<div id="njogos">
<li><a href="#j1" class="css_btn_class1" id="jg1">1</a></li>
<li><a href="#j2" class="representantes" id="jg2">2</a></li>
<li><a href="#j3" class="regional" id="jg3">3</a></li>
<li><a href="#j4" class="representantes" id="jg4">4</a></li>
<li><a href="#j5" class="regional" id="jg5">5</a></li>
<li><a href="#j6" class="representantes" id="jg6">6</a></li>
<li><a href="#j7" class="brasileirao" id="jg7">7</a></li>
<li><a href="#j8" class="brasileirao" id="jg8">8</a></li>
<li><a href="#j9" class="brasil" id="jg9">9</a></li>
<li><a href="#j10" class="brasileirao" id="jg10">10</a></li>
<li><a href="#j11" class="brasileirao" id="jg11">11</a></li>
<li><a href="#j12" class="brasil" id="jg12">12</a></li>
<li><a href="#j13" class="brasileirao" id="jg13">13</a></li>
<li><a href="#j14" class="brasileirao" id="jg14">14</a></li>
<li><a href="#j15" class="brasil" id="jg15">15</a></li>
<li><a href="#j16" class="brasileirao" id="jg16">16</a></li>
<li><a href="#j17" class="brasileirao" id="jg17">17</a></li>
<li><a href="#j18" class="brasil" id="jg18">18</a></li>
<li><a href="#j19" class="brasileirao" id="jg19">19</a></li>
<li><a href="#j20" class="brasileirao" id="jg20">20</a></li>
<li><a href="#j21" class="brasil" id="jg21">21</a></li>
<li><a href="#j22" class="brasileirao" id="jg22">22</a></li>
<li><a href="#j23" class="brasileirao" id="jg23">23</a></li>
<li><a href="#j24" class="brasil" id="jg24">24</a></li>
<li><a href="#j25" class="brasileirao" id="jg25">25</a></li>
<li><a href="#j26" class="brasileirao" id="jg26">26</a></li>
<li><a href="#j27" class="brasileirao" id="jg27">27</a></li>
<li><a href="#j28" class="brasil" id="jg28">28</a></li>
<li><a href="#j29" class="css_btn_class1" id="jg29">29</a></li>
<li><a href="#j30" class="css_btn_class1" id="jg30">30</a></li>
</div>

<div id="j1" class="jogos" >
<br /><br/><br/><br/><br/><br/><br/><br/><br/>
<center>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Treino</span>
</center>
</div>

<div id="j2" class="jogos">
<br /><br/><br/><br/><br/><br/><br/><br/>
<center>

<?php
if($RodadaAgora <= 1){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada de treino acabar.</span>';	
}else{
?>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 2");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<?php } ?>
</center>
</div>

<div id="j3" class="jogos">
<div id="categoria">
<li><a href="#Paulista" class="reg">Paulista</a></li>
<li><a href="#Carioca" class="reg">Carioca</a></li>
<li><a href="#Gaucho" class="reg">Gaúcho</a></li>
<li><a href="#Mineiro" class="reg">Mineiro</a></li>
<li><a href="#Paranaense" class="reg">Paranaense</a></li>
<li><a href="#Catarinense" class="reg">Catarinense</a></li>
<li><a href="#Pernambucano" class="reg">Pernambucano</a></li>
<li><a href="#Cearense" class="reg">Cearense</a></li>
<li><a href="#Capixaba" class="reg">Capixaba</a></li>
<li><a href="#Alagoano" class="reg">Alagoano</a></li>
<li><a href="#Paraense" class="reg">Paraense</a></li>
<li><a href="#BaianoeSergipiano" class="reg">Baiano e Sergipiano</a></li>
<li><a href="#ParaibanoePotiguar" class="reg">Paraibano e Potiguar</a></li>
<li><a href="#Oeste" class="reg">Centro-Oeste</a></li>
<li><a href="#Norte" class="reg">Norte</a></li>
</div>

<div id="Paulista" class="regiao">
<br /><br/><br/><br/><br/><br/><br/>
<?php
if($RodadaAgora <= 2){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a 3 rodada.</span>';	
}else{
?>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'SP'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>

<div id="Carioca" class="regiao">
<br /><br/><br/><br/><br/><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'RJ'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="Gaucho" class="regiao">
<br /><br/><br/><br/><br/><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'RS'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="Mineiro" class="regiao">
<br /><br/><br/><br/><br/><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'MG'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="Paranaense" class="regiao">
<br /><br/><br/><br/><br/><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'PR'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="Catarinense" class="regiao">
<br /><br/><br/><br/><br/><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'SC'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="Pernambucano" class="regiao">
<br /><br/><br/><br/><br/><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'PE'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="Cearense" class="regiao">
<br /><br/><br/><br/><br/><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'CE'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="Capixaba" class="regiao">
<br /><br/><br/><br/><br/><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'ES'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="Alagoano" class="regiao">
<br /><br/><br/><br/><br/><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'AL'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="Paraense" class="regiao">
<br /><br/><br/><br/><br/><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'PA'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="BaianoeSergipiano" class="regiao">
<br /><br/><br/><br/><br/><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'BA'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="ParaibanoePotiguar" class="regiao">
<br /><br/><br/><br/><br/><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'RN'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="Oeste" class="regiao">
<br /><br/><br/><br/><br/><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'MS'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="Norte" class="regiao">
<br /><br/><br/><br/><br/><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'MA'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
<?php } ?>
</div>
</div>

<div id="j4" class="jogos">
<br /><br/><br/><br/><br/><br/><br/><br/>
<center>
<?php
if($RodadaAgora <= 3){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
}else{
?>
<span style="font-size:15px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Semi final Copa KJGOL</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 4");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<?php } ?>
</center>
</div>
<div id="j5" class="jogos">
<br /><br/><br/><br/><br/><br/><br/>
<?php
if($RodadaAgora <= 4){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a 1º fase acabar.</span>';	
}else{
?>
<center>
<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Paulista</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'SP'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Carioca</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'RJ'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Gaúcho</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'RS'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Mineiro</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'MG'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Paranaense</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'PR'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Catarinense</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'SC'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Pernambucano</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'PE'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Cearense</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'CE'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Capixaba</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'ES'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Alagoano</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'AL'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Paraense</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'PE'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Baiano e Sergipano</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'BA'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Paraibano e Potiguar</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'RN'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Centro-Oeste</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'MS'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Norte</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'MA'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
<?php } ?>
</center>
</div>
<div id="j6" class="jogos">
<br /><br/><br/><br/><br/><br/><br/><br/>
<center>
<?php
if($RodadaAgora <= 5){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
}else{
?>
<span style="font-size:15px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Final Copa KJ GOL</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 6");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<?php } ?>
</center>
</div>
<div id="j7" class="jogos">
<div id="series">
<li><a href="#seriea" class="css_btn_class2">A</a></li>
<li><a href="#serieb" class="css_btn_class2">B</a></li>
<li><a href="#seriec" class="css_btn_class2">C</a></li>
</div>
<br /><br/><br/><br/><br/><br/><br/><br/><br/>

<center>
<div id="seriea" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 7 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/Times_g/<?php echo $time_tabela; ?>.png' width="20" height="20" border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="serieb" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 7 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/Times_g/<?php echo $time_tabela; ?>.png' width="20" height="20" border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="seriec" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 7 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/Times_g/<?php echo $time_tabela; ?>.png' width="20" height="20" border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

</center>
</div>
<div id="j8" class="jogos">
<div id="series">
<li><a href="#seried" class="css_btn_class2">A</a></li>
<li><a href="#seriee" class="css_btn_class2">B</a></li>
<li><a href="#serief" class="css_btn_class2">C</a></li>
</div>
<br /><br/><br/><br/><br/><br/><br/><br/><br/>

<center>
<div id="seried" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 8 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="seriee" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 8 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="serief" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 8 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

</center>
</div>
<div id="j9" class="jogos">

</div>
<div id="j10" class="jogos">
<div id="series">
<li><a href="#seriea1" class="css_btn_class2">A</a></li>
<li><a href="#serieb1" class="css_btn_class2">B</a></li>
<li><a href="#seriec1" class="css_btn_class2">C</a></li>
</div>
<br /><br/><br/><br/><br/><br/><br/><br/><br/>

<center>
<div id="seriea1" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 10 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="serieb1" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 10 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="seriec1" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 10 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

</center>
</div>
<div id="j11" class="jogos">
<div id="series">
<li><a href="#seriea2" class="css_btn_class2">A</a></li>
<li><a href="#serieb2" class="css_btn_class2">B</a></li>
<li><a href="#seriec2" class="css_btn_class2">C</a></li>
</div>
<br /><br/><br/><br/><br/><br/><br/><br/><br/>

<center>
<div id="seriea2" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 11 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="serieb2" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 11 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="seriec2" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 11 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

</center>
</div>
<div id="j12" class="jogos">

</div>
<div id="j13" class="jogos">
<div id="series">
<li><a href="#seriea3" class="css_btn_class2">A</a></li>
<li><a href="#serieb3" class="css_btn_class2">B</a></li>
<li><a href="#seriec3" class="css_btn_class2">C</a></li>
</div>
<br /><br/><br/><br/><br/><br/><br/><br/><br/>

<center>
<div id="seriea3" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 13 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="serieb3" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 13 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="seriec3" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 13 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

</center>
</div>
<div id="j14" class="jogos">
<div id="series">
<li><a href="#seriea4" class="css_btn_class2">A</a></li>
<li><a href="#serieb4" class="css_btn_class2">B</a></li>
<li><a href="#seriec4" class="css_btn_class2">C</a></li>
</div>
<br /><br/><br/><br/><br/><br/><br/><br/><br/>

<center>
<div id="seriea4" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 14 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="serieb4" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 14 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="seriec4" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 14 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

</center>
</div>
<div id="j15" class="jogos">

</div>
<div id="j16" class="jogos">
<div id="series">
<li><a href="#seriea5" class="css_btn_class2">A</a></li>
<li><a href="#serieb5" class="css_btn_class2">B</a></li>
<li><a href="#seriec5" class="css_btn_class2">C</a></li>
</div>
<br /><br/><br/><br/><br/><br/><br/><br/><br/>

<center>
<div id="seriea5" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 16 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="serieb5" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 16 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="seriec5" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 16 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

</center>
</div>
<div id="j17" class="jogos">
<div id="series">
<li><a href="#seriea6" class="css_btn_class2">A</a></li>
<li><a href="#serieb6" class="css_btn_class2">B</a></li>
<li><a href="#seriec6" class="css_btn_class2">C</a></li>
</div>
<br /><br/><br/><br/><br/><br/><br/><br/><br/>

<center>
<div id="seriea6" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 17 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="serieb6" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 17 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="seriec6" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 17 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

</center>
</div>
<div id="j18" class="jogos">

</div>
<div id="j19" class="jogos">
<div id="series">
<li><a href="#seriea7" class="css_btn_class2">A</a></li>
<li><a href="#serieb7" class="css_btn_class2">B</a></li>
<li><a href="#seriec7" class="css_btn_class2">C</a></li>
</div>
<br /><br/><br/><br/><br/><br/><br/><br/><br/>

<center>
<div id="seriea7" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 19 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="serieb7" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 19 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="seriec7" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 19 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

</center>
</div>
<div id="j20" class="jogos">
<div id="series">
<li><a href="#seriea8" class="css_btn_class2">A</a></li>
<li><a href="#serieb8" class="css_btn_class2">B</a></li>
<li><a href="#seriec8" class="css_btn_class2">C</a></li>
</div>
<br /><br/><br/><br/><br/><br/><br/><br/><br/>

<center>
<div id="seriea8" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 20 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="serieb8" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 20 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="seriec8" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 20 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

</center>
</div>
<div id="j21" class="jogos">

</div>
<div id="j22" class="jogos">
<div id="series">
<li><a href="#seriea9" class="css_btn_class2">A</a></li>
<li><a href="#serieb9" class="css_btn_class2">B</a></li>
<li><a href="#seriec9" class="css_btn_class2">C</a></li>
</div>
<br /><br/><br/><br/><br/><br/><br/><br/><br/>

<center>
<div id="seriea9" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 22 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="serieb9" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 22 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="seriec9" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 22 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

</center>
</div>
<div id="j23" class="jogos">
<div id="series">
<li><a href="#seriea10" class="css_btn_class2">A</a></li>
<li><a href="#serieb10" class="css_btn_class2">B</a></li>
<li><a href="#seriec10" class="css_btn_class2">C</a></li>
</div>
<br /><br/><br/><br/><br/><br/><br/><br/><br/>

<center>
<div id="seriea10" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 23 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="serieb10" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 23 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="seriec10" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 23 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

</center>
</div>
<div id="j24" class="jogos">

</div>
<div id="j25" class="jogos">
<div id="series">
<li><a href="#seriea11" class="css_btn_class2">A</a></li>
<li><a href="#serieb11" class="css_btn_class2">B</a></li>
<li><a href="#seriec11" class="css_btn_class2">C</a></li>
</div>
<br /><br/><br/><br/><br/><br/><br/><br/><br/>

<center>
<div id="seriea11" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 25 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="serieb11" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 25 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="seriec11" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 25 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

</center>
</div>
<div id="j26" class="jogos">
<div id="series">
<li><a href="#seriea12" class="css_btn_class2">A</a></li>
<li><a href="#serieb12" class="css_btn_class2">B</a></li>
<li><a href="#seriec12" class="css_btn_class2">C</a></li>
</div>
<br /><br/><br/><br/><br/><br/><br/><br/><br/>

<center>
<div id="seriea12" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 26 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="serieb12" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 26 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="seriec12" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 26 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

</center>
</div>
<div id="j27" class="jogos">
<div id="series">
<li><a href="#seriea13" class="css_btn_class2">A</a></li>
<li><a href="#serieb13" class="css_btn_class2">B</a></li>
<li><a href="#seriec13" class="css_btn_class2">C</a></li>
</div>
<br /><br/><br/><br/><br/><br/><br/><br/><br/>

<center>
<div id="seriea13" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 27 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="serieb13" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 27 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

<div id="seriec13" class="seriee">
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 27 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>

</center>
</div>
<div id="j28" class="jogos">
<br /><br/><br/><br/><br/><br/><br/><br/><br/>
<center>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Treino</span>
</center>
</div>
<div id="j29" class="jogos">
<br /><br/><br/><br/><br/><br/><br/><br/><br/>

<center>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Treino</span>
</center>
</div>
<div id="j30" class="jogos">
<br /><br/><br/><br/><br/><br/><br/><br/><br/>

<center>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Treino</span>
</center>
</div>
</div>
<div id="cbrasileiro" class="camp">
<div id="cbseries">
<li><a href="#cbseriea" class="css_btn_class2">A</a></li>
<li><a href="#cbserieb" class="css_btn_class2">B</a></li>
<li><a href="#cbserieb" class="css_btn_class2">C</a></li>
</div>

<div id="cbseriea" class="cbcamp">
<center>
<?php
if($RodadaAgora == 7){
?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">7º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 7 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/Times_g/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 8){?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">8º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 8 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/Times_g/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 10){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">10º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 10 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 11){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">11º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 11 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 13){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">13º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 13 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 14){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">14º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 14 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 16){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">16º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 16 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 17){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">17º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 17 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 19){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">19º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 19 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 20){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">20º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 20 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 22){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">22º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 22 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 23){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">23º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 23 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 25){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">25º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 25 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 26){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">26º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 26 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 27){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">27º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 27 AND Serie = 'A'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'A' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php } ?>
</center>
</div>
<div id="cbserieb" class="cbcamp">
<center>
<?php
if($RodadaAgora == 7){
?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">7º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 7 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 8){?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">8º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 8 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 10){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">10º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 10 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 11){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">11º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 11 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 13){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">13º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 13 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 14){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">14º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 14 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 16){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">16º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 16 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 17){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">17º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 17 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 19){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">19º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 19 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 20){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">20º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 20 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 22){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">22º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 22 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 23){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">23º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 23 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 25){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">25º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 25 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 26){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">26º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 26 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 27){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">27º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 27 AND Serie = 'B'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'B' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php } ?>
</center>
</div>
<div id="cbseriec" class="cbcamp">
<center>
<?php
if($RodadaAgora == 7){
?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">7º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 7 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 8){?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">8º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 8 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 10){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">10º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 10 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 11){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">11º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 11 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 13){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">13º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 13 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 14){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">14º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 14 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 16){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">16º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 16 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 17){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">17º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 17 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 19){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">19º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 19 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 20){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">20º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 20 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 22){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">22º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 22 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 23){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">23º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 23 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 25){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">25º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 25 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 26){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">26º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 26 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php }elseif($RodadaAgora == 27){ ?>
<span style="font-size:13px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">27º Rodada</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 27 AND Serie = 'C'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<br />
<table width="443" border='1' align='center' cellpadding='0' cellspacing='0' class='sofT_Pq'>
<tr bgcolor='#CCCCCC'><td height="24" colspan=3 align='center'>Classificação</td><td align="center">PG</td><td width="18" align="center">J</td><td width="25" align="center">V</td><td width="20" align="center">E</td><td width="25" align="center">D</td><td width="21" align="center">SG</td>
<?php
$sql = DB::conn()->prepare("SELECT * FROM classificacao_brasileirao WHERE Serie = 'C' ORDER BY PG DESC, SG DESC LIMIT 16");
$sql->execute();
if($sql->rowCount() == 0){
?>
<?php }else{
$cont = 1;	
while($row = $sql->fetch()){
	$time_tabela = $row['id_time'];
	$pg = $row['PG'];
	$j = $row['J'];
	$v = $row['V'];
	$e = $row['E'];
	$d = $row['D'];
	$sg = $row['SG'];	
?>
<?php
$pegar_nome_t = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '$time_tabela'");
$pegar_nome_t->execute();
while($rs1 = $pegar_nome_t->fetch()){
$time_class = $rs1['Time'];
}
?>
<tr class='pqRow' onClick="document.location='?pr=time&time=<?php echo utf8_encode($time_class); ?>'">
<td align='center' width=20 bgcolor='#E2E2E2'><?php echo $cont++; ?></td>
<td width='32' align="center" ><img src='img/gr/times_p/<?php echo $time_tabela; ?>.png' border=0></td><td valign='middle'  width='241'><span class='as'><?php echo utf8_encode($time_class); ?></span></td><td width='21' align="center"><?php echo $pg; ?></td><td align="center"><?php echo $j; ?></td><td align="center"><?php echo $v; ?></td><td align="center"><?php echo $e; ?></td><td align="center"><?php echo $d; ?></td><td align="center"><?php echo $sg; ?></td></tr>
<?php }} ?>

</table>
</div>
<?php } ?>
</center>
</div>
</div>
<div id="cbrasil" class="camp">
brasil
</div>
<div id="cregional" class="camp">
<?php if($RodadaAgora == 3){ ?>
<div id="categoria">
<li><a href="#Paulista1" class="reg">Paulista</a></li>
<li><a href="#Carioca1" class="reg">Carioca</a></li>
<li><a href="#Gaucho1" class="reg">Gaúcho</a></li>
<li><a href="#Mineiro1" class="reg">Mineiro</a></li>
<li><a href="#Paranaense1" class="reg">Paranaense</a></li>
<li><a href="#Catarinense1" class="reg">Catarinense</a></li>
<li><a href="#Pernambucano1" class="reg">Pernambucano</a></li>
<li><a href="#Cearense1" class="reg">Cearense</a></li>
<li><a href="#Capixaba1" class="reg">Capixaba</a></li>
<li><a href="#Alagoano1" class="reg">Alagoano</a></li>
<li><a href="#Paraense1" class="reg">Paraense</a></li>
<li><a href="#BaianoeSergipiano1" class="reg">Baiano e Sergipiano</a></li>
<li><a href="#ParaibanoePotiguar1" class="reg">Paraibano e Potiguar</a></li>
<li><a href="#Oeste1" class="reg">Centro-Oeste</a></li>
<li><a href="#Norte1" class="reg">Norte</a></li>
</div>

<div id="Paulista1" class="regiao">
<br /><br/><br/>
<?php
if($RodadaAgora <= 2){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a 3 rodada.</span>';	
}else{
?>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'SP'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>

<div id="Carioca1" class="regiao">
<br /><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'RJ'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="Gaucho1" class="regiao">
<br /><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'RS'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="Mineiro1" class="regiao">
<br /><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'MG'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="Paranaense1" class="regiao">
<br /><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'PR'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="Catarinense1" class="regiao">
<br /><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'SC'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="Pernambucano1" class="regiao">
<br /><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'PE'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="Cearense1" class="regiao">
<br /><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'CE'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="Capixaba1" class="regiao">
<br /><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'ES'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="Alagoano1" class="regiao">
<br /><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'AL'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="Paraense1" class="regiao">
<br /><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'PA'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="BaianoeSergipiano1" class="regiao">
<br /><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'BA'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="ParaibanoePotiguar1" class="regiao">
<br /><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'RN'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="Oeste1" class="regiao">
<br /><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'MS'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
</div>
<div id="Norte1" class="regiao">
<br /><br/><br/>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 3 AND Estado = 'MA'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
<?php } ?>
</div>
<?php }elseif($RodadaAgora == 5){ ?>
<?php
if($RodadaAgora <= 4){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a 1º fase acabar.</span>';	
}else{
?>
<center>
<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Paulista</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'SP'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Carioca</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'RJ'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Gaúcho</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'RS'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Mineiro</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'MG'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Paranaense</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'PR'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Catarinense</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'SC'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Pernambucano</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'PE'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Cearense</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'CE'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Capixaba</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'ES'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Alagoano</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'AL'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Paraense</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'PE'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Baiano e Sergipano</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'BA'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Paraibano e Potiguar</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'RN'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Centro-Oeste</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'MS'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>

<span style="font-size:13px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight:bold;">Final Norte</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 5 AND Estado = 'MA'");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:13px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Nenhum jogo encontrado.</span>';	
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
<?php }} ?>
<?php } ?>
</center>
<?php } ?>
</div>
<div id="cptgol" class="camp">
<br/><br/><br/>
<center>
<?php if($RodadaAgora == 2){ ?>
<span style="font-size:15px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">1º Fase Copa KJGOL</span>
<?php
if($RodadaAgora <= 1){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada de treino acabar.</span>';	
}else{
?>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 2");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<?php } ?>
<?php }elseif($RodadaAgora == 4){ ?>
<?php
if($RodadaAgora <= 3){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
}else{
?>
<span style="font-size:15px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Semi final Copa KJGOL</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 4");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<?php } ?>
<?php }elseif($RodadaAgora == 6){ ?>
<?php
if($RodadaAgora <= 5){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
}else{
?>
<span style="font-size:15px; color:#000; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Final Copa KJGOL</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM campeonatos WHERE Rodada = 6");
$sql->execute();
if($sql->rowCount() == 0){
echo '<span style="font-size:14px; color:#000; font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; font-weight:bold;">Aguarde a rodada anterior acabar.</span>';	
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
<?php }} ?>
<?php } ?>
<?php } ?>
</center>
</div>
<div id="clibertadores" class="camp" style="font-size:14px; color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">
<center>Libertadores funcionara a partir da 2 temporada. junto com o Mundial.</center>
</div>
</div></div></td></tr>
<tr><td><div style="position:relative;top:0;width:623;left:0;height:15px;"><img src='img/layout/menu/botH.png' border=0></div></td></tr>
	</table>