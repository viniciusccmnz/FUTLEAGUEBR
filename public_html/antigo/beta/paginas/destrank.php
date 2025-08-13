<?php
$destrancar = DB::conn()->prepare("SELECT Trancar FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
$destrancar->execute();
$rs = $destrancar->fetch();
$trancar = $rs["Trancar"];

if(isset($_SESSION['Usuario']) && $trancar == 1){
?>
<style type="text/css">
#form_stepss input{
	width:250px;
	height:30px;
	outline:none;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	color:#333;
	padding-left:5px;
	border-radius:4px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border:1px solid #999;
	box-shadow:inset 0 0 1px 1px #999;
	margin-bottom:3px;
	display:block;
}
#form_stepss select{
	width:150px;
	height:30px;
	outline:none;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	color:#333;
	padding-left:5px;
	border-radius:4px;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border:1px solid #999;
	box-shadow:inset 0 0 1px 1px #999;
}
#form_stepss .btns{
	width:auto;
	padding:5px 8px;
	background:#093;
	border:1px solid #063;
	color:#fff;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
}
#form_stepss .btns:hover{
	background:#0C3;
	cursor:pointer;
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
	<tr><td><div style="position:relative;top:0;left:0;width:623;height:57;"><div style="width:623;height:57;background-image:url('img/layout/menu/topH.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:623;top:10;color:#515151;font-family:litoh;font-size:1em;">Destrancar Conta</div><div style="position:absolute;text-align:center;width:623;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Destrancar Conta</div></div></div></td></tr>
	<tr><td><div style="position:relative;top:0;left:0;width:623;min-height:300px; height:auto !important;  height:300px;background-image:url('img/layout/menu/midH.png');padding-top:8;">
<div style='position:relative;top:0;left:0;width:607;margin-left:9;'>
<div id="form_stepss">
<div style="margin-left:30%; margin-top:10px;">
<form action="#" method="post">
<input type="text" name="email" id="emailatua" placeholder="Email atual..."/>
<input type="submit" name="acao" value="Destrancar" class="btns" id="destrancar" />
</form>
<script type="text/javascript">
$("#destrancar").click(function(e){
	e.preventDefault();
	
	var email = $("#emailatua").val();
	
	if($('#emailatua').val()==$('#emailatua').attr('placeholder')){
		alert('Digite o email atual para continuar!');
	}else{
		$.ajax({
		method: 'post',
		url:'paginas/destrancar.php',
		data:{emailatual:email},
		success: function(res){
		alert(res);	
		}
	})	
	}
	
	return false;	
})
</script>
</div>
</div>   
</div></div></td></tr>
<tr><td><div style="position:relative;top:0;width:623;left:0;height:15px;"><img src='img/layout/menu/botH.png' border=0></div></td></tr>
</table>
<?php }else{echo '<script>location.href="index.php?pr=index"</script>';} ?>