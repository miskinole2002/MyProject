<?php
class Products extends Controller
{

    //public  $products= new Product();

    public function index()
    {
        $products = new Product();
        $products->getAll();
        $products = $products->getAll();

        $this->render("index",compact("products"));
    }
    public function __construct()
    {
        parent::__construct();
    }


    public function ajouter()
    {
        $err = [];
        if (isset($_POST['save'])) {
            unset($_POST['save']);

            $Validation = new Validation();
            if ($Validation->isValid($_POST)) {
                //
                //
                // var_dump($_FILES);
                if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
                    $image_name = $_FILES["image"]["name"];
                    $image_tmp = $_FILES["image"]["tmp_name"];
                    $image_destination = "assets/images/" . basename($image_name); // Chemin de destination du fichier sur le serveur

                    // Vérifier que le fichier est une image (facultatif mais recommandé)
                    // images/a-2-1634829071.JPG
                    $image_type = strtolower(pathinfo($image_destination, PATHINFO_EXTENSION));
                    // jpg
                    if (!in_array($image_type, array("jpg", "jpeg", "png", "gif"))) {
                        //echo "Seules les images JPG, JPEG, PNG et GIF sont autorisées.";
                        $err['imageErr'] = 'format image non valide , Seules les images JPG, JPEG, PNG et GIF sont autorisées svp.!!';
                    }
                    if (move_uploaded_file($image_tmp, SOURCE . $image_destination)) {
                        $product = new Product();
                        $_POST['image'] = $image_destination;

                        if ($product->ajouter($_POST)) {
                            echo "reussi";
                            header("Location: ". URI . 'products/index');
                        } else {
                            echo "echoue";
                        }
                    }
                }
            } else {
                $err['message'] = 'veuillez remplir tous les champs svp !!';
            }
        }



        $this->render('ajouter', $err);
        $this->index();
    }
    public function  gestionProduct()
    {
        $products = new Product();
        $products->getAll();
        $products = $products->getAll();

        $this->render('gestionProduct', compact("products"));
    }

    public function supprimer()
    {

        //var_dump($_GET);
        $params = explode("/", $_GET['p']);
        // var_dump($params);
        $products = new Product();
        $data = ['id' => $params[2]];
        $products->supprimer($data);
        // $this->render('supprimer');
        $this->gestionProduct();
        header("Location: ". URI . "Products/index");

    }
    //
    public function modifier()
    {
        $product=[];
       // var_dump($_GET);
        $params = explode("/", $_GET['p']);
        $products = new Product();
     //   var_dump($params);
        $data = ['id' => $params[2]];
       // var_dump($data);
        $products->findProductByid($data); 
        $tab= $products->findProductByid($data);
        $product=[
            'id'=>$tab->id,
            'name'=>$tab->name,
            'quantity'=>$tab->quantity,
            'price'=>$tab->price,
            'image'=>$tab->image,
            'description'=>$tab->description
        ]; 
        //var_dump($product);
        $this->render('modifier',$product);
        unset($_POST['modify']);
        $_POST['id'] = $params[2];

        if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
            $image_name = $_FILES["image"]["name"];
            $image_tmp = $_FILES["image"]["tmp_name"];
            $image_destination = "assets/images/" . basename($image_name); // Chemin de destination du fichier sur le serveur

            // Vérifier que le fichier est une image (facultatif mais recommandé)
            // images/a-2-1634829071.JPG
            $image_type = strtolower(pathinfo($image_destination, PATHINFO_EXTENSION));
            // jpg
            if (!in_array($image_type, array("jpg", "jpeg", "png", "gif"))) {
                //echo "Seules les images JPG, JPEG, PNG et GIF sont autorisées.";
                $err['imageErr'] = 'format image non valide , Seules les images JPG, JPEG, PNG et GIF sont autorisées svp.!!';
            }
            if (move_uploaded_file($image_tmp, SOURCE . $image_destination)) {

                $data = [
                    'id' => $_POST['id'],
                    'name' => $_POST['name'],
                    'quantity' => $_POST['quantity'],
                    'price' => $_POST['price'],
                    'image' => $image_destination,
                    'description' => $_POST['description']
                ];
                $products->modifier($data);
                var_dump($data);
                header("Location: ". URI . 'products/index');
                
               
            }
        }
    }
}
