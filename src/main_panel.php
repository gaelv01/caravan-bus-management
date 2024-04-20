<?php
//session_name('deprag');
//session_start();
require('../db/connection.php');
//include('errores.php');
include('../util/tags.php');

// if ($_SESSION['autorizacion'] == 1) 
// {

	$embeddedhtml =  '
		<div class="bloque-bienvenida">
			<h1>¡Bienvenido a Caravan!</h1>
			<p>Este sistema está diseñado para administrar y ayudar a controlar las entidades de transporte, tales como camiones, conductores y rutas.</p>
			<span class="icono"><img src="../img/logo.png"></span>
		</div>	
	';
	generatePage($embeddedhtml, 'Menú');

// }
// else 
// {
// 	$_SESSION['autorizacion'] = 0;
// 	error_autorizacion();
// } 
?>