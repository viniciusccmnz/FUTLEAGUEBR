<?php
$destrancar = DB::conn()->prepare("SELECT Trancar FROM usuarios WHERE ID = '".$_SESSION['ID']."'");
$destrancar->execute();
$rs = $destrancar->fetch();
$trancar = $rs["Trancar"];

if(isset($_SESSION['Usuario']) && $trancar == 0){
?>
</table></div></td><td valign='top' align='center'><table cellpadding='0' cellspacing='0' border=0 height=20>
	<tr><td><div style="position:relative;top:0;left:0;width:623;height:57;"><div style="width:623;height:57;background-image:url('img/layout/menu/topH.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:623;top:10;color:#515151;font-family:litoh;font-size:1em;">Habilidades</div><div style="position:absolute;text-align:center;width:623;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Habilidades</div></div></div></td></tr>
	<tr><td><div style="position:relative;top:0;left:0;width:623;min-height:300px; height:auto !important;  height:300px;background-image:url('img/layout/menu/midH.png');padding-top:8;">
<script type="text/javascript">
function hab_p(){
	var pontos = $('.pontos').attr('data-id');
	
	if(pontos == 0){
		$('.nvis').show();
		$('.vis').hide();
	}else{
		$.ajax({
		method: 'POST',
		url:'paginas/add_h.php',
		dataType:'json',
		data:{p:'p'},
		success: function(retorno){
			if(retorno.status == 'ok'){
			if(retorno.pontos == 0){
				$('.nvis').show();
				$('.vis').hide();	
			}
			$('.pontos').html('Pontos:' + retorno.pontos);	
			var div = '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';
			$('#fund-p').prepend(div);
		
				}
			}	
		})	
	}
}

function hab_f(){
	var pontos = $('.pontos').attr('data-id');
	
	if(pontos == 0){
		$('.nvis').show();
		$('.vis').hide();
	}else{
		$.ajax({
		method: 'POST',
		url:'paginas/add_h.php',
		dataType:'json',
		data:{p:'f'},
		success: function(retorno){
			if(retorno.status == 'ok'){
			if(retorno.pontos == 0){
				$('.nvis').show();
				$('.vis').hide();	
			}
			$('.pontos').html('Pontos:' + retorno.pontos);	
			var div = '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';
			$('#fund-f').prepend(div);
		
				}
			}	
		})	
	}
}

function hab_t(){
	var pontos = $('.pontos').attr('data-id');
	
	if(pontos == 0){
		$('.nvis').show();
		$('.vis').hide();
	}else{
		$.ajax({
		method: 'POST',
		url:'paginas/add_h.php',
		dataType:'json',
		data:{p:'t'},
		success: function(retorno){
			if(retorno.status == 'ok'){
			if(retorno.pontos == 0){
				$('.nvis').show();
				$('.vis').hide();	
			}
			$('.pontos').html('Pontos:' + retorno.pontos);	
			var div = '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';
			$('#fund-t').prepend(div);
		
				}
			}	
		})	
	}
}
</script>
<style type="text/css">
.pontos{
	position:absolute;
	margin-left:45%;
	top:5px;
	font-family:Liberation;
	font-size:14px;
	white-space: normal;
	color:#333;
	letter-spacing:1px;
}
.penalti{
	position:absolute;
	top:40;
	left:15;
	font-family:Liberation;
	font-size:13px;
	white-space: normal;
	color:#333;
	letter-spacing:1px;
}
.falta{
	position:absolute;
	font-family:Liberation;
	font-size:13px;
	white-space: normal;
	color:#333;
	letter-spacing:1px;
	top:40;
	left:215;
}
.trilha{
	position:absolute;
	top:40;
	left:400;
	font-family:Liberation;
	font-size:13px;
	white-space: normal;
	color:#333;
	letter-spacing:1px;
}

#fund-p{
	position:absolute;
	top:40;
	left:70;
}

#fund-f{
	position:absolute;
	top:40;
	left:255;
}

#fund-t{
	position:absolute;
	top:40;
	left:445;
}
</style>
<div style='position:relative;top:0;left:0;width:607;margin-left:9;'>
  <?php
  $sql = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = ?");
  $sql->execute(array($_SESSION['ID']));
  $rs = $sql->fetch();
  $pontos = $rs['Pontos'];
  $hab_p = $rs['hab_penalti'];
  $hab_f = $rs['hab_falta'];
  $hab_t = $rs['hab_trilha'];
  ?>
<span class="pontos" data-id="<?php echo $pontos; ?>">Pontos:<?php echo $pontos; ?></span>
<span class="penalti">Penalti</span>
<span class="falta">Falta</span>
<span class="trilha">Trilha</span>

<div id="fund-p" style="background-image:url(img/f-h.png); width:102px; height:15px;">
<?php
  if($hab_p == 1){ 
  echo '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>'; 
  }elseif($hab_p == 2){
	echo ' <div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div> <div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>'; 
  }elseif($hab_p == 3){
	echo ' <div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div> <div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div> <div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';  
  }elseif($hab_p == 4){
	echo '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';   
  }elseif($hab_p == 5){
	echo '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';   
  }elseif($hab_p == 6){  
	echo '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';  
  }elseif($hab_p == 7){  
	echo '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';  
  }elseif($hab_p == 8){  
	echo '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';  
  }elseif($hab_p == 9){  
	echo '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';  
  }elseif($hab_p == 10){  
	echo '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';  
  }else{
  }
?>
</div>
<?php if($pontos == 0){ ?><div id="b-m" class="nvis" style="background-image:url(img/m-n.png);width:13px; height:15px; position:absolute; top:40; left:175;"></div><?php }else{ ?><a href="javascript:hab_p();"><div id="b-m" class="vis" style="background-image:url(img/seta-m.png);width:13px; height:15px; position:absolute; top:40; left:175;"></div></a><?php } ?>

<div id="fund-f" style="background-image:url(img/f-h.png); width:102px; height:15px;">
<?php
  if($hab_f == 1){ 
  echo '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>'; 
  }elseif($hab_f == 2){
	echo ' <div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div> <div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>'; 
  }elseif($hab_f == 3){
	echo ' <div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div> <div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div> <div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';  
  }elseif($hab_f == 4){
	echo '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';   
  }elseif($hab_f == 5){
	echo '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';   
  }elseif($hab_f == 6){  
	echo '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';  
  }elseif($hab_f == 7){  
	echo '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';  
  }elseif($hab_f == 8){  
	echo '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';  
  }elseif($hab_f == 9){  
	echo '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';  
  }elseif($hab_f == 10){  
	echo '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';  
  }else{
  }
  ?>
</div>
<?php if($pontos == 0){ ?><div id="b-m" class="nvis" style="background-image:url(img/m-n.png);width:13px; height:15px; position:absolute; top:40; left:360;"></div><?php }else{ ?><a href="javascript:hab_f();"><div id="b-m" class="vis" style="background-image:url(img/seta-m.png);width:13px; height:15px; position:absolute; top:40; left:360;"></div></a><?php } ?>

<div id="fund-t" style="background-image:url(img/f-h.png); width:102px; height:15px;">
<?php
  if($hab_t == 1){ 
  echo '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>'; 
  }elseif($hab_t == 2){
    echo ' <div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div> <div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>'; 
  }elseif($hab_t == 3){
    echo ' <div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div> <div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div> <div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';  
  }elseif($hab_t == 4){
    echo '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';   
  }elseif($hab_t == 5){
    echo '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';   
  }elseif($hab_t == 6){  
    echo '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';  
  }elseif($hab_t == 7){  
    echo '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';  
  }elseif($hab_t == 8){  
    echo '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';  
  }elseif($hab_t == 9){  
    echo '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';  
  }elseif($hab_t == 10){  
    echo '<div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div><div id="prog-h" style="background-image:url(img/w-p.png);width:10px; height:13px; margin-top:1px; float:left;"></div>';  
  }else{
  }
?>
</div>
<?php if($pontos == 0){ ?><div id="b-m" class="nvis" style="background-image:url(img/m-n.png);width:13px; height:15px; position:absolute; top:40; left:550;"></div><?php }else{ ?><a href="javascript:hab_t();"><div id="b-m" class="vis" style="background-image:url(img/seta-m.png);width:13px; height:15px; position:absolute; top:40; left:550;"></div></a><?php } ?>
</div></div></td></tr>
<tr><td><div style="position:relative;top:0;width:623;left:0;height:15px;"><img src='img/layout/menu/botH.png' border=0></div></td></tr>
</table>
<?php }else{echo '<script>location.href="index.php?pr=index"</script>';} ?>