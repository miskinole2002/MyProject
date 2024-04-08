

    
   <link href="carousel.css" rel="stylesheet">


  <div class="album py-5 bg-body-tertiary">
   
    <div class="container">
   
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?Php 
    foreach($products as $product)
    
    {?>
        <div class="col">
      
          <div class="card shadow-sm" style="width: 18rem;">
        
            <div class="card-body">
            <img width="200px" height="250px" src="<?=URI . $product->image ?>"  class="card-img-top" alt="">
         
              <p class="card-text"> <?= $product->description ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary">ajouter au panier </button>
            
                </div>
                <small class="text-body-secondary"><?=$product->price?> $Cad</small>
              </div>
            </div>
          </div>
        </div>
      
          <?php } ?>
        </div>
      </div>     
</main>


    </body>
</html>
