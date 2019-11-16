
<?php
    session_start();
    if (!isset($_SESSION['user'])) {
    header('location:/inicio_sesion/index.php');
    //echo $_SESSION['user'];
    die('error de conexion');

    }

?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/inicio_sesion/estilos/bootstrap-4.3.1-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/inicio_sesion/estilos/fontawesome-free-5.9.0-web/css/all.css">
        <title>Mostrando usuario</title>
    </head>
    <body style="font-family: Roboto">