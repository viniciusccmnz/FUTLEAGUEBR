<?php
include_once('conn.php');
$serie = $_POST['serie'];
?>
<?php
if($serie == 'a'){
?>
<tr><td id='tableShields'><div style="position:relative;top:10;" align="center"><table cellpadding="0" cellspacing="0" border=0 height="50" class="tableShields">
    
    <tr>
    <?php
	$listar_times_serie_A = DB::conn()->prepare("SELECT * FROM times WHERE Serie = 'a' LIMIT 16");
	$listar_times_serie_A->execute();
	
	if($listar_times_serie_A->rowCount() == 0){
	echo 'Nenhum time da Série A foi encontrado !';	
	}else{
		while($listar_timer_A = $listar_times_serie_A->fetch()){
	?>
    <td width=65 align="center" valing="bottom"><a href="index.php?pr=time&time=<?php echo utf8_encode($listar_timer_A['Time']); ?>"><img src="img/gr/Times_g/<?php echo $listar_timer_A['ID']; ?>.png" class="tumb" border=0 width=36 height=39></a></td>
    <?php }} ?>
   </tr>
<?php }elseif($serie == 'b'){ ?>
<tr><td id='tableShields'><div style="position:relative;top:10;" align="center"><table cellpadding="0" cellspacing="0" border=0 height="50" class="tableShields">
    
    <tr>
    <?php
	$listar_times_serie_B = DB::conn()->prepare("SELECT * FROM times WHERE Serie = 'b' LIMIT 16");
	$listar_times_serie_B->execute();
	
	if($listar_times_serie_B->rowCount() == 0){
	echo 'Nenhum time da Série B foi encontrado !';	
	}else{
		while($listar_timer_B = $listar_times_serie_B->fetch()){
	?>
    <td width=65 align="center" valing="bottom"><a href="index.php?pr=time&time=<?php echo utf8_encode($listar_timer_B['Time']); ?>"><img src="img/gr/Times_g/<?php echo $listar_timer_B['ID']; ?>.png" class="tumb" border=0 width=36 height=39></a></td>
    <?php }} ?>
   </tr>
<?php }else{ ?>
<tr><td id='tableShields'><div style="position:relative;top:10;" align="center"><table cellpadding="0" cellspacing="0" border=0 height="50" class="tableShields">
    
    <tr>
    <?php
	$listar_times_serie_C = DB::conn()->prepare("SELECT * FROM times WHERE Serie = 'c' LIMIT 16");
	$listar_times_serie_C->execute();
	
	if($listar_times_serie_C->rowCount() == 0){
	echo 'Nenhum time da Série C foi encontrado !';	
	}else{
		while($listar_timer_C = $listar_times_serie_C->fetch()){
	?>
    <td width=65 align="center" valing="bottom"><a href="index.php?pr=time&time=<?php echo utf8_encode($listar_timer_C['Time']); ?>"><img src="img/gr/Times_g/<?php echo $listar_timer_C['ID']; ?>.png" class="tumb" border=0 width=36 height=39></a></td>
    <?php }} ?>
   </tr>
<?php } ?>
