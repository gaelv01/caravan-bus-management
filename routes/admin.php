<?php

require('../db/connection.php');

function GetAdminAuth($connection){
    // Evita la inyección SQL usando prepared statements
    $stmt = $connection->prepare("SELECT * FROM administradores WHERE LOGIN = ? AND PASSWORD = ?");
    $stmt->bind_param("ss", $_POST['login'], $_POST['password']);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();
    return $row;
}
?>
