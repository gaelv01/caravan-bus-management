<?php
$host = "localhost";
$usuariobd = "root";
$passwordbd = "";
$nombredebase = "caravan";
$enlace1 = mysqli_connect($host, $usuariobd, $passwordbd, $nombredebase);
mysqli_set_charset($enlace1,'utf8');
?>