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




<div class="row">
  



   >
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="views/admin/ve.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">   <h1 class="  card-title"><?php if(isset($_SESSION['admin'])){
         $data = new CarsController();
         $cars = $data->getAllCars();
     echo count($cars);
    } 
    ?>
    </h5>
    <h5 class="card-title text-danger">véhicule</h5>


      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="views/admin/re.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h1 class="card-title">
        <?php if(isset($_SESSION['admin'])){
     $data = new OrdersController ();
     $order = $data ->getAllOrders();
     echo count($order);  
        }
    ?>   </h1>
   
    <h5 class="card-title text-danger">Réservation</h5>


      </div>
    </div>
  </div>
  
</div>