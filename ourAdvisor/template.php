<?php
	// Cabecalho
	function header_template($page){
		$classe = 'class="active"';
		$propriedade1 = '';
		$propriedade2 = '';
		$propriedade3 = '';
		$propriedade4 = '';

		if     ($page=='home'){
			  $propriedade1 = 'class="active"';
		}
		elseif ($page=='restaurante'){
			  $propriedade2 = 'class="active"';
		}
		elseif ($page=='hotel'){
			  $propriedade3 = 'class="active"';
		}
		elseif ($page=='login'){
			  $propriedade4 = 'class="active"';
		}

		?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ourAdvisor</title>

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
		<link href="css/flexslider.css" rel="stylesheet">
		<link href="css/templatemo-style.css" rel="stylesheet">

		
		</head>
		<body class="tm-gray-bg">
			<!-- Header -->
			<div class="tm-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
							<a href="#" class="tm-site-name">ourAdvisor</a>	
						</div>
						<div class="col-lg-6 col-md-8 col-sm-9">
							<div class="mobile-menu-icon">
							<i class="fa fa-bars"></i>
							</div>
							<nav class="tm-nav">
								<ul>
									<li><a href="index.php"           <?php echo $propriedade1; ?>>Início</a></li>
									<li><a href="estabelecimento.php?spotType=2"    <?php echo $propriedade2; ?>>restaurantes</a></li>
									<li><a href="estabelecimento.php?spotType=1"          <?php echo $propriedade3; ?>>hoteis</a></li>
									<li><a href="login.php"           <?php echo $propriedade4; ?>>Login</a></li>
								</ul>
							</nav>		
						</div>				
					</div>
				</div>	  	
			</div>

		<?php
	}

	function header_template_with_login($page){
		$classe = 'class="active"';
		$propriedade1 = '';
		$propriedade2 = '';
		$propriedade3 = '';
		$propriedade4 = '';

		if     ($page=='home'){
			  $propriedade1 = 'class="active"';
		}
		elseif ($page=='restaurante'){
			  $propriedade2 = 'class="active"';
		}
		elseif ($page=='hotel'){
			  $propriedade3 = 'class="active"';
		}
		elseif ($page=='reserva'){
			  $propriedade4 = 'class="active"';
		}

		?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ourAdvisor</title>

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
		<link href="css/flexslider.css" rel="stylesheet">
		<link href="css/templatemo-style.css" rel="stylesheet">

		
		</head>
		<body class="tm-gray-bg">
			<!-- Header -->
			<div class="tm-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
							<a href="index.php" class="tm-site-name">ourAdvisor</a>	
						</div>
						<div class="col-lg-6 col-md-8 col-sm-9">
							<div class="mobile-menu-icon">
							<i class="fa fa-bars"></i>
							</div>
							<nav class="tm-nav">
								<ul>
									<li><a href="index.php"           <?php echo $propriedade1; ?>>Início</a></li>
									<li><a href="estabelecimento.php?spotType=2"    <?php echo $propriedade2; ?>>restaurantes</a></li>
									<li><a href="estabelecimento.php?spotType=1"          <?php echo $propriedade3; ?>>hoteis</a></li>
									<li><a href="reservas.php"           <?php echo $propriedade4; ?>>Reservas</a></li>
								</ul>
							</nav>		
						</div>				
					</div>
				</div>	  	
			</div>

		<?php
	}

	function header_template_with_login_empresa($page){
		$classe = 'class="active"';
		$propriedade1 = '';
		$propriedade2 = '';


		if     ($page=='local'){
			  $propriedade1 = 'class="active"';
		}
		elseif ($page=='criarRestaurante'){
			$propriedade2 = 'class="active"';
		}

		?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ourAdvisor</title>

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
		<link href="css/flexslider.css" rel="stylesheet">
		<link href="css/templatemo-style.css" rel="stylesheet">

		
		</head>
		<body class="tm-gray-bg">
			<!-- Header -->
			<div class="tm-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
							<a href="empSpots.php" class="tm-site-name">ourAdvisor</a>	
						</div>
						<div class="col-lg-6 col-md-8 col-sm-9">
							<div class="mobile-menu-icon">
							<i class="fa fa-bars"></i>
							</div>
							<nav class="tm-nav">
								<ul>
									<li><a href="empSpots.php" <?php echo $propriedade1; ?>>Os meus locais</a></li>
									<li><a href="empCreateSpot.php" <?php echo $propriedade2; ?>>Criar Local</a></li>
								</ul>
							</nav>		
						</div>				
					</div>
				</div>	  	
			</div>

		<?php
	}
	// Banner
	function banner_template(){
		?>
		<!-- Banner -->
		<section class="tm-banner">
			<!-- Flexslider -->
			<div class="flexslider flexslider-banner">
			  <ul class="slides">
				<li>
					<div class="tm-banner-inner">
							<h1 class="tm-banner-title">Hoteis <span class="tm-yellow-text">e</span> restaurantes</h1>
							<p class="tm-banner-subtitle">com as melhores vistas</p>
					</div>
				  <img src="img/banner-2.jpg" alt="Image" />
					</li>
				<li>
					<div class="tm-banner-inner">
						<h1 class="tm-banner-title">Encontre <span class="tm-yellow-text">o melhor</span> Restaurante</h1>
						<p class="tm-banner-subtitle">Com os melhores sabores</p>
						<a href="estabelecimento.php?spotType=2" class="tm-banner-link">Encontre o seu restaurante</a>	
					</div>
					<img src="img/banner-1.jpg" alt="Image" />	
				</li>
				<li>
					<div class="tm-banner-inner">
							<h1 class="tm-banner-title">Encontre <span class="tm-yellow-text">o melhor</span> Hotel</h1>
							<p class="tm-banner-subtitle">Para as suas Férias de sonho</p>
						<a href="estabelecimento.php?spotType=1" class="tm-banner-link">Encontre o seu Hotel</a>	
					</div>
				  <img src="img/banner-3.jpg" alt="Image" />r
				</li>
			  </ul>
			</div>	
		</section>
		<?php
	}
	// Rodape
	function footer_template(){
		?>
			<div class="section-margin-top">
					<div class="row">
						<div class="col-lg-12">
							<p class="home-description">
									Encontre os melhores sitios para visitar com a nossa ajuda!
						</div>
					</div>			
			</section>		
			
			<footer class="tm-black-bg">
				<div class="container">
					<div class="row">
						<?php
						if(isset($_SESSION["email"])){ // verifica se a vari�vel est� inicializada
						?>
						<p class="tm-copyright-text">Sessão inciada por: <?php echo $_SESSION["email"]; ?> 
							<a href="alterAccount.php">( Editar Dados de Conta )</a> 
							<a href="logout.php">( Terminar Sessão )</a>
						</p>
						<?php
						}
						?>

						<p class="tm-copyright-text">Copyright &copy; 2018 ourAdvisor </p>
					</div>
				</div>		
			</footer>
			<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
			<script type="text/javascript" src="js/moment.js"></script>							<!-- moment.js -->
			<script type="text/javascript" src="js/bootstrap.min.js"></script>					<!-- bootstrap js -->
			<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>	<!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
			<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
		<!--
			<script src="js/froogaloop.js"></script>
			<script src="js/jquery.fitvid.js"></script>
		-->
			<script type="text/javascript" src="js/templatemo-script.js"></script>      		<!-- Templatemo Script -->
			<script>
				// HTML document is loaded. DOM is ready.
				$(function() {

					$('#hotelCarTabs a').click(function (e) {
					e.preventDefault()
					$(this).tab('show')
					})

					$('.date').datetimepicker({
						format: 'MM/DD/YYYY'
					});
					$('.date-time').datetimepicker();

					// https://css-tricks.com/snippets/jquery/smooth-scrolling/
					$('a[href*=#]:not([href=#])').click(function() {
						if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
						var target = $(this.hash);
						target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
						if (target.length) {
							$('html,body').animate({
							scrollTop: target.offset().top
							}, 1000);
							return false;
						}
						}
					});
				});
				
				// Load Flexslider when everything is loaded.
				$(window).load(function() {	  		
					// Vimeo API nonsense

		//	For images only
					$('.flexslider').flexslider({
						controlNav: false
					});


				});
			</script>
		</body>
		</html>
		<?php
	}
	function body_message($titulo, $mensagem, $back=NULL){
	?>
	<!-- white bg -->
	<section class="section-padding-bottom">
			<div class="container">
				<div class="row">
					
					<div class="tm-section-header section-margin-top">			
						<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
						<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title"><?php echo $titulo; ?></h2></div>
						<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
					</div>				
				</div>
				<div class="row">
					<!-- Login -->
					<p align="center"><?php echo $mensagem; ?></p>
					<br>
					<?php
					if (!empty($back)){
						?>
					<p align="center"><a href="<?php echo $back; ?>" class="tm-banner-link">Voltar</a></p>
						<?php
					}
						?>
					</form>
				</div>			
			</div>
	</section>
	<?php
	}

	function body_index($ligacao){
	
	$consultaHotel = "SELECT loc.IDLOCALIDADE, 
							 loc.LOCALIDADE
						FROM localidade loc
						INNER JOIN estabelecimento est
							ON (loc.idlocalidade = est.idLocalidade)
						WHERE est.idTipoEstabelecimento = 1";
	
	$resultadoHotel = mysqli_query($ligacao,$consultaHotel);






	$consultaTop = "SELECT est.idEstabelecimento,
						est.nome,
						est.preco,
						est.idtipoestabelecimento
                        FROM estabelecimento est
						LEFT JOIN (
							SELECT idEstabelecimento, 
								round( sum(classificacao)/count(*),2) as classificacao
							FROM avaliacao
							group by idEstabelecimento
						) class    
						ON (est.idEstabelecimento = class.idEstabelecimento)
					ORDER BY class.classificacao DESC
					LIMIT 2";

     $resultadoTop = mysqli_query($ligacao,$consultaTop);
		?>
	<!-- gray bg -->	
	<section class="container tm-home-section-1" id="more">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6">
				<!-- Nav tabs -->
				<div class="tm-home-box-1">
					<ul class="nav nav-tabs tm-white-bg" role="tablist" id="hotelCarTabs">
					    <li role="presentation" class="active">
					    	<a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">Hotel</a>
					    </li>
					    <li role="presentation">
					    	<a href="#car" aria-controls="car" role="tab" data-toggle="tab">Restaurante</a>
					    </li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
					    <div role="tabpanel" class="tab-pane fade in active tm-white-bg" id="hotel">
					    	<div class="tm-search-box effect2">
								<form action="estabelecimento.php?spotType=1" method="post" class="hotel-search-form">
									<div class="tm-form-inner">
										<div class="form-group">
											 <select class="form-control" name="inputLocalidade" id="inputLocalidade">
												<option value=""> Localidade </option>
												<?php
												while ($row = mysqli_fetch_row($resultadoHotel)) {
												?>	
												<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
												<?php
												}
												?>
											</select>
							          	</div>
							          	<div class="form-group">
							                <div class='input-group date' id='datetimepicker1'>
							                    <input type='text' class="form-control" placeholder="Data de Entrada" />
							                    <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
							                </div>
							            </div>
							          	<div class="form-group">
							                <div class='input-group date' id='datetimepicker2'>
							                    <input type='text' class="form-control" placeholder="Data de Saída" />
							                    <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
							                </div>
							            </div>
							            <div class="form-group margin-bottom-0">
							                <select class="form-control">
							            	 	<option value="">-- Nº de Pessoas -- </option>
							            	 	<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5p">5+</option>
											</select> 
							            </div>
									</div>							
						            <div class="form-group tm-yellow-gradient-bg text-center">
						            	<button type="submit" name="submit" class="tm-yellow-btn">Procurar</button>
						            </div>  
								</form>
							</div>
					    </div>

						<?php
							$consultaRestau = "SELECT loc.IDLOCALIDADE, 
													 loc.LOCALIDADE
												FROM localidade loc
												INNER JOIN estabelecimento est
													ON (loc.idlocalidade = est.idLocalidade)
												WHERE est.idTipoEstabelecimento = 2";
							
							$resultadoRestau = mysqli_query($ligacao,$consultaRestau);
						?>

					    <div role="tabpanel" class="tab-pane fade tm-white-bg" id="car">
							<div class="tm-search-box effect2">
								<form action="estabelecimento.php?spotType=2" method="post" class="hotel-search-form">
									<div class="tm-form-inner">
										<div class="form-group">
										<select class="form-control" name="inputLocalidade" id="inputLocalidade">
											<option value=""> Localidade</option>
											<?php
											while ($row = mysqli_fetch_row($resultadoRestau)) {
											?>	
											<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
											<?php
											}
											?>
										</select>
							          	</div>
							          	<div class="form-group">
							                <div class='input-group date-time' id='datetimepicker3'>
							                    <input type='text' class="form-control" name="inputDataHora" placeholder="Data e Hora" />
							                    <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
							                </div>
							            </div>
										<div class="form-group margin-bottom-0">
							                <select class="form-control">
							            	 	<option value="">-- Nº de Pessoas -- </option>
							            	 	<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5+">5+</option>
											</select> 
							            </div>					           
									</div>							
						            <div class="form-group tm-yellow-gradient-bg text-center">
						            	<button type="submit" name="submit" class="tm-yellow-btn">Procurar</button>
						            </div>  
								</form>
							</div>
					    </div>				    
					</div>
				</div>								
			</div>


			<?php
			while ($row = mysqli_fetch_row($resultadoTop)) {
			?>								
			<div class="col-lg-4 col-md-4 col-sm-6">
				
				<div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-center">
					<img src="img/index-01.jpg" alt="image" class="img-responsive">
					<a href="estabelecimentoDetalhe.php?spotId=<?php echo $row[0]; ?>&spotType=<?php echo $row[3]; ?>">
						<div class="tm-green-gradient-bg tm-city-price-container">
							<span><?php echo $row[1];?></span>
							<span><?php echo $row[2];?>€</span>
						</div>	
					</a>			
				</div>	

			</div>
			<?php
			}
			?>
			

		</div>



<?php
	}

function body_index_emp($idUtilizador,$ligacao){

		// Obtem detalhes para apresentar a lista de locais
		$consulta = "SELECT IDESTABELECIMENTO,
							NOME,
							MORADA,
							CODPOSTAL,
							LOC.LOCALIDADE
						FROM estabelecimento est
						INNER JOIN localidade loc
							ON(EST.IDLOCALIDADE = LOC.IDLOCALIDADE
								AND IDUTILIZADOR = '$idUtilizador' )";

		$resultado= mysqli_query($ligacao,$consulta);

		// Imprime os meus locais em lista
		?>
		<section class="tm-white-bg section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Os meus locais</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<?php
			if (mysqli_num_rows($resultado) > 0){
			?>
			<div class="row">
				<!-- Testimonial -->
				<div class="col-lg-12">
					<div class="tm-what-we-do-right">
					<?php
					while ($row = mysqli_fetch_row($resultado)) {
					?>		
						<div class="tm-about-box-2 margin-bottom-30">
							<img src="img/about-2.jpg" alt="image" class="tm-about-box-2-img">
							<div class="tm-about-box-2-text">
								<h3 class="tm-about-box-2-title"><?php echo $row[1]; ?></h3>
								<p class="tm-about-box-2-description gray-text">Morada: <?php echo $row[2]; ?></p>
								<p class="tm-about-box-2-description gray-text">Código Postal: <?php echo $row[3]; ?></p>
								<p class="tm-about-box-2-description gray-text">Localidade: <?php echo $row[4]; ?></p>
								<p align="right"><a href="empSpotsReserva.php?id=<?php echo $row[0]; ?>" class="tm-banner-link">Reservas</a>&nbsp&nbsp
												 <a href="empAlterSpot.php?id=<?php echo $row[0]; ?>" class="tm-banner-link">Editar Local</a>
								</p>

							</div>		                
						</div>

					<?php
					}

				mysqli_free_result($resultado);

				$consulta = "SELECT NOME,
									COALESCE(AV.NAVALIACOES,0),
									COALESCE(ROUND(AV.AVALIACAOMEDIA,2),0) AS AVALIACAOMEDIA,
									COALESCE(RS.NRESERVAS,0)
								FROM estabelecimento EST
								LEFT JOIN(
									SELECT count(*) as NAVALIACOES,
										sum(classificacao)/count(*) AVALIACAOMEDIA,
										IDESTABELECIMENTO
										FROM avaliacao 
									) AV
									ON (EST.IDESTABELECIMENTO = AV.IDESTABELECIMENTO )
								LEFT JOIN(
									SELECT COUNT(*) NRESERVAS,
										IDESTABELECIMENTO
										FROM  reserva 
										WHERE ESTADO = 'PENDENTE'
									) RS
									ON (EST.IDESTABELECIMENTO = RS.IDESTABELECIMENTO )
								WHERE EST.IDUTILIZADOR = '$idUtilizador'
								";

				$resultado= mysqli_query($ligacao,$consulta);
					?>

					</div>
					<div class="tm-testimonials-box">
						<h3 class="tm-testimonials-title">Detalhes</h3>
						<div class="tm-testimonials-content">
							<div class="tm-testimonial">
							<?php
							while ($row = mysqli_fetch_row($resultado)) {
							?>
								<strong class="text-uppercase"><?php echo $row[0]; ?></strong>	
								<br><br>
								<p>Reservas Pendentes: <?php echo $row[3]; ?></p>
								<br>
								<p>Avaliação Média: <?php echo $row[2]; ?></p>
								<br>
								<p>Nº de Avaliações: <?php echo $row[1]; ?></p>
								<br><br>
							<?php
							}
							?>
							</div>             	
						</div>
					</div>	
				</div>	
			<?php
			}
			else{
			?>
			<p align="center">Ainda não criou nenhum local! Crie o seu primeiro local!</p>
			<?php
			}
			?>						
			</div>			
		</div>
	</section>
	<?php
	mysqli_free_result($resultado);
}

	function body_estabelecimento($title, $tipoLocal, $defenicao,$ligacao){
	$segundoFiltro = "";
    // Se a variavel tiver inicializada
	if (isset($_POST["inputLocalidade"])){
		$localidade = $_POST["inputLocalidade"];
		$segundoFiltro = " AND est.idLocalidade = '$localidade'";
	}


	// Obtem detalhes para apresentar a lista
	$consulta = "SELECT est.idEstabelecimento,
						est.nome,
						est.preco,
						est.idLocalidade,
						loc.localidade,
						class.classificacao
						FROM estabelecimento est
						INNER JOIN localidade loc
						ON(est.idLocalidade = loc.idlocalidade)
						LEFT JOIN (
							SELECT idEstabelecimento, 
								round( sum(classificacao)/count(*),2) as classificacao
							FROM avaliacao
							group by idEstabelecimento
						) class    
						ON (est.idEstabelecimento = class.idEstabelecimento)
						WHERE est.idTipoEstabelecimento = $tipoLocal $segundoFiltro
					ORDER BY class.classificacao DESC";

				


	$resultado= mysqli_query($ligacao,$consulta);


	?>

	<!-- white bg -->
	<section class="tm-white-bg section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title"><?php echo $title; ?></h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row">
				<?php
				while ($row = mysqli_fetch_row($resultado)) {
				?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="img/index-03.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15"><?php echo $row[1]; ?></h3>
							<p class="tm-date"><?php echo $row[4]; ?></p>
							<p class="tm-date"><?php echo $row[2] . $defenicao; ?> </p>
							<p class="tm-date">
							<?php 
								$image = getRatingImage($row[5]);
								echo $image;
							?>
							</p>
						</div>						
						<a href="estabelecimentoDetalhe.php?spotId=<?php echo $row[0]; ?>&spotType=<?php echo $tipoLocal;?>" class="tm-tours-box-2-link">RESERVE AGORA!</a>
					</div>
				</div>
				<?php
				}
				?>
			</div>
			
		
		</div>
	</section>	
	<?php	
	}
	

	function body_estabelecimento_detalhe($spotId,$defenicao,$ligacao,$login,$tipoLocal){
	// Obtem detalhes para apresentar a lista
	$consulta = "SELECT est.nome,
						est.preco,
						est.idLocalidade,
						loc.localidade,
						class.classificacao,
						est.morada,
						est.codPostal
						FROM estabelecimento est
						INNER JOIN localidade loc
						ON(est.idLocalidade = loc.idlocalidade)
						LEFT JOIN (
							SELECT idEstabelecimento, 
								round( sum(classificacao)/count(*),2) as classificacao
							FROM avaliacao
							group by idEstabelecimento
						) class    
						ON (est.idEstabelecimento = class.idEstabelecimento)
						WHERE est.idEstabelecimento = '$spotId'";


	$resultado= mysqli_query($ligacao,$consulta);


?>
   
   <br><br><br><br><br><br>
  <!-- Detalhes do locais -->	
  <section class="container tm-home-section-1" id="more">
		<div class="row">
			<div class="flexslider flexslider-about effect2">
			  <ul class="slides">
			  <?php
				while ($row = mysqli_fetch_row($resultado)) {
		       ?>
				<li>
			      <img src="img/about-1.jpg" alt="image" />
			      <div class="flex-caption">
			      	<h2 class="slider-title"><?php echo $row[0]; ?></h2>
			      	<h3 class="slider-subtitle"><?php echo $row[3]; ?>, Portugal</h3>
			      	<p class="slider-description">Preço: <?php echo $row[1] . $defenicao; ?> </p>
					<p class="slider-description">Morada: <?php echo $row[5]; ?>, <?php echo $row[6]; ?>, <?php echo $row[3]; ?>, Portugal  </p>
					<?php
					$preco = $row[1];
					}
					
					
					if ($login == 1){
					?>
					<form action="formOperation.php?id=7&spotId=<?php echo $spotId; ?>&spotType=<?php echo $tipoLocal; ?>&preco=<?php echo $preco; ?>" method="post" class="tm-contact-form">	
					<?php
							if ($tipoLocal == 2){ // restaurante
							?>
							<div class="form-group">
								<div class='input-group date-time' id='datetimepicker3'>
									<input type='text' class="form-control" name="inputDatahora" placeholder="Data e Hora" />
									<span class="input-group-addon">
										<span class="fa fa-calendar"></span>
									</span>
								</div>
							</div>	
							<?php
							}
							else { // hotel
								?>
								<div class="form-group">
								<div class='input-group date' id='datetimepicker1'>
									<input type='text' class="form-control" name="inputDataEntrada"placeholder="Data de Entrada" />
									<span class="input-group-addon">
										<span class="fa fa-calendar"></span>
									</span>
								</div>
							</div>
							<div class="form-group">
								<div class='input-group date' id='datetimepicker1'>
									<input type='text' class="form-control" name="inputDataSaida" placeholder="Data de Saída" />
									<span class="input-group-addon">
										<span class="fa fa-calendar"></span>
									</span>
								</div>
							</div>
							<?php
							}
						?>
							<div class="form-group">
									<select class="form-control" name="inputNmrPessoas" id="inputNmrPessoas">
										<option value="">Número de Pessoas?</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="2">3</option>
										<option value="2">4</option>
										<option value="2">5+</option>
									</select>
							</div>
							<div class="form-group">
								<button class="tm-submit-btn" type="submit" name="submit">Efetuar Reserva</button> 
							</div>            
					</form>
				 <?php
					}
					else{
				?>
				  	<h3 class="slider-title"><font color="yellow">* Efectue login para reservar</font></h3>
				<?php
					}
				?>
			      </div>			      
			    </li>


			  </ul>
			</div>
		</div>
		</div>
	</section>
		<?php
	}

	function body_estabelecimento_avaliacao($spotId,$tipoLocal){
		?>
			<!-- white bg -->
			<section class="section-padding-bottom">
			<div class="container">
				<div class="row">
					<div class="tm-section-header section-margin-top">			
						<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
						<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Avaliações</h2></div>
						<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
					</div>				
				</div>

				<div class="row">
					<!-- Login -->
					<form action="formOperation.php?id=6&spotType=<?php echo $tipoLocal; ?>&spotId=<?php echo $spotId; ?>" method="post" class="tm-contact-form">
						<!-- Criar conta -->
						<div >
							<div class="form-group">
									<textarea id="inputComentario" name="inputComentario" class="form-control" rows="6" placeholder="Faça um comentário à sua experiência ..."></textarea>
							</div>
							<div class="form-group">
									<select class="form-control" name="inputClassificacao" id="inputClassificacao">
										<option value="">Classificação</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
							</div>
							<div class="form-group">
								<button class="tm-submit-btn" type="submit" name="submit">Enviar</button> 
							</div>            
						</div>
					</form>
				</div>			
			</div>
		</section>
<?php

	}

	function body_estabelecimento_testemunhos($spotId,$ligacao){

	// Obtem detalhes para apresentar a lista
	$consultaComentarios = "SELECT     av.idAvaliacao,
							av.idEstabelecimento,
							ut.nome,
							av.classificacao,
							av.comentario,
							av.dataAvaliacao
						FROM avaliacao av
						INNER JOIN utilizador ut
						ON(av.idUtilizador = ut.idUtilizador)
						WHERE av.idestabelecimento = '$spotId'
						ORDER BY av.dataAvaliacao DESC";

	$resultadoComentarios = mysqli_query($ligacao,$consultaComentarios);




	?>
	<section class="container tm-home-section-1" id="more">
		<div class="section-margin-top about-section">
			<div class="row">				
				<div class="tm-section-header">
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">Testemunhos</h2></div>
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
				</div>
			</div>
			<?php
			if (mysqli_num_rows($resultadoComentarios) > 0){
			?>

			<div class="row">
			<?php
				while ($row = mysqli_fetch_row($resultadoComentarios)) {
		       ?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tm-about-box-1">
						<a href="#"><img src="img/about-4.jpg" alt="img" class="tm-about-box-1-img"></a>
						<h3 class="tm-about-box-1-title"><?php echo $row[2]; ?> </h3>
						<p class="margin-bottom-15 gray-text"><?php echo $row[4]; ?></p>
						<div class="gray-text">
							<?php 
								$image = getRatingImage($row[3]);
								echo $image;
							?>
						</div>
						<br>
							<p class="margin-bottom-15 gray-text">em <?php echo $row[5]; ?></p>
					</div>
				</div>
			<?php
				}
			}
			else{
			?>
			<p align = "center">Ainda não foram efetuadas avaliações a este local!</p>
			<?php
			}
?>
			</div>		
		</div>
	</section>	
	<?php
	}

	function body_reserva($idUtilizador,$ligacao){
				// Obtem detalhes para apresentar a lista de locais
				$consulta = "SELECT res.idReserva,
				res.dataEntrada,
				res.dataSaida,
				res.dataHora,
				res.estado,
				res.precoTotal,
				res.dataReserva,
				res.nmrPessoas,
				est.nome,
				est.idtipoestabelecimento
		FROM reserva res
		INNER JOIN estabelecimento est
			ON (res.idEstabelecimento = est.idEstabelecimento)
		WHERE res.idUtilizador = '$idUtilizador'
		ORDER BY res.datareserva DESC ";

$resultado= mysqli_query($ligacao,$consulta);

// Imprime os meus locais em lista
?>
<!-- white bg -->
<section class="tm-white-bg section-padding-bottom">
<div class="container">
<div class="row">
	<div class="tm-section-header section-margin-top">
		<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
		<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Reservas</h2></div>
		<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
	</div>				
</div>

<?php
if (mysqli_num_rows($resultado) > 0){
?>
<div class="row">
	<?php
	while ($row = mysqli_fetch_row($resultado)) {
	?>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
		<div class="tm-tours-box-2">						
			<img src="img/index-03.jpg" alt="image" class="img-responsive">
			<div class="tm-tours-box-2-info">
				<h3 class="margin-bottom-15"><?php echo $row[8]; ?></h3>
				<p class="tm-date">Nº Pessoas: <?php echo $row[7]; ?></p>
				<p class="tm-date">Preço: <?php echo $row[5]; ?> €</p>
				<?php
				if ( $row[9] == 1 ){ // hotel
					?>
					<p class="tm-date">Entrada: <?php echo $row[1]; ?> Saída: <?php echo $row[2]; ?></p>
				<?php
				}
				else{ // restaurante
				?>
					<p class="tm-date">Data: <?php echo $row[3]; ?></p>
				<?php
				}
				?>
				
			</div>						
			<a href="#" class="tm-tours-box-2-link"><?php echo $row[4]; ?></a>
		</div>
	</div>
	<?php
	} }else 
	{
		?>
	<p align="center">Ainda não efetuou nenhuma reserva!</p>
	<?php

	
	}
	?>
</div>


</div>
</section>
<?php
	}

function body_alter_conta($ligacao,$idUtilizador,$page){
	// Query de consulta
	$consulta = "SELECT IDLOCALIDADE, 
			LOCALIDADE
		FROM localidade";

	// Executa a query
	$resultadoLocalidade = mysqli_query($ligacao,$consulta);

	// Query de consulta
	$consulta = "SELECT NOME,
				EMAIL,
				MORADA,
				CODPOSTAL,
				TELEMOVEL,
				UT.IDLOCALIDADE,
				PASSWORD,
				LOCALIDADE
			FROM utilizador UT
			LEFT JOIN localidade LOC
				ON (UT.IDLOCALIDADE = LOC.IDLOCALIDADE)
			WHERE IDUTILIZADOR = '$idUtilizador'";

	// Executa a query
	$resultado = mysqli_query($ligacao,$consulta);


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
	<div class="container">
	<div class="row">
		<div class="tm-section-header section-margin-top">			
			<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
			<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Dados da Conta</h2></div>
			<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
		</div>				
	</div>
	<div class="row">
		<!-- Login -->
		<form action="formOperation.php?id=2" method="post" class="tm-contact-form">
			
			<!-- Criar conta -->
			<div >
				<?php
				while ($row = mysqli_fetch_row($resultado)) {
				?>
				<div class="form-group">
						<input type="text" name = "inputNome" id="inputNome" class="form-control" value ="<?php echo $row[0];?>" placeholder="NOME" />
					</div>
				<div class="form-group">
					<input type="text" name = "inputEmail" id="inputEmail" class="form-control" value ="<?php echo $row[1];?>" placeholder="EMAIL" readonly />
				</div>
				<div class="form-group">
					<input type="text" name = "inputPassword" id="inputPassword" class="form-control" value ="<?php echo $row[6];?>" placeholder="PASSWORD" />
				</div>
				<div class="form-group">
					<input type="text" name = "inputMorada" id="inputMorada" class="form-control" value ="<?php echo $row[2];?>" placeholder="MORADA" />
				</div>
				<div class="form-group">
					<input type="text" name = "inputCodPostal" id="inputCodPostal" class="form-control" value ="<?php echo $row[3];?>" placeholder="CÓDIGO POSTAL" />
				</div>
				<div class="form-group">
						<input type="text" name = "inputTelemovel" id="inputTelemovel" class="form-control" value ="<?php echo $row[4];?>" placeholder="TELEMOVEL" />
				</div>	
				<div class="form-group">
						<select class="form-control" name="inputLocalidade" id="inputLocalidade">
							<option value="<?php echo $row[5];?>"> <?php echo $row[7];?></option>
							<?php
							while ($row = mysqli_fetch_row($resultadoLocalidade)) {
							?>	
							<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
							<?php
							}
							?>
						</select>
				</div>
				<?php
				}
				?>

				<div class="form-group">
					<button class="tm-submit-btn" type="submit" name="submit">Guardar Alterações</button> 
				</div>            
			</div>


		</form>
	</div>			
	</div>
	</section>
	<?php
	// liberta a variavel 
	mysqli_free_result($resultadoLocalidade);
	mysqli_free_result($resultado);

			}
	

	function body_spot_reservas($idEstabelecimento,$ligacao){
		// Obtem detalhes para apresentar a lista de locais
		$consulta = "SELECT res.idReserva,
							res.dataEntrada,
							res.dataSaida,
							res.dataHora,
							res.estado,
							res.precoTotal,
							res.dataReserva,
							res.nmrPessoas,
							ut.nome
					FROM reserva res
					INNER JOIN utilizador ut
						ON (res.idutilizador = UT.idUtilizador)
					WHERE res.IDESTABELECIMENTO = '$idEstabelecimento'
					ORDER BY res.DATARESERVA DESC ";

		$resultado= mysqli_query($ligacao,$consulta);

		// Imprime os meus locais em lista
		?>
			<section class="container tm-home-section-1" id="more">
		<div class="section-margin-top about-section">
			<div class="row">				
				<div class="tm-section-header">
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">Reservas</h2></div>
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
				</div>
			</div>
			<?php
			if (mysqli_num_rows($resultado) > 0){
			?>
			<div class="row">
			<?php
			while ($row = mysqli_fetch_row($resultado)) {
			?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tm-about-box-1">
						<a href="#"><img src="img/about-4.jpg" alt="img" class="tm-about-box-1-img"></a>
						<h3 class="tm-about-box-1-title"><?php echo $row[8]; ?></span></h3>
						<p class="margin-bottom-15 gray-text">Data: <?php echo $row[3]; ?> </p>
						<p class="margin-bottom-15 gray-text">Nº Pessoas: <?php echo $row[7]; ?> / Preço:  <?php echo $row[5]; ?>€</p>
						<p class="margin-bottom-15 gray-text">Em:  <?php echo $row[6]; ?></p>
						<h2 class="tm-about-box-1-title"><font color="#ffcc00"><?php echo $row[4]; ?></font></span></h2>
						<div class="gray-text">
							<?php
							if ($row[4] == 'PENDENTE'){
							?>
							<a href="formOperation.php?id=5&idRes=<?php echo $row[0]; ?>&instruction=CONFIRMADA" class="tm-banner-link">Confirmar</a>
							<a href="formOperation.php?id=5&idRes=<?php echo $row[0]; ?>&instruction=CANCELADA" class="tm-banner-link">Cancelar</a>
							<?php
							}
							?>
						</div>
					</div>
					</div>
			<?php
			}
		}
		else{
		?>
			<p align="center">Não existem reservas efetuadas para o seu local!</p>
		<?php
		}
			?>
				</div>

			</div>		
		</div>
	</section>	

		<?php
	}

	?>
