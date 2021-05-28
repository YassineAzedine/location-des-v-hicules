<?php
 $order = new OrdersController() ;
foreach ($_SESSION as $name => $car){

if(substr($name,0,5) == "cars_"){


    $data = array(
          "fullname" => $_SESSION["fullname"],
          "marque" => $car["marque"],
          "jours" => $car["jours"],
          "dateL" => $car["dateL"],
          "dateR" => $car["dateR"],

          "price" => $car["price"],
          "total" =>$car["total"]
    );
    $order ->addOrder($data);
}else{
   Redirect::to('home');
}

}



?>