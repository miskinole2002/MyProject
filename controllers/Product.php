<?php 
 require_once "./autoload.php"; 

class Product extends Controller
{
    
public function __construct(){
    parent::__construct();
}
 public function index ()
 {
    $this->render("index");
  //  echo "je suis la page indeex";
 }
}




?>