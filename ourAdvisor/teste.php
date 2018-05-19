<?php

$data1 = new DateTime( '1994-04-11s' );
$data2 = new DateTime( '1994-04-17' );

$intervalo = $data1->diff( $data2 );
$dias = $intervalo->d;
echo $dias;

?>