<?php

require('../db/connection.php');
include('../util/tags.php');

beginHtml('Agregar admin.');
showHeader('standalone');
showMain('default');
showMenu();
showArea();

echo '
    
<div class="bloque">
    <form method="get" action="" class="formulario --altas">
	<h1>Alta de administradores</h1>
	<p>Ingresa los datos para dar de alta a un administrador nuevo del sistema.</p>

	<table>
        <tr>
	 		<td><i class="fa-solid fa-user" aria-hidden="true"></i> Nombre:  </td>
			<td><input type="text" name="nombre" size="50"></td>
		</tr>
        <tr>
	 		<td><i class="fa-solid fa-user" aria-hidden="true"></i> Login: </td>
			<td><input type="text" name="login" size="50"></td>
		</tr>
        <tr>
	        <td class="dnsright"><i class="fa-solid fa-key" aria-hidden="true"></i>Password:</td>
            <td class="dnsleft"><input type="password" name="password" class="sinput" size="50"></td>
        </tr>
        <tr>
            <td class="dnsright"><i class="fa-solid fa-envelope" aria-hidden="true"></i> Correo/e-mail: </td>
            <td class="dnsleft"><input type="text" name="email" class="sinput" size="50"></td>
        </tr>
        </table>
        <div class="contenedor-botones">
        <input type="submit" value="Agregar" class="boton --aceptar">
        <a href="main_panel.php" class="boton --cancelar">Cancelar</a>
        </div>
	</form>
</div>

';
closeArea();
closeMain();
showFooter();
endHtml();

