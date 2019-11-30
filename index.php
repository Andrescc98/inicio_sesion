<?php
    session_start();
if (isset($_SESSION['user'])) {
    header('location:/inicio_sesion/vistas/inicio.php');
}


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/fontawesome-free-5.9.0-web/css/all.css">
    <link rel="stylesheet" href="estilos/login.css">
    <title>INICIO DE SESION</title>
</head>
<body >
    <div class="container-fluid">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 card  shadow-none mt-5">
                <div class="card-body">
                    <h3 class="text-center mt-3 mb-5">Inicio de sesion</h3>

                    <form action="instancias/sesion.php" method="POST">

                        <div class="form-group">
                            <label for="nombreUsuario">Nombre de Usuario:</label>
                            <input type="text" class="form-control" name="nombreUsuario" id="nombreUsuario">
                        </div>

                        <div class="form-group">
                            <label for="contrasena">Contraseña:</label>
                            <input type="password" class="form-control" name="contrasena" id="contrasena">
                        </div>

                        <div class="text-center my-3">
                            <button type="submit" class="btn btn-info btn-block">Entrar</button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-4"></div>
        </div>
    </div>
    <script src="estilos/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>
</html>