<?php
$id_user = $_SESSION['ID'];
$destrancar = DB::conn()->prepare("SELECT Trancar FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
$destrancar->execute();
$rs = $destrancar->fetch();
$trancar = $rs["Trancar"];
//verificar se o usuario tem permissao
$sql = DB::conn()->prepare("SELECT Cargo, Time FROM usuarios WHERE ID = '$id_user'");
$sql->execute();
$rs = $sql->fetch();
$Cargo = $rs['Cargo'];
$Time = $rs['Time'];

if(isset($_SESSION['Usuario']) && $trancar == 0 && $Cargo == 1 || $Cargo == 2 || $Cargo == 3){
?>
<style type="text/css">
#slots a{
	width:140px;
	height:auto;
	border:1px solid #151515;
	background:#333;
	border-radius:2px;
	cursor:pointer;
	display:block;
	color:#FFF;
	font-family:Tahoma, Geneva, sans-serif;
	border-radius:2px;
	font-size:14px;
	padding-bottom:1px;
}
#slots a:hover{
	background:#595959;
}
</style>
</table></div></td><td valign='top' align='center'><table cellpadding='0' cellspacing='0' border=0 height=20>
	<tr><td><div style="position:relative;top:0;left:0;width:623;height:57;"><div style="width:623;height:57;background-image:url('img/layout/menu/topH.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:623;top:10;color:#515151;font-family:litoh;font-size:1em;">Diretoria</div><div style="position:absolute;text-align:center;width:623;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Diretoria</div></div></div></td></tr>
	<tr><td><div style="position:relative;top:0;left:0;width:623;min-height:300px; height:auto !important;  height:300px;background-image:url('img/layout/menu/midH.png');padding-top:8;">
<div style='position:relative;top:0;left:0;width:607;margin-left:9;'>
<center>
<div id="slots">
    <?php if($Cargo == 4){ ?>
    
    <?php }elseif($Cargo == 3){ ?>
     <a href="index.php?pr=slot_auxiliar" >Slot de Auxiliares</a>
    <?php }elseif($Cargo == 2){ ?>
    <a href="index.php?pr=slot_capitoes" style="margin:2px;">Slot de Capitão</a>
    <a href="index.php?pr=slot_auxiliar" >Slot de Auxiliares</a>
    <?php }elseif($Cargo == 1){ ?>
    <a href="index.php?pr=slot_presidente" style="margin:2px;">Slot de Presidente</a>
    <a href="index.php?pr=slot_diretores" style="margin:2px;">Slot de Diretores</a>
    <a href="index.php?pr=slot_capitoes" style="margin:2px;">Slot de Capitão</a>
    <a href="index.php?pr=slot_auxiliar" >Slot de Auxiliares</a>
    <?php }else{ ?>
    
    <?php } ?>
   
    </div>
       <div style="margin-bottom:20px;"></div>
    <center><span style="font-family:Tahoma, Geneva, sans-serif; font-size:13px;"><strong>Historico</strong></span></center>
    <?php
	$listar_historico = DB::conn()->prepare("SELECT * FROM historico_cargos WHERE Time = '".$Time."' ORDER BY ID DESC LIMIT 5");
	$listar_historico->execute();
	while($listh = $listar_historico->fetch()){
	?>
    <?php
	$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$listh['id_de']."' AND Time = '$Time'");
	$sql->execute();
	$rs = $sql->fetch();
	$usuario_add = $rs['Usuario'];
	?>
        <?php
	$sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = '".$listh['id_para']."' AND Time = '$Time'");
	$sql->execute();
	$rs = $sql->fetch();
	$usuario_para = $rs['Usuario'];
	?>
    <div id="historicoC" style="">
    <div id="fundoH" style="width:500px; height:39px; background:#D2C9D4; border-bottom:1px solid #B4AAB6; border-top:1px solid #B4AAB6;">
    <center>
    <span style="font-family:Tahoma, Geneva, sans-serif; font-size:13px; line-height:20px;"><strong><?php echo utf8_encode($usuario_add); ?></strong> <?php echo utf8_encode($listh['Acao']); ?> o <?php echo utf8_encode($listh['tipo']); ?> <?php echo utf8_encode($usuario_para); ?> <span style="position:absolute; margin-top:19px; font-size:11px; margin-left:-135px;"><?php echo $listh['data']; ?> <?php echo $listh['hora']; ?></span></span>
    
    </center>
    </div>
    <?php } ?>
    </div> 
</center>
</div></div></td></tr>
<tr><td><div style="position:relative;top:0;width:623;left:0;height:15px;"><img src='img/layout/menu/botH.png' border=0></div></td></tr>
</table>
<?php }else{echo '<script>location.href="index.php?pr=index"</script>';} ?>