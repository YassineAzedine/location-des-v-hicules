<?php


class Category{
    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM Categories');
        $stmt ->execute();
        return $stmt ->fetchAll();
        $stmt->close();
        $stmt =null ;
    } 
}



?>