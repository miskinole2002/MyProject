<form class="m-5" method="post" enctype="multipart/form-data">
<?php  if(isset($message)){?>
       <div class="alert alert-danger" role="alert">
        <?= $message; ?>
      </div>
      <?php }?>
    <div class="mb-3">
        <label for="name" class="form-label">Nom</label>
        <input type="text" class="form-control" id="name" name="name">

    </div>

    <div class="mb-3">
        <label for="quantity" class="form-label">quantite</label>
        <input type="number" class="form-control" id="quantity" name="quantity">
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">prix</label>
        <input type="text" class="form-control" id="price" name="price">
    </div>
   
    <div class="mb-3">
        <label for="image" class="form-label">image</label>
        <input type="file" class="form-control" id="image" name="image">
        <?php  if(isset($imageErr)){?>
       <div class="alert alert-danger" role="alert">
        <?= $imageErr; ?>
      </div>
      <?php }?>
    </div>
    
    <div class="mb-3 form-floating">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" style="height: 100px"
                  placeholder="Entrer votre description ici"
                  id="description"></textarea>

    </div>
    <input class="btn btn-primary" type="submit" value="Ajouter" name="save">
</form>

