<div class="container p-3 mb-2 bg-dark text-white">
<div class="row">
<div class="col-md-8">
<table class="table table-dark  table-striped table-bordered">
<button>


</button>
  
  <thead>
 
    <tr>
      
      <th scope="col">Marque</th>
      <th scope="col">Prix jounalier</th>
      <th scope="col">Date de Debut</th>
      <th scope="col">Date de Fin</th>
      <th scope="col">Les Jours</th>
      <th scope="col">Total </th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  <div>
<button class="form-controll btn btn-info " onclick="window.print()">Imprimer la Résérvation</button> <br> <br>

    </div>
  <?php foreach ($_SESSION as $name => $car) :?>
<?php if(substr($name,0,5) == "cars_"):?>

    <tr>
 
      
      <td><?php echo  $car["marque"]; ?></td>
      <td><?php echo $car["price"]; ?>  <strong style ="color:green;">DH</strong></td>
      <td><?php echo  $car["dateL"]; ?> <strong style ="color:green;"></strong> </td>
      <td><?php echo  $car["dateR"]; ?> <strong style ="color:green;"></strong> </td>
      <td><?php echo  $car["jours"]; ?> <strong style ="color:green;">Jours</strong> </td>
      <td><?php echo  $car["total"]; ?> <strong style ="color:green;">DH</strong> </td>


    <td>
   
    <form method="post" action="<?php BASE_URL?>cancelcart">
    
<input type="hidden" name ="car_id" value='<?php echo $car ["id"];?>'>
   
   <button type="submit "  class="bg-danger">
   <i class="  fas fa-trash-alt"></i> 
   </button>
   
    
     </form>
     
    
    </td>
    
 

    <?php endif;?>
<?php endforeach;?>

  
     
    </tr>
  </tbody>
</table>
<?php if(isset ($_SESSION["logged"])): ?>
<form  method ="post" action="<?php echo BASE_URL;?>addOrder">
<input class="form-controll btn btn-primary " type="submit" value= "Valider la Réservation"; >


</form>
<?php else:?>

<a href="<?php echo BASE_URL;?>login"> Connectez vous pour terminer vos Résérvation </a>
<div >

</div>

<?php endif;?>




</div>

<div class="col-md-4">
 <div class="table-responsive bg-info ">
  <table class="table ">
  <th>
   Louer une voiture:
  </th>
  <th>
   prix/jour:
  </th>
  <tr>
 <td>   <img width="400" height="100" src="./public/uploads/<?php echo $car["image"];?>" alt="" class="img-fluid"> </td>
 
 <td><?php echo  $car["price"]; ?> <strong style ="color:green;">DH</strong> </td>
 </tr>
  </table>
</div>

</div>





</div>