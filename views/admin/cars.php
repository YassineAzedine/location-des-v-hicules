
<?php
    $data = new CarsController();
    $cars = $data->getAllCars();

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

 <a href="<?php echo BASE_URL?>addCar" class="btn btn-primary" > Ajouter </a>  
<table class="table table-hover table-info table-bordered">
<form id ="form" action="<?php echo BASE_URL?>updateCar" method="post" >
<input type="hidden" name ="car_id" id ="car_id">
</form>
<form id ="delete_form" action="<?php echo BASE_URL?>deleteCar" method="post" >
<input type="hidden" name ="delete_car_id" id ="delete_car_id">
</form>

  <thead>
    <tr >
      <th scope="col"></th>
      <th scope="col">Marque</th>
      <th scope="col">Model</th>
      <th scope="col">Type</th>
      <th scope="col">image</th>
      <th scope="col">Prix</th>
      <th scope='col'>  Action</th>
    </tr>
  </thead>
 
  <tbody>
  <?php
foreach($cars as $car) :
?>
  
    <tr>
 
      <th scope="row"><?php echo $car['car_id']?></th>

      <td><?php echo $car['marque']?></td>
      <td><?php echo $car['model']?></td>
      <td><?php echo $car['type']?></td>
      <td><img width="80" height="50" src="./public/uploads/<?php echo $car["image"];?>" alt="" " </td>
      <td><?php echo $car['prixj']?></td>
     <td class="d-flex flex-row justify-content-center align-items-center"> <a onclick ="submitForm(<?php echo $car['car_id'];?>)"class="btn btn-warning btn-sm mr-1 " > Modifier </a>  
    <a onclick ="deleteForm(<?php echo $car['car_id'];?>)" class="btn btn-danger btn-sm " > Supprimer </a>  </td>
    </tr>


    
    <?php endforeach; ?>
 
  </tbody>
</table></div>
</div>
