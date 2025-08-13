<?php
$adm = DB::conn()->prepare("SELECT ADM FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
$adm->execute();
$rs = $adm->fetch();
$admin = $rs["ADM"];
date_default_timezone_set("Brazil/East");

if(isset($_SESSION['Usuario']) && $admin == 1){
?>
<style type="text/css">
#bemvindo{
	position:absolute;
	left:20px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:14px;
}
#moni{
	position:absolute;
	left:20px;
	top:20px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:14px;
	color:#900;
}
#cargo{
	position:absolute;
	left:400px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:14px;
}
#hr{
	width:450px;
	height:1px;
	background:#CCC;
	position:absolute;
	top:50px;
	left:75px;
}
#right{
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:13px;
	left:420px;
	top:60px;
	float:right;
}
#grafico{
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:13px;
	left:180px;
	top:60px;
	float:left;
}
#ultimos_cad{
	width:160px;
	margin-top:2px;
	margin-left:5px;
}
#ultimos_cad #user{
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:13px;
	position:relative;
	top:-7px;
}
#menu{
	position:absolute;
	top:80px;
	left:5px;
}
#menu li{
	list-style:none;
	margin-bottom:15px;
}
#menu li a{
	text-decoration:none;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:13px;
	padding:8px 10px;
	color:#000;
}
#menu li a:hover{
	background:#666;
	cursor:pointer;
	color:#fff;
}
.hover{
	background:#666;
	color:#FFF;
}
#menu li a:focus{
	color:#FFF;
}
#pagina1{
	width:453px;
	height:auto;
	position:absolute;
	left:145px;
	top:58px;
}
#pagina2{
	width:453px;
	height:auto;
	position:absolute;
	top:58px;
	left:145px;
}
#pagina3{
	width:453px;
	height:auto;
	position:absolute;
	left:145px;
	top:58px;
}
#pagina4{
	width:453px;
	height:auto;
	position:absolute;
	left:145px;
	top:58px;
}
#pagina5{
	width:453px;
	height:auto;
	position:absolute;
	left:145px;
	top:58px;
}
#pagina6{
	width:453px;
	height:auto;
	position:absolute;
	left:145px;
	top:58px;
}
#pagina7{
	width:453px;
	height:auto;
	position:absolute;
	left:145px;
	top:58px;
}
.aba{
	display:none;
}
#hr1{
	width:160px;
	height:1px;
	background:#CCC;
	margin-top:7px;
	margin-bottom:5px;
}
#ti{
	text-decoration:none;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:14px;
	color:#000;
}
#form{
	margin-top:10px;
}
#form select{
	width:200px;
	height:25px;
}
#form .btn{
	margin-top:5px;
	width:auto;
	margin-left:2px;
	margin-right:2px;
	height:27px;
	background:#999;
	border:0px;
	color:#FFF;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:14px;
	outline:none;
}
#form .btn:focus{
	background:#333;
}
#form .btn:hover{
	cursor:pointer;
	background:#333;
	color:#FFF;
}
#form textarea:focus{
	border:1px solid #333;
}
#form textarea{
	outline:none;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:14px;
}
</style>
<script type="text/javascript">
	$(function(){
		$(".aba:first").show();
		$("#menu li a:first").addClass('hover');
		$("#menu a").click(function(){
			$("#menu li a").removeClass('hover');
			$(this).addClass('hover');
			$(".aba").hide();
			var div = $(this).attr('href');
			$(div).show();
			});
		})
</script>
</table></div></td><td valign='top' align='center'><table cellpadding='0' cellspacing='0' border=0 height=20>
	<tr><td><div style="position:relative;top:0;left:0;width:623;height:57;"><div style="width:623;height:57;background-image:url('img/layout/menu/topH.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:623;top:10;color:#515151;font-family:litoh;font-size:1em;">Administração do Sistema (KJGOL)</div><div style="position:absolute;text-align:center;width:623;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Administração do Sistema (KJGOL)</div></div></div></td></tr>
	<tr><td><div style="position:relative;top:0;left:0;width:623;min-height:320px; height:auto !important; background-image:url('img/layout/menu/midH.png');padding-top:8;">
<div style='position:relative;top:0;left:0;width:607;margin-left:9;'>
<span id="bemvindo">Bem vindo <strong>Admnistrador</b></strong></span>
<span id="moni">Você está sendo monitorado ! seu ip é: <strong><?php echo $ip = $_SERVER["REMOTE_ADDR"]; ?></b></strong></span>
<div id="cargo">
Seu cargo é Adiministrador <img src="img/icons/100.gif" />
</div>
<div id="hr"></div>
<div id="pagina1" class="aba">
<div id="right">
<span id="ul">Ultimos usuários cadastrados</span>
<?php
$sql = DB::conn()->prepare("SELECT * FROM cadastro_historico ORDER BY ID DESC LIMIT 5");
$sql->execute();
while($rs = $sql->fetch()){
	$users = $rs['user'];
?>
<div id="ultimos_cad">
<img src="img/icons/1.gif" /> <span id="user"><?php echo utf8_encode($users); ?></span>
</div>
<?php }?>
<div id="hr1"></div>
<span id="ul">Ultimos usuários Banidos</span>
<div id="ultimos_cad">
<?php
$sql = DB::conn()->prepare("SELECT * FROM Usuarios WHERE Ban = 1 ORDER BY Ban DESC LIMIT 1");
$sql->execute();
if($sql->rowCount() == 0){
echo 'Nenhum usuário banido.';	
}else{
$rs = $sql->fetch();
$rem = strtotime(''.$rs['Tempo_Ban'].'') - time();
$day = floor($rem / 86400);
$hr  = floor(($rem % 86400) / 3600);
}
?>
<?php
if($rs['Tempo_Ban'] > 0 && $rs['Tempo_Ban'] >= date('Y-m-d H:i:s')){
?>
<img src="img/icons/<?php echo $rs['Nivel']; ?>.gif" /> <span id="user"><?php echo utf8_encode($rs['Usuario']); ?> <span style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:13px; color:#F00;">(<?php if($day) echo "$day dias";
if($hr) echo " $hr horas"; ?>)</span></span>
<?php } ?>
</div>
</div>
<span id="grafico">Grafico Mensal de Compras de Vips</span>
<div id="grafico_m">
<div id="piechart" style="width: 300px; height: 300px;"></div>
</div>
</div>
<div id="pagina2" class="aba">
Gerenciar Usuarios.
</div>
<div id="pagina3" class="aba">
<div id="form">
<form action="" method="post">
<span id="ti">Usuário:</span><br/>
<select name="users">
<?php
$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE Cargo = 0");
$sql->execute();
while($rs = $sql->fetch()){
?>
<option value="<?php echo $rs['ID']; ?>"><?php echo utf8_encode($rs['Usuario']); ?></option>
<?php } ?>
</select><br/>
<span id="ti">Cargo:</span><br/>
<select name="cargo">
<option value="2">Moderador</option>
<option value="3">Moderador de Chat</option>
</select><br/>
<input type="submit" name="acao3" value="Adicionar" class="btn" />
</form>
</div>
</div>
<div id="pagina4" class="aba">
<div id="form">
<?php
if(isset($_POST['acao2'])){
	$usuario = strip_tags(trim($_POST['users']));
	$tempo = $_POST['qtd'];
	
	$adm = DB::conn()->prepare("SELECT ADM FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
	$adm->execute();
	
	if($usuario == '' || $tempo == ''){
	echo '<script>alert("Escolha o Usuario a ser Banido!");</script>';		
	}else{
	$tempo_fim_vip  = date('Y-m-d H:i:s',mktime(date('H') + $tempo  ,date('i'),date('s'),date('m'),date('d'),date('Y')));
	$sql = DB::conn()->prepare("UPDATE usuarios SET Ban = 1, Tempo_Ban = '$tempo_fim_vip', Gols_Temporada = 0, Gols_Rodada = 0, Gols_Hora = 0 WHERE ID = '$usuario'");
	$sql->execute();
	echo '<script>alert("Usuário Banido!");</script>';		
	}
}
?>
<form action="" method="post">
<span id="ti">Usuário:</span><br/>
<select name="users">
<?php
$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE Cargo <= 0");
$sql->execute();
while($rs = $sql->fetch()){
?>
<option value="<?php echo $rs['ID']; ?>"><?php echo utf8_encode($rs['Usuario']); ?></option>
<?php } ?>
</select><br/>
<span id="ti">Tempo:</span><br/>
<select name="qtd">
<option value="24">1 dia (24 horas)</option>
<option value="48">2 dias</option>
<option value="120">5 dias</option>
<option value="240">10 dias</option>
<option value="720">30 dias</option>
<option value="365">1 ano</option>
</select><br/>
<input type="submit" name="acao2" value="Banir Usuario" class="btn" />
</form>
</div>
</div>
<div id="pagina5" class="aba">
<?php
if(isset($_POST['acao1'])){
$sql = DB::conn()->prepare("SELECT * FROM usuarios");
$sql->execute();
while($rs = $sql->fetch()){
$ids = $rs['ID'];

	$msg = strip_tags(trim($_POST['mensagem']));
	$data = date("d/m");
	$hora = date("H:i");
	
	if($msg == ''){
	echo '<script>alert("Escreva uma mensagem...!");</script>';		
	}else{
	$sql = DB::conn()->prepare("INSERT INTO mensagens_usuario (id_de, id_para, Data, Hora,Mensagem,Tipo) VALUES ('".$_SESSION['ID']."','$ids','$data','$hora','$msg','av')");
	$sql->execute();
	echo '<script>alert("Mensagem enviada com sucesso!");</script>';		
	}
}
}
?>
<span id="ti">Enviar Mensagem Para Todos os Usuários:</span>
<div id="form">
<form action="" method="post">
<textarea cols="50" rows="5" name="mensagem" class="msg">
</textarea><br/>
<input type="submit" name="acao1" value="Enviar Mensagem" class="btn" />
</form>
</div>
</div>
<div id="pagina6" class="aba">
<span id="ti">Adicionar Vips ao usuário</span>
<div id="form">

<?php
if(isset($_POST['acao'])){
	$usuario = strip_tags(trim($_POST['users']));
	$quantidade = $_POST['qtd'];
	
	//verificar se o usuario póssui vip
	$sql = DB::conn()->prepare("SELECT * FROM vips WHERE id_user = '$usuario'");
	$sql->execute();
	
	if($usuario == '' || $quantidade == ''){
	echo 'escolha um usuario/quantidade';	
	}elseif($sql->rowCount() == 0){
	$sql = DB::conn()->prepare("INSERT INTO vips (id_user, qtd, dias) VALUES ('$usuario','$quantidade','360')");
	$sql->execute();
	echo '<script>alert("Vips enviados com sucesso!");</script>';	
	}else{
	$sql = DB::conn()->prepare("UPDATE vips SET qtd = qtd +$quantidade WHERE id_user = '$usuario'");
	$sql->execute();
	echo '<script>alert("Vips enviados com sucesso!");</script>';	
	}
}
?>
<form action="" method="post">
<span id="ti">Usuário:</span><br/>
<select name="users" id="users">
<?php
$sql = DB::conn()->prepare("SELECT * FROM usuarios");
$sql->execute();
while($rs = $sql->fetch()){
?>
<option value="<?php echo $rs['ID']; ?>"><?php echo utf8_encode($rs['Usuario']); ?></option>
<?php } ?>
</select><br/>
<span id="ti">Quantidade:</span><br/>
<select name="qtd" id="qtd">
<option value="1">1 unidade</option>
<option value="7">7 unidades</option>
<option value="22">22 unidades</option>
<option value="50">50 unidades</option>
<option value="125">125 unidades</option>
<option value="200">200 unidades</option>
</select><br/>
<input type="submit" name="acao" value="Enviar Vips" class="btn" onclick="addvip()" />
</form>
</div>
</div>
<div id="pagina7" class="aba">
<span id="ti">Configurações</span>
<div id="form">
<?php
if(isset($_POST['acao4'])){
include_once('zerar_hora.php');
echo '<script>;location.href="index.php?pr=index"</script>';	
}
?>
<?php
if(isset($_POST['acao5'])){
include_once('zerar_rodada.php');
echo '<script>alert("Rodada Zerada com Sucesso!");</script>';	
}
?>
<?php
if(isset($_POST['acao6'])){
include_once('zerar_temporada.php');
echo '<script>alert("Temporada Zerada com Sucesso!");</script>';	
}
?>
<?php
if(isset($_POST['acao7'])){
include_once('sorte.php');
echo '<script>;location.href="index.php?pr=index"</script>';
}
?>
<form action="" method="post">
<input type="submit" name="acao4" value="Proxima Hora" class="btn" />
<input type="submit" name="acao5" value="Proxima Rodada" class="btn" />
<input type="submit" name="acao6" value="Proxima Temporada" class="btn" />
<input type="submit" name="acao7" value="Dar Sorte" class="btn" />
</form>
<hr />
<span id="ti">Usuários Utilizando Proxy</span><br/><br/>
<span id="ti">Nenhum usuário encontrado</span>
<hr />
<span id="ti">Site em Manutenção</span><br />
<form action="" method="post">
<?php
$configuracoes = DB::conn()->prepare("SELECT * FROM configuracoes");
$configuracoes->execute();

$conf = $configuracoes->fetchObject();

$TemporadaAgora = $conf->Campeonato;
$RodadaAgora = $conf->Rodada;
$manutencao = $conf->Manutencao;
?>
<input type="radio" name="bol" value="1" <?php if($manutencao == 1){echo 'checked="checked"';}else{} ?>><span id="ti">Sim</span>
<input type="radio" name="bol" value="0" <?php if($manutencao == 0){echo 'checked="checked"';}else{} ?>><span id="ti">Nao</span><br />
<input type="submit" name="acao9" value="Salvar" class="btn" />
</form>
<?php
if(isset($_POST['acao9'])){
$sim = $_POST['bol'];

$sql = DB::conn()->prepare("UPDATE configuracoes SET Manutencao = '$sim'");
$sql->execute();
echo '<script>alert("Salvo!");</script>';	

}
?>
<hr />
<span id="ti">Painel de Administrador Provisório.</span>
</div>
</div>
<div id="menu">
<li><a href="#pagina1">Inicio</a></li>
<li><a href="#pagina2">Gerenciar Usuarios</a></li>
<li><a href="#pagina3">Adicionar MOD</a></li>
<li><a href="#pagina4">Banir/Desbanir</a></li>
<li><a href="#pagina5">Mensagem Global</a></li>
<li><a href="#pagina6">Adicionar Vips</a></li>
<li><a href="#pagina7">Configurações</a></li>
</div>
</div></div></td></tr>
<tr><td><div style="position:relative;top:0;width:623;left:0;height:15px;"><img src='img/layout/menu/botH.png' border=0></div></td></tr>
	</table>

<?php 
}else{
echo "<script>location.href='index.php?pr=index;</script>";	
}
?>