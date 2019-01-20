<?php 

    abstract class connection {
        protected function connectDataBase() {
            try {
                $con = new PDO ("mysql:host=localhost;dbname=dbphp", "root", "");
                return $con;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
    }

?>