</table></div></td><td valign='top' align='center'><table cellpadding='0' cellspacing='0' border=0 height=20>
	<tr><td><div style="position:relative;top:0;left:0;width:623;height:57;"><div style="width:623;height:57;background-image:url('img/layout/menu/topH.png');text-aling:center;"><div class="nosel" style="position:absolute;text-align:center;width:623;top:10;color:#515151;font-family:litoh;font-size:1em;">Erroou</div><div style="position:absolute;text-align:center;width:623;top:9;color:#e8f4e1;font-family:litoh;font-size:1em;">Erroou</div></div></div></td></tr>
	<tr><td><div style="position:relative;top:0;left:0;width:623;min-height:300px; height:auto !important;  height:300px;background-image:url('img/layout/menu/midH.png');padding-top:8;">
<div style='position:relative;top:0;left:0;width:607;margin-left:9;'>
<center>
<?php
if(isset($_SESSION['Usuario'])){

?>
<img src="img/errou.gif" />
<script>
 window.setTimeout(function(){

        // Move to a new location or you can do something else
        window.location.href = "index.php?pr=index";

    }, 7000);

</script>
<?php
}else{
echo "<script>location.href='index.php?pr=index';</script>";	
}
?>
</center>    
</div></div></td></tr>
<tr><td><div style="position:relative;top:0;width:623;left:0;height:15px;"><img src='img/layout/menu/botH.png' border=0></div></td></tr>
	</table>
