<?php

    abstract class connection {
        protected function connectDataBase() {
            try {
                $con = new PDO('mysql:host=localhost;dbname=dbphp', 'root', '');
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $con;
            } catch (PDOException $e) {
                return $e->getMessase();
            }
        }
    }

?>