<?php
    
    include_once 'usuario.php';   

    $nombreUsuario=$_POST['nombreUsuario'];
    $contrasena=$_POST['contrasena'];
    $contrasena=password_hash($contrasena, PASSWORD_DEFAULT);
    $usuario->usuarioNuevo($nombreUsuario, $contrasena);
    header('location:index.html');
?>