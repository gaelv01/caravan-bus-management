<?php

include('../util/tags.php');
require('../db/connection.php');
include('../util/errorHandler.php');
include('../routes/admin.php');

if (isset($_SESSION['auth'])){
	$result = GetAdminForModify($connection);
    $concat = ""; // Inicializar la variable $concat
    while ($row = mysqli_fetch_array($result)){
        // Usar el operador de concatenación .= en lugar de +
        $concat .= "<option value='$row[ID]'>$row[NOMBRE]</option>";
    }

	$embeddedhtml =
	"
	<div class='bloque'>
		<form action='modifyAdmin.next.php' method='get' class='formulario --modificaciones'>
			<h1>Modificación de administradores</h1>
			<p>¿Qué administrador deseeas modificar? </p>
			<label for='editar_admin'> Selecciona uno para continuar:</label>
			<select name='editar_admin'>
				<option selected='' value=''></option>
				$concat
			</select>
			<div class='contenedor-botones'>
					<input type='submit' value='Continuar' class='boton --aceptar'>
					<a href='main_panel.php' class='boton --cancelar'>Cancelar</a>
				</div>
		</form>
		</div>
	";
	generatePage($embeddedhtml, 'Modificar admin.');

}
else 
{

}

