<?php
    require_once ("requiredFiles.php");

    header_template('login');

	// Liga com a base de dados
	$ligacao = connectDbMySql(); 
	
	if (!$ligacao)
	 return false;

	$consulta = "SELECT IDLOCALIDADE, 
						LOCALIDADE
				 FROM localidade";
	
	$resultado= mysqli_query($ligacao,$consulta);

?>		
	<!-- white bg -->
	<section class="section-padding-bottom">
		<div class="container">
			<div class="row">
				
				<div class="tm-section-header section-margin-top">			
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Utilizador</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row">
				<!-- Login -->
				<form action="loginFirst.php" method="post" class="tm-contact-form">
				<div class="col-lg-6 col-md-6 tm-contact-form-input">
						<h2>Iniciar Sessão</h2>
						<br>
						<div class="form-group">
							<input type="text" name = "inputEmail" id="inputEmail" class="form-control" placeholder="EMAIL" />
						</div>
						<div class="form-group">
							<input type="password" name = "inputPassword" id="inputPassword" class="form-control" placeholder="PASSWORD" />
						</div>
						<div class="form-group">
							<button class="tm-submit-btn" type="submit" name="submit">Iniciar Sessão</button> 
						</div>            
					</div>
				</form>
				<form action="formOperation.php?id=1" method="post" class="tm-contact-form">
					
					<!-- Criar conta -->
					<div class="col-lg-6 col-md-6 tm-contact-form-input">
						<h2>Criar Conta</h2>
						<br>
						<div class="form-group">
								<input type="text" name = "inputNome" id="inputNome" class="form-control" placeholder="NOME" />
							</div>
						<div class="form-group">
							<input type="text" name = "inputEmail" id="inputEmail" class="form-control" placeholder="EMAIL" />
						</div>
						<div class="form-group">
							<input type="text" name = "inputPassword" id="inputPassword" class="form-control" placeholder="PASSWORD" />
						</div>
						<div class="form-group">
							<input type="text" name = "inputMorada" id="inputMorada" class="form-control" placeholder="MORADA" />
						</div>
						<div class="form-group">
								<select class="form-control" name="inputLocalidade" id="inputLocalidade">
									<option value=""> LOCALIDADE</option>
									<?php
									while ($row = mysqli_fetch_row($resultado)) {
									?>	
									<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
									<?php
									}
									?>
								</select>
						</div>
						<div class="form-group">
							<input type="text" name = "inputCodPostal" id="inputCodPostal" class="form-control" placeholder="CÓDIGO POSTAL" />
						</div>
						<div class="form-group">
								<input type="text" name = "inputTelemovel" id="inputTelemovel" class="form-control" placeholder="TELEMOVEL" />
						</div>	
			
						<div class="form-group">
								<select class="form-control" name="inputTipo" id="inputTipo">
									<option value="">VOCE É?</option>
									<option value="1">Cliente</option>
									<option value="2">Empresa</option>
								</select>
						</div>
						<div class="form-group">
							<button class="tm-submit-btn" type="submit" name="submit">Criar Conta</button> 
						</div>            
					</div>


				</form>
			</div>			
		</div>
	</section>
<?php
    footer_template();

?>

