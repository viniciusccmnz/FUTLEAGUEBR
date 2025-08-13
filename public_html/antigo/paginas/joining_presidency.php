<?php
if(isset($_SESSION['ID'])){
$id = $_GET['id'];

//pegar dados do usuario
$pegar_dados = DB::conn()->prepare("SELECT * FROM usuarios WHERE ID = ?");
$pegar_dados->execute(array($id));

$dados = $pegar_dados->fetch();
//dados do usuario
$VIP   = $dados['VIP'];
$Cargo = $dados['Cargo'];
$Time  = $dados['Time']; 


//verificar se o usuario é vip
if($VIP >= date('Y-m-d H:i:s')){
if($Cargo == 1){
	//presidente
	$query = DB::conn()->prepare("UPDATE usuarios SET Cargo = 1 WHERE ID = '".$id."'");
	$query->execute();
	
	$query = DB::conn()->prepare("UPDATE times SET Presidente = '".$id."' WHERE ID = '".$Time."'");
	$query->execute();
	
	echo '<script>location.href="index.php?pr=index"</script>';	
	}elseif($Cargo == 2){
		//diretor
	$query = DB::conn()->prepare("UPDATE usuarios SET Cargo = 1 WHERE ID = '".$id."'");
	$query->execute();
	
	$query = DB::conn()->prepare("UPDATE times SET Presidente = '".$id."' WHERE ID = '".$Time."'");
	$query->execute();
	
	echo '<script>location.href="index.php?pr=index"</script>';	
	}elseif($Cargo == 3){
		//capitao
	$query = DB::conn()->prepare("UPDATE usuarios SET Cargo = 1 WHERE ID = '".$id."'");
	$query->execute();
	
	$query = DB::conn()->prepare("UPDATE times SET Presidente = '".$id."' WHERE ID = '".$Time."'");
	$query->execute();
	
	echo '<script>location.href="index.php?pr=index"</script>';	
	}elseif($Cargo == 4){
	//auxiliar
	$query = DB::conn()->prepare("UPDATE usuarios SET Cargo = 1 WHERE ID = '".$id."'");
	$query->execute();
	
	$query = DB::conn()->prepare("UPDATE times SET Presidente = '".$id."' WHERE ID = '".$Time."'");
	$query->execute();
	
	echo '<script>location.href="index.php?pr=index"</script>';		
	}else{
	$query = DB::conn()->prepare("UPDATE usuarios SET Cargo = 1 WHERE ID = '".$id."'");
	$query->execute();
	
	$query = DB::conn()->prepare("UPDATE times SET Presidente = '".$id."' WHERE ID = '".$Time."'");
	$query->execute();
	echo '<script>location.href="index.php?pr=index"</script>';			
	}	

}else{
echo '<script>location.href="index.php?pr=index"</script>';
}
//fim verificação user vip
	
}else{
echo '<script>location.href="index.php?pr=index"</script>';	
}
?>