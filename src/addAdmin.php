<?php

require('../db/connection.php');
include('../util/tags.php');

beginHtml('Agregar admin.');
showHeader('standalone');
showMain('default');
showMenu();
showArea();

echo '
    
<form action="" class="formulario --altas">
    <h1>Agregar un nuevo administrador  </h1>
    <label for="">Nombre</label>
    <input type="text">
    <label for="">Nombre</label>
</form>

';