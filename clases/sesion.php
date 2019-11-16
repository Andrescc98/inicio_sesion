<?php

    class Sesion{
        
        public function iniciarSesion($pdo, $nombreUsuario, $contrasena){
            $sql="SELECT * FROM usuario WHERE nombreUsuario=?";
            $sentencia=$pdo->prepare($sql);
            $sentencia->bindParam(1, $nombreUsuario, PDO::PARAM_STR);
            $sentencia->execute();
            $resultado=$sentencia->fetch();

            if (!$resultado) {
                die('usuario inexistente');
            }
            if(password_verify($contrasena, $resultado['contrasena'])) {
                session_start();
                $_SESSION['user']=$nombreUsuario;          
                header('location:/inicio_sesion/vistas/inicio.php');
               
            }
            else{
                die('contraseña invalida');
            }
        }

        public function cerrarSesion(){
            session_start();
            $_SESSION=array();

            if (ini_get("session.use_cookies")) {
                $params=session_get_cookie_params();
                setcookie(session_name(), '', time()-42000,
                    $params['path'], $params['domain'],
                    $params['secure'], $params['httponly']
                );

            }
            session_destroy();
            header('location:/inicio_sesion/index.php');
        }
    }

?>