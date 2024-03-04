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
    <form>
    <div class="mb-3">
    <label for="Surname" class="form-label">prenom </label>
    
    <input type="text" class="form-control" id="Surname" >
  
  <div class="mb-3">
    <label for="Email" class="form-label">addresse Email </label>
    <input type="email" class="form-control" id="Email" >
  
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Mot de passe </label>
    <input type="password" class="form-control" id="Password">
  </div>
  <div class="mb-3">
    <label for="naissance" class="form-label">date de naissance</label>
    <input type="text" class="form-control" id="naissance">
  </div>
  <div class="mb-3">
    <label for="tel" class="form-label">numero de telephone </label>
    <input type="text" class="form-control" id="tel">
  </div>


  <button type="submit" class="btn btn-primary">s'enregistrer </button>
</form>
</body>
</html>
