<?php 
//elle nous permettra de nous connecter sur notre base de donne
class Auth extends Models   // elle herite de model dans le but de nous creer une connection
{ 
    public function __construct(){

        parent::__construct() ;
        $this->table="user";
    }
        public function inscription ($datas){
            $this->sql="INSERT INTO user(user_name,email,pwd,fname,lname,token,role_id,numero_telephone)values(:user_name,:email,:pwd,:fname,:lname,:token,:role_id,:numero_telephone)";
            return $this->getLines($datas,null);// null parcequ'on fait une insertion 
    }
    public function findByUser_name($datas){
        $this->sql="SELECT * FROM ".$this->table." where user_name=:user_name";
        return $this->getLines($datas,true); // true parcequ'on effectue une recherche 
    }
     public function Update_token($datas)
     { $this->sql="UPDATE user SET token = :token WHERE user_name=:user_name";
        return $this->getLines($datas,true);
     }

}