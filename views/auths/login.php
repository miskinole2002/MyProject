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
    <form class="container">
    <div class="mb-3">
    <label for="user_name" class="form-label">User name </label>
    
    <input type="text" class="form-control" id="user_name" >
   
       <div class="alert alert-danger" role="alert">
       
      </div>
      
 
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" id="Password">
    <div class="alert alert-danger" role="alert">
        
      </div>
  </div>

  <button type="submit" class="btn btn-primary">Connexion</button>
</form>
</body>
</html>
