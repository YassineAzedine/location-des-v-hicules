<?php
require_once './autoload.php';
require_once("./views/includes/header.php");

$home = new HomeController();

$pages = [
        'home','cart','dashboard','updateCar','deleteCar',
        'addCar','emptycart','show','cancelcart','singup',
        'users','som','deleteOrder','deleteUser',
        'login','checkout','logout','Cars','orders','addOrder'
    ];

if(isset($_GET['page'])){
    if(in_array($_GET['page'],$pages)){
        $page = $_GET['page'];
        if($page === "dashboard" || $page === "deleteCar" 
        || $page === "users"      || $page === "som" || $page === "deleteOrder"
        || $page === "deleteUser"
            || $page === "addCar"  || $page === "updateCar" || $page === "Cars" ||
            
            $page === "orders"){
                if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){
                    $admin = new AdminController();
                    $admin->index($page);
                }else{
                    include('views/includes/404.php');
                }
        }else{
            $home->index($page);
        }
    }else{
        include('views/includes/404.php');
    }
}else{
    $home->index("home");
}

require_once("./views/includes/footer.php");
