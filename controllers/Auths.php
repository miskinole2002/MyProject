<?php 
//require_once"../app/Controller.php";


class Auths extends Controller  // dans le but de faire un heritage 
{
  
  public function __construct(){
    parent::__construct();
  }

    public function login()
    {
      // verifiez la connection 
      if(isset( $_SESSION["user"]))
      {

        header("Location: ". URI ."products/index ");
      }
      
      $errors=[];
      if(isset($_POST['connect'])){
        $pwd=$_POST['Password'];
        unset($_POST['connect']);
        $Valid= new Validation();
        $Validation=$Valid->isValid($_POST);
        if($Validation)
        {
          unset($_POST['Password']);
          $Auth=new Auth();
          $user= $Auth->findByUser_name($_POST);

         //verifier si le user name existe 

            if($user)
            { //on compare les mots de passe
              $verify=password_verify($pwd,$user->pwd);
                    if($verify){
                        var_dump($user->token);
                        $token = hash('sha256', random_bytes(32));
                        $tab=[
                          "user_name"=>$user->user_name,
                          "token"=>$token
                        ];
                        $Auth->Update_token($tab);
                        unset($user->pwd);
                        $_SESSION['user']=$user;

                        header("Location: ". URI ."products/index ");//fonctionqui permet de changer l entete de notre url;

                    }else{
                      $errors['message2']='mot de passe incorrect veuillez reessayer ';
                    }
              

            }else{
                $errors['message1']='nom d utilisateur  inexistant  veuillez reessayer ';

            }


        }else{
          $errors['message']='veuillez verifier que tous les champs sont remplis svp !!!!';
         
        }

          
   
      }
      
      
      $this->render("login",$errors);
       
    }

    public function inscription()
    {
      if(isset( $_SESSION["user"]))
      {

        header("Location: ". URI ."product/index ");
      }

      $erreurs=[];
     
      // var_dump($_POST['Password']);

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
             // $_POST['Password']
             $pwd =password_hash( $_POST['Password'],PASSWORD_DEFAULT);
              
              $data=[
            
                "user_name"=>$_POST["user_name"],
                "email"=>$_POST["Email"],
                "pwd"=>password_hash($_POST['Password'],PASSWORD_DEFAULT),      // $_POST['password'],
                "fname"=>$_POST["Surname"],
                "lname"=>$_POST["name"],
               "token"=>'bonjour', 
               "role_id"=>2,
                "numero_telephone"=>$_POST["tel"]
            ];

           var_dump($data);
             $Auth->inscription($data);
             header("Location: ". URI . 'auths/login');

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

    public function deconnexion()
    {
      unset($_SESSION['user']);
      header("Location: ". URI ."products/index ");
    }

}









?>