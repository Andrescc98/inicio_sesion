<?php
    include_once 'conexion.php';
    class usuario{

        public function mostrar($pdo){
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

        }
    }

   

?>