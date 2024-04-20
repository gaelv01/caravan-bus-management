<?php

include ('../db/connection.php');

function InsertDrivers($connection) {

    if ($_POST['id'] == '' || $_POST['nombre'] == '' || $_POST['a_paterno'] == ''|| $_POST['a_materno'] == ''|| $_POST['direccion'] == ''
        || $_POST['correo'] == ''|| $_POST['telefono'] == '') {
        return false;
    }
    $stmt = $connection->prepare("INSERT INTO conductores (ID, Nombre, A_PATERNO, A_MATERNO, DIRECCION, CORREO, TELEFONO) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssss", $_POST['id'], $_POST['nombre'], $_POST['a_paterno'],  $_POST['a_materno'], $_POST['direccion'], $_POST['correo'],  $_POST['telefono']);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    return true;
    
}