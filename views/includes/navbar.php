



<nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-dark   "  style="z-index:1; box-shadow:0.1 ;" >
<form class="d-flex " style="height:10px;width:10%">
       
       <div class="" type="submit"><img src="views/img/lgg.png " alt="" class="img-fluid  float-start  "></div>
     </form>

  <a class="navbar-brand" href="<?php echo BASE_URL;?>"><i class="fas fa-cars"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
    <li class="nav-item active text-light" style ="width:30%; height:50px">
        <a class="nav-link text-xl-start" href="<?php echo BASE_URL;?>">  <span class="sr-only">(current)</span></a>
      </li>
   
      <li class="nav-item active text-light">
        <a class="nav-link  fs-3 text-xl-start  " href="<?php echo BASE_URL;?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active text-light">
        <a class="nav-link  fs-3" href="<?php echo BASE_URL;?>">Contact <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item active text-light">
        <a class="nav-link  fs-3" href="<?php echo BASE_URL;?>">About<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active text-light">
    
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user"></i>
        compte
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
        <?php if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true):?>
          <a class="dropdown-item" href="#"><?php echo $_SESSION["fullname"];?></a>
          <a class="dropdown-item" href="<?php echo BASE_URL;?>logout">Déconnexion</a>
          <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true):?>
           <a class="dropdown-item " href="<?php echo BASE_URL;?>dashboard">Admin <span class="sr-only">(current)</span></a>
          <?php endif;?>
        <?php else:?>
          <a class="dropdown-item " href="<?php echo BASE_URL;?>singup">Inscription</a>
          <a class="dropdown-item " href="<?php echo BASE_URL;?>login"> Connexion</a>
        </div>
        <?php endif;?>
        
      </li>
      
    </ul>
   
  </div>
  
</nav>

