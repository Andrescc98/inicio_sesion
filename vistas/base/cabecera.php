
<?php
    session_start();
    if (!isset($_SESSION['user'])) {
    header('location:/inicio_sesion/index.php');
    //echo $_SESSION['user'];
    die('error de conexion');

    }

    $conexion=new Conexion();
    $pdo=$conexion->getConexion();
    function mostrarUsuario($pdo){
        try{
            $sql="SELECT * FROM usuario  WHERE nombreUsuario=?";
            $sentencia=$pdo->prepare($sql);
            $sentencia->bindParam(1, $_SESSION['user'], PDO::PARAM_STR);
            $sentencia->execute();
            $resultado=$sentencia->fetch();
            

            echo $resultado['nombre'].' '.$resultado['apellido'];
        }
        catch(Exception $e){
            echo $e;
        }
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
        <link rel="stylesheet" href="/inicio_sesion/estilos/estructura.css">
        <title>Mostrando usuario</title>
        
    </head>
    <body style="font-family: Roboto">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
               
            <ul class="navbar-nav">
                <li><a href="#" class="nav-link">inicio</a></li>
                <li><a href="#" class="nav-link">prueba</a></li>
                
            </ul>
            <!-- menu del usuario -->
            <ul class="navbar-nav ml-auto">
               
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navDropdown" role="button" 
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!-- imagen del usuario traida desde el backend -->
                       <img src="<?php echo "/inicio_sesion/instancias/imgusuario.php?user=".$_SESSION['user'];?>"
                         width='30px' height='30px' class="rounded-circle mr-1">
                        <?php  mostrarUsuario($pdo) ?>

                    </a>
                    <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelleby="navDropdown">
                        <a href="#" class="dropdown-item text-light"><i class="fa fa-edit mr-1"></i><small>Modificar Usuario</small></a>
                        <div class="dropdown-divider"></div>
                        <a href="/inicio_sesion/instancias/cerrarsesion.php"
                         class="text-danger dropdown-item"><i class="fa fa-sign-out-alt mr-1"></i><small>Salir</small></a>
                    </div>

                </li>
            </ul>
                
        
        </nav>