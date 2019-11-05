<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.9.0-web/css/all.css">
    <title>Document</title>
</head>
<body style="font-family: Roboto">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 card border-0 bg-transparent shadow mt-5">
                <div class="card-body">
                    <h3 class="text-center">Registro</h3>

                    <form action="registrar.php" method="POST" class="mt-3">

                        <div class="form-group">
                            <label for="nombreUsuario">Nombre de Usuario:</label>
                            <input type="text" class="form-control" name="nombreUsuario" id="nombreUsuario">
                        </div>

                        <div class="form-group">
                            <label for="contrasena">Contraseña:</label>
                            <input type="password" class="form-control" name="contrasena" id="contrasena">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="mt-3 btn btn-info border-0 rounded-0 shadow-lg">Registrar</button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-4"></div>
        </div>
    </div>
    <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>
</html>