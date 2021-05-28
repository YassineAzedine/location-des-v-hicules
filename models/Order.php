<?php

class Order{
       static public function getAll(){
           $stmt = DB::connect()->prepare('SELECT * FROM orders');
           $stmt ->execute();
           return $stmt->fetchAll();
           $stmt->close();
           $stmt = null;
       }

        static public function createOrder($data){

          $stmt = DB::connect()->prepare('INSERT INTO orders (fullname,marque,jours,price,total,dateL,dateR)
          VALUES (:fullname,:marque,:jours,:price,:total,:dateL,:dateR)');
          $stmt ->bindParam(':fullname',$data['fullname']);
          $stmt ->bindParam(':marque',$data['marque']);
          $stmt ->bindParam(':jours',$data['jours']);
          $stmt ->bindParam(':dateL',$data['dateL']);
          $stmt ->bindParam(':dateR',$data['dateR']);
          $stmt ->bindParam(':price',$data['price']);
          $stmt ->bindParam(':total',$data['total']);
          if($stmt->execute()){
              return 'ok';
          }else{
              return 'error';
          }
              $stmt->close();
              $stmt=null;
        }
        
        static public function deleteOrder($data){
  
            $id=$data["id"];
            try{
              $stmt = DB::connect() ->prepare('DELETE  FROM orders WHERE id =:id ');
              $stmt->execute(array(":id"=>$id));
              $order = $stmt -> fetch(PDO ::FETCH_OBJ);
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

      ?>