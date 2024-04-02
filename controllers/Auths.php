<?php 



class Auths extends Controller  // dans le but de faire un heritage 
{
  
  public function __construct(){
    parent::__construct();
  }

    public function login()
    {
      $this->render("login");
       
    }

    public function inscription()
    {
      $erreurs=[];
     
       

      if(isset($_POST['ajout']))
      {  
          $Valid= new Validation();
          $tab=[
            'user_name'=>$_POST['user_name']
          ];
          $userName= $Valid->user_name_isValid($tab);
        
          $surName=$Valid->f_nameIsvalid(trim($_POST['Surname'])); 
        
          $name=$Valid->nameIsValid(trim(($_POST['name'])));
          
          $email=$Valid->Email_Is_Valid(trim($_POST['Email']));
        
          $pwd=$Valid->pwd_Is_Valid(trim($_POST['Password']));
        
          $tel=$Valid->tel_Is_Valid(trim($_POST['tel']));
            
         
          $Auth=new Auth();
          $fieldValidation=true;
          unset($_POST['ajout']);

          $Validation= $Valid->isValid($_POST);
          if($Validation)
          {
            
         
           if ($userName['isValid']==false)
           {
           $fieldValidation=false;
           }
        
          if($surName['is valid']==false)
          {
              $fieldValidation=false;
          }
          if ($email['is valid']==false)
          {
            $fieldValidation=false;
          }
          if ($pwd['is valid']==false)
          {
            $fieldValidation=false;
          }
          if ($tel['is valid']==false)
          {
            $fieldValidation=false;
          }
          if ($pwd['is valid']==false)
          {
            $fieldValidation=false;
          }
          if ($name['is valid']==false)
          {
            $fieldValidation=false;
          }
          if ($fieldValidation==true)
          {
               var_dump("ma validation est ok");
             //  $_POST['password']=password_hash( $_POST['password'],PASSWORD_DEFAULT);
               //var_dump( $_POST['password']);
               $data=[
            
                "user_name"=>$_POST["user_name"],
                "email"=>$_POST["Email"],
                "pwd"=> password_hash( $_POST['password'],PASSWORD_DEFAULT),      // $_POST['password'],
                "fname"=>$_POST["Surname"],
                "lname"=>$_POST["name"],
               "token"=>'bonjour', 
               "role_id"=>3,
                "numero_telephone"=>$_POST["tel"]
            ];

            var_dump($data);
              $Auth->inscription($data);

          }else
          {
            $erreurs=[

              'user_name' => $userName["message"],
              'name'=> $name["message"] ,
              'surName'=>  $surName["message"] ,
              'email' => $email["message"],
              'pwd' => $pwd["message"],
              'numero_telephone'=>$tel['message']
            ];



          }
        
        
        
        
       }else{
        $erreurs['message']='verifiez bien que tous les champs sont bien remplis svp !';
        $this->render("inscription",$erreurs);
        var_dump($_POST);

       }
       

      }
      //echo " je suis la fonction ";
       $this->render("inscription",$erreurs);
      //  require_once("./views/layout/default.php");
    }


}









?>