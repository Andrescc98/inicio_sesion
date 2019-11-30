<?php

    include_once ('conexion.php');

    $conexion=new Conexion();
    $mbd=$conexion->getConexion();
    
    class Usuario{
        private $pdo;
        private $nombreUsuario;
        private $contrasena;
        
       /*  public function __construct($mbd){
            $this->pdo=$mbd;            
        }     */   
        //Muestra una lista de usuarios registrados
       /*  public function mostrar($pdo){
            $sql= 'SELECT * FROM usuario';
            $mostrar=$pdo->prepare($sql);
            $mostrar->execute();

            $resultado=$mostrar->fetchAll();
            
            $i=1;
            foreach($resultado as $dato):
                echo ' <li class="list-group-item">';
                echo $i. ' - ';
                echo $dato['nombreUsuario'];
                echo '</li>';
                $i++;
             endforeach;

        } */

        //Crear nuevos usuarios
        public function usuarioNuevo($pdo,$nombreUsuario, $contrasena){
            try{
                $sql= 'INSERT INTO usuario (`nombreUsuario`, `contrasena`) VALUES (?, ?)';
                $guardar=$pdo->prepare($sql);
                $guardar->bindParam(1, $nombreUsuario, PDO::PARAM_STR);
                $guardar->bindParam(2, $contrasena, PDO::PARAM_STR);
                $guardar->execute();

                $guardar=null;
                           
            }
            catch(PDOException $e){
                print_r($guardar->errorInfo());
                die('registro fallido');
                
            }
        }

        public function mostrarImgUsuario($pdo, $user){
            try{
                $sql="SELECT imagen.img FROM usuario INNER JOIN imagen ON usuario.id=imagen.id WHERE nombreUsuario=?";
                $sentencia=$pdo->prepare($sql);
                $sentencia->bindParam(1, $user, PDO::PARAM_STR);
                $sentencia->execute();                
                $img=$sentencia->fetch(PDO::FETCH_ASSOC)['img'];
                $img=base64_decode($img);
    
                echo $img;
            }
            catch(Exception $e){
                echo $e;
            }
        }
/* 
        public function mostrarUsuario($pdo, $user){
            try{
                $sql="SELECT imagen.img, usuario.nombre, usuario.apellido FROM usuario INNER JOIN imagen ON usuario.id=imagen.id WHERE nombreUsuario=?";
                $sentencia=$pdo->prepare($sql);
                $sentencia->bindParam(1, $user, PDO::PARAM_STR);
                $sentencia->execute();
                $resultado=$sentencia->fetch();
                //$img=$sentencia->fetch(PDO::FETCH_ASSOC)['img'];
                $img=base64_decode($resultado['img']);
    
                echo $resultado['nombre'].' '.$resultado['apellido'];
            }
            catch(Exception $e){
                echo $e;
            }
        } */

        public function __destruct(){
            $this->pdo=null;
        }
    }  

    $usuario=new Usuario($mbd);
?>
