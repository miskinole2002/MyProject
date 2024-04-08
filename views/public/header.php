

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
     crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

     <link href="carousel.css" rel="stylesheet">
    <title>header</title>



    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">
</head>
<body>
<header>

<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="red
">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Navbar</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=URI."Products/index" ?>">Page d'accueil</a>
        </li>
        <?php if (isset($_SESSION['user'])){?>  
          
          
          <li class="nav-item">
          <a class="nav-link " href="<?=URI."auths/deconnexion" ?>">Deconnexion</a>
          </li>
          <li class="nav-item">
          <a class="nav-link " href="<?=URI."auths/profiles" ?>">profiles</a>
        </li>
        <?php if($_SESSION['user']->role_id==1){?> 
        <li class="nav-item">
            <a class="nav-link " href="<?=URI."products/gestionProduct" ?>">gestion des produits </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="<?=URI."users/gestionUser" ?>">gestion des utilisateurs </a>
        </li>
        <?php } ?>
          <?php } else { ?>  
            <li class="nav-item">
          
            <a class="nav-link" href="<?=URI."auths/login" ?>">connexion</a>
            </li>
            <li class="nav-item">
            <a class="nav-link " href="<?=URI."auths/inscription" ?>">inscription</a>
            </li>
            <?php } ?>
      
        
       <li>
        <a href="<?= URI . "paniers/indexP"?>" class="btn btn-primary"><i class="bi bi-cart3">0</i></a>
       </li>
            
            
      </ul>
    

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</header>
<p> </p>
<p> </p>
<p> </p>
<p> </p>

</body>
</html>
