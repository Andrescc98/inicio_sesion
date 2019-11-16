<?php

    include_once ('conexion.php');

    $conexion=new Conexion();
    $mbd=$conexion->getConexion();
    
    class Usuario{
        private $pdo;
        private $nombreUsuario;
        private $contrasena;
        
        public function __construct($mbd){
            $this->pdo=$mbd;            
        }       
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
        public function usuarioNuevo($nombreUsuario, $contrasena){
            try{
                $sql= 'INSERT INTO usuario (`nombreUsuario`, `contrasena`) VALUES (?, ?)';
                $guardar=$this->pdo->prepare($sql);
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

        public function __destruct(){
            $this->pdo=null;
        }
    }  

    $usuario=new Usuario($mbd);
?>
