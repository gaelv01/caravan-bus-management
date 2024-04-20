<?php
//session_name('deprag');
//session_start();
require('../db/connection.php');
//include('errores.php');
include('../util/tags.php');

// if ($_SESSION['autorizacion'] == 1) 
// { 


	$embeddedhtml =  '

	
	<div class="bloque">
    <form method="get" action="" class="formulario --modificaciones">
	<h1>Modificación de conductores</h1>
	<p>Ingresa los datos para modificar registro de conductor.</p>

	<table>
        <tr>
	 		<td><i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i> Matricula:  </td>
			<td><input type="number" name="matricula_usuario" size="50"></td>
		</tr>
        <tr>   
	 		<td><i class="fa-solid fa-user" aria-hidden="true"></i> Nombre: </td>
			<td><input type="text" name="nombre_usuario" size="50"></td>
		</tr>
		<tr>
	 		<td><i class="fa-solid fa-paperclip" aria-hidden="true"></i> Apellido Paterno: </td>
			<td><input type="text" name="a_paterno_usuario" size="50"></td>
		</tr>
		<tr>
	 		<td><i class="fa-solid fa-paperclip" aria-hidden="true"></i> Apellido Materno: </td>
			<td><input type="text" name="a_materno" size="50"></td>
		</tr>
        <tr>
	        <td class="dnsright"><i class="fa-solid fa-street-view" aria-hidden="true"></i> Dirección:</td>
            <td class="dnsleft"><input type="text" name="direccion_usuario" class="sinput" size="50"></td>
        </tr>
        <tr>
            <td class="dnsright"><i class="fa-solid fa-envelope" aria-hidden="true"></i> Correo/e-mail: </td>
            <td class="dnsleft"><input type="text" name="email_usuario" class="sinput" size="50"></td>
        </tr>
        <tr>
        <td class="dnsright"><i class="fa-solid fa-user-plus" aria-hidden="true"></i> Teléfono: </td>
        <td class="dnsleft"><input type="number" name="telefono_usuario" class="sinput"></td>
        </tr>
        </table>
        <div class="contenedor-botones">
        <input type="submit" value="Aceptar" class="boton --aceptar">
        <a href="main_panel.php" class="boton --cancelar">Cancelar</a>
        </div>
	</form>
</div>
	';	


	generatePage($embeddedhtml, 'Editar conductor');
// }
// else 
// {
// 	$_SESSION['autorizacion'] = 0;
// 	error_autorizacion();
// } 
?>