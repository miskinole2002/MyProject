<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
     crossorigin="anonymous"> 
     <title>Login</title>
</head>
<body>
    <form class="container" method="post" action="">
    <?php  if(isset($message)){?>
       <div class="alert alert-danger" role="alert">
        <?= $message; ?>
      </div>
      <?php }?>
      
      
     
    <div class="mb-3">
    <label for="user_name" class="form-label">nom d'utilisateur  </label>
    
    <input type="text" class="form-control" id="user_name" name="user_name" >
    <?php  if(isset($message1)){?>
       <div class="alert alert-danger" role="alert">
        <?= $message1; ?>
      </div>
      <?php }?>
       
      
 
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">mot de passe </label>
    <input type="password" class="form-control" id="Password" name="Password">
    <?php  if(isset($message2)){?>
       <div class="alert alert-danger" role="alert">
        <?= $message2; ?>
      </div>
      <?php }?>
  </div>

  <button type="submit" class="btn btn-primary" name="connect">Connexion</button>
</form>
</body>
</html>
