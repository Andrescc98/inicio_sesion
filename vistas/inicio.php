<?php
    include_once('base/cabecera.php');
?>


    

        <div class="container mt-5">
           <h1>Sesion activa</h1>
           <p>Bienvenido <?php echo $_SESSION['user'] ?></p>
           <a href="../instancias/cerrarsesion.php" class="btn btn-danger">Cerrar sesion</a>
        </div>

<?php

    include_once('base/pie.php');

?>