<?php

require('../db/connection.php');
include('../util/errorHandler.php');
include('../util/tags.php');


	$embeddedhtml =  '

	<div class="bloque">
		<form method="get" action="Modificar_rutas.php" class="formulario --modificaciones">
		<h1>Modificar rutas</h1>
		<p>Ingresa los datos para modificar una ruta.</p>
		<table>
			<tr>
				<td><i class="fa-solid fa-house" aria-hidden="true"></i> Lugar de inicio:    </td>
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
			<input type="submit" value="Aceptar" class="boton --aceptar">
			<a href="main_panel.php" class="boton --cancelar">Cancelar</a>
        </div>
	</form>
</div>
	';

(isset($_SESSION['auth'])) ? generatePage($embeddedhtml, 'Modificar ruta') : authError();

?>