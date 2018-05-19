<?php
	require_once ("requiredFiles.php");
	
	$page = 'login';
	$idUtilizador = $_SESSION["idUtilizador"];
	$idEstabelecimento = $_GET['id'];

	// Liga com a base de dados
	$ligacao = connectDbMySql(); 
	
	if (!$ligacao)
	 return false;

	// Se o utilizador for do tipo empresa
	if ($_SESSION["tipoutilizador"] == 2) {
		header_template_with_login_empresa('local');


		body_spot_reservas($idEstabelecimento,$ligacao);
	
	}
	// Se o utilizador for do tipo cliente
	else{
		header_template_with_login($page);
	} 


footer_template();
mysqli_close($ligacao);

?>

