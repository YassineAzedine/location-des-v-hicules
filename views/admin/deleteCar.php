<?php
if (isset($_SESSION["admin"]) && $_SESSION["admin"] == true){


$data = new CarsController();
$data->removeCar();
       }
     


?>