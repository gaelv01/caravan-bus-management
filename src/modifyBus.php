<?php

require('../db/connection.php');
include('../util/errorHandler.php');
include('../util/tags.php');


	$embeddedhtml =  '

	
	<div class="bloque">
    <form method="get" action="" class="formulario --modificaciones">
	<h1>Modificación de camiones</h1>
	<p>Ingresa los datos a modificar una de las unidades.</p>

	<table>
        <tr>
	 		<td><i class="fa-solid fa-bus" aria-hidden="true"></i> Modelo:  </td>
			<td><input type="text" name="nombre_usuario" size="50"></td>
		</tr>
        <tr>
	 		<td><i class="fa-solid fa-compass" aria-hidden="true"></i> Plaza: </td>
			<td><input type="text" name="direccion_usuario" size="50"></td>
		</tr>
        <tr>
	        <td class="dnsright"><i class="fa-solid fa-camera" aria-hidden="true"></i>Camara-ip:</td>
            <td class="dnsleft"><input type="text" name="telefono_usuario" class="sinput" size="50"></td>
        </tr>
        <tr>
        <td class="dnsright"><i class="fa-solid fa-user-plus" aria-hidden="true"></i> Cupo: </td>
        <td class="dnsleft"><input type="text" name="login_usuario" class="sinput"></td>
        </tr>
        <tr>
        <td class="dnsright"><i class="fa-solid fa-wifi" aria-hidden="true"></i> Router-ip:</td>
        <td class="dnsleft"><input type="password" name="password_usuario" class="sinput"></td>
        </tr>
        </table>
        <div class="contenedor-botones">
        <input type="submit" value="Aceptar" class="boton --aceptar">
        <a href="main_panel.php" class="boton --cancelar">Cancelar</a>
        </div>
	</form>
</div>
	';

(isset($_SESSION['auth'])) ? generatePage($embeddedhtml, 'Modificar camión') : authError();

?>