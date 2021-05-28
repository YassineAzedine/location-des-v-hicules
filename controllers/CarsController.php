<?php
  
         

        class CarsController{
            public function getAllCars(){
                $cars = Car::getAll();
                return $cars;
            }
            public function getCarsByCategory($id){
                if(isset($id)){
                    $data = array(
                        'id' => $id
                    );
                    $cars = Car::getCarByCat($data);
                    return $cars;
                }
         
        }
        public function getCar(){
            if(isset($_POST["car_id"])){
                $data = array(
                    'id' => $_POST["car_id"]
                );
                $car = Car::getCarById($data);
                return $car;
            }
    }
    public function newCar(){
        if(isset($_POST["submit"])){
            $data = array(
               
                "marque" => $_POST["marque"],
                "type" => $_POST["type"],
                "prixj" => $_POST["prixj"],
                "image" => $this->uploadPhoto(),
                "car_category_id" => $_POST["car_category_id"],
                "model" => $_POST["model"],
                
            );
            $result = Car::addCar($data);
            if($result === "ok"){
                Session::set("success","Cars ajouté");
                Redirect::to("Cars");
            }else{
                echo $result;
            }
            
        }
  
    }
    public function updateCar(){
        if(isset($_POST["submit"])){
            $oldImage=$_POST["image_current_image"];
            $data = array(
                "car_id" => $_POST["car_id"],
                "marque" => $_POST["marque"],
                "type" => $_POST["type"],
                "prixj" => $_POST["prixj"],
                "image" => $this->uploadPhoto($oldImage),
                "car_category_id" => $_POST["car_category_id"],
                "model" => $_POST["model"],
                
            );
            $result = Car::editCar($data);
            if($result === "ok"){
                Session::set("success","Cars modifier");
                Redirect::to("Cars");
            }else{
                echo $result;
            }
            
        }
  
    }
    public function uploadPhoto($oldImage = null){
        $dir = "public/uploads";
        $time = time();
        $name = str_replace(' ','-',strtolower($_FILES["image"]["name"]));
        $type = $_FILES["image"]["type"];
        $ext = substr($name,strpos($name,'.'));
        $ext = str_replace('.','',$ext);
        $name = preg_replace("/\.[^.\s]{3,4}$/", "",$name);
        $imageName = $name.'-'.$time.'.'.$ext;
        if(move_uploaded_file($_FILES["image"]["tmp_name"],$dir."/".$imageName)){
            return $imageName;
        }
        return $oldImage;
    }

   public function removeCar(){

if(isset($_POST["delete_car_id"])){

  $data =array(
      "id" => $_POST["delete_car_id"]
  );

  $result = Car::deleteCar($data);
            if($result === "ok"){
                Session::set("success","Cars supprimer");
                Redirect::to("Cars");
            }else{
                echo $result;
            }

}


   }


}
  
    


?>