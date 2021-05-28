<?php

class User{
    static function getAll(){
$stmt = DB::connect()->prepare('SELECT * FROM users');
    $stmt -> execute();
    return $stmt -> fetchAll();
    $stmt -> close();
    $stmt = null();

    }
    static public function login($data){
        $username = $data["username"];
        
        try {
            $query = "SELECT * FROM users WHERE username = :username ";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":username"=>$username));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
        } catch (PDOException $ex) {
            echo "error : ".$ex.getMessage();
        }
    }

    static public function createUser($data){
        $stmt = DB::connect()->prepare('INSERT INTO users (fullname
        ,username,email,password)
        VALUES (:fullname,:username,:email,:password)');
        $stmt->bindParam(':fullname',$data['fullname']);
        $stmt->bindParam(':username',$data['username']);
        $stmt->bindParam(':email',$data['email']);
        $stmt->bindParam(':password',$data['password']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }
    static public function deleteUser($data){
  
        $id=$data["id"];
        try{
          $stmt = DB::connect() ->prepare('DELETE  FROM users WHERE user_id =:id ');
          $stmt->execute(array(":id"=>$id));
          $car = $stmt -> fetch(PDO ::FETCH_OBJ);
          if($stmt ->execute()){
            return 'ok';
          }
          $stmt -> close ();
          $stmt = null;
      
        } catch(PDOException $ex){
          echo "erreur" .$ex ->getMessage();
        }
      
      
      
      }
  
}