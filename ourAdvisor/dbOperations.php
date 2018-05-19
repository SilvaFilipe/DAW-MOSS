<?php

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// Funcao que realiza a conexao com a base de dados
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

require_once("requiredFiles.php");

function connectDbMySql()
{
    $server    = "localhost";
    $utilizador = "root";
    $senha   = "";
  
    $ligacao = mysqli_connect($server, $utilizador, $senha,"ouradvisor");
                                 
    if(!$ligacao){
         $erro = "Erro de conexao com o MySQL";
         return $erro;
     }
    else{
         return $ligacao;
         }
}

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// Funcao que retorna a mensagem para o body da pagina
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
function bodyObjectsMessage($message, $backLink){  
?>
    <section id="main" class="wrapper">
    <div class="inner">
        <div class="content">
            <h2><?php echo $message; ?></h2>
            <div class="col-12">
                <ul class="actions">
                    <li><a href="<?php echo $backLink; ?>" class="button">< Voltar</a></li>
                </ul>
            </div>
        </div>
    </div>		
    </section>
<?php
}

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// Faz logout
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
function logout(){
    unset($_SESSION["nome"]); 
    unset($_SESSION["email"]); 
    unset($_SESSION["tipoutilizador"]); 
    unset($_SESSION["idUtilizador"]); 
	
	session_unset();//--------------------------> desregista todas as variaveis
	session_destroy(); //-----------------------> destroi a sessao
}

function convertData($data){
    // data
    $dataFomrmatada = substr($data,6,4) ."-".substr($data,0,2)."-".substr($data,3,2);

    // Hora toda
    $hora = substr($data,10,9);

    // Parcela das horas
    $horas = substr($hora,0, strlen($hora)-6);

    // minutos
    $minutos = substr($hora,strlen($hora)-5,2 );

    // Tipo de Hora
    $tipoHora = substr($hora,strlen($hora)-2,2 );
    echo $horas . ":" .$minutos . $tipoHora;

    if ($tipoHora == 'PM'){
        $hora = $horas . ":" . $minutos;
    }
    else{
        $hora = ($horas +12) . ":" . $minutos;
    }
    return $dataFomrmatada . " " . $hora;
}

function convertDataOnly($data){
    // data
    $dataFomrmatada = substr($data,6,4) ."-".substr($data,0,2)."-".substr($data,3,2);

    return $dataFomrmatada;
}

function getRatingImage($ranking){
    if ($ranking == 0){
        $imageRanking = '<img src="img/rating0.jpg" alt="image" class="margin-bottom-5">';
    }
    elseif ($ranking > 0 && $ranking <= 1){
        $imageRanking = '<img src="img/rating1.jpg" alt="image" class="margin-bottom-5">';
    }
    elseif ($ranking > 1 && $ranking <= 1.5){
        $imageRanking = '<img src="img/rating15.jpg" alt="image" class="margin-bottom-5">';
    }
    elseif ($ranking > 1.5 && $ranking <=2){
        $imageRanking = '<img src="img/rating2.jpg" alt="image" class="margin-bottom-5">';
    }
    elseif ($ranking > 2 && $ranking <= 2.5){
        $imageRanking = '<img src="img/rating25.jpg" alt="image" class="margin-bottom-5">';
    }
    elseif ($ranking > 2.5 && $ranking <= 3){
        $imageRanking = '<img src="img/rating3.jpg" alt="image" class="margin-bottom-5">';
    }
    elseif ($ranking > 3 && $ranking <= 3.5){
        $imageRanking = '<img src="img/rating35.jpg" alt="image" class="margin-bottom-5">';
    }
    elseif ($ranking > 3.5 && $ranking <= 4){
        $imageRanking = '<img src="img/rating4.jpg" alt="image" class="margin-bottom-5">';
    }
    elseif ($ranking > 4 && $ranking <= 4.5){
        $imageRanking = '<img src="img/rating45.jpg" alt="image" class="margin-bottom-5">';
    }
    elseif ($ranking > 4.5 && $ranking <= 5){
        $imageRanking = '<img src="img/rating5.jpg" alt="image" class="margin-bottom-5">';
    }

    return $imageRanking;
}
?>