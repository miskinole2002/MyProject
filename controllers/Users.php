<?php
class Users extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function gestionUser()
    {
        $users = new User();
        $users->getAllUser();
        $users = $users->getAllUser();




        $this->render('gestionUser', compact('users'));
    }
    public function supprimer()
    {
        $users= new User();
        var_dump($users);
        var_dump($_GET);

        $params=explode("/",$_GET['p']);
        $this->render('supprimer');
       $data=['id'=>$params[2]];
        var_dump($data);
       $users->DeleteUser($data);
       header("Location ".URI." users/gestionUser");
        
    }
    public function modifier()
    {
        $users=new User();
        if(isset($_POST["modifier"]))
        {
           // var_dump($_POST);
            unset($_POST["modifier"]);
            //var_dump($_POST);
          //  var_dump($_GET);
            $params=explode("/",$_GET["p"]);
            var_dump($params);
          
            $data=[
                'id'=>$params[2],
                'email'=>$_POST['Email'],
                'fname'=>$_POST['Surname'],
                'lname'=>$_POST['name'],
                'role_id'=>$_POST['role_id'],
                'numero_telephone'=>$_POST['tel']


            ];

           // var_dump($data);

            $users->modifyUser($data);

            header("Location ".URI." users/gestionUser");


        }
        $this->render('modifier');
    }
}
