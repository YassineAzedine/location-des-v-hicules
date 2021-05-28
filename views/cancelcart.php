<?php

$id = $_POST["car_id"];
unset($_SESSION["cars_".$id]);
Redirect ::to ('cart');



?>