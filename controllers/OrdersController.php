<?php

   


class OrdersController{
    public function getAllOrders(){
        $orders = Order::getAll();
        return $orders;
        }

                
         
                public function addOrder($data){
                    $result = Order::createOrder($data);
                    if($result === "ok"){
                        foreach($_SESSION as $name =>$car){
                            if(substr($name,0,5) =="cars_"){
                                unset($_SESSION[$name]);
                               
                            }
                        }
                            Session::set("success","Reservation effectuee veulliez contactez l'agence pour  validation ");
                            Redirect::to ("home");
                        }else{
                            Session::set("error","Ce véhicule n'est pas disponible actuellement");
                            Redirect::to ("cart");
                        }
                    }
                    public function removeOrder(){

                        if(isset($_POST["delete_order_id"])){
                        
                          $data =array(
                              "id" => $_POST["delete_order_id"]
                          );
                        
                          $result = Order::deleteOrder($data);
                                    if($result === "ok"){
                                        Session::set("success","Réservation supprimer");
                                        Redirect::to("orders");
                                    }else{
                                        echo $result;
                                    }
                        
                        }
                }
                }
              
                ?>