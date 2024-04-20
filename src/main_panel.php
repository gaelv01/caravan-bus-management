<?php
require('../db/connection.php');
include('../util/errorHandler.php');
include('../util/tags.php');

$embeddedhtml =  "
		<div class='bloque-bienvenida'>
			<h1>¡Bienvenido a Caravan!</h1>
			<p>Este sistema está diseñado para administrar y ayudar a controlar las entidades de transporte, tales como camiones, conductores y rutas.</p>
			<span class='icono'><img src='../img/logo.png'></span>
		</div>	
	";
	
(isset($_SESSION['auth'])) ? generatePage($embeddedhtml, 'Menú') : authError();

?>