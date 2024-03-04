<?php

require_once "./autoload.php";



$params= explode("/",$_GET['p']);
if(!empty($params[0]))
{$controller=ucfirst( $params[0]);
    if(file_exists("./controllers/$controllers.php"))
 $controller= new $controller ();
$action= (isset($params[1])) ?$params[1]:"index";
if(method_exists($controller, $action))
{
    $controller->$action();
}
    
    
}




//$oAuths =new Auths;

//$oAuths->login();
var_dump($_GET);
 ?>
