<?php

require('../db/connection.php');
include('../util/tags.php');
include('../util/errorHandler.php');
include('../routes/admin.php');

if (isset($_SESSION['auth'])){

    if (UpdateAdmin($connection, $_SESSION['id'])){
        $embeddedhtml = '
        <span class="mensaje --salida">
            <i class="fa-sharp fa-solid fa-user-plus fa-beat-fade" style="font-size: var(--tamano-3);"></i>
            <p>Se ha actualizado exitosamente.<br> Espera un momento.</p>
        </span>    
        <meta http-equiv="refresh" content="3;URL=viewAdmin.php">
        ';
        generateFullNotifier($embeddedhtml, 'Éxito');
    } else dbError('modifyAdmin.php');
} else authError();