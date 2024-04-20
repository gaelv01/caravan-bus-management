<?php

include('../util/tags.php');
require('../db/connection.php');
include('../util/errorHandler.php');
include('../routes/admin.php');

if (isset($_SESSION['auth']))
{
    $id = $_GET['id']; // Cambiar 'ID' a 'id'
    $_SESSION['id'] = $id;

    if ($id == '')
    {
        dbError('deleteAdmin.php');
    }
    else
    {
        $nombre = GetAdminForDeleteAuth($connection, $id);
        $embeddedhtml = "
        <div class='bloque'>
        <form action='deleteAdmin.success.php' method='get' class='formulario --bajas'>
            <h1>¿Confirmar?</h1>
            <p>¿Desea de verdad dar de baja al siguiente usuario?</p>
            <h1>$nombre</h1>
            <div class='contenedor-botones'>
                    <input type='submit' value='Dar de baja' class='boton --aceptar'>
                    <a href='principal_administrador.php' class='boton --cancelar'>Cancelar</a>
                </div>
        </form>
        </div>
        ";
        generatePage($embeddedhtml, "Eliminar admin.");
    }


}
else 
{
    authError();
}
?>
