<?php
	require_once ("requiredFiles.php");
	$page = 'local';


	// Se o user tiver o login feito
	if (!empty($_SESSION["idUtilizador"])){
		// Atribui o id utilizador
		$idUtilizador = $_SESSION["idUtilizador"];

		// Liga com a base de dados
		$ligacao = connectDbMySql(); 
		
		// Verrifica a ligacao
		if (!$ligacao)
		return false;

		// Formulario de alteração de dados de conta
		body_alter_conta($ligacao,$idUtilizador,$page);
		}
		
		// Se o utilizador não tiver o login realizado
		else {
			header_template('home');
			$mensagem = "Faça o login para aceder à página";
			$titulo = "Erro ao aceder";
			body_message($titulo, $mensagem);
		}

		footer_template();
		?>

