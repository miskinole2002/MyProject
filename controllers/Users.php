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

            $data=['id'=>$params[2]];
              //  var_dump($data);
            
              //  var_dump($data);
                $this->render('supprimer');

            $users->DeleteUser($data);
            header("Location ".URI." users/gestionUser");
                
            }
            public function modifier()
            {    $tab=[];
                $users=new User();
                $params=explode("/",$_GET["p"]);
                $datas=['id'=>$params[2]];
            $users->findUserById($datas);
            
           // var_dump($users->findUserById($datas));
           
            $tab= $users->findUserById($datas);
            $user=[
                'id'=>$tab->id,
                'user_name'=>$tab->user_name,
                'name'=>$tab->fname,
                'prenom'=>$tab->lname,
                'email'=>$tab->email,
                'role'=>$tab->role_id,
                'numero_telephone'=>$tab->numero_telephone

            ];
         //   var_dump($user);

                if(isset($_POST["modifier"]))
                {
                // var_dump($_POST);
                    unset($_POST["modifier"]);
                   

                  //  var_dump($user);
                
                    $data=[
                        'id'=>$params[2],
                        'email'=>$_POST['Email'],
                        'fname'=>$_POST['Surname'],
                        'lname'=>$_POST['name'],
                        'role_id'=>$_POST['role_id'],
                        'numero_telephone'=>$_POST['tel']


                    ];

              //  var_dump($data);

                $users->modifyUser($data);

                 //   header("Location ".URI." users/gestionUser");


                }
            

            
                $this->render('modifier',$user);

            }
}