<?php
if(!isset($_SESSION['ID'])){
?>
</table></div></td><td valign='top' align='center'><table cellpadding='0' cellspacing='0' border=0 height=20>
	<tr><td><div style="position:relative;top:0;left:0;width:623;height:57;"><div style="width:623;height:57;background-image:url('img/layout/menu/topH.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:623;top:10;color:#515151;font-family:litoh;font-size:1em;">Comece Agora</div><div style="position:absolute;text-align:center;width:623;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Comece Agora</div></div></div></td></tr>
	<tr><td><div style="position:relative;top:0;left:0;width:623;min-height:300px; height:auto !important;  height:300px;background-image:url('img/layout/menu/midH.png');padding-top:8;">
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
$(function(){
	
$('.btn').on('click', function(event){
	event.preventDefault();
	
	var usuario = $('#user').val();
	var senha   = $('#senha').val();
	var email   = $('#email').val();
	var times   = $('#Times').val();
	var camisa  = $('#camisa').val();
	var sexo    = $('#sexo').val();
	
	if($('#user').val()==$('#user').attr('placeholder')){
	alert('Escolha um nome de usuário!');	
	}
	else if($('#senha').val()==$('#senha').attr('placeholder')){
	alert('Digite uma senha com no minimo 6 caracteres!');	
	}
	else if($('#email').val()==$('#email').attr('placeholder')){
	alert('Digite um email válido!');	
	}
	else if($('#camisa').val()==$('#camisa').attr('placeholder')){
	alert('Camisa Nº!?');	
	}
	else if(times == 0){
	alert('Escolha seu time!');	
	}else{
	$.ajax({
		method: 'post',
		url:'paginas/cadastrar.php',
		data: {usuario:usuario,senha:senha,email:email,times:times,camisa:camisa,sexo:sexo},
		success: function(valor){
		alert(valor);	
		}
		})	
	}

   })	
});
</script>
<link rel="stylesheet" type="text/css" href="../css/styleBrgol.css" />
<div style='position:relative;top:0;left:0;width:607;margin-left:9;'>
<div id="form_steps">
<center>
<table width="230" border="0">
<form action="#" method="post" autocomplete="off">
  <tr>
    <td><span class="title">Usuário:</span></td>
    </tr>
  <tr>
    <td><input type="text" name="usuario" id="user" placeholder="Usuario..."/></td>
    </tr>
  <tr>
    <td><span class="title">Senha:</span></td>
    </tr>
  <tr>
    <td><input type="password" id="senha" name="senha" placeholder="Senha..." /></td>
  </tr>
  <tr>
    <td><span class="title">Email:</span></td>
  </tr>
  <tr>
    <td><input type="text" id="email" name="email" placeholder="Email..."/></td>
  </tr>
<tr>
    <td><span class="title">Time:</span></td>
    </tr>
  <tr>
    <td> 
<select name="Times" id="Times">
<option value="0" >Escolha um time</option>
<?php
$listar = DB::conn()->prepare("SELECT * FROM times ORDER BY Time ASC");
$listar->execute();
while($row = $listar->fetchObject()){	
$iddd = $row->ID;
?>
<option value="<?php echo $row->ID; ?>"><?php echo utf8_encode($row->Time); ?></option>
<?php } ?>
</select>
    </td>
    </tr>
  <tr>
    <td><span class="title">Camisa:</span></td>
    </tr>
  <tr>
    <td>
    <select name="camisa" id="camisa">
		  <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
</select>
    </td>
  </tr>
    <tr>
    <td><span class="title">Sexo:</span></td>
    </tr>
  <tr>
    <td>
    <select name="sexo" id="sexo">
    <option value="1">Masculino</option>
    <option value="2">Feminino</option>
    </select>
    </td>
  </tr>
    <tr>
    <td><span class="title">Som?</span></td>
    </tr>
  <tr>
    <td>
    <select name="som" id="som">
    <option value="1">Sim</option>
    <option value="1">Não</option>
    </select>
    </td>
  </tr>
  <tr>
    <td><input type="submit" name="acao" value="Cadastrar" class="btn" id="btn" /></td>
  </tr>
  </form>
</table>
</center>
</div>
</div>
</div></div></td></tr>
<tr><td><div style="position:relative;top:0;width:623;left:0;height:15px;"><img src='img/layout/menu/botH.png' border=0></div></td></tr>
</table>
<?PHP }else{echo '<script>;location.href="index.php?pr=index"</script>';} ?>