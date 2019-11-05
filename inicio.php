<?php
    include_once 'conexion.php';
    include_once 'usuario.php';

    $conexion=new conexion();
    $pdo=$conexion->getConexion();

    $usuario=new usuario();
    
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="fontawesome-free-5.9.0-web/css/all.css">
        <title>Mostrando usuario</title>
    </head>
    <body style="font-family: Roboto">

        <div class="container mt-5">
           
        </div>
        
        <script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js"></script>
        <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    </body>
</html>