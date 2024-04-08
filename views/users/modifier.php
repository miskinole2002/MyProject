

<form class="container" method="post" action="">
    <?php  if(isset($message)){?>
       <div class="alert alert-danger" role="alert">
        <?= $message; ?>
      </div>
      <?php }?>

    
    <div class="mb-3">
    <label for="name" class="form-label">nom</label>
    <input type="text" class="form-control" id="name" name="name">
    <?php  if(isset($name)){?>
       <div class="alert alert-danger" role="alert">
        <?= $name; ?>
      </div>
    <?php }?>
    
  </div>
    <div class="mb-3">
    <label for="Surname" class="form-label">prenom </label>
    
    <input type="text" class="form-control" id="Surname" name="Surname" >
    <?php  if(isset($surName)){?>
       <div class="alert alert-danger" role="alert">
        <?= $surName; ?>
      </div>
      <?php }?>
     
    </div>
  <div class="mb-3">
    <label for="Email" class="form-label">addresse Email </label>
    <input type="text" class="form-control" id="Email" name="Email" >
    <?php  if(isset($email)){?>
       <div class="alert alert-danger" role="alert">
        <?= $email; ?>
      </div>
      <?php }?>
     
  </div>
  <div class="mb-3">
    <label for="role_id" class="form-label">role</label>
    <input type="number" class="form-control" id="role_id" name="role_id">
   
    
  </div>
 
  <div class="mb-3">
    <label for="tel" class="form-label">numero de telephone </label>
    <input type="number" class="form-control" id="tel" name="tel">
    <?php  if(isset($numero_telephone)){?>
       <div class="alert alert-danger" role="alert">
        <?= $numero_telephone; ?>
      </div>
      <?php }?>
    
  </div>


  <button type="submit" class="btn btn-primary" name="modifier" >modifier </button>
</form>

