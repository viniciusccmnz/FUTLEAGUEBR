</table></div></td><td valign='top' align='center'><table cellpadding='0' cellspacing='0' border=0 height=20>
	<tr><td><div style="position:relative;top:0;left:0;width:623;height:57;"><div style="width:623;height:57;background-image:url('img/layout/menu/topH.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:623;top:10;color:#515151;font-family:litoh;font-size:1em;">Confirma VIP</div><div style="position:absolute;text-align:center;width:623;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Confirma VIP</div></div></div></td></tr>
	<tr><td><div style="position:relative;top:0;left:0;width:623;min-height:300px; height:auto !important;  height:300px;background-image:url('img/layout/menu/midH.png');padding-top:8;">
<div style='position:relative;top:0;left:0;width:607;margin-left:9;'>
<style type="text/css">
#formulario .tit{
	font-size:18px;
	color:#333;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	display:block;
}
#formulario .tit1{
	font-size:13px;
	color:#000;
	font-family:Arial, Helvetica, sans-serif;
	padding:20px;
	display:block;
}
#formulario .tit2{
	display:block;
	color:#F00;
	font-size:12px;
	font-weight:bold;
	font-family:Arial, Helvetica, sans-serif;
}
#form span{
	font-size:13px;
	color:#000;
	font-family:Arial, Helvetica, sans-serif;
	display:block;
}
#form input{
	color:#000;
	font-family:Arial, Helvetica, sans-serif;
	border:1px solid #000;
	display:block;
}
#form textarea{
	color:#000;
	font-family:Arial, Helvetica, sans-serif;
	border:1px solid #000;
}
#form .t5{
	color:#000;
	font-family:Arial, Helvetica, sans-serif;
	border:1px solid #000;
	width:80px;
}
#form .t6{
	color:#000;
	font-family:Arial, Helvetica, sans-serif;
	border:1px solid #000;
	width:130px;
}
</style>
<div id="formulario">
<script type="text/javascript" src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<script type="text/javascript">
function deposito(){
event.preventDefault();
//pegar as variaveis
var banco = $("#banco").val();
var forma   = $("#tipo").val();
var data   = $("#data").val();
var horario   = $("#horario").val();
var numero   = $("#numero").val();
var terminal   = $("#terminal").val();
var qtd   = $("#qtd").val();
var comentario   = $("#comentario").val();

//verificaçoes
if(banco == '' || forma == '' || data == '' || horario == '' || numero == '' || terminal == '' || comentario == '' || qtd == ''){
	alert('Preencha todos os campos!');

}else{
$.post('paginas/deposito.php',
	{
	banc:banco,
	form:forma,
	date:forma,
	horari:horario,
	nrm:numero,
	termin:terminal,
	QT:qtd,
	coment:comentario,
	}, function(res){
		alert(res);	
				
		if(res == 'Formulario enviado para analise!'){
		location.href = "index.php?pr=index";	
		}
			
	});
	//fim do post	
}

//fim verificação
}
</script>
<center>
<span class="tit">Confirmar depósito (SISTEMA INDISPONIVEL)</span>
<span class="tit1">Preencha abaixo usando as informações do comprovante</span>
<span class="tit2">ATENÇÃO TENTATIVA DE FRAUDE RESULTA NO BANIMENTO DA CONTA</span>
<div id="form">
<form action="" method="post" enctype="multipart/form-data">
<span>Banco:</span>
<select name="banco" id="banco">
<option value="C" >Caixa Economica</option>
<option value="B" >Bradesco</option>
<option value="P" >PAG SEGURO</option>
</select>
<span>Forma:</span>
<select name="tipo" id="tipo">
<option value="0" >Depósito direto no caixa</option>
<option value="1" >Depósito no caixa rápido por envelope</option>
<option value="2" >Depósito em caixas lotéricas</option>
<option value="3" >Depósito no banco postal (correios)</option>
<option value="4" >Transferência entre contas</option>
</select>
<span>Data:</span>
<input type="text" name="data" class="t5" id="data" />
<span>Horário:</span>
<input type="text" name="hora" class="t5" id="horario"/>
<span>N°. documento:</span>
<input type="text" name="numerod" class="t6" id="numero" />
<span>Terminal:</span>
<input type="text" name="terminal" class="t5" id="terminal"/>
<span>Quantidade:</span>
<select name="qtd" id="qtd">
<option value="1" >1 VIP</option>
<option value="7" >7 VIP</option>
<option value="22" >22 VIP</option>
<option value="50" >50 VIP</option>
<option value="125" >125 VIP</option>
<option value="200" >200 VIP</option>
</select>
<span>Comentário:</span>
<textarea cols="30" rows="4" name="comentario" id="comentario">

</textarea>
<span class="tit1">
Informe no comentário todos os outros números do comprovante isso facilitará a identificação do seu depósito.
</span>
<input type="submit" name="acao" value="Enviar" onclick="deposito()" />
</form>
</div>
</center>
</div>    
</div></div></td></tr>
<tr><td><div style="position:relative;top:0;width:623;left:0;height:15px;"><img src='img/layout/menu/botH.png' border=0></div></td></tr>
	</table>
