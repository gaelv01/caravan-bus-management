<?php
//session_name('deprag');
//session_start();
require('../db/connection.php');
//include('errores.php');
include('../util/tags.php');

// if ($_SESSION['autorizacion'] == 1) 
// { 

	
	$embeddedhtml = 
	'
	
	<div class="bloque">
    <form method="get" action="bajas_rutas.php" class="formulario --bajas">
	<h1>Baja de rutas</h1>
	<p>Ingresa los datos para eliminar una ruta.</p>

	<table>
        <tr>
	 		<td><i class="fa-solid fa-trash" aria-hidden="true"></i> Matricula:  </td>
			<td><input type="number" name="id" size="50"></td>
		</tr>
        </table>
        <div class="contenedor-botones">
        <input type="submit" value="Aceptar" class="boton --aceptar">
        <a href="main_panel.php" class="boton --cancelar">Cancelar</a>
        </div>
	</form>
</div>
	';

	generatePage($embeddedhtml, 'Eliminar conductor')
// }
// else 
// {
// 	$_SESSION['autorizacion'] = 0;
// 	error_autorizacion();
// } 
?>