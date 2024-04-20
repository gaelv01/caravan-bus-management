<?php
include('../util/tags.php');
require('../db/connection.php');
include('../util/errorHandler.php');
include('../routes/admin.php');

if (isset($_SESSION['auth']))
{
    $result = GetAdminForDelete($connection);
    $concat = ""; // Inicializar la variable $concat
    while ($row = mysqli_fetch_array($result)){
        // Usar el operador de concatenación .= en lugar de +
        $concat .= "<option value='$row[ID]'>$row[NOMBRE]</option>";
    }

    $embeddedhtml = "
    <div class='bloque'>
        <form action='deleteAdmin.next.php' method='get' class='formulario --bajas'>
        <h1>Baja de administradores</h1>
        <p>¿Qué admin. deseas dar de baja? </p>
        <label for='id'> Selecciona uno para continuar:</label>
        <select name='id'>
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
    generatePage($embeddedhtml, "Eliminar admin.");
}
else 
{
    authError();
}
?>




