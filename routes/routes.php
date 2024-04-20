<?php

include ('../db/connection.php');

function InsertRoute($connection) {

    if ($_GET['inicio'] == '' || $_GET['fin'] == '' || $_GET['tiempo'] == '') {
        return false;
    }
    $stmt = $connection->prepare("INSERT INTO rutas (INICIO, FIN, TIEMPO) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $_GET['inicio'], $_GET['fin'], $_GET['tiempo']);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    return true;
    
}