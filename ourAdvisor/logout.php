<?php
    require_once ("requiredFiles.php");

    header_template('login');
    logout();
    ?>		
	<!-- white bg -->
	<section class="section-padding-bottom">
		<div class="container">
			<div class="row">
				
				<div class="tm-section-header section-margin-top">			
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Sessão Terminada</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row">
				<!-- Login -->
				<p align="center">O ourAdvisor espera a sua visita em breve!</p>
				</form>
			</div>			
		</div>
	</section>

<?php
    footer_template();
?>

