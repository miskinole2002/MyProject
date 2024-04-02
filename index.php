<?php
define("SOURCE",str_replace("index.php","",$_SERVER['SCRIPT_FILENAME']));
 require_once SOURCE."autoload.php"; 
// str replace permet de changer une chaine de caractere par une autre valeur 

//require_once"./controllers/Auths.php";
//$params= $_GET['p'];
//echo $params;

$params= explode("/",$_GET['p']);// permet de separer les chaines de caracteres en fontion du separateur qu on defini

//var_dump($params) ;

 if(!empty($params[0]))
 {
     $controller=ucfirst( $params[0]);
  //$controller= new $controller ();
  //var_dump($controller);
 if(file_exists(SOURCE."./controllers/".$controller.".php")){
  $controller= new $controller();
  // var_dump($controller);
  $action="index";
  if (!empty($params[1])){
     $action=$params[1];
    //  var_dump($action);
    
 }else{
     echo 'action vide';
  }
  //var_dump($action);
 $action=(!empty($params[1])) ? $params[1]: 'index';
 if(method_exists($controller, $action))
 {
     $controller->$action();
 }
 else{echo 'action inexistant';}
    
}else{echo 'classe inexistant';}


 }

// $oAuths =new Auths;

// $oAuths->inscription();
// var_dump($_GET);
 ?>
