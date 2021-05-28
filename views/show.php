<?php
    $data = new carsController();
    $car = $data->getcar();
?>
<div class="container">
    <div class="row my-5">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <div class="card h-100 bg-white rounded p-2">
                        <div class="card-header bg-light">
                            <h3 class="card-title">
                                <?php
                                    echo $car-> marque;
                                ?>
                            </h3>
                        </div>
                        <div class="card-img-top">
                            <img width="100%"
                            src="./public/uploads/<?php echo $car->image;?>" alt="" class="img-fluid rounded">
                        </div>
                        <div class="card-body">
                       <strong>   <p class="card-text">
                              model :  <?php
                                   echo $car-> model;
                                ?>
                            </p>
                            <p class="card-text">
                          type :      <?php
                                   echo $car-> type;
                                ?>
                            </p></strong> 
                        </div>
                        <div class="card-footer">
                            <span class="badge badge-danger p-2">
                            Prix/Jour :    <?php
                                        echo $car ->prixj ;
                                ?>dh
                            </span>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        
        <div class="card h-100 bg-white rounded p-2 bg-primary ">
  <form method="post" action="<?php echo BASE_URL; ?>checkout">

  
  
  <div class="form-group ">
  <label for="car_jrs"> <strong>Les Jours :</strong> </label>
  <input type="number" name="car_jrs" id="car_jrs" class="form_control" value="1" >
  <div class="card h-100 bg-white rounded p-2 card text-dark  mb-3">
<div class="form-groupe">

  <label for="dateL"> <strong> Date de debut :</strong> </label>

  <input type="date" name="dateL" id="dateL" class="form_control" value="1" >

  <label for="dateR"> <strong>Date de fin  :</strong> </label>

  <input type="date" name="dateR" id="dateL" class="form_control" value="1" >

  <input type="hidden" name ="marque" value="<?php echo $car->marque ;?>">
  <input type="hidden" name ="car_id" value="<?php echo $car -> car_id ;?>">
  </div>
  
  </div>
   <div class="form_group text-center">
   <input  type="submit" class ="btn btn-primary" value="Ajouter une Réservation">
   
   
   
    </input>

   </div>
  
  </form>
  </div>
  
  
  </div>


</div>
    </div>
</div>
