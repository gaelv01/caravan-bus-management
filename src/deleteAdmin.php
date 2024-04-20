<?php
include('../util/tags.php');
require('../db/connection.php');

$embeddedhtml =
"
<div class='bloque'>
<form action=' method='get' class='formulario --bajas'>
<h1>Baja de administradores</h1>
<p>¿Qué admin. deseeas dar de baja? </p>
<label for='eliminar_admin'> Selecciona uno para continuar:</label>
<select name='eliminar_admin'>
    <option selected=' value='></option>
    </select>
<div class='contenedor-botones'>
        <input type='submit' value='Continuar' class='boton --aceptar'>
        <a href='main_panel.php' class='boton --cancelar'>Cancelar</a>
</div>
</form>
</div>
";

generatePage($embeddedhtml, "Eliminar admin.");



