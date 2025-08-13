<?php
$destrancar = DB::conn()->prepare("SELECT Trancar FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
$destrancar->execute();
$rs = $destrancar->fetch();
$trancar = $rs["Trancar"];

if(isset($_SESSION['Usuario']) && $trancar == 0){
?>
</table></div></td><td valign='top' align='center'><table cellpadding='0' cellspacing='0' border=0 height=20>
	<tr><td><div style="position:relative;top:0;left:0;width:623;height:57;"><div style="width:623;height:57;background-image:url('img/layout/menu/topH.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:623;top:10;color:#515151;font-family:litoh;font-size:1em;">Mudar de Time</div><div style="position:absolute;text-align:center;width:623;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Mudar de Time</div></div></div></td></tr>
	<tr><td><div style="position:relative;top:0;left:0;width:623;min-height:300px; height:auto !important;  height:300px;background-image:url('img/layout/menu/midH.png');padding-top:8;">
<style type="text/css">
.activess{
	margin-top:5px;
	margin-left:52px;
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
<div id="form_steps" style="position:absolute; left:30%;">
<span class="title" style="font-size:15px;">Escolha o Time:</span><Br/>
<select name="Times" id="Times" style="margin-top:5px;">
<option value="0" >Escolha um time</option>
<?php
$listar = DB::conn()->prepare("SELECT * FROM times ORDER BY Time ASC");
$listar->execute();
while($row = $listar->fetchObject()){	
$iddd = $row->ID;
?>
<option value="<?php echo $row->ID; ?>"><?php echo utf8_encode($row->Time); ?></option>
<?php } ?>
</select><br/>
<a href="" id="mudar_time" class="activess">Mudar Time</a><br/>
<?php
$query = DB::conn()->prepare("SELECT Troca, Temporada FROM configuracoes");
$query->execute();
$rs = $query->fetchObject();

$trocas = $rs->Troca;

$query = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = ('". $_SESSION["ID"] ."')");
$query->execute();
$rs = $query->fetchObject();
$strocas = $rs->Troca;
$dinheiro = $rs->Dinheiro;
$meutime = $rs->Time;
$tempo_troca = $rs->Tempo_Troca;
?>
<span class="title" style="font-size:14px; position:absolute; top:100;">Para trocar de time você precisa ter 40 mil</span><Br/>
<span class="titles" style="font-size:14px; position:absolute; top:130; left:38;" data-id="<?php echo $dinheiro; ?>">Trocas nessa temporada <?php echo $strocas; ?>/<?php echo $trocas; ?></span><Br/>
<span class="trocau" data-id="<?php echo $strocas; ?>"></span>
<span class="trocat" data-id="<?php echo $trocas; ?>"></span>
<span class="meu-time" data-id="<?php echo $meutime; ?>"></span>
<span class="tempo_troca" data-id="<?php echo $tempo_troca; ?>"></span>
</div>
<div id="etime" style="position:absolute; left:420; top:10;">
<script type="text/javascript">
$(document).ready(function(){
	var id = document.getElementById('Times');
$("select[name=Times]").change(function(){
		$.post('paginas/listar_times.php?id='+id.value, function(data){
			$('#etime').show("slow").html(data);
			});
	});
});

$("#mudar_time").click(function(e){
	e.preventDefault();

		var time_escolhido = $('select[name=Times]').val();
	var custo = 40000;
	var dinheiro = $(".titles").attr('data-id');
	var trocau = $('.trocau').attr('data-id');
	var trocat = $('.trocat').attr('data-id');
	var meutime = $('.meu-time').attr('data-id');
	var tempo_troca = $('.tempo_troca').attr('data-id');
	
	var temp_troca = new Date(tempo_troca);
	var now = new Date();
	
	if($('select[name=Times]').val() == 0){
	alert('Selecione um time!');	
	}else if(dinheiro < custo){
	alert('Você não tem dinheiro suficiente para trocar de Time.');
	}else if(trocau >= trocat){
	alert('Você atingiu o limite de trocas nessa temporada.');	
	}else if(time_escolhido == meutime){
	alert('Você está neste Time.');	
	}else if(temp_troca >= now){
	alert('Sua troca ainda não está livre.');	
	}else{
	$.ajax({
	method: 'POST',
	url: 'paginas/alt_time.php',
	dataType:'json',
	data:{id_tm:$('select[name=Times]').val()},
	success: function(retorno){
	alert('Bem vindo ao ' + retorno.time);	
			}	
		})	
	}

	return false;	
})	
</script>
</div>  
</div></div></td></tr>
<tr><td><div style="position:relative;top:0;width:623;left:0;height:15px;"><img src='img/layout/menu/botH.png' border=0></div></td></tr>
</table>
<?php }else{echo '<script>location.href="index.php?pr=index"</script>';} ?>