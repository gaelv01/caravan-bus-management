<?php

require('../db/connection.php');
include('../util/tags.php');
include('../util/errorHandler.php');

$embeddedhtml = '
    <div class="bloque">
        <form method="get" action="bajas_buses.php" class="formulario --bajas">
        <h1>Baja de camiones</h1>
        <p>Ingresa los datos para eliminar una unidad.</p>

        <table>
            <tr>
                <td><i class="fa-solid fa-trash" aria-hidden="true"></i> ID:  </td>
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

(isset($_SESSION['auth'])) ? generatePage($embeddedhtml, 'Eliminar bus') : authError();