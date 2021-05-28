<?php
if(isset($_SESSION['admin']) && $_SESSION['admin']==true){
    $data = new OrdersController();
    $orders = $data ->getAllOrders ();

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
<form id ="delete_form" action="<?php echo BASE_URL?>deleteOrder" method="post" >
<input type="hidden" name ="delete_order_id" id ="delete_order_id">
</form>

<div class="row">
<div class="col-md-10 ">

<table class="table table-striped table-info table-bordered table-hover">
<thead>
<th></th>
<th>Nome & Prenom</th>
<th>la vehecule </th>
<th>Les Jours</th>
<th>Prix Journne</th>
<th>Total</th>
<th>date de debut</th>
<th>date de Fin</th>
<th>effectue</th>
<th>Action</th>



</thead>

<tbody>
<?php foreach($orders as $order):?>
<tr>
<td> <?php echo $order["id"];?></td>

<td> <?php echo $order["fullname"];?></td>
<td> <?php echo $order["marque"];?></td>
<td> <?php echo $order["jours"];?></td>
<td> <?php echo $order["price"];?></td>
<td> <?php echo $order["total"];?></td>
<td> <?php echo $order["dateL"];?></td>
<td> <?php echo $order["dateR"];?></td>
<td> <?php echo $order["done_at"];?></td>
<td>
<a onclick ="deleteOrder(<?php echo $order['id'];?>)" class="btn btn-danger btn-sm " > <i class="fas fa-trash-alt"></i> </a>  </td>


</tr>
<?php endforeach;?>

</tbody>


</table>




</div>



</div>



</div>