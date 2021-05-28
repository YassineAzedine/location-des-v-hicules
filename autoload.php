<?php

    //pour chager les fichier toute pour non repete pas inclincolld

  session_start();
  require_once("./bootstrap.php");

  spl_autoload_register('autoload');
  function autoload($class_name){
      $array_path =array(
          'database/',
          'app/classes/',
          'models/',
          'controllers/'
      );
      $parts = explode('\\',$class_name);  // explode separee les index comme des array
      $name = array_pop($parts);  //recupere akhir haja f array

      foreach($array_path as $path){
          $file = sprintf($path.'%s.php',$name);
          if(is_file($file)){
              include_once $file;
          }
      }


  }

















?>

    



