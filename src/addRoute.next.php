<?php
require('../db/connection.php');
include('../util/tags.php');
include('../util/errorHandler.php');
include('../routes/routes.php');

if (isset($_SESSION['auth'])){

    $result = InsertRoute($connection);
        if($result)
        {
            $embeddedhtml = '
            <span class="mensaje --salida">
                <i class="fa-sharp fa-solid fa-user-plus fa-beat-fade" style="font-size: var(--tamano-3);"></i>
                <p>Se ha agregado  exitosamente.<br> Espera un momento.</p>
            </span>	
            <meta http-equiv="refresh" content="2;URL=main_panel.php">
            ';
            generateFullNotifier($embeddedhtml, 'Éxito');    
        }
        else {
            dbError('addRoute.php');
        }
        


} else authError();