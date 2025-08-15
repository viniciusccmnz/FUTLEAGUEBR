<?php
header("Access-Control-Allow-Origin: *");

session_start();

include_once __DIR__ . "/paginas/golaco.php";

include_once("paginas/funcoes.php");

date_default_timezone_set("America/Sao_Paulo");

include_once('PagSeguroLibrary/PagSeguroLibrary.php');



DB::conn();



?>

<?php

$configuracoes = DB::conn()->prepare("SELECT * FROM configuracoes");

$configuracoes->execute();



$conf = $configuracoes->fetchObject();



$TemporadaAgora = $conf->Campeonato;

$RodadaAgora = $conf->Rodada;

$manutencao = $conf->Manutencao;

$mc_ip = $_SERVER["REMOTE_ADDR"];

?>

<?php

if($manutencao == 0){

?>

<html>

<head>

<title>FUTLEAGUEBR</title>

<meta content='Futebol online. Jogo online onde você joga pelo seu time e participa de campeonatos contra outros times' name='description'>

<meta content='FUTLEAGUEBR, Futebol, Futebol Online, Jogo, Futebol, Jogo de Navegador, Jogo de Browser, Jogo gratis, gratis, game, online game, corinthians, são paulo, palmeiras, flamengo, santos, botafogo, fluminense, vasco, internacional, grêmio, cruzeiro' name='keywords'>

<link href='./img/soccer-ball_39433.png' rel='icon' type='image/png'/>

<script src="https://code.jquery.com/jquery-latest.js"></script>

<link rel="stylesheet" type="text/css" href="css/styleBrgol.css">

<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript" src="js/jquery.playSound.js"></script>

<script src="js/bootstrap.js"></script>

<script type="text/javascript" src="js/flash_object.js"></script>

<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>

<link type="text/css" rel="stylesheet" href="static/css/banner-styles.css"/>

<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>

</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="margin:0;background-image:url('img/layout/grama.png');">

<?php

if(isset($_SESSION['ID'])){

$sql = DB::conn()->prepare("SELECT Usuario FROM usuarios WHERE ID = ?");

$sql->execute(array($_SESSION['ID']));

$rs = $sql->fetch();

$session = $rs['Usuario'];	

}

?>

<div style="position:absolute;top:0;width:100%;height:29;background-image:url('img/layout/topbar.png');"></div>

<table cellpadding='0' cellspacing='0' border=0 width=100% height=100%><tr>

<td></td><td align='center'>

	<table cellpadding='0' cellspacing='0' border=0 width=1024 height=100%>

	<tr><td height=234 valign=top>

<?php

$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE Tempo_Auto >= ?");

$sql->execute(array(date('Y/m/d H:i:s')));

$agora = $sql->rowCount();

?>    

<div style="position:relative;top:0;width:1024;height:234;">

<div style="position:absolute;top:0;width:100%;height:29;background-image:url('img/layout/topbar.png');z-index:1;"></div>

<div style="position:absolute;top:15;width:1024;height:161;background-image:url('img/layout/fundo_azul.png');"></div>

<div style="position:absolute;top:130;left:-1;width:1025;height:111;background-image:url('img/layout/supremebar.png');"></div>

<div style="position:absolute;top:23;left:53;top:30;width:170;height:160;background-image:url('img/logo.png');background-size:contain;background-repeat:no-repeat;background-position:center;" id='logo'></div>



<div style="position:absolute;top:0;left:380;width:104;height:34;z-index:2;" id='rodBtn' onClick="document.location='?pr=calendario';"><div style="width:77;height:22;background-image:url('img/layout/fundo_topbar.png');text-aling:center;"><div class="nosel" style="position:absolute;left:15;top:7;color:#FFFFFF;font-family:visitor;font-size:0.8em;"><?php Rodada_Agora(); ?> Rodada</div><div style="position:absolute;left:15;top:6;color:#2e2e2e;font-family:visitor;font-size:0.8em;"><?php Rodada_Agora(); ?> Rodada</div></div></div>

<div style="position:absolute;top:0;left:580;width:104;height:34;z-index:2;"><div style="width:77;height:22;background-image:url('img/layout/fundo_topbar.png');text-aling:center;"><div class="nosel" style="position:absolute;left:5;top:7;color:#FFFFFF;font-family:visitor;font-size:0.8em;"><?php Temporada_Agora(); ?> Temporada</div><div style="position:absolute;left:5;top:6;color:#000000;font-family:visitor;font-size:0.8em;"><?php Temporada_Agora(); ?> Temporada</div><div class="nosel" style="position:absolute;left:175;top:7;color:#FFFFFF;font-family:visitor;font-size:0.8em;"><?php if(isset($_SESSION['usuario'])) { ?><?php echo utf8_encode($session);?><?php }else{echo '';}?></div><div style="position:absolute;left:175;top:6;color:#000000;font-family:visitor;font-size:0.8em;"><?php if(isset($_SESSION['Usuario'])) { ?><?php echo utf8_encode($session);?><?php }else{echo '';}?></div><div id="sair" style="margin-left:280px; margin-top:1px;"><?php if(isset($_SESSION['Usuario'])) { ?><a href="index.php?pr=sair"><img src="img/bt_sair.png" width="67" height="19" style="margin-top:1px;">.</a><?php }else{echo '';}?></div></div></div>



<div style="position:absolute;top:0;left:80;width:188;height:22;background-image:url('img/layout/searchbar.png');z-index:2;">

<div style='position:absolute;top:35;left:397; color:#FFF; font-family:Ackbar; font-size:14px;'>

<span id="tempo_restante"></span>

<?php

$sql = DB::conn()->prepare("SELECT * FROM configuracoes");

$sql->execute();

$dt = $sql->fetch();



$codrodada = $dt['cod_rodada'];

?>

<script type="text/javascript">

function tempo_restante(){

    var now = new Date();
    // Próxima virada às 19:00:00 do dia corrente (ou do próximo dia se já passou)
    var target = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 19, 0, 0);
    if (now >= target) {
        target.setDate(target.getDate() + 1);
    }

    var diffMs = target - now; // milissegundos restantes
    var totalSeconds = Math.max(0, Math.floor(diffMs / 1000));
    var tr_horas = Math.floor(totalSeconds / 3600);
    var tr_minutos = Math.floor((totalSeconds % 3600) / 60);
    var tr_segundos = totalSeconds % 60;

	

    // não precisa ajustar horas negativas; já garantimos totalSeconds >= 0

	

    if(tr_horas < 10){ tr_horas = "0" + tr_horas; }

	

    if(tr_minutos < 10){ tr_minutos = "0" + tr_minutos; }

	

    if(tr_segundos < 10){ tr_segundos = "0" + tr_segundos; }

		

		

	if(tr_minutos == 5 && tr_segundos == 0){

	$.ajax({

		  url: "paginas/bola_ouro.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }

	});	

	}

	if(tr_minutos == 10 && tr_segundos == 0){

	$.ajax({

		  url: "paginas/bola_ouro.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }

	});		

	}

	if(tr_minutos == 15 && tr_segundos == 0){

	$.ajax({

		  url: "paginas/bola_ouro.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }

	});		

	}

	if(tr_minutos == 20 && tr_segundos == 0){

	$.ajax({

		  url: "paginas/bola_ouro.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }

	});		

	

	}

	if(tr_minutos == 25 && tr_segundos == 0){

	$.ajax({

		  url: "paginas/bola_ouro.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }

	});

	

	}

	

		if(tr_minutos == 30 && tr_segundos == 0){

	$.ajax({

		  url: "paginas/bola_ouro.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }

	});



	}

	if(tr_minutos == 35 && tr_segundos == 0){

	$.ajax({

		  url: "paginas/bola_ouro.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }

	});	

	}

	if(tr_minutos == 40 && tr_segundos == 0){

	$.ajax({

		  url: "paginas/bola_ouro.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }

	});

			

	}

	if(tr_minutos == 45 && tr_segundos == 0){

	$.ajax({

		  url: "paginas/bola_ouro.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }

	});

			

	}

	if(tr_minutos == 50 && tr_segundos == 0){

	$.ajax({

		  url: "paginas/bola_ouro.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }

	});



	}

	if(tr_minutos == 55 && tr_segundos == 0){

	$.ajax({

		  url: "paginas/bola_ouro.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }

	});	

	}



	if(tr_minutos == 59 && tr_segundos == 58){

	$.ajax({

		  url: "paginas/bola_ouro.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }

	});	

			

	}	

		<?php

		if(isset($_SESSION['ID']) && $_SESSION['ID'] == 1){

		?>

	

		if(tr_minutos == 5 && tr_segundos == 0){

	$.ajax({

		  url: "paginas/tempo_restante.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }

	});	

	}

	if(tr_minutos == 10 && tr_segundos == 0){

	$.ajax({

		  url: "paginas/tempo_restante.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }

	});		

	}

	if(tr_minutos == 15 && tr_segundos == 0){

	$.ajax({

		  url: "paginas/tempo_restante.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }

	});		

	}

	if(tr_minutos == 20 && tr_segundos == 0){

	$.ajax({

		  url: "paginas/tempo_restante.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }

	});		

	

	}

	if(tr_minutos == 25 && tr_segundos == 0){

	$.ajax({

		  url: "paginas/tempo_restante.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }

	});

	

	}

	

		if(tr_minutos == 30 && tr_segundos == 0){

	$.ajax({

		  url: "paginas/tempo_restante.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }

	});



	}

	if(tr_minutos == 35 && tr_segundos == 0){

	$.ajax({

		  url: "paginas/tempo_restante.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }

	});	

	}

	if(tr_minutos == 40 && tr_segundos == 0){

	$.ajax({

		  url: "paginas/tempo_restante.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }

	});

			

	}

	if(tr_minutos == 45 && tr_segundos == 0){

	$.ajax({

		  url: "paginas/tempo_restante.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }

	});

			

	}

	if(tr_minutos == 50 && tr_segundos == 0){

	$.ajax({

		  url: "paginas/tempo_restante.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }

	});



	}

	if(tr_minutos == 55 && tr_segundos == 0){

	$.ajax({

		  url: "paginas/tempo_restante.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }

	});	

	}



	if(tr_minutos == 59 && tr_segundos == 58){

	$.ajax({

		  url: "paginas/tempo_restante.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }

	});	

			

	}



		if(tr_minutos == 59 && tr_segundos == 59){

			$.ajax({

		  url: "paginas/zerar_hora.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }



		});	

		

		$.ajax({

		  url: "paginas/zerar_rodada.php",

		  type: "POST",

		  contentType: 'application/json; charset=utf-8',

		  success: function(data) {

				

		  }



		});	

	

		}

			

		<?php }else{ ?>

		if(tr_minutos == 59 && tr_segundos == 59){

			$.ajax({ url: "paginas/zerar_hora.php", type: "POST" });
			$.ajax({ url: "paginas/zerar_rodada.php", type: "POST" });
		}

		<?php } ?>

			

	document.getElementById('tempo_restante').innerHTML = tr_horas + ":" + tr_minutos + ":" + tr_segundos;

}

	tempo_restante();

    var counter = setInterval(tempo_restante, 1000);

</script>

</div>

<div style='position:absolute;top:29;left:375;' id='tempo'></div>

<form method='post' style="display: inline; margin: 0;" action='index.php?pr=search' id='gohan'>

<input type=text maxlength=12 style="outline:none;background:transparent;border:0;font-family: Helvetica, sans-serif;font-size: 11px;width:160;position:relative;left:20;top:3;padding-left:7;" placeholder='Busca nome do jogador' id='searchbar' name='usu'></form></div>

<form method='post' style="display: inline; margin: 0;" target='HF'  id='goku'>

<?php

	if(!isset($_SESSION['Usuario'])){

?>

<div style="position:absolute;top:185;left:300;">

	<div style="position:relative;top:0;left:0;float:left;width:146;height:26;background-image:url('img/layout/inputlog.png');">

	<input type=text maxlength=52 style="outline:none;background:transparent;border:0;font-family: Tahoma, sans-serif;font-size: 11px;width:130;position:relative;left:10;top:4;font-weight:bold;padding-left:0;" placeholder='Usuario ou Email' name='user' id='username' class='placeholder'></div>



	<div style="position:relative;top:0;left:5;float:left;width:146;height:26;background-image:url('img/layout/inputlog.png');">

	<div style="position:absolute;top:6;right:8;width:16;height:16;background-image:url('img/saveKeyBtn.png');overflow:hidden;" id='saveKeyBtn'></div>

	<input type=password maxlength=80 style="outline:none;background:transparent;border:0;color:#FFFFFF;font-family: Tahoma, sans-serif;font-size: 11px;width:110;position:relative;left:10;top:4;font-weight:bold;padding-left:0;display:none;" id='password' name='password'>



	<input type=password maxlength=12 style="outline:none;background:transparent;border:0;font-family: Tahoma, sans-serif;font-size: 11px;width:110;position:relative;left:10;top:4;font-weight:bold;padding-left:0;" placeholder='Senha' id='fakepassword'>

	</div>





	<div style="position:relative;top:0;left:15;float:left;width:90;height:27;"  onClick='login();'>

	<img src='img/layout/entrar.png' border=0 id='entra'></div>







</div>

</form>



<div id='singup' style="position:absolute;top:80;left:430;float:left;width:178;height:39;background-image:url('img/layout/startbtn.png');" onClick="document.location='?pr=cadastro';"></div>

<?php 

}else{

?>

<?php

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

		$id_u = $_SESSION['ID'];

		$timeuser = $rs['Time'];

		$Gols_Total = $rs['Gols_Total'];

		$Gols_Temporada = $rs['Gols_Temporada'];

		$Gols_Rodada = $rs['Gols_Rodada'];

		$Gols_Hora = $rs['Gols_Hora'];

		$Dinheiro = $rs['Dinheiro'];

		$mc_nivel = $rs['Nivel'];

		$upnivel = $rs['upnivel'];

		$status = $rs['Status'];

		$loggin = $rs['logging'];

?>



<?php

$sql = DB::conn()->prepare("SELECT Time FROM times WHERE ID = '".$timeuser."'");

$sql->execute();

$rss = $sql->fetch();

$times = $rss["Time"];

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

ini_set('display_errors', '1');

ini_set('display_startup_errors', '1');

error_reporting(E_ALL);

?>



<div id="info_user" style="position:absolute; left:640; top:75; font-family:visitor; font-size:0.8em; color:#fff; text-shadow:#222 1px -1px, #222 -1px 1px, #222 1px 1px, #222 -1px -1px;">

<div id="nivel_user" style="position:absolute; top:-40; cursor:pointer;">

<?php
    $nivelNum = (int)$rs['Nivel'];
    $onHover = $nivelNum;
    if ($Adm == 1) { $onHover = '100'; }
    elseif ($Adm == 2) { $onHover = '200'; }
    elseif ($Adm == 3) { $onHover = '300'; }
    elseif ($rs['ID'] == ($medalha_1 ?? -1)) { $onHover = 'top1_g'; }
    elseif ($rs['ID'] == ($medalha_2 ?? -1)) { $onHover = 'top2_g'; }
    elseif ($rs['ID'] == ($medalha_3 ?? -1)) { $onHover = 'top2_g'; }
    elseif ($rs['ID'] == ($medalha_4 ?? -1)) { $onHover = 'top2_g'; }
    elseif ($rs['ID'] == ($medalha_5 ?? -1)) { $onHover = 'top2_g'; }
    elseif (($Top_tm ?? 0) == 1) { $onHover = 'trof_1'; }
    elseif (($Top_tm ?? 0) == 2) { $onHover = 'trof_2'; }
    elseif (($Top_tm ?? 0) == 3) { $onHover = 'trof_3'; }
    elseif (($Top_rd ?? 0) == 1) { $onHover = 'med_1'; }
    elseif (($Top_rd ?? 0) == 2) { $onHover = 'med_2'; }
    elseif (($Top_rd ?? 0) == 3) { $onHover = 'med_3'; }
    elseif (($Top_hr ?? 0) == 1) { $onHover = 'hora_1'; }
    elseif (($Top_hr ?? 0) == 2) { $onHover = 'hora_2'; }
    elseif (($Top_hr ?? 0) == 3) { $onHover = 'hora_3'; }

    $srcBase = $nivelNum;
    if ($Adm == 1) { $srcBase = '100'; }
    elseif ($Adm == 2) { $srcBase = '200'; }
    elseif ($Adm == 3) { $srcBase = '300'; }
    elseif ($rs['ID'] == ($medalha_1 ?? -1)) { $srcBase = 'top1_g'; }
    elseif ($rs['ID'] == ($medalha_2 ?? -1)) { $srcBase = 'top2_g'; }
    elseif ($rs['ID'] == ($medalha_3 ?? -1)) { $srcBase = 'top2_g'; }
    elseif ($rs['ID'] == ($medalha_4 ?? -1)) { $srcBase = 'top2_g'; }
    elseif ($rs['ID'] == ($medalha_5 ?? -1)) { $srcBase = 'top2_g'; }
    elseif (($Top_tm ?? 0) == 1) { $srcBase = 'trof_1'; }
    elseif (($Top_tm ?? 0) == 2) { $srcBase = 'trof_2'; }
    elseif (($Top_tm ?? 0) == 3) { $srcBase = 'trof_3'; }
    elseif (($Top_rd ?? 0) == 1) { $srcBase = 'med_1'; }
    elseif (($Top_rd ?? 0) == 2) { $srcBase = 'med_2'; }
    elseif (($Top_rd ?? 0) == 3) { $srcBase = 'med_3'; }
    elseif (($Top_hr ?? 0) == 1) { $srcBase = 'hora_1'; }
    elseif (($Top_hr ?? 0) == 2) { $srcBase = 'hora_2'; }
    elseif (($Top_hr ?? 0) == 3) { $srcBase = 'hora_3'; }

    $src = "img/icons/{$srcBase}.gif";
?>
<img onMouseOver="mFig(this,'<?php echo $nivelNum; ?>')" onMouseOut="mFig(this,'<?php echo $onHover; ?>')" src="<?php echo $src; ?>" border="0">

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

	case 32: echo 'Não Definido - 32'; 

	break;																													

	default: echo 'Não Definido - 33';

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

	

	if(ceil(($upnivel*130)/$mc_nivel_gols) > 130){echo $return = 0;}else{

		

	$return = '<div id="progress" style="width:'.$total.';height:3px;background:url('.$pasta.');border-radius:100px; -moz-border-radius:100px;-webkit-border-radius:100px;"></div>';

	echo $return;

	}

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

<span style="position:absolute; top:62; color:#E1DE00; text-shadow:#8A911C 1px -1px, #8A911C -1px 1px, #8A911C 1px 1px, #8A911C -1px -1px; ">Dinheiro</span>

<span style="position:absolute; top:62; left:110; color:#E1DE00; text-shadow:#8A911C 1px -1px, #8A911C -1px 1px, #8A911C 1px 1px, #8A911C -1px -1px; "><?php echo $Dinheiro; ?>$</span>

</div><?php } ?>

<div id="bolaextra1" style="position:absolute; top:190; left:90;">

<?php

$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$_SESSION['ID']."'");

$sql->execute();

if($sql->rowCount() == 0){

	

}else{

$rs = $sql->fetch();

$bola_extra = $rs['bola_extra'];		

?>

<div id="t1" style="background:url(img/fundo-extra.png); width:33px; height:33px;">

<?php if($bola_extra >= 1){ ?>

<div style="background:url(img/bola-extra.png); width:34px; height:33px; cursor:pointer;" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"></div>

<?php } ?>

</div>

</div>



<div id="bolaextra2" style="position:absolute; top:190; left:125;">

<div id="t2" style="background:url(img/fundo-extra.png); width:33px; height:33px;">

<?php if($bola_extra >= 2){ ?>

<div style="background:url(img/bola-extra.png); width:34px; height:33px; cursor:pointer; " class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"></div>

<?php } ?>

</div>

</div>



<div id="bolaextra3" style="position:absolute; top:190; left:160;">

<div id="t3" style="background:url(img/fundo-extra.png); width:33px; height:33px;">

<?php if($bola_extra > 2){ ?>

<div style="background:url(img/bola-extra.png); width:34px; height:33px; cursor:pointer;" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"></div>

<?php } ?>

</div>

<?php } ?>

</div>

<div id="tempo_chutar" style="position: absolute; top:70; left: 205;">

<div id="chute_auto" style="color:#FFF; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:17px; font-weight:bold; position:absolute; margin-top:28px; margin-left:19px;">

<div id="divProgress" style="position:absolute; top:45px; left:49px;"></div> 

<div id="tempoa" style="position:absolute; left:69px; top:73px;"></div>

<?php

$query = DB::conn()->prepare("SELECT ID, Tempo_Auto,VIP FROM usuarios WHERE ID = ('". $_SESSION['ID'] ."')");

$query->execute();

$rs = $query->fetchObject();



$mc_id = $rs->ID;

$mc_tempo_chutar = $rs->Tempo_Auto;

$VIP = $rs->VIP;

$tempo_chutar1 = date("Y/m/d H:i:s", strtotime("+5 mins"));

$tempo_chutar2 = date("Y/m/d H:i:s", strtotime("+10 mins"));

$mc_ip = $_SERVER["REMOTE_ADDR"];



$rem = strtotime($mc_tempo_chutar) - time();

$day = floor($rem / 86400);

$hr  = floor(($rem % 86400) / 3600);

$min = floor(($rem % 3600) / 60);

$sec = ($rem % 60);

$total = $min.$sec;

$auto_cod = rand(1000,9999);



$tempo_chutar1 = date("Y/m/d H:i:s", strtotime("+5 mins"));

$tempo_chutar2 = date("Y/m/d H:i:s", strtotime("+10 mins"));

if($VIP >= date('Y-m-d H:i:s'))

{





}else{



}

?>

<?php if ($mc_tempo_chutar <= date("Y/m/d H:i:s")) { 



?>



<?php

$mc_ip = $_SERVER["REMOTE_ADDR"];



$sql = DB::conn()->prepare("SELECT ID,VIP,Tempo_Auto FROM usuarios WHERE ID = ('". $_SESSION['ID'] ."')");

$sql->execute();

$reg = DB::conn()->prepare("SELECT VIP FROM usuarios WHERE ID = ('". $_SESSION['ID'] ."')");

$reg->execute();

$rs = $reg->fetchObject();



$mc_vip = $rs->VIP;



?>

<?php } ?>

<?php

$query = DB::conn()->prepare("SELECT Tempo_Auto, Auto_Cod, VIP FROM usuarios WHERE ID = ('". $_SESSION['ID'] ."')");

$query->execute();

$rs = $query->fetchObject();



$mc_tempo_chutar = $rs->Tempo_Auto;

$Tempo_Auto = $rs->Tempo_Auto;

$code = $rs->Auto_Cod;

$vip = $rs->VIP;



$tempo = explode(" ", $mc_tempo_chutar ?? '');
$mc_tempo_chutar = $tempo[1] ?? '';
$tempo = explode(":", $mc_tempo_chutar);
// Defaults seguros para evitar JS inválido
$hora = isset($tempo[0]) && is_numeric($tempo[0]) ? (int)$tempo[0] : (int)date("H");
$minuto = isset($tempo[1]) && is_numeric($tempo[1]) ? (int)$tempo[1] : (int)date("i");
$segundo = isset($tempo[2]) && is_numeric($tempo[2]) ? (int)$tempo[2] : (int)date("s");

// Calcular o tempo restante em segundos baseado no timestamp absoluto
$tempo_futuro = strtotime($mc_tempo_chutar);
$tempo_atual = time();
$tempo_restante_segundos = max(0, $tempo_futuro - $tempo_atual);

// Se o tempo já expirou, definir como 0
if ($tempo_restante_segundos <= 0) {
    $tempo_restante_segundos = 0;
}
?>

<input type="hidden" name="code" value="<?php echo $code;?>" id="cod1" />
<input type="hidden" name="tempo_restante" value="<?php echo $tempo_restante_segundos;?>" id="tempo_restante_auto" />

<script language="javascript">
// Usar o tempo restante calculado no PHP para evitar recálculos incorretos
var tempo_entretenimentos = <?php echo $tempo_restante_segundos; ?>;

temp_entretenimentos();

function temp_entretenimentos() {
	if (tempo_entretenimentos > 0) {
		document.getElementById("tempoa").innerHTML = parseInt(tempo_entretenimentos % 3600 / 60) + ":" + conv(parseInt(tempo_entretenimentos % 60));
		tempo_entretenimentos = tempo_entretenimentos - 1;
		setTimeout("temp_entretenimentos()", 1000);
	}
	else {
		tempo_entretenimentos = <?php if($vip >= date('Y-m-d H:i:s')){echo 240;}else{echo 480;} ?>;	
	   $.ajax({url: 'paginas/gol_aut.php',
		data:{code:$("#cod1").val()},
		type:'POST',
		async: false, 
		dataType: 'text',
		
		success: function(text) {
			
		}, error: function(http, message, exc) {
				
		}});
		document.getElementById("tempoa").innerHTML = parseInt(tempo_entretenimentos % 3600 / 60) + ":" + conv(parseInt(tempo_entretenimentos % 60));
		tempo_entretenimentos = tempo_entretenimentos - 1;
		setTimeout("temp_entretenimentos()", 1000);
	}
}
function conv(numero) {
	if (numero <= 9) { return "0" + numero; }
	else { return numero; }
}
</script>
<script src="js/CircularLoader.js"></script>
<script type="text/javascript">

$("#divProgress").circularloader({

backgroundColor: "#212121",//background colour of inner circle

fontColor: "#FFF",//font color of progress text

fontSize: "16px",//font size of progress text

radius: 30,//radius of circle

progressBarBackground: "#888",//background colour of circular progress Bar

progressBarColor: "#00CC66",//colour of circular progress bar

progressBarWidth: 7,//progress bar width

progressValue: '',//diplay this value instead of percentage

progressPercent: 1,//progress percentage out of 100

showText: false,//show progress text or not

});

</script>



<div style="color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:15px; font-weight:bold; position:absolute; left:69px; top:115px;"><center>

Auto   

</center></div></div>

</div>



<div id="tempo_chutar" style="position: absolute; top:70; left: 300;">

<div id="chute_auto1" style="color:#FFF; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:17px; font-weight:bold; position:absolute; margin-top:28px; margin-left:19px;">

	<div id="divProgress1" style="position:absolute; top:45px; left:49px;"></div> 

    <div id="tempoa1" style="position:absolute; left:68px; top:73px;"></div>

<?php

$query = DB::conn()->prepare("SELECT ID, Tempo_Penalti,VIP,penalti,bola1 FROM usuarios WHERE ID = ('". $_SESSION['ID'] ."')");

$query->execute();

$rs = $query->fetchObject();



$mc_id = $rs->ID;

$mc_tempo_chutar = $rs->Tempo_Penalti;

$VIP = $rs->VIP;

$penalti = $rs->penalti;

$bola1 = $rs->bola1;

$tempo_chutar1 = date("Y/m/d H:i:s", strtotime("+5 mins"));

$tempo_chutar2 = date("Y/m/d H:i:s", strtotime("+10 mins"));

$mc_ip = $_SERVER["REMOTE_ADDR"];



$rem = strtotime($mc_tempo_chutar) - time();

$day = floor($rem / 86400);

$hr  = floor(($rem % 86400) / 3600);

$min = floor(($rem % 3600) / 60);

$sec = ($rem % 60);

$total1 = $min.$sec;



$tempo_chutar1 = date("Y/m/d H:i:s", strtotime("+5 mins"));

$tempo_chutar2 = date("Y/m/d H:i:s", strtotime("+10 mins"));



if($VIP >= date('Y-m-d H:i:s'))

{





}else{



}

?>    

<?php

$query = DB::conn()->prepare("SELECT ID, Tempo_Penalti,penalti,bola1,Som,VIP FROM usuarios WHERE ID = ('". $_SESSION['ID'] ."')");

$query->execute();

$rs = $query->fetchObject();



$mc_id = $rs->ID;

$mc_tempo_chutar = $rs->Tempo_Penalti;

$VIP = $rs->VIP;



// Calcular o tempo restante em segundos baseado no timestamp absoluto
$tempo_futuro = strtotime($mc_tempo_chutar);
$tempo_atual = time();
$tempo_restante_segundos = max(0, $tempo_futuro - $tempo_atual);

// Se o tempo já expirou, definir como 0
if ($tempo_restante_segundos <= 0) {
    $tempo_restante_segundos = 0;
}



$mc_p = $rs->penalti;

$bola = $rs->bola1;

$som = $rs->Som;

// Campo hidden para o tempo restante de penalti
echo '<input type="hidden" name="tempo_restante_penalti" value="' . $tempo_restante_segundos . '" id="tempo_restante_penalti" />';



?>

<?php

if($mc_p == 0){

	

?>

<script language="javascript">
// Usar o tempo restante calculado no PHP para evitar recálculos incorretos
var tempo_entretenimentos1 = <?php echo $tempo_restante_segundos; ?>;



temp_entretenimentos1();



function temp_entretenimentos1() {

	if (tempo_entretenimentos1 > 0) {

		document.getElementById("tempoa1").innerHTML = parseInt(tempo_entretenimentos1 % 3600 / 60) + ":" + conv(parseInt(tempo_entretenimentos1 % 60));

		tempo_entretenimentos1 = tempo_entretenimentos1 - 1;

		setTimeout("temp_entretenimentos1()", 1000);

	}

	else {
		
		//location.reload()

		$("#tempoa1").hide();

	  <?php if($som == 1){?>

			$.playSound("som");

	  <?php }else{?><?php }?>

		$.ajax({

		method: 'POST',

		url: 'paginas/penalti.php',

		async: false, 

		dataType: 'text',

		

		success: function(text) {

		var bola = '<img src="img/bola_'+text+'.png" width="54" height="54" style="cursor:pointer; position:absolute; top:10px; left:10px;" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">';

		  $("#divProgress1").prepend(bola);

		  close();

		}, error: function(http, message, exc) {

				

		}});

	}

}

function conv(numero) {

	if (numero <= 9) { return "0" + numero; }

	else { return numero; }

}

</script>

<?php }else{ 

if($mc_tempo_chutar <= date('Y/m/d H:i:s') && $mc_p == 0){

	$sql = DB::conn()->prepare("UPDATE usuarios SET penalti = 1, bola1 = 1 WHERE ID = '".$_SESSION['ID']."'");

	$sql->execute();

}

?>

<div id="penalti">
	
<a href="index.php?pr=calendario&jogo=penalty" style="position:absolute; top:55; left:59;">
<img src="img/<?php if($bola == 1){ ?>bola_1<?php }elseif($bola == 2){ ?>bola_2<?php }elseif($bola == 3){?>bola_3<?php }?>.png" width="54" height="54" style="cursor:pointer;" class="btn btn-primary btn-lg" >
</a>

</div>

<?php } ?>

<script src="js/CircularLoader.js"></script>

<script type="text/javascript">

$("#divProgress1").circularloader({

backgroundColor: "#212121",//background colour of inner circle

fontColor: "#FFF",//font color of progress text

fontSize: "16px",//font size of progress text

radius: 30,//radius of circle

progressBarBackground: "#888",//background colour of circular progress Bar

progressBarColor: "#00CC66",//colour of circular progress bar

progressBarWidth: 7,//progress bar width

progressPercent: <?php if($mc_p >= 1){echo 360;}else{echo 1;} ?>,//progress percentage out of 100

progressValue: '',//diplay this value instead of percentage

showText: false,//show progress text or not

});

</script>

<div style="color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:15px; font-weight:bold; left:63px; top:115px; position:absolute;" ><center>

Penalti

  

</center></div></div>

</div>



<div id="tempo_chutar2" style="position: absolute; top:70; left: 390;">

<div id="chute_auto2" style="color:#FFF; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:17px; font-weight:bold; position:absolute; margin-top:28px; margin-left:19px;">

	<div id="divProgress2" style="position:absolute; top:45px; left:49px;"></div> 

    <div id="tempoa2" style="position:absolute; left:68px; top:73px;"></div>

<?php

$query = DB::conn()->prepare("SELECT ID, Tempo_Falta,VIP,falta FROM usuarios WHERE ID = ('". $_SESSION['ID'] ."')");

$query->execute();

$rs = $query->fetchObject();



$mc_id = $rs->ID;

$mc_tempo_chutar = $rs->Tempo_Falta;

$VIP = $rs->VIP;

$falta = $rs->falta;

$tempo_chutar1 = date("Y/m/d H:i:s", strtotime("+5 mins"));

$tempo_chutar2 = date("Y/m/d H:i:s", strtotime("+10 mins"));

$mc_ip = $_SERVER["REMOTE_ADDR"];



$rem = strtotime($mc_tempo_chutar) - time();

$day = floor($rem / 86400);

$hr  = floor(($rem % 86400) / 3600);

$min = floor(($rem % 3600) / 60);

$sec = ($rem % 60);

$total2 = $min.$sec;



$tempo_chutar1 = date("Y/m/d H:i:s", strtotime("+5 mins"));

$tempo_chutar2 = date("Y/m/d H:i:s", strtotime("+10 mins"));



if($VIP >= date('Y-m-d H:i:s'))

{





}else{



}

?>     

    

<?php

$query = DB::conn()->prepare("SELECT ID, Tempo_Falta,falta,bola2,Som,VIP FROM usuarios WHERE ID = ('". $_SESSION['ID'] ."')");

$query->execute();

$rs = $query->fetchObject();



$mc_id = $rs->ID;

$mc_tempo_chutar = $rs->Tempo_Falta;

$VIP = $rs->VIP;

// Calcular o tempo restante em segundos baseado no timestamp absoluto
$tempo_futuro = strtotime($mc_tempo_chutar);
$tempo_atual = time();
$tempo_restante_segundos = max(0, $tempo_futuro - $tempo_atual);

// Se o tempo já expirou, definir como 0
if ($tempo_restante_segundos <= 0) {
    $tempo_restante_segundos = 0;
}



$hora = isset($tempo[0]) && is_numeric($tempo[0]) ? (int)$tempo[0] : (int)date("H");
$minuto = isset($tempo[1]) && is_numeric($tempo[1]) ? (int)$tempo[1] : (int)date("i");
$segundo = isset($tempo[2]) && is_numeric($tempo[2]) ? (int)$tempo[2] : (int)date("s");



$mc_p = $rs->falta;

$bola = $rs->bola2;

$som = $rs->Som;

// Campo hidden para o tempo restante de falta
echo '<input type="hidden" name="tempo_restante_falta" value="' . $tempo_restante_segundos . '" id="tempo_restante_falta" />';



?>



<?php

if($mc_p == 0){

?>
	


	

<script language="javascript">
// Usar o tempo restante calculado no PHP para evitar recálculos incorretos
var tempo_entretenimentos2 = <?php echo $tempo_restante_segundos; ?>;



temp_entretenimentos2();



function temp_entretenimentos2() {

	if (tempo_entretenimentos2 > 0) {

		document.getElementById("tempoa2").innerHTML = parseInt(tempo_entretenimentos2 % 3600 / 60) + ":" + conv(parseInt(tempo_entretenimentos2 % 60));

		tempo_entretenimentos2 = tempo_entretenimentos2 - 1;

		setTimeout("temp_entretenimentos2()", 1000);

	}

	else {
		//location.reload()

		$("#tempoa2").hide(); 

	  <?php if($som == 1){?>

			$.playSound("som");

	  <?php }else{?><?php }?>

		$.ajax({

		method: 'POST',

		url: 'paginas/falta.php',

		async: false, 

		dataType: 'text',

		

		success: function(text) {

		var bola = '<img src="img/bola_'+text+'.png" width="54" height="54" style="cursor:pointer; position:absolute; top:10px; left:10px;" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal1"  >';

		  $("#divProgress2").prepend(bola);
location.reload()
		}, error: function(http, message, exc) {
				
				

		}});

	}

}

function conv(numero) {

	if (numero <= 9) { return "0" + numero; }

	else { return numero; }

}

</script>

<?php }else{ 

if($mc_tempo_chutar <= date('Y/m/d H:i:s') && $mc_p == 0){

	$sql = DB::conn()->prepare("UPDATE usuarios SET penalti = 1, bola2= 1 WHERE ID = '".$_SESSION['ID']."'");

	$sql->execute();

}

?>

<div id="falta">

<a href="index.php?pr=calendario&jogo=falta" style="position:absolute; top:55; left:59;">
<img src="img/<?php  if($bola == 0){ ?>bola_1<?php }?><?php if($bola == 1){ ?>bola_1<?php }elseif($bola == 2){ ?>bola_2<?php }elseif($bola == 3){?>bola_3<?php }?>.png" width="54" height="54" style="cursor:pointer;" class="btn btn-primary btn-lg" >
</a>

</div>

<?php } ?>

<script src="js/CircularLoader.js"></script>

<script type="text/javascript">

$("#divProgress2").circularloader({

backgroundColor: "#212121",//background colour of inner circle

fontColor: "#FFF",//font color of progress text

fontSize: "16px",//font size of progress text

radius: 30,//radius of circle

progressBarBackground: "#888",//background colour of circular progress Bar

progressBarColor: "#00CC66",//colour of circular progress bar

progressBarWidth: 7,//progress bar width

progressPercent: <?php if($mc_p >= 1){echo 360;}else{echo 1;} ?>,//progress percentage out of 100

progressValue: '',//diplay this value instead of percentage

showText: false,//show progress text or not

});

</script>

<div style="color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:15px; font-weight:bold; left:69px; top:115px; position:absolute;"><center>

Falta

<!-- Modal -->



</center></div></div>

</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		


<!-- SEÇÃO DA TRILHA - REFEITA IGUAL À FALTA -->
<div id="tempo_chutar3" style="position: absolute; top:70; left: 480;">

<div id="chute_auto3" style="color:#FFF; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:17px; font-weight:bold; position:absolute; margin-top:28px; margin-left:19px;">

	<div id="divProgress3" style="position:absolute; top:45px; left:49px;"></div> 

    <div id="tempoa3" style="position:absolute; left:68px; top:73px;"></div>

<?php

$query = DB::conn()->prepare("SELECT ID, Tempo_Trilha,VIP,trilha FROM usuarios WHERE ID = ('". $_SESSION['ID'] ."')");

$query->execute();

$rs = $query->fetchObject();

$mc_id = $rs->ID;

$mc_tempo_chutar = $rs->Tempo_Trilha;

$VIP = $rs->VIP;

$falta = $rs->trilha;

$tempo_chutar1 = date("Y/m/d H:i:s", strtotime("+5 mins"));

$tempo_chutar2 = date("Y/m/d H:i:s", strtotime("+10 mins"));

$mc_ip = $_SERVER["REMOTE_ADDR"];

$rem = strtotime($mc_tempo_chutar) - time();

$day = floor($rem / 86400);

$hr  = floor(($rem % 86400) / 3600);

$min = floor(($rem % 3600) / 60);

$sec = ($rem % 60);

$total2 = $min.$sec;

$tempo_chutar1 = date("Y/m/d H:i:s", strtotime("+5 mins"));

$tempo_chutar2 = date("Y/m/d H:i:s", strtotime("+10 mins"));

if($VIP >= date('Y-m-d H:i:s')){

}else{

}

?>     

    

<?php

$query = DB::conn()->prepare("SELECT ID, Tempo_Trilha,trilha,bola3,Som,VIP FROM usuarios WHERE ID = ('". $_SESSION['ID'] ."')");

$query->execute();

$rs = $query->fetchObject();

$mc_id = $rs->ID;

$mc_tempo_chutar = $rs->Tempo_Trilha;

$VIP = $rs->VIP;

// Calcular o tempo restante em segundos baseado no timestamp absoluto
$tempo_futuro = strtotime($mc_tempo_chutar);
$tempo_atual = time();
$tempo_restante_segundos = max(0, $tempo_futuro - $tempo_atual);

// Se o tempo já expirou, definir como 0
if ($tempo_restante_segundos <= 0) {
    $tempo_restante_segundos = 0;
}

$mc_p = $rs->trilha;

$bola3 = $rs->bola3;

$som = $rs->Som;

// Campo hidden para o tempo restante de trilha
echo '<input type="hidden" name="tempo_restante_trilha" value="' . $tempo_restante_segundos . '" id="tempo_restante_trilha" />';

// DEBUG: Verificar valores
echo "<!-- DEBUG TRILHA: mc_p=$mc_p, tempo_restante_segundos=$tempo_restante_segundos, Tempo_Trilha=$mc_tempo_chutar -->";

// Exibir cronômetro quando não pode jogar E há tempo restante
if($mc_p == 0 && $tempo_restante_segundos > 0){
?>

<script language="javascript">
// Cronômetro da trilha - usando tempo correto do banco de dados
var tempo_entretenimentos3 = <?php echo $tempo_restante_segundos; ?>;

// Debug para verificar o valor
console.log('tempo_entretenimentos3:', tempo_entretenimentos3);

// Garantir que o cronômetro está visível se há tempo restante
if (tempo_entretenimentos3 > 0) {
    $("#tempoa3").show();
    console.log('Cronômetro visível, tempo restante:', tempo_entretenimentos3);
} else {
    console.log('Cronômetro oculto, tempo restante:', tempo_entretenimentos3);
}

// Iniciar o cronômetro
temp_entretenimentos3();

function temp_entretenimentos3() {
	console.log('Função temp_entretenimentos3 chamada, tempo:', tempo_entretenimentos3);
	
	if (tempo_entretenimentos3 > 0) {
		$("#tempoa3").show(); // Garantir que está visível
		var minutos = parseInt(tempo_entretenimentos3 % 3600 / 60);
		var segundos = parseInt(tempo_entretenimentos3 % 60);
		var tempo_formatado = minutos + ":" + conv(segundos);
		
		console.log('Atualizando cronômetro:', tempo_formatado);
		document.getElementById("tempoa3").innerHTML = tempo_formatado;
		
		tempo_entretenimentos3 = tempo_entretenimentos3 - 1;
		setTimeout("temp_entretenimentos3()", 1000);
	} else {
		console.log('Cronômetro finalizado, ocultando elemento');
		$("#tempoa3").hide();
		<?php if($som == 1){?>
			$.playSound("som");
		<?php }?>
		
		// Quando o cronômetro acaba, redirecionar para resetar o status
		console.log('Redirecionando para resetar status da trilha');
		window.location.href = 'paginas/trilha.php';
	}
}

function conv(numero) {
	if (numero <= 9) { return "0" + numero; }
	else { return numero; }
}

</script>

<?php }elseif($mc_p == 1 || ($mc_p == 0 && $tempo_restante_segundos == 0)){ ?>

<!-- DEBUG: Mostrando bola da trilha - pode jogar ou tempo expirou -->
<!-- mc_p: <?php echo $mc_p; ?>, tempo_restante_segundos: <?php echo $tempo_restante_segundos; ?>, bola3: <?php echo $bola3; ?> -->

<div id="trilha">

<a href="index.php?pr=calendario&jogo=trilha" style="position:absolute; top:55; left:59;">
<img src="img/<?php if($bola3 == 1){ ?>bola_1<?php }elseif($bola3 == 2){ ?>bola_2<?php }elseif($bola3 == 3){?>bola_3<?php }else{ ?>bola_1<?php }?>.png" width="54" height="54" style="cursor:pointer;" class="btn btn-primary btn-lg" >
</a>

</div>

<?php }else{ ?>

<!-- DEBUG: Outro caso - mc_p: <?php echo $mc_p; ?>, tempo_restante_segundos: <?php echo $tempo_restante_segundos; ?>, bola3: <?php echo $bola3; ?> -->

<?php } ?>

<script src="js/CircularLoader.js"></script>

<script type="text/javascript">

$("#divProgress3").circularloader({

backgroundColor: "#212121",//background colour of inner circle

fontColor: "#FFF",//font color of progress text

fontSize: "16px",//font size of progress text

radius: 30,//radius of circle

progressBarBackground: "#888",//background colour of circular progress Bar

progressBarColor: "#00CC66",//colour of circular progress bar

progressBarWidth: 7,//progress bar width

progressPercent: <?php if($mc_p >= 1){echo 360;}else{echo 1;} ?>,//progress percentage out of 100

progressValue: '',//diplay this value instead of percentage

showText: false,//show progress text or not

});

</script>

<div style="color:#333; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:15px; font-weight:bold; left:69px; top:115px; position:absolute;"><center>

Trilha

<!-- Modal -->



</center></div></div>

</div>	
		
		
		
		
		



<div id="som" style="position:absolute; top:197px; left:670px;">

<img src="img/som.png" style="cursor:pointer;<?php if($som == 0){ ?> display:none; <?php }?>" id="csom" />

<img src="img/mute.png" style="cursor:pointer;<?php if($som == 1){ ?> display:none;<?php } ?>" id="ssom" />

</div> 

<script type="text/javascript">

$("#csom").click(function(){

	$.post( "paginas/mute.php", function( data ) {

 	 

	});

	

	$(this).hide();

	$("#ssom").show();

	

});

$("#ssom").click(function(){

	$.post( "paginas/som.php", function( data ) {

 	 

	});

	

	$(this).hide();

	$("#csom").show();

	

});

</script>

  <div id="meu_time" style="position:absolute;top:55;left:780;float:left;width:180;height:auto;">



<center>

<?php

$EndImagem = 'img/times/'.$timeuser.'.png'; //Endereço da imagem. Pode ser também uma URL



//Pegando as informações da imagem

$TamanhoImagem = getimagesize($EndImagem);

$Estensao = substr($EndImagem,-3);



$EstPermitidas = array("png");



if(in_array($Estensao,$EstPermitidas)){



}



?>

<a href="index.php?pr=time&time=<?php echo utf8_encode($times);?>">

<div style="width:<?php echo $TamanhoImagem[0];?>px; height:<?php echo $TamanhoImagem[1];?>px; background:url(img/times/<?php echo $timeuser; ?>.png); cursor:pointer;" onClick="index.php?pr=time&time=<?php echo utf8_encode($times);?>"></div></a> 

</center> 

</div> 

<?php } ?>

<div class='serieBtn' style='z-index:9999;cursor:pointer;position:absolute;width:93;height:26;background-image:url(&quot;img/btnSeries.png&quot;);top:190;<?php if(!isset($_SESSION['ID'])){ ?>left:900; <?php }else{ ?>left:900; <?php } ?>'>

	<div>Série A</div>

    <div>Série B</div>

    <div>Série C</div>

</div>



</div>

</td></tr>

<tr><td id='tableShields'><div style="position:relative;top:10;" align="center"><table cellpadding="0" cellspacing="0" border=0 height="50" class="tableShields">

    

    <tr>

    <?php

	$listar_times_serie_A = DB::conn()->prepare("SELECT * FROM times WHERE Serie = 'a' ORDER BY Pontos DESC LIMIT 16");

	$listar_times_serie_A->execute();

	

	if($listar_times_serie_A->rowCount() == 0){

	echo 'Nenhum time da Série A foi encontrado !';	

	}else{

		while($listar_timer_A = $listar_times_serie_A->fetch()){

	?>

    <td width=65 align="center" valing="bottom"><a href="index.php?pr=time&time=<?php echo utf8_encode($listar_timer_A['Time']); ?>"><img src="img/gr/Times_g/<?php echo $listar_timer_A['ID']; ?>.png" class="tumb" border=0 width=36 height=39></a></td>

    <?php }} ?>

   </tr>

   

   </table></div></td></tr>

<tr><td valign='top' style='padding-top:15;' ><table cellpadding='0' cellspacing='0' border=0 width=100% height=100%><tr><td width=204 valign='top' align='left'><div style="position:relative;left:-6px;overflow: hidden;width:100%;height:100%;"><table cellpadding='0' cellspacing='0' border=0 height=20>

<tr><td><div style="position:relative;top:0;left:0;width:204;height:57;"><div style="width:204;height:57;background-image:url('img/layout/menu/topL.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:204;top:10;color:#515151;font-family:litoh;font-size:1em;">Menu</div><div style="position:absolute;text-align:center;width:204;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Menu</div></div></div></td></tr>

<tr><td style='height:auto'><div style="position:relative;top:0;left:6;width:192;height:100%;background-image:url('img/layout/menu/midL.png');padding-top:8;"  ><div id='mainMenu' style="position:relative;top:0;left:0;width:100%;height:100%;"><table cellpadding='0' cellspacing='0' border=0>

<tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr='">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=index" style="color:#3b3b3b;">Principal</a></div>

	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr><tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=calendario'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=calendario" style="color:#3b3b3b;">Rodadas</a></div>

	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr><tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=rank'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=rank" style="color:#3b3b3b;">Níveis</a></div>

	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr><tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=premiacoes'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=premiacoes" style="color:#3b3b3b;">Premiações</a></div>

	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr><tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="vish(1);">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Ranking</div>

	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr><tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=regras'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=regras" style="color:#3b3b3b;">Regras</a></div>

	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr><tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="vish(2);">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Duvidas</div>

	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr><tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=divisaoA'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=divisaoA" style="color:#3b3b3b;">Divisão de Acesso</a></div>

	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr><tr><td>



    <div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=divisaoJ2'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=divisaoJ2" style="color:#3b3b3b;">Divisão de Jogadores</a></div>

	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div>



    

    <tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=changes'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=changes"style="color:#3b3b3b;">Movimentações</a></div>

	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr><tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=vips'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=vips" style="color:#3b3b3b;">Vips</a></div>

	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

        <?php 

	if(isset($_SESSION['ID'])){

	?>

        <tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=confirmarv'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=confirmarv" style="color:#3b3b3b;">Confirma VIP</a></div>

	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr>

    <?php }else{} ?>

    

	</div></td></tr></table></div><div id='pop1' style="position:relative;top:0;left:0;width:100%;height:100%;display:none;"><table cellpadding='0' cellspacing='0' border=0>

<tr><td>



	<div style="position:relative;width:187;height:31;" class='row' onClick="back();">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Voltar</div>

	<div style="position:absolute;top:0;left:10;height:20;width:15;background-image:url('img/layout/menu/arrowR.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr><tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=rankG'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Geral</div>

	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr><tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=rankT'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Temporada</div>

	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr><tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=rankR'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Rodada</div>

	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr><tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=rankH'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Hora</div>

	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr><tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=rankP'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Penal</div>

	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr><tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=rankF'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Falta</div>

	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr><tr><td>

	</td></tr><tr><td>

	</td></tr></table></div><div id='pop2' style="position:relative;top:0;left:0;width:100%;height:100%;display:none;"><table cellpadding='0' cellspacing='0' border=0>

<tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="back();">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Voltar</div>

	<div style="position:absolute;top:0;left:10;height:20;width:15;background-image:url('img/layout/menu/arrowR.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr><tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=faq3'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Detalhes</div>

	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr><tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=comoj'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Como Jogar?</div>

	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr><tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=perguntas'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">FAQ's</div>

	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr></table></div><div id='pop4' style="position:relative;top:0;left:0;width:100%;height:100%;display:none;"><table cellpadding='0' cellspacing='0' border=0>

<tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="back();">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Voltar</div>

	<div style="position:absolute;top:0;left:10;height:20;width:15;background-image:url('img/layout/menu/arrowR.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr><tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=confirmavip'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Confirma Vip</div>

	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr><tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=statsvip'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Status</div>

	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr></table></div></div></td></tr>

    <tr><td><div style="position:relative;top:0;width:192;left:6;height:15px;"><img src='img/layout/menu/botL.png' border=0></div></td></tr>

	

	</table></td></div></td>   

<td valign='top' align='center'><table cellpadding='0' cellspacing='0' border=0><tr><td><table cellpadding='0' cellspacing='0' border=0 height=20>

    <?php

    if(!isset($Paginas)) { $Paginas = 'index'; }
    if(file_exists(__DIR__ . '/paginas/' . $Paginas . '.php'))

		{

        require __DIR__ . '/paginas/' . $Paginas . '.php';

		}elseif(file_exists('adm/' . $Paginas . '.php')){

        require __DIR__ . '/adm/' . $Paginas . '.php';

		}elseif(file_exists('mod/'. $Paginas . '.php')){

        require __DIR__ . '/mod/'. $Paginas . '.php'; 

		}else{

        require __DIR__ . '/paginas/erro.php'; 

		}

	?>

</table></td>

<td width=204 valign='top' align='right'><div style='position:relative;right:0px;width:100%;height:100%;'><table cellpadding='0' cellspacing='0' border=0 height=20>

<?php

if(isset($_SESSION['Usuario'])){

?>    

<tr><td>

<div style="position:relative;top:0;left:0;width:204;height:57;"><div style="width:204;height:57;background-image:url('img/layout/menu/topL.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:204;top:10;color:#515151;font-family:litoh;font-size:1em;">Minha Conta</div><div style="position:absolute;text-align:center;width:204;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Minha Conta</div></div></div></td></tr>

<tr><td style='height:auto'><div style="position:relative;top:0;left:6;width:192;height:100%;background-image:url('img/layout/menu/midL.png');padding-top:8;">

<div id='mainMenu' style="position:relative;top:0;left:0;width:100%;height:100%;"><table cellpadding='0' cellspacing='0' border=0>

<?php

$destrancar = DB::conn()->prepare("SELECT Trancar FROM usuarios WHERE ID = '".$_SESSION['ID']."'");

$destrancar->execute();

$rs = $destrancar->fetch();

$trancar = $rs["Trancar"];

?>

<?php

	if($trancar > 0){

?>

<tr><td>

<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=destrank'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:64;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=destrank" style="color:#3b3b3b;">Destrancar</a></div>

	<div style="position:absolute;top:1;left:22;"><img src="img/trancar.png" height="19" /></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr>

<?php }else{ ?>   

 

<tr><td>    

  <div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=recados'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:71;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=recados" style="color:#3b3b3b;">Recados</a></div>

   

	<div style="position:absolute;top:2;left:20;height:16;width:25;background-image:url(img/msg.png);"><div style="color:#38A63A; font-size:11px; font-family:Tahoma, Geneva, sans-serif; margin-top:1px;"><center>

  <span id="countmsg">

  <?php

  $ver_quantidade_mensagens = DB::conn()->prepare("SELECT Count(ID) AS mensagens_quantidade FROM mensagens_usuario WHERE id_para = '".$_SESSION['ID']."'");

$ver_quantidade_mensagens->execute();

$row = $ver_quantidade_mensagens->fetchObject();



$mensagens_quantidade = $row->mensagens_quantidade;



	if($mensagens_quantidade <= 0){

	echo '0';	

	}else{

	echo $mensagens_quantidade;	

	}

  ?>

  </span>

    </center></div></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr>

    

    <?php

	$verif = DB::conn()->prepare("SELECT Sexo FROM usuarios WHERE ID = ('". $_SESSION["ID"] ."')");

	$verif->execute();

	$row = $verif->fetchObject();

	$sexo = $row->Sexo;

	?>    

<tr><td>

<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=perfil&amp;nome=<?php echo urlencode($session); ?>'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:0;width:188;text-align:center;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Perfil</div>



	<div style="position:absolute;top:1;left:22;"><img src="img/<?php echo $sexo; ?>.png"; height="19" /></div>

    

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr>



<tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=habilidades'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:60;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=habilidades" style="color:#3b3b3b;">Habilidades</a></div>

	<div style="position:absolute;top:1;left:22;"><img src="img/livro.png" /></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr>

    

<tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=mudar_time'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:60;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=mudar_time" style="color:#3b3b3b;">Mudar Time</a></div>

	<div style="position:absolute;top:1;left:22;"><img src="img/update.png"; height="19" /></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr>



<?php

//verificar se o usuario tem vip

$vips = DB::conn()->prepare("SELECT * FROM vips WHERE id_user = '".$_SESSION['ID']."'");

$vips->execute();



$ver_vips = $vips->fetch();

// Evita warnings quando não há linhas retornadas
$vip = $ver_vips['id_user'] ?? null;
$qtd = $ver_vips['qtd'] ?? 0;



if($qtd == 0){

$sql = DB::conn()->prepare("DELETE FROM vips WHERE id_user = '".$_SESSION['ID']."'");

$sql->execute();	

}else{}



?> 

<?php if($qtd > 0){ ?>   

<tr><td>

<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=vip'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:83;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=vip" style="color:#3b3b3b;">Vips</a></div>

	<div style="position:absolute;top:1;left:22;"><img src="img/estrela.png" width="21" height="21" /></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr>

<?php }else{} ?>

<?php

//verificar se o usuario tem contrato

$contrato = DB::conn()->prepare("SELECT * FROM contrato WHERE id_de = '".$_SESSION['ID']."'");

$contrato->execute();



$ver_contrato = $contrato->fetch();

// Evita warnings quando não há linhas retornadas
$contratos = $ver_contrato['id_de'] ?? null;

?>

<?php if($contratos == $_SESSION['ID']){ ?>   

<tr><td>

<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=contratos'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:66;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=contratos" style="color:#3b3b3b;">Contratos</a></div>

	<div style="position:absolute;top:0;left:21;"><img src="img/contrato.png" height="23" /></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr>

<?php }else{} ?>    

<tr><td>

<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=opcoes'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:50;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=opcoes" style="color:#3b3b3b;">Op&ccedil;&otilde;es de chute</a></div>

	<div style="position:absolute;top:0;left:20;"><img src="img/opcoes.png"; height="23" /></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr>

    

<tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=configuracoes'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:54;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=configuracoes" style="color:#3b3b3b;">Configurações</a></div>

	<div style="position:absolute;top:2;left:23;"><img src="img/reflesh.png"; height="19" /></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr>

<?php

//verificar se o usuario tem contrato

$adm = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$_SESSION['ID']."'");

$adm->execute();



$rs = $adm->fetch();



$dm = $rs['ADM'];

?> 

<?php if($dm == 1){ ?>   

    <tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=admin">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:54;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=admin" style="color:#3b3b3b;">Administração</a></div>

	<div style="position:absolute;top:2;left:23;"><img src="img/adm.png"; height="19" /></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr>

<?php }elseif($dm == 2){ ?>

    <tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=mod">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:62;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=mod" style="color:#3b3b3b;">Moderação</a></div>

	<div style="position:absolute;top:2;left:23;"><img src="img/adm.png"; height="19" /></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr>

        <tr><td>        

<?php }} ?>                           

    

</table>

<?php

$query = DB::conn()->prepare("SELECT VIP FROM usuarios WHERE ID = ('". $_SESSION["ID"] ."')");

$query->execute();

$rs = $query->fetch();



$mc_vip = $rs["VIP"];

$rem = strtotime(''.$mc_vip.'') - time();

?>

<?php

if($mc_vip > 0 && $mc_vip >= date('Y-m-d H:i:s')){

	

?>

		<center><div style="margin-top:2px; color:0189a2;font-family: Helvetica, sans-serif; font-size: 12px;

	font-weight: bold; width:150px;">

    <?php

$day = floor($rem / 86400);

$hr  = floor(($rem % 86400) / 3600);

$min = floor(($rem % 3600) / 60);

$sec = ($rem % 60);

if($day) echo "VIP: $day dias ";

if($hr) echo "$hr horas ";

if($min) echo "$min minutos ";

if($sec) echo "$sec segundos ";

	?>

    </div></center>

<?php }else{} ?>     

</div>

     

</td></tr>

<tr><td><div style="position:relative;top:0;width:192;left:6;height:15px;"><img src='img/layout/menu/botL.png' border=0></div></td></tr>

<?php

}else{}

?>

<?php

if(isset($_SESSION['ID'])){

$query = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$_SESSION['ID']."'");

$query->execute();



$dados = $query->fetch();

$Cargo = $dados['Cargo'];



$destrancar = DB::conn()->prepare("SELECT Trancar FROM usuarios WHERE ID = '".$_SESSION['ID']."'");

$destrancar->execute();

$rs = $destrancar->fetch();

$trancar = $rs["Trancar"];

?>

<?php if($Cargo == 3 && $trancar == 0){ ?>

<tr><td><div style="position:relative;top:0;left:0;width:204;height:57;"><div style="width:204;height:57;background-image:url('img/layout/menu/topL.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:204;top:10;color:#515151;font-family:litoh;font-size:1em;">ADM Time</div><div style="position:absolute;text-align:center;width:204;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">ADM Time</div></div></div></td></tr>

<tr><td style='height:auto'><div style="position:relative;top:0;left:6;width:192;height:100%;background-image:url('img/layout/menu/midL.png');padding-top:8;"  ><div id='mainMenu' style="position:relative;top:0;left:0;width:100%;height:100%;"><table cellpadding='0' cellspacing='0' border=0>

<tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=slots'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:70;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=slots" style="color:#3b3b3b;">Diretoria</a></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr>

    <tr><td>

	</div></td></tr></table></div></div></td></tr>

<tr><td><div style="position:relative;top:0;width:192;left:6;height:15px;"><img src='img/layout/menu/botL.png' border=0></div></td></tr>

<?php }elseif($Cargo == 2 && $trancar == 0){ ?>

<tr><td><div style="position:relative;top:0;left:0;width:204;height:57;"><div style="width:204;height:57;background-image:url('img/layout/menu/topL.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:204;top:10;color:#515151;font-family:litoh;font-size:1em;">ADM Time</div><div style="position:absolute;text-align:center;width:204;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">ADM Time</div></div></div></td></tr>

<tr><td style='height:auto'><div style="position:relative;top:0;left:6;width:192;height:100%;background-image:url('img/layout/menu/midL.png');padding-top:8;"  ><div id='mainMenu' style="position:relative;top:0;left:0;width:100%;height:100%;"><table cellpadding='0' cellspacing='0' border=0>

<tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=opcoes_chute'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:45;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=opcoes_chute" style="color:#3b3b3b;">Op&ccedil;&otilde;es de Chute</a></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr><tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=slots'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:70;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=slots" style="color:#3b3b3b;">Diretoria</a></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr>

    <tr><td>

	</div></td></tr></table></div></div></td></tr>

<tr><td><div style="position:relative;top:0;width:192;left:6;height:15px;"><img src='img/layout/menu/botL.png' border=0></div></td></tr>

<?php }elseif($Cargo == 1 && $trancar == 0){ ?>

<tr><td><div style="position:relative;top:0;left:0;width:204;height:57;"><div style="width:204;height:57;background-image:url('img/layout/menu/topL.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:204;top:10;color:#515151;font-family:litoh;font-size:1em;">ADM Time</div><div style="position:absolute;text-align:center;width:204;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">ADM Time</div></div></div></td></tr>

<tr><td style='height:auto'><div style="position:relative;top:0;left:6;width:192;height:100%;background-image:url('img/layout/menu/midL.png');padding-top:8;"  ><div id='mainMenu' style="position:relative;top:0;left:0;width:100%;height:100%;"><table cellpadding='0' cellspacing='0' border=0>

<tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=opcoes_chute'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:45;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=opcoes_chute" style="color:#3b3b3b;">Op&ccedil;&otilde;es de Chute</a></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr><tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=slots'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:70;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=slots" style="color:#3b3b3b;">Diretoria</a></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr>

    <tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=change_sentence'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:60;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=change_sentence" style="color:#3b3b3b;">Mudar Frase</a></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr>

     <tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=secar_time'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:64;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=secar_time" style="color:#3b3b3b;">Secar Time</a></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr>

    <tr><td>

<?php

$sql = DB::conn()->prepare("SELECT * FROM configuracoes");

$sql->execute();

$dt = $sql->fetch();

$rodadas = $dt['Rodada'];

if($rodadas == 1){

?>    

    <tr><td>

	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=representantes'">

	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>

	<div style="position:absolute;top:3;left:50;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;"><a href="index.php?pr=representantes" style="color:#3b3b3b;">Representantes</a></div>

	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>

	</div></td></tr>

<?php } ?>    

    <tr><td>

	</div></td></tr></table></div></div></td></tr>

<tr><td><div style="position:relative;top:0;width:192;left:6;height:15px;"><img src='img/layout/menu/botL.png' border=0></div></td></tr>

<?php }else{}} ?>

<tr><td>

<div style="position:relative;top:0;left:0;width:204;height:57;"><div style="width:204;height:57;background-image:url('img/layout/menu/topL.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:204;top:10;color:#515151;font-family:litoh;font-size:1em;">Parceiros</div><div style="position:absolute;text-align:center;width:204;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Parceiros</div></div></div></td></tr>

<tr><td style='height:auto'><div style="position:relative;top:0;left:6;width:192;height:100%;background-image:url('img/layout/menu/midL.png');padding-top:8;"   ></td></tr>

<tr><td><div style="position:relative;top:0;width:192;left:6;height:15px;"><img src='img/layout/menu/botL.png' border=0></div></td></tr>

</table></div></td></tr></table></td></tr>

<tr><td valign='top' align='center'>
    <div style="position:relative;top:0;padding:12px 0;font-family:Tahoma,Arial,sans-serif;font-size:12px;color:#000;">
 
    </div>
</td></tr>

</table> 

<td></td>

</tr></table>









<!-- Modal Falta removido: navegação direta para a página de chute -->


<!-- Modal Penalty removido (navegação direta) -->



<!-- Modal Trilha removido (navegação direta) -->



</body>

</html>

<Script type="text/javascript">

$('[placeholder]').focus(function() {

  var input = $(this);

  if (input.val() == input.attr('placeholder')) {

    input.val('');

	input.removeClass('placeholder');

	input.addClass('placeholderFoc');

  }

}).blur(function() {

  var input = $(this);

  if (input.val() == '' || input.val() == input.attr('placeholder')) {

    input.val(input.attr('placeholder'));

	input.removeClass('placeholderFoc');

	input.addClass('placeholder');

  }

}).blur();



var blabla;

var bleble;

function vish(dc,mc){

	if(mc!=null){

		adsn='#myAccMenu';

		bleble=$('#pop'+dc);

	} else {

		adsn='#mainMenu';

		blabla=$('#pop'+dc);

	}

	$(adsn).fadeOut('slow',function(){

		$('#pop'+dc).fadeIn('slow');	

		

	});

}



function back(mc){

	if(mc!=null){

		backm='#myAccMenu'; 

		gta=bleble;

	} else {

		backm='#mainMenu';

		gta=blabla;

	}

	$(gta).fadeOut('slow',function(){

		$(backm).fadeIn('slow');	

	});

}





$('#fakepassword').focus(function(){

$(this).hide();

$('#password').show().focus();

});



$('.row').mouseover(function(){

	$(this).find('.fundo').css('background-color','e7e7e7');

}).mouseleave(function(){

	$(this).find('.fundo').css('background-color','');

});



$('#password').bind("keydown", function(e) {

	if(e.which==13 || e.which == 9) {

		e.preventDefault();

		$('goku').submit(); return;

	}

});







function textCounter(field, countfield, maxlimit) {

	if (field.value.length > maxlimit) {

	field.value = field.value.substring(0, maxlimit);

	}else{ 

	countfield.value = maxlimit - field.value.length; document.getElementById("nums").innerHTML=countfield.value+" Nº Restante";

	}

}



$('#logo').click(function(){document.location="index.php"});



$('.tahomaBtn').click(function(){

	$(this).closest('form').submit();

});



function login(){

	if($('#username').val()==$('#username').attr('placeholder')) {

		alert('Nome de usuario ou Email, vazio');

		return;

	}else{

	$.ajax({

		method: 'post',

		url:'paginas/autentic.php',

		data:{usuario:$('#username').val(),senha:$('#password').val()},

		success: function(res){

		if(res == 1){

		alert('Campo senha, vazio!');	

		}

		if(res == 2){

		alert('Usuario ou senha invalido!');	

		}

		if(res == 3){

		alert('Usuário banido!');	

		}

		if(res == 4){

		alert('Limite 3 contas por ip!');	

		}

		if(res == 5){

		location.href = "index.php?pr=index";	

		}

		if(res == 6){

		alert('Este usuário já está logado!');	

		}

		if(res == 7){

		location.href = "index.php?pr=index";	

		}	

		}

		})

	}

	

}



function mFig(srt,dc){

srt.src='img/icons/'+dc+'.gif';

}



$('.tableShields img , .gotoTeam tr, .playerTable img').click(function(){

	if($(this).hasClass('tumb')){

	document.location='?pr=time&time='+$(this).attr('src').split('/').pop().substr(0,$(this).attr('src').split('/').pop().length-7);

	} else {

		if($(this).is('tr')){

			//alert($(this).find('img').attr('src'))

			document.location='?pr=time&time='+$(this).find('img').attr('src').split('/').pop().substr(0,$(this).find('img').attr('src').split('/').pop().length-4);

		} else {

			//document.location='?pr=time&time='+$(this).attr('src').split('/').pop().substr(0,$(this).attr('src').split('/').pop().length-4);

		}

	}

});





var openSeries=false;

ord=Array(); ordV=1;

ord['a']=Array('a','b','c');

ord['b']=Array('b','a','c');

ord['c']=Array('c','a','b');



$('.serieBtn div:eq(1),.serieBtn div:eq(2)').css({'display':'none','padding-top':'7'});

$('.serieBtn div').each(function(e){$(this).data('val',ord['a'][e]);});

$('.serieBtn').off('click').on('click', function(e){
    e.stopPropagation();

	if(!openSeries){

		openSeries=true;

		$(this).css({'height':'70','background-image':'url("img/btnSeriesO.png")','background-color':'#ffffff','background-repeat':'no-repeat','border-radius':'8px','overflow':'hidden'});

		$('.serieBtn div:eq(1),.serieBtn div:eq(2)').css('display','block');

        $('.serieBtn div:eq(1),.serieBtn div:eq(2)').off('click').on('click', function(ev){
            ev.stopPropagation();

			$('#tableShields img').fadeOut(400);

			openSeries=false;
			someSerieBtns();	
			$(document).off('click.serieBtn');

			//alert($(this).data('val'))

			$.post( 'paginas/renewShields.php', {'serie': $(this).data('val') }, function(data){

				$('#tableShields').html(data);

				$('#tableShields img').fadeIn(400);

				tryTumbs();

			});

			for(i=0;i<ord['a'].length;i++){

				$('.serieBtn div:eq('+i+')').text('Série '+ord[$(this).data('val')][i].toUpperCase()).data('val',ord[$(this).data('val')][i]);

			}

		});

	}

    // Fecha ao clicar fora
    $(document).off('click.serieBtn').on('click.serieBtn', function(){
        openSeries=false;
        someSerieBtns();
        $(document).off('click.serieBtn');
    });



});



function someSerieBtns(){

	$('.serieBtn').css({'height':'26','background-image':'url("img/btnSeries.png")','background-color':'transparent','background-repeat':'no-repeat','border-radius':'0','overflow':'visible'});

	$('.serieBtn div:eq(1),.serieBtn div:eq(2)').css('display','none').unbind('click');

}



$('#saveKeyBtn').css('cursor','pointer').click(function(){

	document.location="?pr=saveKey";

});



var u=0;



setInterval(function () {

	$.ajax({

		  url: "paginas/info_user.php",

		  type: "POST",

		  timeout: 3000,

		  cache: false,

		  success: function(data) {

			$("#info_user").html(data);	

		  }

	});

}, 5000);





var u=0;



setInterval(function () {

	$.ajax({

		  url: "paginas/getMid.php",

		  type: "POST",

		  timeout: 3000,

		  cache: false,

		  success: function(data) {

			$("#phora").html(data);	

		  }

	});

}, 5000);


	
// Função Falta removida (uso de navegação direta)
	
	
// Removido modal/iframe: redirecionamento direto via link
	
	
// Removido modal/iframe: redirecionamento direto via link        
	
	
	
	
	function Close(variavel){
		
		if(variavel=='falta'){
			$('#falta').hide()
			
	window.setTimeout("location.href='index.php'",1000)
		
			
		}
		
		
		location.reload()




	}

</script>

<?php 


	
	
	
	
	
	
}else{ echo 'Manutenção';exit; ?>



<?php } ?>


<!--<iframe src="20220902T224920Z-001-falta/index.html" width="100%" height="800px"></iframe>
-->

<!-- Timer Manager Script -->
<script src="js/timer-manager.js"></script>