<?php 
class Product extends Models
{


        public function __construct()
        {
            parent::__construct();
            $this->table ="product";
        }   

        public function ajouter($datas)
        {
            $this->sql="insert into  ".$this->table." (name, quantity,price,image,description	) Values(:name,	:quantity,:price,	:image,:description);";
            return $this->getLines($datas,null);
        }


        public function modifier($datas)
        {
            $this->sql="UPDATE  ".$this->table."    SET name = :name, quantity = :quantity , price = :price, image=:image ,description = :description WHERE id = :id;";
            return $this->getLines($datas,true);
        }

        public function supprimer($datas)
        {
            $this->sql= "delete from " . $this->table . " where id = :id ";
            return $this->getLines($datas,null);

        }

        public function getAll()
        {
            $this->sql="SELECT * FROM ".$this->table." ";
            return $this->getLines(); 
        }

        public function findProductByid($data)
        {
            $this->sql="SELECT * FROM ".$this->table." where id =:id ";
            return $this->getLines($data,true); 
        }

}
















?>