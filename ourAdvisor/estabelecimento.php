<?php
	require_once ("requiredFiles.php");

	$tipoLocal = $_GET['spotType'];

	if ($tipoLocal == 1){ // hotel
		$page  = 'hotel';
		$title = 'Os Hoteis';
		$defenicao = '€/NOITE';

	}
	else { // restaurante
		$page  = 'restaurante';
		$title = 'Os Restaurantes';
		$defenicao = '€/2P.';
	}


	// Se o cliente tiver o login feito
	if (isset($_SESSION["idUtilizador"])){
		$idUtilizador = $_SESSION["idUtilizador"];

		header_template_with_login($page);

	}
	// Se nao
	else{
		header_template($page);

	}

	// Liga com a base de dados
	$ligacao = connectDbMySql(); 

	if (!$ligacao)
		return false;
	
	// Conteudo do estabelecimento
	body_estabelecimento($title, $tipoLocal, $defenicao,$ligacao);
	
	// Rodape
	footer_template();

?>

