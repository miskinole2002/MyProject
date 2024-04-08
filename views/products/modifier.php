<h1 class="text-center"> MODIFICATION  PRODUITS</h1>

<form clas="m-5" method="post" enctype="multipart/form-data"s>

    <div class="mb-3">
        <label for="name" class="form-label">Nom</label>
        <input type="text" class="form-control" id="name" name="name" value="<?=$name ?>">

    </div>

    <div class="mb-3">
        <label for="quantity" class="form-label">quantite</label>
        <input type="number" class="form-control" id="quantity" name="quantity" value="<?=$quantity?>">
    </div>
    
    <div class="mb-3">
        <label for="price" class="form-label">prix</label>
        <input type="text" class="form-control" id="price" name="price" value="<?=$price?>">
    </div>
   
    <div class="mb-3">
        <label for="image" class="form-label">image</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>
    
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <!-- <textarea class="form-control" name="description" style="height: 50px"
                  placeholder=""
                  id="description" value=""></textarea> -->
                  <input type="text" class="form-control" id="description" name="description" style="height: 100px" value="<?=$description?>">
    </div>
   
    <input class="btn btn-primary" type="submit" value="modifier" name="modify">
</form>

