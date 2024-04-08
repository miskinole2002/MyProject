<?php 
class Panier
{
    const NAME="panier";

    public function __construct()
    {

        if(!isset($_SESSION[self::NAME]))
        {
            $_SESSION[self::NAME]=[];
        }
    }

    public function ajouter($id ,$quantity)
    {
        $_SESSION[self::NAME][$id]=$quantity;

    }

    public function supprimer($id)
    {
        unset($_SESSION[self::NAME][$id]);
    }

    public function getAll()
    { $product=[];
        foreach($_SESSION[self::NAME] as $id=>$quantity)
        {
            $products = new Product();
            $product[]=$products->findProductByid(compact("id_film"));
        }
    }
}












?>