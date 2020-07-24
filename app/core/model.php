<?php

    namespace app\core;
    class Model {
        protected $table;

        public function all(){
            $sql = 'SELECT * FROM ?';
            $stmt = $conn->prepare($sql)
                         ->bindParam('s',$this->table)
                         ->execute();
            return $stmt->fetch();
        }

        public function find($id){
            $sql = 'SELECT *FROM :table WHERE id=?';
            $stmt = $conn->prepare($sql)
                         ->bindParam('d',$id)
                         ->execute();
            return $stmt->fetch();
        }

        public function create($data){
            $cols   = implode(',',array_keys($data));
            $values = implode(',',array_values($data));
            $sql = '
                INSERT INTO ?
                (?)
                VALUES
                (?)
            ';
            $stmt = $conn->prepare($sql)
                         ->bindParam('sss',$table,$cols,$values)
                         ->execute();
            return $stmt->affected_rows;
        }
    }
?>