<?php

require('../db/connection.php');

function InsertAdmin($connection) {

    if ($_POST['nombre'] == '' || $_POST['login'] == '' || $_POST['password'] == '' || $_POST['email'] == '') {
        return false;
    }
    $stmt = $connection->prepare("INSERT INTO administradores (NOMBRE, LOGIN, PASSWORD, CORREO, STATUS) VALUES (?, ?, ?, ?, 1)");
    $stmt->bind_param("ssss", $_POST['nombre'], $_POST['login'], $_POST['password'], $_POST['email']);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    return true;
    
}

function GetAdminForDelete($connection)
{
    $sql = " SELECT * FROM administradores WHERE STATUS = 1 ORDER BY NOMBRE";
	$result = mysqli_query($connection, $sql);
    return $result;
}

function GetAdmin($connection){
    $sql = " SELECT * FROM administradores WHERE STATUS = 1 ORDER BY NOMBRE";
    $result = mysqli_query($connection, $sql);
    return $result;
}

function GetAdminForModify($connection){
    $sql = " SELECT * FROM administradores ORDER BY NOMBRE";
    $result = mysqli_query($connection, $sql);
    return $result;
}

function GetAdminForModifyFields($connection, $id){
    $sql = " SELECT * FROM administradores WHERE ID = $id";
    $result = mysqli_query($connection, $sql);
    return $result;
}

function UpdateAdmin($connection, $id){
    if ($_GET['nombre'] == '' || $_GET['login'] == '' || $_GET['password'] == '' || $_GET['email'] == '' || $_GET['status'] == '') {
        return false;
    }
    $stmt = $connection->prepare("UPDATE administradores SET NOMBRE =?, LOGIN =?, PASSWORD =?, CORREO =?, STATUS =? WHERE ID = $id");
    $stmt->bind_param("sssss", $_GET['nombre'], $_GET['login'], $_GET['password'], $_GET['email'], $_GET['status']);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    return true;
}

function GetAdminForDeleteAuth($connection, $id){
    $sql = "SELECT * FROM administradores WHERE ID = ?";
	$stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    return $row['NOMBRE'];
}

function DeleteAdmin($connection, $id){
    $sql = "UPDATE administradores SET STATUS = 0 WHERE ID =?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    return true;
}

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
