</table></div></td><td valign='top' align='center'><table cellpadding='0' cellspacing='0' border=0 height=20>
	<tr><td><div style="position:relative;top:0;left:0;width:623;height:57;"><div style="width:623;height:57;background-image:url('img/layout/menu/topH.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:623;top:10;color:#515151;font-family:litoh;font-size:1em;">Divisão de Acesso</div><div style="position:absolute;text-align:center;width:623;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Divisão de Acesso</div></div></div></td></tr>
	<tr><td><div style="position:relative;top:0;left:0;width:623;min-height:300px; height:auto !important;  height:300px;background-image:url('img/layout/menu/midH.png');padding-top:8;">
<div style='position:relative;top:0;left:0;width:607;margin-left:9;'>
<table width='400' border='1' cellpadding='0' cellspacing='0' align='center' class='helvTab'><tr><td align='center' colspan='5'><b>Resultado parcial</b></td></tr>
	<td bgcolor='#E6E6E6'></td><td colspan=2>Time</td><td>Gols</td></tr>
<?php
//pegar todos times da série da
$medalha = 0;

$query = DB::conn()->prepare("SELECT * FROM times WHERE serie = 'da' ORDER BY Gols DESC");
$query->execute();
$num = 1;
while($rs = $query->fetch()){
	$medalha = $medalha + 1;

	if ($medalha == 1) {
		$medalha_1 = $rs['ID'];
	} else if ($medalha == 2) {
		$medalha_2 = $rs['ID'];
	} else if ($medalha == 3) {
		$medalha_3 = $rs['ID'];
	}else if ($medalha == 4) {
		$medalha_4 = $rs['ID'];
	}else if ($medalha == 5) {
		$medalha_5 = $rs['ID'];
	}elseif($medalha == 6){
		$medalha_6 = $rs['ID'];	
	}elseif($medalha == 7){
		$medalha_7 = $rs['ID'];	
	}elseif($medalha == 8){
		$medalha_8 = $rs['ID'];		
	}elseif($medalha == 9){
		$medalha_9 = $rs['ID'];		
	}elseif($medalha == 10){
		$medalha_10 = $rs['ID'];		
	}

?>
   
    <tr onClick="document.location='?pr=time&amp;time=<?php echo utf8_encode($rs['Time']); ?>'"><td align='middle' width='30' bgcolor='<?php if($rs['ID'] == $medalha_1){echo '#00CC00';}elseif($rs['ID'] == $medalha_2){echo '#00CC00';}elseif($rs['ID'] == $medalha_3){echo '#00CC00';}elseif($rs['ID'] == $medalha_4){echo '#00CC00';}elseif($rs['ID'] == $medalha_5){echo '#00CC00';}elseif($rs['ID'] == $medalha_6){echo '#00CC00';}elseif($rs['ID'] == $medalha_7){echo '#00CC00';}elseif($rs['ID'] == $medalha_8){echo '#00CC00';}elseif($rs['ID'] == $medalha_9){echo '#00CC00';}elseif($rs['ID'] == $medalha_10){echo '#00CC00';}else{echo '#E6E6E6';} ?>'><?php echo $num++; ?></td><td width='20' align='right'><img src='img/gr/Times_g/<?php echo $rs['ID']; ?>.png'  width="20" height="20" border=0></td><td><?php echo utf8_encode($rs['Time']); ?></td><td valign='middle'><b><?php echo $rs['Gols']; ?></b></td></tr>
   <?php } ?>   

</table>    
</div></div></td></tr>
<tr><td><div style="position:relative;top:0;width:623;left:0;height:15px;"><img src='img/layout/menu/botH.png' border=0></div></td></tr>
	</table>
