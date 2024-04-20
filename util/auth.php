<?php
require('../db/connection.php');
include('../routes/admin.php');
include('errorHandler.php');

if ($row = GetAdminAuth($connection))
{
    session_name('caravan');
    session_start();
    $_SESSION['auth'] = true;
    $_SESSION['nombre'] = $row['NOMBRE'];
    $_SESSION['login'] = $row['LOGIN'];
    $_SESSION['password'] = $row['PASSWORD'];
    $_SESSION['correo'] = $row['CORREO'];
    header("Location: ../src/main_panel.php");
    exit();
}
else {
    authError();    
}
?>
