<?php

$db = mysqli_connect("localhost","root","","ouradvisor"); //keep your db name
$sql = "SELECT image FROM estabelecimento WHERE idEstabelecimento = 1";


$sth = $db->query($sql);
$result=mysqli_fetch_array($sth);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';

?>


<img src="img/index-01.jpg" alt="image" class="img-responsive">