<?php

include_once('../clases/conexion.php');
include_once('../clases/sesion.php');

$conexion=new Conexion;
$pdo=$conexion->getConexion();


$cerrar=new Sesion;
$cerrar->cerrarSesion();

?>