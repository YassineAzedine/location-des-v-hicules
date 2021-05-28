<?php
if(isset($_SESSION['admin'])){
$data = new UsersController();
$users = $data -> getAllUsers();

}
else{
    Redirecte::to ("home");
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
<div class="row">
<div class="col-md-10">
<form id ="delete_form" action="<?php echo BASE_URL?>deleteUser" method="post" >
<input type="hidden" name ="delete_user_id" id ="delete_user_id">
</form>


   <table class="table table-striped table-info table-bordered table-hover">
   <thead>
   <th></th>
   <th>Nom & Prenom</th>
   <th>Username</th>
   <th>Email</th>
   <th>Action</th>

   
   </thead>
   <?php foreach($users as $user ):?>
   <tbody>
   <td><?php echo $user["user_id"]  ?></td>
   <td><?php echo $user["fullname"]  ?></td>
   <td><?php echo $user ["username"]  ?></td>
   <td><?php echo $user ["email"]  ?></td>
   
<td><a onclick ="deleteUser(<?php echo $user['user_id'];?>)" class="btn btn-danger btn-sm " > <i class="fas fa-trash-alt"></i> </a>  </td>



   
   </tbody>
   <?php endforeach ;?>
   
   </table>
    
   </div>
</div>


</div>