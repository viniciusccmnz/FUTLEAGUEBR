<?php
	$qtd = $_GET['unidades'];
	$idprod = $_GET['idprod'];
	$valor = $_GET['valor'];

	if(!isset($_SESSION['realizado'])){	
	
	//inserir na tabela pedidos
	$sql = DB::conn()->prepare("INSERT INTO pedidos (id_produto,id_de,qtd,valor) VALUES (?,?,?,?)");
	$sql->execute(array($idprod,$_SESSION['ID'],$qtd,$valor));
	
	$_SESSION['realizado'] = 1;
	//instanciar o pagseguro
	
	$pagseguro = new PagSeguroPaymentRequest();
	
	//tipo de moeda
	$pagseguro->SetCurrency('BRL');
	
	//informar o tipo de frete
	$pagseguro->setShippingType(0);
	
	//informar o codigo de referencia da compra
	$pagseguro->setReference($idprod);
	
	//adicionar ao carrinho
	$pagseguro->addItem($idprod, 'unidades de vips', 1, $valor);
	
	//credenciais
	$credenciais = new PagSeguroAccountCredentials('diguinhobol@hotmail.com
','24C3351632F64FA8A6E3C33073FA3A73');
	$url = $pagseguro->register($credenciais);
	
	unset($_SESSION['realizado']);
	header('Location: $url');
	
	
}

?>