<?php

    class Conexion{
        private $user="root";
        private $pass="";
        private $mbd;

        //creamos un constructor que conecte con la base de datos
        public function __construct(){
            //probamos conectar
            try{
                $this->mbd=new PDO("mysql:host=localhost;dbname=sesion", $this->user, $this->pass);
                
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


    
?>