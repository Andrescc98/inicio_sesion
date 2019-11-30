<?php
    include_once('../clases/conexion.php');
    include_once('../clases/usuario.php');

    $user=$_GET['user'];

    $conexion=new Conexion;
    $pdo=$conexion->getConexion();

    $usuario=new Usuario;
    $usuario->mostrarImgUsuario($pdo, $user);


?>