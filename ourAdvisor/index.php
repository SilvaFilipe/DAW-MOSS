<?php
	
	require_once ("requiredFiles.php");
	$page = 'home';

	// Se o cliente tiver o login feito
	if (isset($_SESSION["idUtilizador"])){
		$idUtilizador = $_SESSION["idUtilizador"];

		header_template_with_login($page);

	}
	// Se nao
	else{
		header_template('home');

	}
	// Liga com a base de dados
	$ligacao = connectDbMySql(); 

	if (!$ligacao)
		return false;
		
	// Banner
	banner_template();

	// Conteudo
	body_index($ligacao);

	// Rodape
	footer_template();

?>

