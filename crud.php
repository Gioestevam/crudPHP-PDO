<?php

    require_once 'connection.php';

    class crud extends connection {

        private $crud;
        private $countparams;

        private function prepareStatements($query, $params) {
            $this->countParams($params);
            $this->crud = $this->connectDataBase()->prepare($query);

            if ($this->countparams > 0) {
                foreach ($params as $key => &$value) {
                    $this->crud->bindParam($key,$value);
                }
            }

            $this->crud->execute();

        }

        private function countParams($params) {
            $this->countparams = count($params);
        }

        public function insert($table, $col, $condition, $params) {
            $this->prepareStatements("insert into {$table} ($col) values ($condition)", $params);
            return $this->crud;
        }

        public function updateById($table, $col, $condition, $params) {
            $this->prepareStatements("update {$table} set {$col} where {$condition}", $params);
            return $this->crud;
        }

        public function deleteById($table, $condition, $params) {
            $this->prepareStatements("delete from {$table} where {$condition}", $params);
            return $this->crud;
        }

        public function deleteAll($table) {
            $this->prepareStatements("delete from {$table}", array());
            return $this->crud;
        }

        public function selectById($table, $col, $condition, $params) {
            $this->prepareStatements("select {$col} from {$table} where {$condition}", $params);
            return $this->crud; 
        }

        public function selectAll($table, $col) {
            $this->prepareStatements("select {$col} from {$table}", array());
            return $this->crud;
        }
    }

?>