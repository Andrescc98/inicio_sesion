<?php

    trait sentecia{

        public function consultar($pdo, $sql, $matriz){
            $consultar=$pdo->prepare($sql);
            $consultar->execute($matriz);
            $resultado=$consultar->fetch();


        }

        public function borrarEditar ($pdo, $sql, $matriz){
            $consultar=$pdo->prepare($sql);
            $consultar->execute($matriz);
        }

        public function consultarTodo($pdo, $sql, $matriz){
            $consultar=$pdo->prepare($sql);
            $consultar->execute($matriz);
            $resultado=$consultar->fetchAll();


        }
    }
?>