

<?php
    if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true){
        $categories = new CategoriesController();
        $categories = $categories->getAllCategories();
        $carToUpdate = new CarsController();
        $carToUpdate = $carToUpdate -> getCar();
        if(isset($_POST["submit"])){
            $car = new CarsController();
            $car->updateCar();
        }
    }else{
        Redirect::to("home");
    }
?>
<div class="container">

<form class="container-fluid justify-content-start ">
  <button class="btn btn-outline-success me-2" type="button"><a href="<?php echo BASE_URL ?>home"> <i  class="fas fa-home fa-3x"></i></a></div>
  

</button>
</form>
<form class="container-fluid justify-content-start ">
  <button class="btn btn-sm btn-outline-secondary me-2" type="button"> <a class="btn btn-secondary text-danger" href="<?php echo BASE_URL?>dashboard"><i class="fas fa-arrow-left "></i>  </a></div>  </button>
</form>


</div>

<div class="container">

    <div class="row my-4">
    
        <div class="col-md-6 mx-auto">
        <div class="button btn btn-gry"><a  href="<?php echo BASE_URL ;?>Cars"><i class="fas fa-undo "></i></a></div>


            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                      modifier Cars
                    </h3>
                </div>
                <div class="card-body">
                    <form method="post" class="mr-1" enctype ="multipart/form-data">
                        <div class="form-group">
                            <input type="text"
                            class="form-control"
                            name="marque" required autocomplete="off" placeholder="marque" value="<?php  echo $carToUpdate->marque; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" autocomplete="off" class="form-control" name="type"
                            placeholder="type" value="<?php  echo $carToUpdate->type; ?>">
                        </div>
                        <input type="hidden" autocomplete="off" class="form-control" name="car_id"
                            placeholder="type" value="<?php  echo $carToUpdate->car_id; ?>">
                            <input type="hidden" autocomplete="off" class="form-control" name="image_current_image"
                            placeholder="type" value="<?php  echo $carToUpdate->image; ?>">
                        <div class="form-group">
                            <input type="text" autocomplete="off" class="form-control" name="model"
                            placeholder="model" value="<?php  echo $carToUpdate->model; ?>">
                        </div>
                        <div class="form-group">
                            <input type="number" autocomplete="off" class="form-control" name="prixj"
                            placeholder="Prix Journné" value="<?php  echo $carToUpdate->prixj; ?>">
                        </div>
                        <div class="form-group">
                           <select name="car_category_id" id="">
                           <?php foreach($categories as $category) : ?>
                           
                            <option  <?php echo $carToUpdate->car_category_id === $category["cat_id"]?"selected" : ""  ?>
                            
                            value="<?php echo $category["cat_id"] ?>">

                            <?php echo $category["cat_title"]?>
                            
                            
                            </option>

                           <?php endforeach; ?>
                           
                           </select>
                        </div>
                        <div class="form-group">
                        <img width="80" height="50" src="./public/uploads/<?php echo $carToUpdate->image ;?>" alt="">
                        
                        </div>
                        <div class="form-group">
                            <input type="file"  class="form-control" name="image"
                            id="">
                        </div>
                        <div class="form-group">
                            <button name="submit" class="btn btn-primary">
                                Valider
                            </button>
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>
</div>


