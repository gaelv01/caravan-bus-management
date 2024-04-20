<?php

require('../db/connection.php');
include('../util/tags.php');
include('../util/errorHandler.php');
include('../routes/admin.php');

if (isset($_SESSION['auth'])) {
    $id = $_GET['editar_admin'];
    $_SESSION['id'] = $id;
    $result = GetAdminForModifyFields($connection, $id);
    $row = mysqli_fetch_array($result);

    if ($row['STATUS'] == 0) {
        $status = 'Inactivo';
    } else $status = 'Activo';
    
    $embeddedhtml = "
<div class='bloque'>
    <form method='get' action='modifyAdmin.success.php' class='formulario --modificaciones  '>
	<h1>Edición de administradores</h1>
	<p>Edita los datos para editar a un administrador del sistema.</p>
	<table>
        <tr>
	 		<td><i class='fa-solid fa-user' aria-hidden='true'></i> Nombre:  </td>
			<td><input type='text' name='nombre' size='50' value='$row[NOMBRE]'></td>
		</tr>
        <tr>
	 		<td><i class='fa-solid fa-user' aria-hidden='true'></i> Login: </td>
			<td><input type='text' name='login' size='50' value='$row[LOGIN]'></td>
		</tr>
        <tr>
	        <td class='dnsright'><i class='fa-solid fa-key' aria-hidden='true'></i>Password:</td>
            <td class='dnsleft'><input type='text' name='password' value='$row[PASSWORD]' class='sinput' size='50'></td>
        </tr>
        <tr>
            <td class='dnsright'><i class='fa-solid fa-envelope' aria-hidden='true'></i> Correo/e-mail: </td>
            <td class='dnsleft'><input type='text' name='email' class='sinput' size='50' value='$row[CORREO]'></td>
        </tr>
        <tr>
            <td class='dnsright'><i class='fa-solid fa-lock' aria-hidden='true'></i> Status: </td>
            <td class='dnsleft'>
                <select name='status'>
                    <option selected value='$row[STATUS]'>$status</option>
                    <option value='1'>Activo</option>
                    <option value='0'>Inactivo</option>
                </select>
            </td>

        </tr>
        </table>
        <div class='contenedor-botones'>
        <input type='submit' value='Guardar' class='boton --aceptar'>
        <a href='main_panel.php' class='boton --cancelar'>Cancelar</a>
        </div>
	</form>
</div>
";
    generatePage($embeddedhtml, 'Editar administrador');
} else authError();