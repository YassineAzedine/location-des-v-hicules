<?php
if(isset($_POST["car_id"])){
    $id = $_POST["car_id"];
    $data = new CarsController();
    $car = $data ->getCar();

    if(  $_SESSION["cars_".$car->car_id]=array(
        "id" => $car -> car_id,
        "marque" =>$car->marque,
        "price" => $car ->prixj,
        "image" => $car ->image,
        "jours" =>$_POST["car_jrs"],
        "dateL" =>$_POST["dateL"],
        "dateR" =>$_POST["dateR"],
        "total" =>$car->prixj * $_POST["car_jrs"],
    ));
  
    Redirect ::to ("cart");

    }else{
        
      echo "non insert";
    }







?>