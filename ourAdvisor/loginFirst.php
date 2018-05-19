<?php
	require_once ("requiredFiles.php");
	$page = 'login';

	// Parametros do formulario
	$email    = $_POST['inputEmail'];
	$password = $_POST['inputPassword'];

	// Liga com a base de dados
	$ligacao = connectDbMySql(); 
	
	if (!$ligacao)
	 return false;

	$consulta = "SELECT NOME, 
						PASSWORD,
						IDTIPOUTILIZADOR,
						IDUTILIZADOR,
						NOME
				 FROM utilizador
				 where EMAIL = '$email'";
	
	$resultado= mysqli_query($ligacao,$consulta);

	// Verifica se o utilizador existe
	if (mysqli_num_rows($resultado) == 0 ){
		header_template($page);
		$titulo   = "Início de Sessão"; 
		$mensagem = "O e-mail que introduziu não existe no ourAdvisor!";
		body_message($titulo, $mensagem);
	}
	else{
		while ($row = mysqli_fetch_row($resultado)) {
			$passwordDB       = $row[1];
			$idTipoUtilizador = $row[2];
			$idUtilizador     = $row[3];
			$nomeUtilizador   = $row[4];
		}
		mysqli_free_result($resultado);

		// Verifica se a password esta correta
		if ($passwordDB == $password ){
			
			$execucao = "A equipa do ourAdvisor da-lhe as boas vindas!";
			
			// Criar as variaveis de sessao
			$_SESSION["nome"]           = $nomeUtilizador;
			$_SESSION["email"]          = $email;
			$_SESSION["tipoutilizador"] = $idTipoUtilizador;
			$_SESSION["idUtilizador"]   = $idUtilizador;

			// Se o utilizador for do tipo empresa
			if ($idTipoUtilizador == 2) {
				header_template_with_login_empresa('local');

				body_index_emp($idUtilizador,$ligacao);
			}
			// Se o utilizador for do tipo cliente
			else{
				$page = 'home';
				header_template_with_login($page);
				banner_template();
				body_index($ligacao);

			} 
		}
		else {
			header_template($page);
			$titulo   = "Início de Sessão"; 
			$mensagem = "A sua password está incorreta!";
			body_message($titulo, $mensagem);
		}

	}

	footer_template();
	mysqli_close($ligacao);

?>

