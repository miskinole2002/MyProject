<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
     crossorigin="anonymous">

    <title>inscription</title>
</head>
<body>

    <form class="container" method="POST" action="">
    <?php  if(isset($message)){?>
       <div class="alert alert-danger" role="alert">
        <?= $message; ?>
      </div>
      <?php }?>

    <div class="mb-3">
    <label for="user_name" class="form-label">nom d'utilisateur  </label>
    
    <input type="text" class="form-control" id="user_name" name="user_name" >
    <?php  if(isset($user_name)){?>
       <div class="alert alert-danger" role="alert">
        <?= $user_name; ?>
      </div>
    <?php }?>

    </div>
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
    <label for="Password" class="form-label">Mot de passe </label>
    <input type="password" class="form-control" id="Password" name="Password">
    <?php  if(isset($pwd)){?>
       <div class="alert alert-danger" role="alert">
        <?= $pwd; ?>
      </div>
      <?php }?>

     
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


  <button type="submit" class="btn btn-primary" name="ajout" > s'enregistrer </button>
</form>
</body>
</html>
