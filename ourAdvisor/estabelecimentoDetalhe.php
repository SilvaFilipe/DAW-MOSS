<?php
	require_once ("requiredFiles.php");
	// Variaveis
	$spotId = $_GET['spotId'];
	$tipoLocal = $_GET['spotType'];
	$login = 0;

	// Verifica qual e o tipo de estabelecimento
	if ($tipoLocal == 1){ // hotal
		$page  = 'hotel';
		$title = 'Os Hoteis';
		$defenicao = ' € por Noite';

	}
	else { // restaurante
		$page  = 'restaurante';
		$title = 'Os Restaurantes';
		$defenicao = ' € para 2 Pessoas';
	}

	// Liga com a base de dados
	$ligacao = connectDbMySql(); 

	if (!$ligacao)
		return false;

	// Se o cliente tiver o login feito
	if (isset($_SESSION["idUtilizador"])){
		$idUtilizador = $_SESSION["idUtilizador"];

		// Cabecalho
		header_template_with_login($page);
		$login=1;
		// Detalhe do estabelecimento
		body_estabelecimento_detalhe($spotId,$defenicao, $ligacao,$login,$tipoLocal);
		// Formulario de avaliacao
		body_estabelecimento_avaliacao($spotId,$tipoLocal);
		// Lista de avaliacoes
		body_estabelecimento_testemunhos($spotId,$ligacao);

	}
	// Se nao
	else{
		header_template($page);
		// Detalhe do estabelecimento
		body_estabelecimento_detalhe($spotId,$defenicao, $ligacao,$login,$tipoLocal);
		// Lista de avaliacoes
		body_estabelecimento_testemunhos($spotId,$ligacao);

	}
	footer_template();

?>

