<?php 
class Controller{

public function __construct(){

}
public function render($fichier,$data=[]){
    extract($data);// transforme les cle sous forme de variable
    //var_dump($name);
    ob_start(); //permet de demarrer un flux 
    //get_class permet de retourner le nom d une classe 
require_once("./views/" . lcfirst(get_class($this)) . "/" . $fichier.".php");
$contenu=ob_get_clean();
require_once("./views/layout/default.php");

}

}











?>