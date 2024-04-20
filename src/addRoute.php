<?php
//session_name('deprag');
//session_start();
require('../db/connection.php');
//include('errores.php');
include('../util/tags.php');

// if ($_SESSION['autorizacion'] == 1) 
// {

	$embeddedhtml =
	'
	<div class="bloque">
		<form method="get" action="altas_rutas.php" class="formulario --altas">
			<h1>Alta de rutas</h1>
			<p>Ingresa los datos para dar de alta a una ruta nueva.</p>
			<table>
				<tr>
					<td><i class="fa-solid fa-house" aria-hidden="true"></i>Lugar de inicio:    </td>
					<td><input type="text" name="Inicio" size="50"></td>
				</tr>
				<tr>
					<td><i class="fa-solid fa-location-dot" aria-hidden="true"></i>Lugar de destino: </td>
					<td><input type="text" name="Fin" size="50"></td>
				</tr>
				<tr>
					<td><i class="fa-regular fa-clock" aria-hidden="true"></i>Duración:</td>
					<td><input type="time" name="Tiempo" class="sinput" size="50"></td>
				</tr>
			</table>
			<div class="contenedor-botones">
				<input type="submit" value="Agregar" class="boton --aceptar">
				<a href="main_panel.php" class="boton --cancelar">Cancelar</a>
			</div>
		</form>
	</div>
	';

	generatePage($embeddedhtml, 'Agregar ruta');
// }
// else 
// {
// 	$_SESSION['autorizacion'] = 0;
// 	error_autorizacion();
// } 
?>