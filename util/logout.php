<?php
session_name('caravan');
session_start();
session_unset();
session_destroy();
$_SESSION['auth'] = false;
$_SESSION['nombre'] = null;
$_SESSION['login'] = null;
$_SESSION['password'] = null;
$_SESSION['correo'] = null;
header("Location: ../src/index.php");
?>
