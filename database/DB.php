<?php


  class DB{
      static public function connect(){
          $db = new PDO("mysql:host=localhost;dbname=location","root","");
          $db->exec("set names utf8"); //pour encod
          $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);  //pour les  erorooo
          return $db;
      }
  }






?>