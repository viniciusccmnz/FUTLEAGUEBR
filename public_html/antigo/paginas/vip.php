<?php
$destrancar = DB::conn()->prepare("SELECT Trancar,Usuario FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
$destrancar->execute();
$rs = $destrancar->fetch();
$trancar = $rs["Trancar"];
$usuario = $rs['Usuario'];

//verificar se o usuario tem vip
$vips = DB::conn()->prepare("SELECT * FROM vips WHERE id_user = '".$_SESSION['ID']."'");
$vips->execute();

$ver_vips = $vips->fetchObject();

$vip = isset($ver_vips->id_user);
$qtd = isset($ver_vips->qtd);

if(isset($_SESSION['Usuario']) && $trancar == 0 && $qtd > 0){
?>
<style type="text/css">
#form_stepss input{
	width:200px;
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
	<tr><td><div style="position:relative;top:0;left:0;width:623;height:57;"><div style="width:623;height:57;background-image:url('img/layout/menu/topH.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:623;top:10;color:#515151;font-family:litoh;font-size:1em;">Vips</div><div style="position:absolute;text-align:center;width:623;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Vips</div></div></div></td></tr>
	<tr><td><div style="position:relative;top:0;left:0;width:623;min-height:300px; height:auto !important;  height:300px;background-image:url('img/layout/menu/midH.png');padding-top:8;">
<div style='position:relative;top:0;left:0;width:607;margin-left:9;'>
<?php
$query = DB::conn()->prepare("SELECT * FROM vips WHERE id_user = '".$_SESSION['ID']."' ");
$query->execute();
$rs = $query->fetchObject();

$quantidade_vip = $rs->qtd;
?>
<div id="form_stepss">
<div id="id_vips" style="font-family: Helvetica, sans-serif, Arial; font-size:13px; margin-left:45%; margin-top:5px;">[<?php echo $quantidade_vip; ?>] VIP's</div>
<div style="margin-left:15%; margin-top:10px;">
<form action="#" method="post">
<input type="text" name="usuario" id="user" placeholder="Nome de usuário"/>
<select name="Times" id="Times">
<option value="0" >Todos</option>
<?php
$listar = DB::conn()->prepare("SELECT * FROM times ORDER BY Time ASC");
$listar->execute();
while($row = $listar->fetchObject()){	
$iddd = $row->ID;
?>
<option value="<?php echo $row->ID; ?>"><?php echo utf8_encode($row->Time); ?></option>
<?php } ?>
</select>
<input type="submit" name="acao" value="Buscar" class="btns" id="buscars" />
</form>
</div>
<div id="resultado" style="padding:10px; margin-left:12%">

</div>
</div>
<script type="text/javascript">
$("#buscars").click(function(e){
	e.preventDefault();
	
	var usuario = $("#user").val();
	var id_time = document.getElementById('Times').value;
	
	$.ajax({
		method: 'post',
		url:'paginas/buscar_users.php',
		data:{user:usuario, time_id:id_time},
		success: function(res){
		$("#resultado").html(res);	
		}
	})
	
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
