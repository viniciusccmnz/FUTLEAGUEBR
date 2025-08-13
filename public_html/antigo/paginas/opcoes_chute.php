<?php
	$dadosuser = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID  = '".$_SESSION['ID']."'");
	$dadosuser->execute();
	$rs = $dadosuser->fetch();
	
	$cargo_user = $rs['Cargo'];
	$trancar = $rs['Trancar'];
	
if(isset($_SESSION['Usuario']) && $trancar == 0 && $cargo_user == 1 || $cargo_user == 2){
?>
</table></div></td><td valign='top' align='center'><table cellpadding='0' cellspacing='0' border=0 height=20>
	<tr><td><div style="position:relative;top:0;left:0;width:623;height:57;"><div style="width:623;height:57;background-image:url('img/layout/menu/topH.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:623;top:10;color:#515151;font-family:litoh;font-size:1em;">Opções de Chute</div><div style="position:absolute;text-align:center;width:623;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Opções de Chute</div></div></div></td></tr>
	<tr><td><div style="position:relative;top:0;left:0;width:623;min-height:300px; height:auto !important;  height:300px;background-image:url('img/layout/menu/midH.png');padding-top:8;">
<style type="text/css">
.activess{
	margin-top:5px;
	margin-left:70px;
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
</style>
<script type="text/javascript" src="../js/jquery.js"></script>  
<div style='position:relative;top:0;left:0;width:607;margin-left:9;'>
<div id="form_steps" style="position:absolute; left:34%; top:10;">
<span class="title" style="font-size:15px;">Opções de Chute</span><Br/>
<select name="opcoes" id="opcos" style="margin-top:5px;">
    <option value="c">chute direto</option>
    <option value="s">seguir ordem</option>

</select><br/>
<a href="" id="mudar_opcoes" class="activess">Salvar</a><br/>
<script type="text/javascript">
$("#mudar_opcoes").click(function(e){
	e.preventDefault();
	
	$.ajax({
	method: 'POST',
	url: 'paginas/opcoes_c.php',
	data:{opcoes:$('#opcos').val()},
	success: function(retorno){
	alert('Salvo');	
			}	
		})
	
	return false;
});
</script>  
</div>    
</div></div></td></tr>
<tr><td><div style="position:relative;top:0;width:623;left:0;height:15px;"><img src='img/layout/menu/botH.png' border=0></div></td></tr>
	</table>
<?php }else{echo '<script>location.href="index.php?pr=index"</script>';} ?>