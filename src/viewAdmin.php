<?php

include('../util/tags.php');
require('../db/connection.php');

$embeddedhtml = 
'
<div class="bloque --blanco ">
		<h1>Administradores</h1>
		<p>Consulta aquí a los administradores de este sistema.</p>
	<table class="consultas --mas-grande">
		<tr>
			<th>Nombre</th>
			<th>Dirección</th>
			<th>Teléfono</th>
			<th>E-mail</th>
			<th>Fecha de alta</th>
			<th>Login</th>
		</tr>
    </table>
</div>
';

generatePage($embeddedhtml, 'Consultar admin.');
