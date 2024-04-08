<h1 class="text-center"> MODIFICATION UTILISATEURS</h1>


<form class="container" method="post" action="">
    <?php  if(isset($message)){?>
       <div class="alert alert-danger" role="alert">
        <?= $message; ?>
      </div>
      <?php }?>

    
    <div class="mb-3">
    <label for="name" class="form-label">nom</label>
        
    <input type="text" class="form-control" id="name" name="name" value="<?= $name; ?>">
  
    
  </div>
    <div class="mb-3">
    <label for="Surname" class="form-label">prenom </label>
    
    <input type="text" class="form-control" id="Surname" name="Surname" value="<?= $prenom; ?>">
    
     
    </div>
  <div class="mb-3">
    <label for="Email" class="form-label">addresse Email </label>
    <input type="text" class="form-control" id="Email" name="Email" value=" <?= $email; ?>" >
    
     
  </div>
  <div class="mb-3">
    <label for="role_id" class="form-label">role</label>
    <input type="number" class="form-control" id="role_id" name="role_id" value="<?= $role; ?>">
   
    
  </div>
 
  <div class="mb-3">
    <label for="tel" class="form-label">numero de telephone </label>
    <input type="number" class="form-control" id="tel" name="tel" value="<?= $numero_telephone; ?>">
    
    
  </div>


  <button type="submit" class="btn btn-primary" name="modifier" >modifier </button>
</form>

