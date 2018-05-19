<?php
    require_once ("requiredFiles.php");
	$operacao = $_GET['id'];

	if (isset($_SESSION["idUtilizador"])){
		$idUtilizador = $_SESSION["idUtilizador"];
	}
	

	// Liga com a base de dados
	$ligacao = connectDbMySql(); 

	if (!$ligacao)
	return false;

	// Criacao de Conta de Utilizador
	if ($operacao == 1){
		$page = 'login';
		header_template($page);
		
		// Parametros do formulario
		$inputNome       = $_POST['inputNome'];
		$inputEmail      = $_POST['inputEmail'];
		$inputPassowrd   = $_POST['inputPassword'];
		$inputMorada     = $_POST['inputMorada'];
		$inputLocalidade = $_POST['inputLocalidade'];
		$inputCodPostal = $_POST['inputCodPostal'];
		$inputTelemovel  = $_POST['inputTelemovel'];
		$inputTipo       = $_POST['inputTipo'];
	
		// Insert na tabela
		$sqlInsert = "INSERT INTO utilizador (nome, email, morada, codPostal, telemovel, idLocalidade, idTipoUtilizador, password)
						VALUES ('$inputNome', 
								'$inputEmail', 
								'$inputMorada', 
								'$inputCodPostal', 
								'$inputTelemovel',
								'$inputLocalidade',
								'$inputTipo',
								'$inputPassowrd')";
			
		// Executa intruçao
		if ($resultado = mysqli_query($ligacao,$sqlInsert)){
			$mensagem = "Aceda à página de login para entrar na sua conta!";
			}	 
		else{
			$mensagem = "Erro ao criar conta de utilizador, tente novamente!";
			echo (mysqli_error($ligacao));
		} 	 

		$titulo = "Criação de conta";
		body_message($titulo, $mensagem);
		footer_template();

	}
	
	
	
	// Altera dados de conta
	elseif($operacao == 2){
		$page = 'local';
		// Parametros do formulario
		$inputNome       = $_POST['inputNome'];
		$inputPassowrd   = $_POST['inputPassword'];
		$inputMorada     = $_POST['inputMorada'];
		$inputLocalidade = $_POST['inputLocalidade'];
		$inputCodPostal = $_POST['inputCodPostal'];
		$inputTelemovel  = $_POST['inputTelemovel'];

		// update na tabela
		$sqlUpdate = "UPDATE utilizador 
					  SET nome = '$inputNome', 
					  	  morada = '$inputMorada', 
						  codPostal = '$inputCodPostal', 
						  telemovel = '$inputTelemovel', 
						  idLocalidade = '$inputLocalidade', 
						  password = '$inputPassowrd'
					  WHERE idutilizador = '$idUtilizador'";
	
		// Executa intruçao
		if ($resultado = mysqli_query($ligacao,$sqlUpdate)){
			$mensagem = "Os dados da sua conta foram alterados com sucesso!";
			}	 
		else{
			$mensagem = "Erro ao alterar dados da conta, tente novamente!";
			echo (mysqli_error($ligacao));
		} 
		
		// Se o utilizador for empresa
		if ($_SESSION["tipoutilizador"] == 2) {
			header_template_with_login_empresa($page);
			$back = "empSpots.php";
		}
		// Se o utilizador for do tipo cliente
		else{
			header_template_with_login($page);
			$back = "index.php";
		} 
		
		$titulo = "Dados da Conta";
		body_message($titulo, $mensagem, $back);
		footer_template();
		
	}


	// Altera dados do Local
	elseif($operacao == 3){
		$page = 'local';
		// Parametros do formulario
		$inputNome       = $_POST['inputNome'];
		$inputMorada     = $_POST['inputMorada'];
		$inputLocalidade = $_POST['inputLocalidade'];
		$inputCodPostal = $_POST['inputCodPostal'];
		$inputPreco  = $_POST['inputPreco'];

		$spotId = $_GET['spotId'];

		// update na tabela
		$sqlUpdate = "UPDATE estabelecimento 
					  SET nome = '$inputNome', 
					  	  morada = '$inputMorada', 
						  codPostal = '$inputCodPostal', 
						  preco = '$inputPreco', 
						  idLocalidade = '$inputLocalidade'
					  WHERE IDESTABELECIMENTO = '$spotId' ";
	
		// Executa intruçao
		if ($resultado = mysqli_query($ligacao,$sqlUpdate)){
			$mensagem = "Os dados do seu local foram alterados com sucesso!";
			}	 
		else{
			$mensagem = "Erro ao alterar dados do seu local, tente novamente!";
			echo (mysqli_error($ligacao));
		} 
		
		// Se o utilizador for empresa
		if ($_SESSION["tipoutilizador"] == 2) {
			header_template_with_login_empresa($page);
			$back = "empSpots.php";
		}
		// Se o utilizador for do tipo cliente
		else{
			header_template_with_login($page);
		} 
		
		$titulo = "Dados da Conta";
		body_message($titulo, $mensagem, $back);
		footer_template();
		
	}

	// Cria do Local
	elseif($operacao == 4){
		$page = 'criar';
		// Parametros do formulario
		$inputNome       = $_POST['inputNome'];
		$inputMorada     = $_POST['inputMorada'];
		$inputLocalidade = $_POST['inputLocalidade'];
		$inputCodPostal  = $_POST['inputCodPostal'];
		$inputPreco      = $_POST['inputPreco'];
		$inputTipo       = $_POST['inputTipo'];

		// Insert na tabela
		$sqlInsert = "INSERT INTO estabelecimento (nome,morada, codPostal, preco, idLocalidade, idTipoEstabelecimento, idUtilizador)
		VALUES ('$inputNome', 
				'$inputMorada', 
				'$inputCodPostal', 
				'$inputPreco', 
				'$inputLocalidade',
				'$inputTipo',
				'$idUtilizador')";
	
		// Executa intruçao
		if ($resultado = mysqli_query($ligacao,$sqlInsert)){
			$mensagem = "O seu novo local foi criado com sucesso!";
			}	 
		else{
			$mensagem = "Erro ao criar o seu novo local, tente novamente!";
			echo (mysqli_error($ligacao));
		} 
		
		// Se o utilizador for empresa
		if ($_SESSION["tipoutilizador"] == 2) {
			header_template_with_login_empresa($page);
			$back = "empSpots.php";
		}
		// Se o utilizador for do tipo cliente
		else{
			header_template_with_login($page);
		} 
		
		$titulo = "Criar Local";
		body_message($titulo, $mensagem, $back);
		footer_template();
		
	}

// Cancela e Confirma reserva
elseif($operacao == 5){
	$page = 'local';

	$reservaId = $_GET['idRes'];
	$instrucao = $_GET['instruction'];

	// update na tabela
	$sqlUpdate = "UPDATE reserva 
				  SET estado = '$instrucao'
				  WHERE idreserva = '$reservaId' ";

	// Executa intruçao
	if ($resultado = mysqli_query($ligacao,$sqlUpdate)){
		$mensagem = "A reserva foi " . $instrucao ."!";
		}	 
	else{
		$mensagem = "Erro ao tentar " . $instrucao ." a reserva, tente novamente!";
		echo (mysqli_error($ligacao));
	} 
	
	// Se o utilizador for empresa
	if ($_SESSION["tipoutilizador"] == 2) {
		header_template_with_login_empresa($page);
		$back = "empSpots.php";
	}
	// Se o utilizador for do tipo cliente
	else{
		header_template_with_login($page);
	} 
	
	$titulo = "Reservas";
	body_message($titulo, $mensagem, $back);
	footer_template();
	
}

	// Cria Classificacao
	elseif($operacao == 6){
		$spotType            = $_GET['spotType'];
		$idEstabelecimento   = $_GET['spotId'];

		if ($spotType == 1){ 
			$page = 'hotel';

		}
		else{
			$page = 'restaurante';
		}
		
		
		// Parametros do formulario
		$inputComentario     = $_POST['inputComentario'];
		$inputClassificacao  = $_POST['inputClassificacao'];

		// Insert na tabela
		$sqlInsert = "INSERT INTO avaliacao (idEstabelecimento, idUtilizador, classificacao, comentario, dataavaliacao)
		VALUES ('$idEstabelecimento', 
				'$idUtilizador', 
				'$inputClassificacao', 
				'$inputComentario',
				 SYSDATE())";
	
		// Executa intruçao
		if ($resultado = mysqli_query($ligacao,$sqlInsert)){
			$mensagem = "A sua avaliação foi atribuída com sucesso!";
			}	 
		else{
			$mensagem = "Erro ao atribuir a avaliação, tente novamente!";
			echo (mysqli_error($ligacao));
		} 
		
		// Se o utilizador for empresa
		if ($_SESSION["tipoutilizador"] == 2) {
			header_template_with_login_empresa($page);
			$back = "empSpots.php";
		}
		// Se o utilizador for do tipo cliente
		else{
			header_template_with_login($page);
			$back = "estabelecimento.php?spotType=" . $spotType;
		} 
		
		$titulo = "Criar Local";
		body_message($titulo, $mensagem, $back);
		footer_template();
		
	}

// Cria Reserva
elseif($operacao == 7){
			$spotType            = $_GET['spotType'];
			$idEstabelecimento   = $_GET['spotId'];
			$preco               = $_GET['preco'];

			$nmrPessoas  = $_POST['inputNmrPessoas'];		

			// CALCULAR O PRECO 
			$precoTotal =$preco;

			if ($spotType == 1){ 
				$page = 'hotel';

				$dataEntradaIn = $_POST['inputDataEntrada'];
				$dataEntrada   = convertDataOnly($dataEntradaIn);
				
				$dataSaidaIn   = $_POST['inputDataSaida'];
				$dataSaida     = convertDataOnly($dataSaidaIn);

				// Converte para data a string
				$data1 = new DateTime( $dataEntrada );
				$data2 = new DateTime( $dataSaida );

				// realiza intervalo de dias
				$intervalo = $data1->diff( $data2 );
				$dias = $intervalo->d;


				// Preço é o numero de dias a multiplicar pelo preco
				$precoTotal    = $preco * $dias;
	
				$sqlInsert = "INSERT INTO reserva (idEstabelecimento, idUtilizador, dataEntrada, dataSaida, estado,precoTotal,dataReserva,nmrPessoas)
								VALUES ('$idEstabelecimento', 
										'$idUtilizador', 
										'$dataEntrada', 
										'$dataSaida',
										'PENDENTE',
										'$precoTotal',
										 SYSDATE(),
										'$nmrPessoas')";
	
			}
			else{
				$page = 'restaurante';
				
				$dataHoraIn    = $_POST['inputDatahora']; 
				$dataHora      = convertData($dataHoraIn);
				// Preço para duas pessoas
				$precoTotal    = $preco * ($nmrPessoas/2);

				$sqlInsert = "INSERT INTO reserva (idEstabelecimento, idUtilizador, datahora, estado,precoTotal,dataReserva,nmrPessoas)
				VALUES ('$idEstabelecimento', 
						'$idUtilizador', 
						'$dataHora', 
						'PENDENTE',
						'$precoTotal',
						 SYSDATE(),
						'$nmrPessoas')";
				
				echo $sqlInsert;
			}
			
		
			// Executa intruçao
			if ($resultado = mysqli_query($ligacao,$sqlInsert)){
				$mensagem = "A sua reserva foi efetuada com sucesso!";
				}	 
			else{
				$mensagem = "Erro ao efetuar a reserva, tente novamente!";
				echo (mysqli_error($ligacao));
			} 
			
				header_template_with_login($page);
				$back = "estabelecimento.php?spotType=" . $spotType . "&spotId=" . $idEstabelecimento;
	 
			
			$titulo = "Reserva";
			body_message($titulo, $mensagem, $back);
			footer_template();
			
		}




// Fecha a ligacao
mysqli_close($ligacao);

	?>

