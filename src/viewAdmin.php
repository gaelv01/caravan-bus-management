<?php

include('../util/tags.php');
require('../db/connection.php');
include('../util/errorHandler.php');
include('../routes/admin.php');


if (isset($_SESSION['auth'])) {

	$concat = "";
    $result = GetAdmin($connection);
	while ($row = mysqli_fetch_array($result)) {
		$concat .= 
		"<tr>
			<td>$row[NOMBRE]</td>
			<td>$row[LOGIN]</td>
			<td>$row[PASSWORD]</td>
			<td>$row[CORREO]</td>
		</tr>";
	}


	$embeddedhtml = 
	"
	<div class='bloque --blanco '>
			<h1>Administradores</h1>
			<p>Consulta aquí a los administradores de este sistema.</p>
		<table class='consultas --mas-grande'>
			<tr>
				<th>Nombre</th>
				<th>Login</th>
				<th>Password</th>
				<th>Correo</th>
			</tr>
			$concat
		</table>
	</div>
	";
	generatePage($embeddedhtml, 'Consultar admin.');
}  else authError();
