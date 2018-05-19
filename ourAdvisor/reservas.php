<?php
	require_once ("requiredFiles.php");
	$page = 'reserva';

	// Se o cliente tiver o login feito
	if (isset($_SESSION["idUtilizador"])){
		$idUtilizador = $_SESSION["idUtilizador"];

		header_template_with_login($page);

		// Liga com a base de dados
		$ligacao = connectDbMySql(); 

		if (!$ligacao)
			return false;

		// Lista de reservas 
		body_reserva($idUtilizador,$ligacao);
		
	}
	// Se nao
	else{
		header_template('home');
		$mensagem = "Faça o login para aceder à página";
		$titulo = "Erro ao aceder";
		body_message($titulo, $mensagem);
	}
	
	footer_template();

?>

