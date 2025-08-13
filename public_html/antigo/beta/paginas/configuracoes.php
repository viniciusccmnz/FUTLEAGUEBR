<?php
$destrancar = DB::conn()->prepare("SELECT Trancar FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
$destrancar->execute();
$rs = $destrancar->fetch();
$trancar = $rs["Trancar"];
if(isset($_SESSION['Usuario']) && $trancar == 0){
?>
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
}.css_btn_class:hover {
	background:-moz-linear-gradient( center top, #e9e9e9 5%, #f9f9f9 100% );
	background:-ms-linear-gradient( top, #e9e9e9 5%, #f9f9f9 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e9e9e9', endColorstr='#f9f9f9');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #e9e9e9), color-stop(100%, #f9f9f9) );
	background-color:#e9e9e9;
}
#aling{
	width:500px;
	margin-left:65px;
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
	float:left;
	margin-top:1px;
	margin-left:3px;
}
#fundomsg3 .data{
	margin-top:21px;
	margin-left:-30px;
	font-size:11px;
	color:#333;
	font-family:Liberation;
	float:left;
	margin-right:10px;
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
	float:left;
	margin-top:1px;
	margin-left:3px;
}
#fundomsg1 .data{
	margin-top:21px;
	margin-left:-30px;
	font-size:11px;
	color:#333;
	font-family:Liberation;
	float:left;
	margin-right:10px;
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
	float:left;
	margin-top:1px;
	margin-left:3px;
}
#fundomsg .data{
	margin-top:21px;
	margin-left:-30px;
	font-size:11px;
	color:#333;
	font-family:Liberation;
	float:left;
	margin-right:10px;
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
	float:left;
	margin-top:5px;
	font-size:14px;
	margin-left:10px;
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
</table></div></td><td valign='top' align='center'><table cellpadding='0' cellspacing='0' border=0 height=20>
	<tr><td><div style="position:relative;top:0;left:0;width:623;height:57;"><div style="width:623;height:57;background-image:url('img/layout/menu/topH.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:623;top:10;color:#515151;font-family:litoh;font-size:1em;">Configurações</div><div style="position:absolute;text-align:center;width:623;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Configurações</div></div></div></td></tr>
	<tr><td><div style="position:relative;top:0;left:0;width:623;min-height:300px; height:auto !important;  height:300px;background-image:url('img/layout/menu/midH.png');padding-top:8;">
<div style='position:relative;top:0;left:0;width:607;margin-left:9;'>
<div id="aling">
<li><a href="#usuario" class="css_btn_class">Alterar usuário</a></li>
<li><a href="#senha" class="css_btn_class">Alterar senha</a></li>
<li><a href="#emails" class="css_btn_class">Alterar email</a></li>
<li><a href="#conta" class="css_btn_class">Opções</a></li>
</div>
<div id="usuario" class="aba" style="position:absolute; top:50; left:200;">
<div id="form_steps">
<form action="#" method="post" autocomplete="off">
<span class="title">Email:</span>
<input type="text" name="email" id="email" placeholder="Email atual"/>
<span class="title">Novo nick:</span>
<input type="text" name="nick" id="nick" placeholder="Novo nick"/>
<input type="submit" name="acao" value="Alterar!" class="btn" id="trocarusuario" />
</form>
</div>
</div>
<div id="senha" class="aba" style="position:absolute; top:50; left:200;">
<div id="form_steps">
<?php
if(isset($_POST['acao9'])){
	$id_user = $_SESSION['ID'];
	$senha_atual = $_POST['senhaat'];
	$nova_senha  = md5($_POST['novasenha']);
	$email_at    = $_POST['email'];
	
	//pegar dados do usuario
	$pegar_dados = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = ?");
	$pegar_dados->execute(array($id_user));
	
	$dados = $pegar_dados->fetch();
	
	$email_atual = $dados["Email"];
	$senha_at = $dados["Senha"];
	
	if(strlen($nova_senha) < 6){
	echo '<script>alert("A nova senha precisa ter no minimo 6 caracteres!")</script>';	
	}elseif($email_at != $email_atual){
	echo '<script>alert("Email atual invalido!")</script>!';	
	}elseif($senha_atual != $senha_at){
	echo '<script>alert("Senha atual invalida!")</script>';
	}else{
	$alt = DB::conn()->prepare("UPDATE usuarios SET Senha = '$nova_senha' WHERE ID = ?");
	$alt->execute(array($id_user));
	echo '<script>alert("Senha alterada!")</script>';	
	}
}
?>
<form action="#" method="post" autocomplete="off">
<span class="title">Senha atual:</span>
<input type="password" name="senhaat" id="senhaat" placeholder="Senha atual"/>
<span class="title">Nova senha:</span>
<input type="password" name="novasenha" id="novasenha" placeholder="Nova senha"/>
<span class="title">Email:</span>
<input type="text" name="email" id="email1" placeholder="Email atual"/>
<input type="submit" name="acao9" value="Alterar!" class="btn" id="trocarsenha" />
</form>
</div>
</div>
<div id="emails" class="aba" style="position:absolute; top:50; left:200;">
<div id="form_steps">
<form action="#" method="post" autocomplete="off">
<span class="title">Email:</span>
<input type="text" name="email" id="email2" placeholder="Email atual"/>
<span class="title">Novo email:</span>
<input type="text" name="novoemail" id="novoemail" placeholder="Novo email"/>
<input type="submit" name="acao" value="Alterar!" class="btn" id="trocaremail" />
</form>
</div>
</div>
<div id="conta" class="aba" style="position:absolute; top:10;">
<div id="form_steps" style="position:absolute; top:50; left:270;">
<input type="submit" name="acao" value="Trancar" class="btn" id="trancarconta" />
<input type="submit" name="acao" value="Resetar Habilidades" class="btn" id="resetar"  style="margin-top:10px;"/>
</div>
</div>
<script type="text/javascript">
$("#trocarusuario").click(function(e){
	e.preventDefault();
	
	var email1   = $("#email").val();
	var novonick = $("#nick").val();
	
	if($('#email').val()==$('#email').attr('placeholder')){
		alert('Preencha o campo email atual!');
	}
	else if($('#nick').val()==$('#nick').attr('placeholder')){
		alert('Preencha o campo novo nick!');
	}
	else{
		$.ajax({
		method: 'post',
		url:'paginas/alt_nick.php',
		data: {email_ant:email1, newnick:novonick},
		success: function(valor){
		alert(valor);	
		}
		})	
	}
	
	return false;
})

//senha


//email

$("#trocaremail").click(function(e){
	e.preventDefault();
	
	var emailat   = $("#email2").val();
	var novoemail    = $("#novoemail").val();
	
	if($('#email2').val()==$('#email2').attr('placeholder')){
		alert('Preencha o campo email atual!');
	}
	else if($('#novoemail').val()==$('#novoemail').attr('placeholder')){
		alert('Preencha o campo novo email!');
	}
	else{
		$.ajax({
		method: 'post',
		url:'paginas/alt_email.php',
		data: {emailant:emailat, novoe:novoemail},
		success: function(valor){
		alert(valor);	
		}
		})	
	}
	
	return false;
})

//trancar

$("#trancarconta").click(function(e){
	e.preventDefault();
	
		$.ajax({
		method: 'post',
		url:'paginas/trancar.php',
		success: function(valor){
		alert(valor);	
		}
		})	
	
	return false;
})

//resetar

$("#resetar").click(function(e){
	e.preventDefault();
	
	if(confirm("Tem certeza que você deseja resetar suas habilidades ?")) {
		$.ajax({
		method: 'post',
		url:'paginas/resetar.php',
		success: function(valor){
		alert(valor);	
		}
		})	
	}
	return false;
})
</script>
</div></div></td></tr>
<tr><td><div style="position:relative;top:0;width:623;left:0;height:15px;"><img src='img/layout/menu/botH.png' border=0></div></td></tr>
	</table>
<?php
}else{
echo "<script>location.href='index.php?pr=index;</script>";		
}
?>