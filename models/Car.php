<?php
  class Car{
      static public function getAll(){
          $stmt = DB::connect()->prepare('SELECT * FROM cars');
          $stmt-> execute();
          return $stmt ->fetchAll();
          $stmt -> close();
          $stmt = null;

      }
      static public function getCarByCat($data){
          $id = $data['id'];
          try{
            $stmt = DB::connect()->prepare('SELECT * FROM cars WHERE car_category_id = :id');
            $stmt-> execute(array(":id" => $id));
            return $stmt ->fetchAll();
            $stmt -> close();
            $stmt = null;

          }catch(PDOException $ex){
              echo "erreur" .$ex->getMessage();
          }
      }
    
  
  static public function getCarById($data){
    $id = $data['id'];
    try{
      $stmt = DB::connect()->prepare('SELECT * FROM cars WHERE car_id = :id');
      $stmt-> execute(array(":id" => $id));
      $car = $stmt ->fetch(PDO::FETCH_OBJ);
      return $car;
      $stmt -> close();
      $stmt = null;

    }catch(PDOException $ex){
        echo "erreur" .$ex->getMessage();
    }
}
  static public function addCar($data){
  $stmt = DB::connect()->prepare('INSERT INTO cars (car_category_id,marque
  ,type,prixj,model,image)
  VALUES (:car_category_id,:marque,:type,:prixj,
  :model,:image)');
  $stmt->bindParam(':car_category_id',$data['car_category_id']);
  $stmt->bindParam(':marque',$data['marque']);
  $stmt->bindParam(':type',$data['type']);
  $stmt->bindParam(':prixj',$data['prixj']);
  $stmt->bindParam(':model',$data['model']);
  $stmt->bindParam(':image',$data['image']);
  if($stmt->execute()){
      return 'ok';
  }else{
      return 'error';
  }
  $stmt->close();
  $stmt = null;
}
static public function editCar($data){
  $stmt = DB::connect()->prepare('UPDATE cars SET 
  
  marque = :marque,
  type = :type,
  prixj = :prixj,
  model = :model ,
  image = :image,
  car_category_id =:car_category_id
  WHERE car_id =:car_id
  ');
  
  $stmt->bindParam(':car_id',$data['car_id']);
  $stmt->bindParam(':marque',$data['marque']);
  $stmt->bindParam(':type',$data['type']);
  $stmt->bindParam(':prixj',$data['prixj']);
  $stmt->bindParam(':model',$data['model']);
  $stmt->bindParam(':image',$data['image']);
  $stmt->bindParam(':car_category_id',$data['car_category_id']);
  if($stmt->execute()){
      return 'ok';
  }else{
      return 'error';
  }
  $stmt->close();
  $stmt = null;
}
static public function deleteCar($data){
  
  $id=$data["id"];
  try{
    $stmt = DB::connect() ->prepare('DELETE  FROM cars WHERE car_id =:id ');
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


















?>
