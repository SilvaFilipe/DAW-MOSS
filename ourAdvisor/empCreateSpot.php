<?php
	require_once ("requiredFiles.php");
	$page = 'criarRestaurante';


	// Se o user tiver o login feito
	if (!empty($_SESSION["idUtilizador"])){
		// Atribui o id utilizador
		$idUtilizador      = $_SESSION["idUtilizador"];

		// Liga com a base de dados
		$ligacao = connectDbMySql(); 
		
		// Verrifica a ligacao
		if (!$ligacao)
		return false;

		// Query de consulta
		$consulta = "SELECT IDTIPOESTABELECIMENTO, 
							TIPO
						FROM tipoestabelecimento";

		// Executa a query
		$resultadoTipo = mysqli_query($ligacao,$consulta);

		// Query de consulta
		$consulta = "SELECT IDLOCALIDADE, 
							LOCALIDADE
						FROM localidade";

		// Executa a query
		$resultadoLocalidade = mysqli_query($ligacao,$consulta);

		// Se o utilizador for do tipo empresa
		if ($_SESSION["tipoutilizador"] == 2) {
			header_template_with_login_empresa($page);
		}
		// Se o utilizador for do tipo cliente
		else{
			header_template_with_login($page);
		} 

		?>
		<!-- white bg -->
		<section class="section-padding-bottom">
			<div class="container">´

				<div class="row">
					<div class="tm-section-header section-margin-top">			
						<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
						<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Criar Local</h2></div>
						<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
					</div>	
			
				</div>

				<div class="row">
					<!-- Login -->
					<form action="formOperation.php?id=4" method="post" class="tm-contact-form">
						<!-- Criar conta -->
						<div >
							<div class="form-group">
									<input type="text" name = "inputNome" id="inputNome" class="form-control"  placeholder="NOME" />
								</div>
							<div class="form-group">
								<input type="text" name = "inputPreco" id="inputPreco" class="form-control"  placeholder="PREÇO"  />
							</div>
							<div class="form-group">
								<input type="text" name = "inputMorada" id="inputMorada" class="form-control"  placeholder="MORADA" />
							</div>
							<div class="form-group">
								<input type="text" name = "inputCodPostal" id="inputCodPostal" class="form-control"  placeholder="CÓDIGO POSTAL" />
							</div>
							<div class="form-group">
									<select class="form-control" name="inputLocalidade" id="inputLocalidade">
										<option value="">LOCALIDADE</option>
										<?php
										while ($row = mysqli_fetch_row($resultadoLocalidade)) {
										?>	
										<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
										<?php
										}
										?>
									</select>
							</div>
							<div class="form-group">
									<select class="form-control" name="inputTipo" id="inputTipo">
										<option value="">TIPO DE LOCAL</option>
										<?php
										while ($row = mysqli_fetch_row($resultadoTipo)) {
										?>	
										<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
										<?php
										}
										?>
									</select>
							</div>

				
							<div class="form-group">
								<button class="tm-submit-btn" type="submit" name="submit">Criar Local</button> 
							</div>            
						</div>


					</form>
				</div>			
			</div>
		</section>
		<?php
		// liberta a variavel 
		mysqli_free_result($resultadoLocalidade);


		// Fecha a ligacao
		mysqli_close($ligacao);
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