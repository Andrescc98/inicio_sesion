<?php

    class conexion{
        private $usuario="root";
        private $contrasena="";
        private $mbd;

        //creamos un constructor que conecte con la base de datos
        public function __construct(){
            //probamos conectar
            try{
                $this->mbd=new pdo("mysql:host=localhost;dbname=sesion", $this->usuario, $this->contrasena);
                
            }
            //en caso de que no funcione mostrara "conexion fallida"
            catch(PDOException $e){
                echo 'conexion fallida';
            }
        
        }
        //obtener conexion
        public function getConexion(){
            return $this->mbd;
        }

        //destruir la conexion
        public function __destruct(){
            $this->mbd=null;
           
        }
    }

    $conexion=new conexion();
    
?>