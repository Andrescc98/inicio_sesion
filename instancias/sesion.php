<?php

    include_once('../clases/conexion.php');
    include_once('../clases/sesion.php');

    $conexion=new Conexion;
    $pdo=$conexion->getConexion();

    $nombreUsuario=$_POST['nombreUsuario'];
    $contrasena=$_POST['contrasena'];

    $sesion=new Sesion;
    $sesion->iniciarSesion($pdo, $nombreUsuario, $contrasena);


?>