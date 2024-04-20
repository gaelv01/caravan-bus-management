<?php
require('../db/connection.php');
include('../util/tags.php');
include('../util/errorHandler.php');
include('../routes/admin.php');

if (isset($_SESSION['auth'])){

        $result = InsertAdmin($connection);
        if($result)
        {
            $nombre = $_GET['nombre'];
            $embeddedhtml = '
            <span class="mensaje --salida">
                <i class="fa-sharp fa-solid fa-user-plus fa-beat-fade" style="font-size: var(--tamano-3);"></i>
                <p>Se ha agregado a '.$nombre.' exitosamente.<br> Espera un momento.</p>
            </span>	
            <meta http-equiv="refresh" content="2;URL=viewAdmin.php">
            ';
            generateFullNotifier($embeddedhtml, 'Éxito');    
        }
        else {
            dbError('addAdmin.php');
        }
        
} else {
    authError();
}

