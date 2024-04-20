<?php
include('../util/tags.php');
require('../db/connection.php');
include('../util/errorHandler.php');
include('../routes/admin.php');

if(isset($_SESSION['auth']))
{
    if (DeleteAdmin($connection, $_SESSION['id'])){
        $embeddedhtml = '
			<span class="mensaje --salida">
				<i class="fa-sharp fa-solid fa-eraser fa-shake" style="font-size: var(--tamano-3);"></i>
				<p>Se ha dado de baja exitosamente.<br> Espere un momento.</p>
			</span>	
            <meta http-equiv="refresh" content="5;URL=viewAdmin.php">
        ';
        generateFullNotifier($embeddedhtml, 'Éxito');
    }
    else {
        dbError('deleteAdmin.php');
    }
}
else
{
    authError();
}