<?php

include('../util/tags.php');
require('../db/connection.php');

$embeddedhtml =

'
<div class="bloque">
	<form action="" method="get" class="formulario --modificaciones">
		<h1>Modificación de administradores</h1>
		<p>¿Qué administrador deseeas modificar? </p>
		<label for="editar_admin"> Selecciona uno para continuar:</label>
		<select name="editar_admin">
			<option selected="" value=""></option>
        </select>
		<div class="contenedor-botones">
				<input type="submit" value="Continuar" class="boton --aceptar">
				<a href="main_panel.php" class="boton --cancelar">Cancelar</a>
			</div>
	</form>
	</div>
';

generatePage($embeddedhtml, 'Modificar admin.');