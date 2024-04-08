<?php 
class User extends Models
{
public function __construct()
{

    parent::__construct();

    $this->table="user";
}


public function getAllUser()
{

    $this->sql="SELECT * FROM  ".$this->table."  ";
    return $this->getLines();
}

public function DeleteUser($datas)
{
    $this->sql= "delete from " . $this->table . " where id = :id ";
    return $this->getLines($datas,null);

}

public function modifyUser($datas)
{
    $this->sql="UPDATE user SET email= :email,fname=:fname,lname=:lname,role_id=:role_id, numero_telephone=:numero_telephone WHERE id=:id";
        return $this->getLines($datas,true);
}















}









?>