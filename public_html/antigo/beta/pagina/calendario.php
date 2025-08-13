





<script type="text/javascript" src="static/js/analytics.js"></script>
<script type="text/javascript">archive_analytics.values.server_name="wwwb-app14.us.archive.org";archive_analytics.values.server_ms=169;</script>
<link type="text/css" rel="stylesheet" href="static/css/banner-styles.css"/>

<Style>
</style>
<html>
<head>
<title>Brgol</title>
<meta content='Futebol online. Jogo online onde você joga pelo seu time e participa de campeonatos contra outros times' name='description'>
<meta content='Brgol, Futebol, Futebol Online, Jogo, Futebol, Jogo de Navegador, Jogo de Browser, Jogo gratis, gratis, game, online game, corinthians, são paulo, palmeiras, flamengo, santos, botafogo, fluminense, vasco, internacional, grêmio, cruzeiro' name='keywords'>
<link href='favicon.ico' rel='icon' type='image/png'/>
<script src="/web/20130809170423js_/http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="js/editImageAC.js"></script>
<link rel="stylesheet" type="text/css" href="css/styleBrgol.css">
<!--<script src="js/jquery.jqEasyCharCounter.min.js" type="text/javascript"></script>-->
<script type="text/javascript" src="js/swfJQ.js"></script>
<script type='text/javascript'>

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-34784683-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? '/web/20130809170423/https://ssl' : '/web/20130809170423/http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script></head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="margin:0;background-image:url('img/layout/grama.png');">


<!-- BEGIN WAYBACK TOOLBAR INSERT -->
<script type="text/javascript" src="static/js/disclaim-element.js" ></script>
<script type="text/javascript" src="static/js/graph-calc.js" ></script>
<script type="text/javascript" src="static/jflot/jquery.min.js" ></script>
<script type="text/javascript">//<![CDATA[
var __wm = (function(){
var wbPrefix = "/web/";
var wbCurrentUrl = "http://www.brgol.com.br/index.php?pr=calendario";

var firstYear = 1996;
var imgWidth = 500,imgHeight = 27;
var yearImgWidth = 25,monthImgWidth = 2;
var displayDay = "9";
var displayMonth = "Ago";
var displayYear = "2013";
var prettyMonths = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
var $D=document,$=function(n){return document.getElementById(n)};
var trackerVal,curYear = -1,curMonth = -1;
var yearTracker,monthTracker;
function showTrackers(val) {
  if (val===trackerVal) return;
  var $ipp=$("wm-ipp");
  var $y=$("displayYearEl"),$m=$("displayMonthEl"),$d=$("displayDayEl");
  if (val) {
    $ipp.className="hi";
  } else {
    $ipp.className="";
    $y.innerHTML=displayYear;$m.innerHTML=displayMonth;$d.innerHTML=displayDay;
  }
  yearTracker.style.display=val?"inline":"none";
  monthTracker.style.display=val?"inline":"none";
  trackerVal = val;
}
function getElementX2(obj) {
  var $e=jQuery(obj);
  return (typeof $e=="undefined"||typeof $e.offset=="undefined")?
    getElementX(obj):Math.round($e.offset().left);
}
function trackMouseMove(event,element) {
  var eventX = getEventX(event);
  var elementX = getElementX2(element);
  var xOff = Math.min(Math.max(0, eventX - elementX),imgWidth);
  var monthOff = xOff % yearImgWidth;

  var year = Math.floor(xOff / yearImgWidth);
  var monthOfYear = Math.min(11,Math.floor(monthOff / monthImgWidth));
  // 1 extra border pixel at the left edge of the year:
  var month = (year * 12) + monthOfYear;
  var day = monthOff % 2==1?15:1;
  var dateString = zeroPad(year + firstYear) + zeroPad(monthOfYear+1,2) +
    zeroPad(day,2) + "000000";

  $("displayYearEl").innerHTML=year+firstYear;
  $("displayMonthEl").innerHTML=prettyMonths[monthOfYear];
  // looks too jarring when it changes..
  //$("displayDayEl").innerHTML=zeroPad(day,2);
  var url = wbPrefix + dateString + '/' +  wbCurrentUrl;
  $("wm-graph-anchor").href=url;

  if(curYear != year) {
    var yrOff = year * yearImgWidth;
    yearTracker.style.left = yrOff + "px";
    curYear = year;
  }
  if(curMonth != month) {
    var mtOff = year + (month * monthImgWidth) + 1;
    monthTracker.style.left = mtOff + "px";
    curMonth = month;
  }
}
function hideToolbar() {
  $("wm-ipp").style.display="none";
}
function bootstrap() {
  var $spk=$("wm-ipp-sparkline");
  yearTracker=$D.createElement('div');
  yearTracker.className='yt';
  with(yearTracker.style){
    display='none';width=yearImgWidth+"px";height=imgHeight+"px";
  }
  monthTracker=$D.createElement('div');
  monthTracker.className='mt';
  with(monthTracker.style){
    display='none';width=monthImgWidth+"px";height=imgHeight+"px";
  }
  $spk.appendChild(yearTracker);
  $spk.appendChild(monthTracker);

  var $ipp=$("wm-ipp");
  $ipp&&disclaimElement($ipp);
}
return{st:showTrackers,mv:trackMouseMove,h:hideToolbar,bt:bootstrap};
})();//]]>
</script>
<style type="text/css">
body {
  margin-top:0 !important;
  padding-top:0 !important;
  min-width:800px !important;
}
</style>
<div id="wm-ipp" lang="en" style="display:none;">

<div style="position:fixed;left:0;top:0;width:100%!important">
<div id="wm-ipp-inside">
   <table style="width:100%;"><tbody><tr>
   <td id="wm-logo">
       <a href="/web/" title="Wayback Machine home page"><img src="/static/images/toolbar/wayback-toolbar-logo.png" alt="Wayback Machine" width="110" height="39" border="0" /></a>
   </td>
   <td class="c">
       <table style="margin:0 auto;"><tbody><tr>
       <td class="u" colspan="2">
       <form target="_top" method="get" action="/web/form-submit.jsp" name="wmtb" id="wmtb"><input type="text" name="url" id="wmtbURL" value="http://www.brgol.com.br/index.php?pr=calendario" style="width:400px;" onfocus="this.focus();this.select();" /><input type="hidden" name="type" value="replay" /><input type="hidden" name="date" value="20130809170423" /><input type="submit" value="Go" /><span id="wm_tb_options" style="display:block;"></span></form>
       </td>
       <td class="n" rowspan="2">
           <table><tbody>
           <!-- NEXT/PREV MONTH NAV AND MONTH INDICATOR -->
           <tr class="m">
           	<td class="b" nowrap="nowrap">
		
		    <a href="/web/20130609105247/http://www.brgol.com.br/index.php?pr=calendario" title="9 Jun 2013">JUN</a>
		
		</td>
		<td class="c" id="displayMonthEl" title="You are here: 17:04:23 Ago 9, 2013">AGO</td>
		<td class="f" nowrap="nowrap">
		
		    Set
		
                </td>
	    </tr>
           <!-- NEXT/PREV CAPTURE NAV AND DAY OF MONTH INDICATOR -->
           <tr class="d">
               <td class="b" nowrap="nowrap">
               
                   <a href="/web/20130609105247/http://www.brgol.com.br/index.php?pr=calendario" title="10:52:47 Jun 9, 2013"><img src="/static/images/toolbar/wm_tb_prv_on.png" alt="Previous capture" width="14" height="16" border="0" /></a>
               
               </td>
               <td class="c" id="displayDayEl" style="width:34px;font-size:24px;" title="You are here: 17:04:23 Ago 9, 2013">9</td>
	       <td class="f" nowrap="nowrap">
               
                   <img src="/static/images/toolbar/wm_tb_nxt_off.png" alt="Next capture" width="14" height="16" border="0"/>
               
	       </td>
           </tr>
           <!-- NEXT/PREV YEAR NAV AND YEAR INDICATOR -->
           <tr class="y">
	       <td class="b" nowrap="nowrap">
               
                   2012
               
               </td>
               <td class="c" id="displayYearEl" title="You are here: 17:04:23 Ago 9, 2013">2013</td>
	       <td class="f" nowrap="nowrap">
               
                   2014
               
	       </td>
           </tr>
           </tbody></table>
       </td>
       </tr>
       <tr>
       <td class="s">
           <a class="t" href="/web/20130809170423*/http://www.brgol.com.br/index.php?pr=calendario" title="See a list of every capture for this URL">2 captures</a>
           <div class="r" title="Timespan for captures of this URL">9 Jun 13 - 9 Ago 13</div>
       </td>
       <td class="k">
       <a href="" id="wm-graph-anchor">
       <div id="wm-ipp-sparkline" title="Explore captures for this URL">
	 <img id="sparklineImgId" alt="sparklines"
		 onmouseover="__wm.st(1)" onmouseout="__wm.st(0)"
		 onmousemove="__wm.mv(event,this)"
		 width="500"
		 height="27"
		 border="0"
		 src="/web/jsp/graph.jsp?graphdata=500_27_1996:-1:000000000000_1997:-1:000000000000_1998:-1:000000000000_1999:-1:000000000000_2000:-1:000000000000_2001:-1:000000000000_2002:-1:000000000000_2003:-1:000000000000_2004:-1:000000000000_2005:-1:000000000000_2006:-1:000000000000_2007:-1:000000000000_2008:-1:000000000000_2009:-1:000000000000_2010:-1:000000000000_2011:-1:000000000000_2012:-1:000000000000_2013:7:000001010000_2014:-1:000000000000_2015:-1:000000000000" />
       </div>
       </a>
       </td>
       </tr></tbody></table>
   </td>
   <td class="r">
       <a href="#close" onclick="__wm.h();return false;" style="background-image:url(/static/images/toolbar/wm_tb_close.png);top:5px;" title="Close the toolbar">Close</a>
       <a href="http://faq.web.archive.org/" style="background-image:url(/static/images/toolbar/wm_tb_help.png);bottom:5px;" title="Get some help using the Wayback Machine">Help</a>
   </td>
   </tr></tbody></table>
</div>
</div>
</div>
<script type="text/javascript">__wm.bt();</script>
<!-- END WAYBACK TOOLBAR INSERT -->

<div style="position:absolute;top:0;width:100%;height:29;background-image:url('img/layout/topbar.png');"></div>
<table cellpadding='0' cellspacing='0' border=0 width=100% height=100%><tr>
<td></td><td align='center'>
	<table cellpadding='0' cellspacing='0' border=0 width=1024 height=100%>
	<tr><td height=234 valign=top>
<div style="position:relative;top:0;width:1024;height:234;">
<div style="position:absolute;top:0;width:100%;height:29;background-image:url('img/layout/topbar.png');z-index:1;"></div>
<div style="position:absolute;top:15;width:1024;height:161;background-image:url('img/layout/fundo_azul.png');"></div>
<div style="position:absolute;top:130;left:-1;width:1025;height:111;background-image:url('img/layout/supremebar.png');"></div>
<div style="position:absolute;top:23;left:40;width:222;height:164;background-image:url('img/layout/logo.png');" id='logo'></div>
<div style="position:absolute;top:0;left:45%;width:104;height:34;z-index:2;"><div style="width:104;height:34;background-image:url('img/layout/onlines.png');text-aling:center;"><div style="position:absolute;left:45;top:4;color:#FFFFFF;font-family:visitor;font-size:0.8em;">627</div></div></div>
<div style="position:absolute;top:0;left:380;width:104;height:34;z-index:2;" id='rodBtn' onClick="document.location='?pr=calendario';"><div style="width:77;height:22;background-image:url('img/layout/fundo_topbar.png');text-aling:center;"><div class="nosel" style="position:absolute;left:15;top:7;color:#FFFFFF;font-family:visitor;font-size:0.8em;">18 Rodada</div><div style="position:absolute;left:15;top:6;color:#2e2e2e;font-family:visitor;font-size:0.8em;">18 Rodada</div></div></div>
<div style="position:absolute;top:0;left:580;width:104;height:34;z-index:2;"><div style="width:77;height:22;background-image:url('img/layout/fundo_topbar.png');text-aling:center;"><div class="nosel" style="position:absolute;left:5;top:7;color:#FFFFFF;font-family:visitor;font-size:0.8em;">41 Temporada</div><div style="position:absolute;left:5;top:6;color:#000000;font-family:visitor;font-size:0.8em;">41 Temporada</div></div></div>
<div style="position:absolute;top:0;left:80;width:188;height:22;background-image:url('img/layout/searchbar.png');z-index:2;">
<div style='position:absolute;top:29;left:375;' id='tempo'></div>
<form method='post' style="display: inline; margin: 0;" action='index.php?pr=busca' id='gohan'>
<input type=text maxlength=12 style="outline:none;background:transparent;border:0;font-family: Helvetica, sans-serif;font-size: 11px;width:160;position:relative;left:20;top:1;padding-left:7;" placeholder='Busca nome do jogador' id='searchbar' name='usu'></form></div>
<form method='post' style="display: inline; margin: 0;" target='HF' action='fazLogin.php' id='goku'>

<div style="position:absolute;top:185;left:300;">
	<div style="position:relative;top:0;left:0;float:left;width:146;height:26;background-image:url('img/layout/inputlog.png');">
	<input type=text maxlength=52 style="outline:none;background:transparent;border:0;font-family: Tahoma, sans-serif;font-size: 11px;width:130;position:relative;left:10;top:4;font-weight:bold;padding-left:0;" placeholder='Usuario ou Email' name='user' id='username' class='placeholder'></div>

	<div style="position:relative;top:0;left:5;float:left;width:146;height:26;background-image:url('img/layout/inputlog.png');">
	<div style="position:absolute;top:6;right:8;width:16;height:16;background-image:url('img/saveKeyBtn.png');overflow:hidden;" id='saveKeyBtn'></div>
	<input type=password maxlength=80 style="outline:none;background:transparent;border:0;color:#FFFFFF;font-family: Tahoma, sans-serif;font-size: 11px;width:110;position:relative;left:10;top:4;font-weight:bold;padding-left:0;display:none;" id='password' name='password'>

	<input type=text maxlength=12 style="outline:none;background:transparent;border:0;font-family: Tahoma, sans-serif;font-size: 11px;width:110;position:relative;left:10;top:4;font-weight:bold;padding-left:0;" placeholder='Senha' id='fakepassword'>
	</div>


	<div style="position:relative;top:0;left:15;float:left;width:90;height:27;"  onClick='login();'>
	<img src='img/layout/entrar.png' border=0 id='entra'></div>



</div>
</form>

<div id='singup' style="position:absolute;top:80;left:430;float:left;width:178;height:39;background-image:url('img/layout/startbtn.png');" onClick="document.location='?pr=cadastro';"></div>

<div class='serieBtn' style='z-index:9999;cursor:pointer;position:absolute;width:93;height:26;background-image:url(&quot;img/btnSeries.png&quot;);top:190;left:900;'>
	<div>Série A</div>
	<div>Série B</div>
	<div>Série C</div>
</div>

</div>
</td></tr>
	<tr><td id='tableShields'><div style="position:relative;top:10;" align="center"><table cellpadding="0" cellspacing="0" border=0 height="50" class="tableShields"><tr><td width=65 align="center" valing="bottom"><img src="img/gr/tumb/Santos_TA.png" class="tumb" border=0 width=36 height=39></td><td width=65 align="center" valing="bottom"><img src="img/gr/tumb/Flamengo_TA.png" class="tumb" border=0 width=36 height=39></td><td width=65 align="center" valing="bottom"><img src="img/gr/tumb/Portuguesa_TA.png" class="tumb" border=0 width=36 height=39></td><td width=65 align="center" valing="bottom"><img src="img/gr/tumb/Brasil de Pelotas_TA.png" class="tumb" border=0 width=36 height=39></td><td width=65 align="center" valing="bottom"><img src="img/gr/tumb/Portuguesa Santista_TA.png" class="tumb" border=0 width=36 height=39></td><td width=65 align="center" valing="bottom"><img src="img/gr/tumb/Corinthians_TA.png" class="tumb" border=0 width=36 height=39></td><td width=65 align="center" valing="bottom"><img src="img/gr/tumb/Vasco da Gama_TA.png" class="tumb" border=0 width=36 height=39></td><td width=65 align="center" valing="bottom"><img src="img/gr/tumb/Fluminense_TA.png" class="tumb" border=0 width=36 height=39></td><td width=65 align="center" valing="bottom"><img src="img/gr/tumb/Palmeiras_TA.png" class="tumb" border=0 width=36 height=39></td><td width=65 align="center" valing="bottom"><img src="img/gr/tumb/Atletico Mineiro_TA.png" class="tumb" border=0 width=36 height=39></td><td width=65 align="center" valing="bottom"><img src="img/gr/tumb/Treze_TA.png" class="tumb" border=0 width=36 height=39></td><td width=65 align="center" valing="bottom"><img src="img/gr/tumb/Cruzeiro_TA.png" class="tumb" border=0 width=36 height=39></td><td width=65 align="center" valing="bottom"><img src="img/gr/tumb/Criciuma_TA.png" class="tumb" border=0 width=36 height=39></td><td width=65 align="center" valing="bottom"><img src="img/gr/tumb/Sao Paulo_TA.png" class="tumb" border=0 width=36 height=39></td><td width=65 align="center" valing="bottom"><img src="img/gr/tumb/Fortaleza_TA.png" class="tumb" border=0 width=36 height=39></td><td width=65 align="center" valing="bottom"><img src="img/gr/tumb/Gremio_TA.png" class="tumb" border=0 width=36 height=39></td></tr></table></div></td></tr>
	<tr><td valign='top' style='padding-top:15;' ><table cellpadding='0' cellspacing='0' border=0 width=100% height=100%><tr><td width=204 valign='top' align='left'><div style="position:relative;left:-6px;overflow: hidden;width:100%;height:100%;"><table cellpadding='0' cellspacing='0' border=0 height=20>
<tr><td><div style="position:relative;top:0;left:0;width:204;height:57;"><div style="width:204;height:57;background-image:url('img/layout/menu/topL.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:204;top:10;color:#515151;font-family:litoh;font-size:1em;">Menu</div><div style="position:absolute;text-align:center;width:204;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Menu</div></div></div></td></tr>
<tr><td style='height:auto'><div style="position:relative;top:0;left:6;width:192;height:100%;background-image:url('img/layout/menu/midL.png');padding-top:8;"  ><div id='mainMenu' style="position:relative;top:0;left:0;width:100%;height:100%;"><table cellpadding='0' cellspacing='0' border=0>
<tr><td>
	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr='">
	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>
	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Principal</div>
	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>
	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>
	</div></td></tr><tr><td>
	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=calendario'">
	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>
	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Rodadas</div>
	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>
	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>
	</div></td></tr><tr><td>
	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=rank'">
	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>
	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Níveis</div>
	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>
	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>
	</div></td></tr><tr><td>
	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=premiacoes'">
	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>
	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Premiações</div>
	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>
	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>
	</div></td></tr><tr><td>
	<div style="position:relative;width:187;height:31;" class='row' onClick="vish(1);">
	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>
	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Ranking</div>
	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>
	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>
	</div></td></tr><tr><td>
	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=text&amp;pag=regras'">
	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>
	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Regras</div>
	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>
	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>
	</div></td></tr><tr><td>
	<div style="position:relative;width:187;height:31;" class='row' onClick="vish(2);">
	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>
	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Duvidas</div>
	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>
	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>
	</div></td></tr><tr><td>
	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=ttimes'">
	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>
	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Divisão de Acesso</div>
	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>
	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>
	</div></td></tr><tr><td>
	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=divpl'">
	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>
	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Divisão de Jogadores</div>
	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>
	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>
	</div></td></tr><tr><td>
	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=changes'">
	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>
	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Movimentações</div>
	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>
	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>
	</div></td></tr><tr><td>
	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=vips'">
	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>
	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Vips</div>
	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>
	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>
	</div></td></tr></table></div><div id='pop1' style="position:relative;top:0;left:0;width:100%;height:100%;display:none;"><table cellpadding='0' cellspacing='0' border=0>
<tr><td>
	<div style="position:relative;width:187;height:31;" class='row' onClick="back();">
	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>
	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Voltar</div>
	<div style="position:absolute;top:0;left:10;height:20;width:15;background-image:url('img/layout/menu/arrowR.png');"></div>
	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>
	</div></td></tr><tr><td>
	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=rankz&amp;r=gols'">
	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>
	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Geral</div>
	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>
	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>
	</div></td></tr><tr><td>
	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=rankz&amp;r=tep'">
	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>
	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Temporada</div>
	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>
	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>
	</div></td></tr><tr><td>
	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=rankz&amp;r=art'">
	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>
	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Rodada</div>
	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>
	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>
	</div></td></tr><tr><td>
	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=rankz&amp;r=hora'">
	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>
	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Hora</div>
	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>
	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>
	</div></td></tr><tr><td>
	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=rankz&amp;r=penal'">
	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>
	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Penal</div>
	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>
	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>
	</div></td></tr><tr><td>
	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=rankz&amp;r=falta'">
	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>
	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Falta</div>
	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>
	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>
	</div></td></tr><tr><td>
	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=rankz&amp;r=trilha'">
	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>
	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Trilha</div>
	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>
	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>
	</div></td></tr><tr><td>
	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=rankz&amp;r=bds'">
	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>
	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Bolas Douradas</div>
	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>
	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>
	</div></td></tr></table></div><div id='pop2' style="position:relative;top:0;left:0;width:100%;height:100%;display:none;"><table cellpadding='0' cellspacing='0' border=0>
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
	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=text&amp;pag=comoj'">
	<div class='fundo' style="position:absolute;top:-5;left:2;height:30;width:188;"></div>
	<div style="position:absolute;top:3;left:30;color:#3b3b3b;font-family: Tahoma, sans-serif;font-size: 12px;font-weight:bold;">Como Jogar?</div>
	<div style="position:absolute;top:0;left:165;height:20;width:15;background-image:url('img/layout/menu/arrow.png');"></div>
	<div style="position:absolute;top:25;left:52;height:1;width:90;"><img src='img/layout/menu/line.png' border=0></div>
	</div></td></tr><tr><td>
	<div style="position:relative;width:187;height:31;" class='row' onClick="document.location='index.php?pr=text&amp;pag=perguntas'">
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
</table></div></td><td valign='top' align='center'><table cellpadding='0' cellspacing='0' border=0 height=20>
	<tr><td><div style="position:relative;top:0;left:0;width:623;height:57;"><div style="width:623;height:57;background-image:url('img/layout/menu/topH.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:623;top:10;color:#515151;font-family:litoh;font-size:1em;">Copa do Brasil - Oitavas-de-Final</div><div style="position:absolute;text-align:center;width:623;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Copa do Brasil - Oitavas-de-Final</div></div></div></td></tr>
	<tr><td><div style="position:relative;top:0;left:0;width:623;min-height:300px; height:auto !important;  height:300px;background-image:url('img/layout/menu/midH.png');padding-top:8;">
	<div style='position:relative;top:0;left:0;width:607;margin-left:9;'><table width=550 border='0'  align='center' valign='top' cellpadding='2' cellspacing='0'>
<tr><td colspan=2><table cellpadding="0" cellspacing="2" border=0 class="taho" width=100%><tr height=20><td align="center" background="img/bgabmsgc.png" onClick="document.location='?pr=calendario&amp;tipo=1'" onMouseOver="this.style.cursor='hand'">Todos</td><td align="center" background="img/bgabmsg.png" onClick="document.location='?pr=calendario&amp;tipo=2'" onMouseOver="this.style.cursor='hand'">Campeonato Brasileiro</td><td align="center" background="img/bgabmsg.png" onClick="document.location='?pr=calendario&amp;tipo=3'" onMouseOver="this.style.cursor='hand'">Copa do Brasil</td><td align="center" background="img/bgabmsg.png" onClick="document.location='?pr=calendario&amp;tipo=4'" onMouseOver="this.style.cursor='hand'">Regional</td><td align="center" background="img/bgabmsg.png" onClick="document.location='?pr=calendario&amp;tipo=5'" onMouseOver="this.style.cursor='hand'">Copa BRGOL</td><td align="center" background="img/bgabmsg.png" onClick="document.location='?pr=calendario&amp;tipo=6'" onMouseOver="this.style.cursor='hand'">Libertadores</td><td align="center" background="img/bgabmsg.png" onClick="document.location='?pr=calendario&amp;tipo=7'" onMouseOver="this.style.cursor='hand'">Mundial</td></tr></table></td></tr>
<tr><td align='center' colspan=2><table border='0'  align='center' valign='top' cellpadding='0' cellspacing='2' class='justifCopi'><td width=33 height=16 align='center' background='img/calfundo3.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=1'" align='center' onMouseOver='this.style.cursor="hand";'>1</td><td width=33 height=16 align='center' background='img/calfundo3.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=2'" align='center' onMouseOver='this.style.cursor="hand";'>2</td><td width=33 height=16 align='center' background='img/calfundo3.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=3'" align='center' onMouseOver='this.style.cursor="hand";'>3</td><td width=33 height=16 align='center' background='img/calfundo3.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=4'" align='center' onMouseOver='this.style.cursor="hand";'>4</td><td width=33 height=16 align='center' background='img/calfundo3.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=5'" align='center' onMouseOver='this.style.cursor="hand";'>5</td><td width=33 height=16 align='center' background='img/calfundo3.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=6'" align='center' onMouseOver='this.style.cursor="hand";'>6</td><td width=33 height=16 align='center' background='img/calfundo3.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=7'" align='center' onMouseOver='this.style.cursor="hand";'>7</td><td width=33 height=16 align='center' background='img/calfundo3.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=8'" align='center' onMouseOver='this.style.cursor="hand";'>8</td><td width=33 height=16 align='center' background='img/calfundo3.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=9'" align='center' onMouseOver='this.style.cursor="hand";'>9</td><td width=33 height=16 align='center' background='img/calfundo3.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=10'" align='center' onMouseOver='this.style.cursor="hand";'>10</td><td width=33 height=16 align='center' background='img/calfundo3.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=11'" align='center' onMouseOver='this.style.cursor="hand";'>11</td><td width=33 height=16 align='center' background='img/calfundo3.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=12'" align='center' onMouseOver='this.style.cursor="hand";'>12</td></tr><tr><td width=33 height=16 align='center' background='img/calfundo3.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=13'" align='center' onMouseOver='this.style.cursor="hand";'>13</td><td width=33 height=16 align='center' background='img/calfundo3.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=14'" align='center' onMouseOver='this.style.cursor="hand";'>14</td><td width=33 height=16 align='center' background='img/calfundo3.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=15'" align='center' onMouseOver='this.style.cursor="hand";'>15</td><td width=33 height=16 align='center' background='img/calfundo3.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=16'" align='center' onMouseOver='this.style.cursor="hand";'>16</td><td width=33 height=16 align='center' background='img/calfundo3.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=17'" align='center' onMouseOver='this.style.cursor="hand";'>17</td><td width=33 height=16 align='center' background='img/calfundo2.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=18'" align='center' onMouseOver='this.style.cursor="hand";'>18</td><td width=33 height=16 align='center' background='img/calfundo7.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=19'" align='center' onMouseOver='this.style.cursor="hand";'>19</td><td width=33 height=16 align='center' background='img/calfundo7.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=20'" align='center' onMouseOver='this.style.cursor="hand";'>20</td><td width=33 height=16 align='center' background='img/calfundo7.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=21'" align='center' onMouseOver='this.style.cursor="hand";'>21</td><td width=33 height=16 align='center' background='img/calfundo7.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=22'" align='center' onMouseOver='this.style.cursor="hand";'>22</td><td width=33 height=16 align='center' background='img/calfundo7.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=23'" align='center' onMouseOver='this.style.cursor="hand";'>23</td><td width=33 height=16 align='center' background='img/calfundo7.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=24'" align='center' onMouseOver='this.style.cursor="hand";'>24</td></tr><tr><td width=33 height=16 align='center' background='img/calfundo7.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=25'" align='center' onMouseOver='this.style.cursor="hand";'>25</td><td width=33 height=16 align='center' background='img/calfundo7.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=26'" align='center' onMouseOver='this.style.cursor="hand";'>26</td><td width=33 height=16 align='center' background='img/calfundo7.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=27'" align='center' onMouseOver='this.style.cursor="hand";'>27</td><td width=33 height=16 align='center' background='img/calfundo7.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=28'" align='center' onMouseOver='this.style.cursor="hand";'>28</td><td width=33 height=16 align='center' background='img/calfundo7.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=29'" align='center' onMouseOver='this.style.cursor="hand";'>29</td><td width=33 height=16 align='center' background='img/calfundo7.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=30'" align='center' onMouseOver='this.style.cursor="hand";'>30</td><td width=33 height=16 align='center' background='img/calfundo7.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=31'" align='center' onMouseOver='this.style.cursor="hand";'>31</td><td width=33 height=16 align='center' background='img/calfundo7.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=32'" align='center' onMouseOver='this.style.cursor="hand";'>32</td><td width=33 height=16 align='center' background='img/calfundo7.png' onClick="document.location='?pr=calendario&amp;serie=a&amp;nume=33'" align='center' onMouseOver='this.style.cursor="hand";'>33</td></td></tr></table></td></tr>

<tr><td style='padding-left:45px'><a href='?pr=calendario&amp;serie=a&amp;nume=17'><img src='img/voltar.png' border=0></a></td><td align='right' style='padding-right:45px'><a href='?pr=calendario&amp;serie=a&amp;nume=19'><img src='img/prox.png' border=0></a></td></tr></table><table width=460 border='0' align='center' valign='top' cellpadding='0' cellspacing='0'><tr><td><div style="position:relative;width:460;height:89;background-image:url('img/placar/fundoplacar.png');">

<div style="position:absolute;width:42;height:66;left:208;top:17;background-image:url('img/placar/xizin.png');"></div>
<a href="index.php?pr=time&amp;time=Cear&aacute;"><div style="position:absolute;width:66;height:70;left:18;top:10;background-image:url('img/gr/Ceara.png');"></div></a>
<a href="index.php?pr=time&amp;time=Atletico Mineiro"><div style="position:absolute;width:66;height:70;left:375;top:10;background-image:url('img/gr/Atletico Mineiro.png');"></div></a>
<div style="position:absolute;left:91;top:74;color:#FFFFFF;font-family:visitor;font-size:0.8em;">Ceará</div>
<div style="position:absolute;left:251;top:74;width:120;color:#FFFFFF;font-family:visitor;font-size:0.8em;text-align:right;">Atletico Mineiro</div>
<div style="position:absolute;left:85;top:20;color:#FFFFFF;font-family:Arial;font-weight:bold;font-size:1.6em;text-align:right;width:120;">9447</div>
<div style="position:absolute;left:250;top:20;color:#FFFFFF;font-family:Arial;font-weight:bold;font-size:1.6em;">456</div>
</div></td></tr><tr><td><div style="position:relative;width:460;height:89;background-image:url('img/placar/fundoplacar.png');">

<div style="position:absolute;width:42;height:66;left:208;top:17;background-image:url('img/placar/xizin.png');"></div>
<a href="index.php?pr=time&amp;time=Santos"><div style="position:absolute;width:66;height:70;left:18;top:10;background-image:url('img/gr/Santos.png');"></div></a>
<a href="index.php?pr=time&amp;time=Corinthians"><div style="position:absolute;width:66;height:70;left:375;top:10;background-image:url('img/gr/Corinthians.png');"></div></a>
<div style="position:absolute;left:91;top:74;color:#FFFFFF;font-family:visitor;font-size:0.8em;">Santos</div>
<div style="position:absolute;left:251;top:74;width:120;color:#FFFFFF;font-family:visitor;font-size:0.8em;text-align:right;">Corinthians</div>
<div style="position:absolute;left:85;top:20;color:#FFFFFF;font-family:Arial;font-weight:bold;font-size:1.6em;text-align:right;width:120;">34259</div>
<div style="position:absolute;left:250;top:20;color:#FFFFFF;font-family:Arial;font-weight:bold;font-size:1.6em;">2666</div>
</div></td></tr><tr><td><div style="position:relative;width:460;height:89;background-image:url('img/placar/fundoplacar.png');">

<div style="position:absolute;width:42;height:66;left:208;top:17;background-image:url('img/placar/xizin.png');"></div>
<a href="index.php?pr=time&amp;time=Portuguesa Santista"><div style="position:absolute;width:66;height:70;left:18;top:10;background-image:url('img/gr/Portuguesa Santista.png');"></div></a>
<a href="index.php?pr=time&amp;time=Palmeiras"><div style="position:absolute;width:66;height:70;left:375;top:10;background-image:url('img/gr/Palmeiras.png');"></div></a>
<div style="position:absolute;left:91;top:74;color:#FFFFFF;font-family:visitor;font-size:0.8em;">Portuguesa Santista</div>
<div style="position:absolute;left:251;top:74;width:120;color:#FFFFFF;font-family:visitor;font-size:0.8em;text-align:right;">Palmeiras</div>
<div style="position:absolute;left:85;top:20;color:#FFFFFF;font-family:Arial;font-weight:bold;font-size:1.6em;text-align:right;width:120;">1596</div>
<div style="position:absolute;left:250;top:20;color:#FFFFFF;font-family:Arial;font-weight:bold;font-size:1.6em;">456</div>
</div></td></tr><tr><td><div style="position:relative;width:460;height:89;background-image:url('img/placar/fundoplacar.png');">

<div style="position:absolute;width:42;height:66;left:208;top:17;background-image:url('img/placar/xizin.png');"></div>
<a href="index.php?pr=time&amp;time=Londrina"><div style="position:absolute;width:66;height:70;left:18;top:10;background-image:url('img/gr/Londrina.png');"></div></a>
<a href="index.php?pr=time&amp;time=Comercial - SP"><div style="position:absolute;width:66;height:70;left:375;top:10;background-image:url('img/gr/Comercial - SP.png');"></div></a>
<div style="position:absolute;left:91;top:74;color:#FFFFFF;font-family:visitor;font-size:0.8em;">Londrina</div>
<div style="position:absolute;left:251;top:74;width:120;color:#FFFFFF;font-family:visitor;font-size:0.8em;text-align:right;">Comercial - SP</div>
<div style="position:absolute;left:85;top:20;color:#FFFFFF;font-family:Arial;font-weight:bold;font-size:1.6em;text-align:right;width:120;">1283</div>
<div style="position:absolute;left:250;top:20;color:#FFFFFF;font-family:Arial;font-weight:bold;font-size:1.6em;">684</div>
</div></td></tr><tr><td><div style="position:relative;width:460;height:89;background-image:url('img/placar/fundoplacar.png');">

<div style="position:absolute;width:42;height:66;left:208;top:17;background-image:url('img/placar/xizin.png');"></div>
<a href="index.php?pr=time&amp;time=S&atilde;o Paulo"><div style="position:absolute;width:66;height:70;left:18;top:10;background-image:url('img/gr/Sao Paulo.png');"></div></a>
<a href="index.php?pr=time&amp;time=Portuguesa"><div style="position:absolute;width:66;height:70;left:375;top:10;background-image:url('img/gr/Portuguesa.png');"></div></a>
<div style="position:absolute;left:91;top:74;color:#FFFFFF;font-family:visitor;font-size:0.8em;">São Paulo</div>
<div style="position:absolute;left:251;top:74;width:120;color:#FFFFFF;font-family:visitor;font-size:0.8em;text-align:right;">Portuguesa</div>
<div style="position:absolute;left:85;top:20;color:#FFFFFF;font-family:Arial;font-weight:bold;font-size:1.6em;text-align:right;width:120;">258</div>
<div style="position:absolute;left:250;top:20;color:#FFFFFF;font-family:Arial;font-weight:bold;font-size:1.6em;">1667</div>
</div></td></tr><tr><td><div style="position:relative;width:460;height:89;background-image:url('img/placar/fundoplacar.png');">

<div style="position:absolute;width:42;height:66;left:208;top:17;background-image:url('img/placar/xizin.png');"></div>
<a href="index.php?pr=time&amp;time=Ava&iacute;"><div style="position:absolute;width:66;height:70;left:18;top:10;background-image:url('img/gr/Avai.png');"></div></a>
<a href="index.php?pr=time&amp;time=Juventude"><div style="position:absolute;width:66;height:70;left:375;top:10;background-image:url('img/gr/Juventude.png');"></div></a>
<div style="position:absolute;left:91;top:74;color:#FFFFFF;font-family:visitor;font-size:0.8em;">Avaí</div>
<div style="position:absolute;left:251;top:74;width:120;color:#FFFFFF;font-family:visitor;font-size:0.8em;text-align:right;">Juventude</div>
<div style="position:absolute;left:85;top:20;color:#FFFFFF;font-family:Arial;font-weight:bold;font-size:1.6em;text-align:right;width:120;">10096</div>
<div style="position:absolute;left:250;top:20;color:#FFFFFF;font-family:Arial;font-weight:bold;font-size:1.6em;">1235</div>
</div></td></tr><tr><td><div style="position:relative;width:460;height:89;background-image:url('img/placar/fundoplacar.png');">

<div style="position:absolute;width:42;height:66;left:208;top:17;background-image:url('img/placar/xizin.png');"></div>
<a href="index.php?pr=time&amp;time=Brasil de Pelotas"><div style="position:absolute;width:66;height:70;left:18;top:10;background-image:url('img/gr/Brasil de Pelotas.png');"></div></a>
<a href="index.php?pr=time&amp;time=Osasco"><div style="position:absolute;width:66;height:70;left:375;top:10;background-image:url('img/gr/Osasco.png');"></div></a>
<div style="position:absolute;left:91;top:74;color:#FFFFFF;font-family:visitor;font-size:0.8em;">Brasil de Pelotas</div>
<div style="position:absolute;left:251;top:74;width:120;color:#FFFFFF;font-family:visitor;font-size:0.8em;text-align:right;">Osasco</div>
<div style="position:absolute;left:85;top:20;color:#FFFFFF;font-family:Arial;font-weight:bold;font-size:1.6em;text-align:right;width:120;">2951</div>
<div style="position:absolute;left:250;top:20;color:#FFFFFF;font-family:Arial;font-weight:bold;font-size:1.6em;">3421</div>
</div></td></tr><tr><td><div style="position:relative;width:460;height:89;background-image:url('img/placar/fundoplacar.png');">

<div style="position:absolute;width:42;height:66;left:208;top:17;background-image:url('img/placar/xizin.png');"></div>
<a href="index.php?pr=time&amp;time=Treze"><div style="position:absolute;width:66;height:70;left:18;top:10;background-image:url('img/gr/Treze.png');"></div></a>
<a href="index.php?pr=time&amp;time=Flamengo"><div style="position:absolute;width:66;height:70;left:375;top:10;background-image:url('img/gr/Flamengo.png');"></div></a>
<div style="position:absolute;left:91;top:74;color:#FFFFFF;font-family:visitor;font-size:0.8em;">Treze</div>
<div style="position:absolute;left:251;top:74;width:120;color:#FFFFFF;font-family:visitor;font-size:0.8em;text-align:right;">Flamengo</div>
<div style="position:absolute;left:85;top:20;color:#FFFFFF;font-family:Arial;font-weight:bold;font-size:1.6em;text-align:right;width:120;">1597</div>
<div style="position:absolute;left:250;top:20;color:#FFFFFF;font-family:Arial;font-weight:bold;font-size:1.6em;">13967</div>
</div></td></tr></table><table id="Tabela_01" width="474" height="505" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td colspan="36">
			<img src="img/T01/TT_01.png" width="473" height="5" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="1" height="5" alt=""></td>
	</tr>
	<tr>
		<td rowspan="21">
			<img src="img/T01/TT_02.png" width="3" height="499" alt=""></td>
		<td colspan="2" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/Ceara.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2">Ceará</td></tr></table>
			</td>
		<td rowspan="2">
			<img src="img/T01/TT_04.png" width="5" height="74" alt=""></td>
		<td colspan="4" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/Atletico Mineiro.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2">Atletico</td></tr></table>
			</td>
		<td rowspan="6">
			<img src="img/T01/TT_06.png" width="4" height="155" alt=""></td>
		<td colspan="5" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/Santos.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2">Santos</td></tr></table>
			</td>
		<td rowspan="3">
			<img src="img/T01/TT_08.png" width="4" height="75" alt=""></td>
		<td colspan="3" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/Corinthians.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2">Corinthi</td></tr></table>
			</td>
		<td rowspan="21">
			<img src="img/T01/TT_10.png" width="4" height="499" alt=""></td>
		<td colspan="3" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/Portuguesa Santista.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2">Portugue</td></tr></table>
			</td>
		<td rowspan="3">
			<img src="img/T01/TT_12.png" width="4" height="75" alt=""></td>
		<td colspan="3" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/Palmeiras.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2">Palmeira</td></tr></table>
			</td>
		<td rowspan="6">
			<img src="img/T01/TT_14.png" width="4" height="155" alt=""></td>
		<td colspan="4" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/Londrina.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2">Londrina</td></tr></table>
			</td>
		<td rowspan="3">
			<img src="img/T01/TT_16.png" width="4" height="75" alt=""></td>
		<td colspan="3" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/Comercial - SP.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2">Comercia</td></tr></table>
			</td>
		<td rowspan="21">
			<img src="img/T01/TT_18.png" width="1" height="499" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="1" height="36" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="img/T01/TT_19.png" width="55" height="38" alt=""></td>
		<td colspan="4">
			<img src="img/T01/TT_20.png" width="55" height="38" alt=""></td>
		<td colspan="5" rowspan="2">
			<img src="img/T01/TT_21.png" width="55" height="39" alt=""></td>
		<td colspan="3" rowspan="2">
			<img src="img/T01/TT_22.png" width="55" height="39" alt=""></td>
		<td colspan="3" rowspan="2">
			<img src="img/T01/TT_23.png" width="55" height="39" alt=""></td>
		<td colspan="3" rowspan="2">
			<img src="img/T01/TT_24.png" width="55" height="39" alt=""></td>
		<td colspan="4" rowspan="2">
			<img src="img/T01/TT_25.png" width="55" height="39" alt=""></td>
		<td colspan="3" rowspan="2">
			<img src="img/T01/TT_26.png" width="55" height="39" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="1" height="38" alt=""></td>
	</tr>
	<tr>
		<td rowspan="17">
			<img src="img/T01/TT_27.png" width="22" height="378" alt=""></td>
		<td colspan="3" rowspan="2" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/notime.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2"></td></tr></table></td>
		<td colspan="3" rowspan="4">
			<img src="img/T01/TT_29.png" width="38" height="81" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="3">
			<img src="img/T01/TT_30.png" width="22" height="80" alt=""></td>
		<td colspan="4" rowspan="2" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/notime.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2"></td></tr></table>
			</td>
		<td colspan="2" rowspan="6">
			<img src="img/T01/TT_32.png" width="37" height="152" alt=""></td>
		<td colspan="2" rowspan="6">
			<img src="img/T01/TT_33.png" width="25" height="152" alt=""></td>
		<td colspan="4" rowspan="2" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/notime.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2"></td></tr></table>
			</td>
		<td rowspan="3">
			<img src="img/T01/TT_35.png" width="34" height="80" alt=""></td>
		<td colspan="2" rowspan="3">
			<img src="img/T01/TT_36.png" width="24" height="80" alt=""></td>
		<td colspan="4" rowspan="2" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/notime.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2"></td></tr></table>
			</td>
		<td colspan="2" rowspan="5">
			<img src="img/T01/TT_38.png" width="35" height="119" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="1" height="35" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="11">
			<img src="img/T01/TT_39.png" width="55" height="264" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" rowspan="4">
			<img src="img/T01/TT_40.png" width="55" height="116" alt=""></td>
		<td colspan="4" rowspan="4">
			<img src="img/T01/TT_41.png" width="55" height="116" alt=""></td>
		<td colspan="4" rowspan="3">
			<img src="img/T01/TT_42.png" width="55" height="83" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="1" height="44" alt=""></td>
	</tr>
	<tr>
		<td rowspan="13">
			<img src="img/T01/TT_43.png" width="2" height="297" alt=""></td>
		<td colspan="4" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/notime.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2"></td></tr></table>
			</td>
		<td colspan="2" rowspan="7">
			<img src="img/T01/TT_45.png" width="7" height="140" alt=""></td>
		<td colspan="3" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/notime.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2"></td></tr></table>
			</td>
		<td rowspan="13">
			<img src="img/T01/TT_47.png" width="7" height="297" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="1" height="36" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" rowspan="6">
			<img src="img/T01/TT_48.png" width="55" height="104" alt=""></td>
		<td colspan="3" rowspan="6">
			<img src="img/T01/TT_49.png" width="55" height="104" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="1" height="3" alt=""></td>
	</tr>
	<tr>
		<td rowspan="8">
			<img src="img/T01/TT_50.png" width="15" height="181" alt=""></td>
		<td colspan="4" rowspan="2" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/notime.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2"></td></tr></table>
			</td>
		<td rowspan="11">
			<img src="img/T01/TT_52.png" width="20" height="258" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="1" height="33" alt=""></td>
	</tr>
	<tr>
		<td rowspan="7">
			<img src="img/T01/TT_53.png" width="10" height="148" alt=""></td>
		<td colspan="4" rowspan="3" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/notime.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2"></td></tr></table>
			</td>
		<td rowspan="10">
			<img src="img/T01/TT_55.png" width="27" height="225" alt=""></td>
		<td rowspan="10">
			<img src="img/T01/TT_56.png" width="10" height="225" alt=""></td>
		<td colspan="4" rowspan="3" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/notime.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2"></td></tr></table>
			</td>
		<td rowspan="7">
			<img src="img/T01/TT_58.png" width="15" height="148" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="1" height="3" alt=""></td>
	</tr>
	<tr>
		<td colspan="4">
			<img src="img/T01/TT_59.png" width="55" height="29" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="1" height="29" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" rowspan="2" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/notime.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2"></td></tr></table>
			</td>
		<td>
			<img src="img/T01/spacer.gif" width="1" height="4" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" rowspan="4">
			<img src="img/T01/TT_61.png" width="55" height="112" alt=""></td>
		<td colspan="4" rowspan="4">
			<img src="img/T01/TT_62.png" width="55" height="112" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="1" height="32" alt=""></td>
	</tr>
	<tr>
		<td rowspan="6">
			<img src="img/T01/TT_63.png" width="2" height="157" alt=""></td>
		<td colspan="4" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/notime.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2"></td></tr></table>
			</td>
		<td rowspan="6">
			<img src="img/T01/TT_65.png" width="5" height="157" alt=""></td>
		<td colspan="3" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/notime.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2"></td></tr></table>
			</td>
		<td colspan="4" rowspan="3">
			<img src="img/T01/TT_67.png" width="55" height="80" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="1" height="36" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" rowspan="5">
			<img src="img/T01/TT_68.png" width="55" height="121" alt=""></td>
		<td colspan="3" rowspan="5">
			<img src="img/T01/TT_69.png" width="55" height="121" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="1" height="43" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/notime.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2"></td></tr></table>
			</td>
		<td>
			<img src="img/T01/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" rowspan="2" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/notime.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2"></td></tr></table>
			</td>
		<td rowspan="3">
			<img src="img/T01/TT_72.png" width="10" height="77" alt=""></td>
		<td rowspan="3">
			<img src="img/T01/TT_73.png" width="15" height="77" alt=""></td>
		<td colspan="4" rowspan="2" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/notime.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2"></td></tr></table>
			</td>
		<td colspan="4" rowspan="2" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/notime.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2"></td></tr></table>
			</td>
		<td rowspan="3">
			<img src="img/T01/TT_76.png" width="15" height="77" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="1" height="35" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2">
			<img src="img/T01/TT_77.png" width="55" height="42" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td colspan="4">
			<img src="img/T01/TT_78.png" width="55" height="41" alt=""></td>
		<td colspan="4">
			<img src="img/T01/TT_79.png" width="55" height="41" alt=""></td>
		<td colspan="4">
			<img src="img/T01/TT_80.png" width="55" height="41" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="1" height="41" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" background="img/T01/TT_28.png" width="55" height="36">
			<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/Sao Paulo.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2">São Paul</td></tr></table></td>
		<td rowspan="2">
			<img src="img/T01/TT_82.png" width="5" height="47" alt=""></td>
		<td colspan="4" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/Portuguesa.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2">Portugue</td></tr></table>
			</td>
		<td rowspan="2">
			<img src="img/T01/TT_84.png" width="4" height="47" alt=""></td>
		<td colspan="5" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/Avai.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2">Avaí</td></tr></table>
			</td>
		<td rowspan="2">
			<img src="img/T01/TT_86.png" width="4" height="47" alt=""></td>
		<td colspan="3" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/Juventude.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2">Juventud</td></tr></table>
			</td>
		<td colspan="3" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/Brasil de Pelotas.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2">Brasil d</td></tr></table>
			</td>
		<td rowspan="2">
			<img src="img/T01/TT_89.png" width="4" height="47" alt=""></td>
		<td colspan="3" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/Osasco.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2">Osasco</td></tr></table>
			</td>
		<td rowspan="2">
			<img src="img/T01/TT_91.png" width="4" height="47" alt=""></td>
		<td colspan="4" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/Treze.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2">Treze</td></tr></table>
			</td>
		<td rowspan="2">
			<img src="img/T01/TT_93.png" width="4" height="47" alt=""></td>
		<td colspan="3" background="img/T01/TT_28.png" width="55" height="36">
		<table cellpadding="0" cellspacing="0" border=0  width="100%"><tr><td width="17"></td><td><img src="img/pq/Flamengo.png" border=0></td></tr>
<tr><td colspan="2" align="center" class="mob2">Flamengo</td></tr></table>
			</td>
		<td>
			<img src="img/T01/spacer.gif" width="1" height="36" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="img/T01/TT_95.png" width="55" height="11" alt=""></td>
		<td colspan="4">
			<img src="img/T01/TT_96.png" width="55" height="11" alt=""></td>
		<td colspan="5">
			<img src="img/T01/TT_97.png" width="55" height="11" alt=""></td>
		<td colspan="3">
			<img src="img/T01/TT_98.png" width="55" height="11" alt=""></td>
		<td colspan="3">
			<img src="img/T01/TT_99.png" width="55" height="11" alt=""></td>
		<td colspan="3">
			<img src="img/T01/TT_100.png" width="55" height="11" alt=""></td>
		<td colspan="4">
			<img src="img/T01/TT_101.png" width="55" height="11" alt=""></td>
		<td colspan="3">
			<img src="img/T01/TT_102.png" width="55" height="11" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="1" height="11" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="img/T01/spacer.gif" width="3" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="22" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="33" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="5" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="17" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="2" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="2" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="34" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="4" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="15" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="2" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="5" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="10" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="23" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="4" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="18" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="10" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="27" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="4" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="10" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="15" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="30" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="4" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="6" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="15" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="34" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="4" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="17" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="7" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="15" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="16" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="4" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="20" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="15" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="20" height="1" alt=""></td>
		<td>
			<img src="img/T01/spacer.gif" width="1" height="1" alt=""></td>
		<td></td>
	</tr>
</table></div></div></td></tr>
	<tr><td><div style="position:relative;top:0;width:623;left:0;height:15px;"><img src='img/layout/menu/botH.png' border=0></div></td></tr>
	</table></td><td width=204 valign='top' align='right'><div style='position:relative;right:0px;width:100%;height:100%;'><table cellpadding='0' cellspacing='0' border=0 height=20>
<tr><td><div style="position:relative;top:0;left:0;width:204;height:57;"><div style="width:204;height:57;background-image:url('img/layout/menu/topL.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:204;top:10;color:#515151;font-family:litoh;font-size:1em;">Parceiros</div><div style="position:absolute;text-align:center;width:204;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Parceiros</div></div></div></td></tr>
<tr><td style='height:auto'><div style="position:relative;top:0;left:6;width:192;height:100%;background-image:url('img/layout/menu/midL.png');padding-top:8;"   ></td></tr>
<tr><td><div style="position:relative;top:0;width:192;left:6;height:15px;"><img src='img/layout/menu/botL.png' border=0></div></td></tr>
</table></div></td></tr></table></td></tr>
	<tr><td valign='top' align='center'><div style="position:relative;top:0;width:237;height:108;background-image:url('img/layout/rodapeSign.png');"></div></td></tr>
	</table>
</td><td></td>
</tr></table><div style="position:absolute;left:50%;margin-left:-210px;top:184;width:420;height:24;z-index:3;display:none;" id='popKick'>
<table cellpadding='0' cellspacing='0' border=0>
<tr><td><img src='img/layout/popUpTop.png' border=0></td></tr>
<tr><td background='img/layout/popUpMid.png' height=231><div id='chuts' style="position:absolute;left:26;top:23;"></div><div id='capt' style="position:absolute;left:90;top:33;"><form id='formCap' method='post' style="display: inline; margin: 0;"><table border='0' width=250 cellpadding='3' cellspacing='0' align='center' class='tahomaGray' >
<tr><td colspan=2 align='center' height=30><div style='color:#cc0033;display:none;' id='erCap'>Codigo não confere, tente novamente.</div></td></tr>
<tr><td colspan=2 align='center'>Digite o texto da Imagem</td></tr>
<tr><td><img src='chuteCap.php' border=0 id='imgCap' style='float:left;'></td><td><img src='img/reloadicon.png' border=0 id='reloadImg' onClick='reloadCap();'></td></tr>
<tr><td colspan=2 align='center'><div class='brownInput'><input type='text' maxlength=4 name='captcha' style='color:#f8f8f8;font-weight:bold;' class='tahomaInput'></div></td></tr>
<tr><td colspan=2 align=center><div class='tahomaBtn'>Enviar</div></td></tr>
</table></form><div></td></tr>
<tr><td><img src='img/layout/popUpBot.png' border=0></td></tr></table>
</div><iframe name='HF' id='HF' width=300 height=300 scrolling="no" style="display:none"></iframe>
</body>
</html>
<Script>
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

$("#tempo").flash({swf:"tempo3.swf",width: 115,height: 32,wmode:"transparent",flashvars: {k:"17772"}});

function openFlash(dc,eC){
	if(eC==null)eC=0;
	$("#popKick").show(); $("#chuts").show(); $("#capt").hide();
	$("#chuts").flash({swf:"playKick003.swf",width: 366,height: 231,menu:false,wmode:"transparent",flashvars: {"typez":dc,"eC":eC}});
}
var tmpDc;
function openChute(dc,eC){
	$.ajax({
	  url: "getAntBot.php", timeout: 3000,
	  success: function(data) {
		if(data=='expired'){
			$("#popKick").show();
			$("#chuts").hide();
			$("#capt").show();
			$("#formCap").find('input[name="captcha"]').focus();
			tmpDc=dc;
		} else {
			openFlash(dc,eC);
		}
	  },
	  error: function(erro){
		window.setTimeout("openChute()", 3000, dc);
	  }
	});
}
//
$("#formCap").submit(function(event) {
	event.preventDefault();
	var pop=$(this);
	pop.find('.tahomaBtn').hide();
	$.post( 'sendCapt.php', {'captcha': $(this).find('input[name="captcha"]').val() }, function(data){
		if(data=='error'){
			$('#erCap').show().delay(3000).fadeOut(300);
			pop.find('.tahomaBtn').show();
		} else {
			openFlash(tmpDc);
		}
	});
});


///var lado;
tmpG=0; tmpDim=0;
function vai(volta,t,tmp,bD,rQ,aBE,isBE,done){
	dim=Array(5,8,10,15);

	if(done){
		tmpG+=rQ;
		tmpDim=tmpDim+dim[t-1];
	}

	if(volta!='ak'){
		$("#chuts").flash(function(){
				this.SetVariable("/:volta", volta);
		});
	} else {
		atualize();
	}
	if(isBE!=1){
		$("#kicks").flash(function(){
				this.SetVariable("/:tmp"+t, tmp);
				this.SetVariable("/:bD"+t, bD);
		});
	}

	if(aBE==1){
		//alert('vai');
		$("#kicksFlash")[0].addBolaExtra();
	}
}


function chuta(dir){
	window.HF.location=dir;
}

function atualize(){
	$("#infos").flash(function(){
		this.SetVariable("/:gols",parseInt(this.GetVariable("gols"))+tmpG);
		this.SetVariable("/:tep", parseInt(this.GetVariable("tep"))+tmpG);
		this.SetVariable("/:art", parseInt(this.GetVariable("art"))+tmpG);
		this.SetVariable("/:hora", parseInt(this.GetVariable("hora"))+tmpG);
		this.SetVariable("/:treino", parseInt(this.GetVariable("treino"))+tmpG);
		this.SetVariable("/:dim", parseInt(this.GetVariable("dim"))+tmpDim);
	});
	tmpDim=0; tmpG=0;
}

function fechaPop(){
	$("#popKick").hide();
	atualize();
}


$('.tahomaBtn').click(function(){
	$(this).closest('form').submit();
});

function login(){
	if($('#username').val()==$('#username').attr('placeholder')) {
		alert('Nome de usuario ou Email, vazio');
		return;
	}
	$('#goku').submit();
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
$('.serieBtn').click(function(){
	if(!openSeries){
		openSeries=true;
		$(this).css({'height':'70','background-image':'url("img/btnSeriesO.png")'});
		$('.serieBtn div:eq(1),.serieBtn div:eq(2)').css('display','block');
		$('.serieBtn div:eq(1),.serieBtn div:eq(2)').click(function(){
			$('#tableShields img').fadeOut(400);
			someSerieBtns();	
			//alert($(this).data('val'))
			$.post( 'renewShields.php', {'serie': $(this).data('val') }, function(data){
				$('#tableShields').html(data);
				$('#tableShields img').fadeIn(400);
				tryTumbs();
			});
			for(i=0;i<ord['a'].length;i++){
				$('.serieBtn div:eq('+i+')').text('Série '+ord[$(this).data('val')][i].toUpperCase()).data('val',ord[$(this).data('val')][i]);
			}
		});
	}
	$(this).hover(function(){
		//do Nothing
	},function(){
		openSeries=false;
		someSerieBtns();
	});

});

function someSerieBtns(){
	$('.serieBtn').css({'height':'26','background-image':'url("img/btnSeries.png")'});
	$('.serieBtn div:eq(1),.serieBtn div:eq(2)').css('display','none').unbind('click');
}

$('#saveKeyBtn').css('cursor','pointer').click(function(){
	document.location="?pr=saveKey";
});


</script>




<!--
     FILE ARCHIVED ON 17:04:23 Ago 9, 2013 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 4:30:16 Jan 25, 2015.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->