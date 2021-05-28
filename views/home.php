<?php
    $categories = new CategoriesController();
    $categories = $categories->getAllCategories();
    if(isset($_POST["cat_id"])){
        $cars = new CarsController();
        $cars = $cars->getCarsByCategory($_POST['cat_id']);
    }else{
        $data = new CarsController();
        $cars = $data->getAllCars();
    }
?>

<div class="  container-fluid" style ="position:absolute;background-size;">
<div id="carouselExampleControls" class="carousel slide " data-ride="carousel"    >
  <div class="carousel-inner">
    <div class="carousel-item active" style ="background-size:cover;">
      <img class="d-block w-100" src="views/img/img3.jpg" alt="First slide">
     
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="views/img/imgb5.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="views/img/imgb3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
</div></div>
<div class="container">
<div class="row">
   </div>
<div class="col-m12 animate__backInLeft">
<h3 class="text-secondary m-3 text-center shadow-sm p-3 mb-5 bg-body rounded">
                Catégories
            </h3>
            <ul class="list-group ">
                <?php
                    foreach($categories as $category) :
                ?>
                    <li class="list-group-item text-center list-group-item-warning shadow-sm p-3 mb-5 bg-body " ">
                        <form id="catPro" method="post" action="<?php echo BASE_URL;?>">
                            <input type="hidden" name="cat_id" id="cat_id">
                        </form>
                        <a onclick="getCatCars(<?php echo $category['cat_id'];?>)" class="btn btn-link text-secondary  " style="text-decoration:none;font-size:24px;cursor:pointer">
                           <?php
                                echo  $category['cat_title']; 
                            ?>
                           
                           :<i class="fas fa-car"></i> (<?php
                                $carsByCat = new CarsController();
                                $carsByCat = $carsByCat->getCarsByCategory($category['cat_id']);
                                echo count($carsByCat);
                            ?>) 
                        </a>
                    </li>
                <?php
                    endforeach;
                ?>
            </ul>
    </div>
    <div class="col-md-6 col-xd-12 ">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="views/img/i.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="views/img/ii.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="views/img/z.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
    

             </div> 
        </div>
</div>

    </div>
    </div>  






    <div class="row my-12" > </div>

    <div class="row my-12" > 
        <div class="col-md-12 ">
            <div class="row">
                <?php
                    if(count($cars) > 0) :
                     
                ?>
                <?php
                    foreach($cars as $car) :
                ?>
                <div class="col-md-6 mb-6  ">
                    <div class="card h-100 bg-white rounded p-2 ">
                        <div class="card-header bg-light">
                    <form id ="form" method="post" action="<?php echo BASE_URL;?>show   " class="btn btn-link text-secondary" style="text-decoration:none;font-size:24px;cursor:pointer">
                              <input type="hidden" name ="car_id" id ="car_id">
                              </form>

                              <h3 onclick="submitForm(<?php echo $car["car_id"];?>)" class="card-title" class="btn btn-link text-secondary" style="text-decoration:none;font-size:24px;cursor:pointer">

                              <button type="button" class="btn btn-primary">Réservez maintenant</button> <?php
                                  echo $car['marque'];
                              ?>
                              </h3>
                                                      </div>
                        <div class="card-img-top">
                            <img src="./public/uploads/<?php echo $car["image"];?>" alt="" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                             
                        </div>
                        <div class="card-footer">
                        <div class="bg-primary">  Model :<strong>  <?php
                                    echo  $car['model'];
                                ?></strong>
                            </p>   </div>
                            <span class="badge badge-danger p-2">
                               Prix/Jour :<?php
                                    echo $car['prixj'];
                                ?>dh
                            </span>
                             <span class="badge badge-dark p-2">
                               
                                    <?php
                                        echo $car['type'];
                                    ?>
                               
                            </span>
                        </div>
                    </div>
                </div>
                <?php
                    endforeach;
                ?>
                <?php
                    else :
                ?>
                <div class="alert alert-info">
                  aucun véhecule trouver
                </div>
                <?php
                    endif;
                ?>
            </div>
        </div>

    </div>
    <div class="container">
    <h1 class="text-center text-warning">comment ça march</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      
      <div class="card-body bg-warning ">
        <h5 class="card-title text-center"><i class="fas fa-calendar-alt fa-5x"></i></h5>
        <h3 class="card-title text-center">Entrez vos dates de location </h3>
        <p class="card-text"></p>
      </div>
      
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
   
      <div class="card-body bg-warning ">
        <h5 class="card-title text-center"><i class="fas fa-car fa-5x"></i></h5>
        <h3 class="card-title text-center ">Choisissez votre véhicule</h3>
      </div>
      
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
   
      <div class="card-body bg-warning ">
        <h5 class="card-title text-center "><i class="fas fa-handshake  fa-5x"></i></h5>
        <h3 class="card-title text-center">Réservez</h3>
      </div>
     
    </div>
  </div>
</div>
</div>
<div class="card-footer text-muted ">

<div class="container text-center">
  <div class="row">
    <div class="col">
      <a href=""><i class="fab fa-facebook fa-3x"></i></a>
    </div>
    <div class="col">
      <a href=""><i class="fab fa-instagram-square fa-3x"></i></a>
      
    </div>
    <div class="col">
      <a href=""><i class="fab fa-twitter-square fa-3x"></i> </a>

    </div>
  </div>
  </div>
  </div>

  </div>
</div>
