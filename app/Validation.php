<?php 
require_once SOURCE."models/Auth";
class Validation
{       
    public function isValid($datas)
    {
        foreach($datas as $data)
        {
            if(empty($data)){
                return false ;
            }

        }
        return true ;

    }
    
    public function user_name_isValid($datas){
        $auth=new Auth();

       // $length=strlen($data);
        $userInDB= $auth->findByUser_name($datas) ;
        $reponse=[
            "is valid"=> true,
            "message"=> "",
        ];
        foreach($datas as $data){
            $length=strlen($data);
        }
         if($length<3){
             $reponse=[
                 "isValid"=> false,
                 "message"=> "le nom d utilisateur est trop court ",
             ];
         }elseif($length>50) {
             $reponse=[
                 "isValid"=> false,
                 "message"=> "le le nom d utilisateurS est trop long ",
             ];
         }else
        if ($userInDB) {
            $reponse = [
                'isValid' => false,
                'message' => 'Le nom d utilisateur est déjà utilisé veuillez changer!!'
            ];
        }

        return $reponse;
    }

    // validation du nom 
    public function nameIsValid($Name)
    {
        $length = strlen($Name);
        $reponse=[
            "is valid"=> true,
            "message"=> "",
        ];
        if($length<3){
            $reponse=[
                "is valid"=> false,
                "message"=> "le nom  est trop court ",
            ];
    
        }
        return $reponse;
    }


    public function f_nameIsvalid($f_name)
    {

        
    $length = strlen($f_name);
    $reponse=[
        "is valid"=> true,
        "message"=> "",
    ];
    if($length<3){
        $reponse=[
            "is valid"=> false,
            "message"=> "le prenom est trop court ",
        ];


    }elseif($length>50) {
        $reponse=[
            "is valid"=> false,
            "message"=> "le prenom  est trop long ",
        ];
   
    }
    return $reponse;



    }

    public function  Email_Is_Valid($email)
    {
        $reponse=[
            "is valid"=> true,
            "message"=> "",
        ];
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $reponse=[
                "is valid"=> true,
                "message"=>  ""
            ];
    
    
        }else
        {
            $reponse=[
                "is valid"=> false,
                "message"=>  "L'adresse email '$email' est considérée comme  invalide."
            ];
    
        };
       
        
        return $reponse;
    } 



    public function pwd_Is_Valid($pwd)
    {
        $caracteres='/[^\w\s]/';
        if(preg_match($caracteres,$pwd))
        {
            $reponse=[
                "is valid"=> true,
                "message"=>  ""
            ];
    
        }else
        {
            $reponse=[ 
                "is valid"=> false ,
                "message"=>  "Le mot de passe doit avoir des caracteres speciaux."
            ];
    
        
    }
    
    return $reponse;


    }

    public function tel_Is_Valid($data)
    {$reponse=[
        "is valid"=>true,
        'message'=>""
    ];
    $long=strlen($data);
    if($long<10 || $long>10){
        $reponse=[
            "is valid"=>false,
            'message'=>"numero doit contenir 10 chifffres "
        ];
    }
    return $reponse;

    }










}

?>