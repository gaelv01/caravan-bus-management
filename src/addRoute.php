<?php

require('../db/connection.php');
include('../util/errorHandler.php');
include('../util/tags.php');

$embeddedhtml = '
	<div class="bloque">
		<form method="get" action="addRoute.next.php" class="formulario --altas">
			<h1>Alta de rutas</h1>
			<p>Ingresa los datos para dar de alta a una ruta nueva.</p>
			<table>
				<tr>
					<td><i class="fa-solid fa-house" aria-hidden="true"></i>Lugar de inicio:    </td>
					<td><input type="text" name="inicio" size="50"></td>
				</tr>
				<tr>
					<td><i class="fa-solid fa-location-dot" aria-hidden="true"></i>Lugar de destino: </td>
					<td><input type="text" name="fin" size="50"></td>
				</tr>
				<tr>
					<td><i class="fa-regular fa-clock" aria-hidden="true"></i>Duración:</td>
					<td><input type="text" name="tiempo" class="sinput" size="50"></td>
				</tr>
			</table>
			<div class="contenedor-botones">
				<input type="submit" value="Agregar" class="boton --aceptar">
				<a href="main_panel.php" class="boton --cancelar">Cancelar</a>
			</div>
		</form>
	</div>
	';

(isset($_SESSION['auth'])) ? generatePage($embeddedhtml, 'Agregar ruta'): authError();

?>