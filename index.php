
<?php 

require("commandes.php");

$produits=afficher();


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="php">
    <meta name="author" content="oumaima ouasli">
    <style type="text/css">
      .prix{
        
        border-radius: 5px;
      }
      .bt1{
        border-radius: 5px;
        align-content: center;
      }
      .bt1:hover{
        background-color:#66a3ff;
      }
      .titre{
        text-decoration: underline;

      }
     



    </style>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>




    <title>Produits</title>
<link rel="icon" href="logo.jpg" type="image">

  </head>
  <body>

     <header>
      
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            
            <strong>📦Stock</strong>
          </a>
         
        </div>
      </div>
    </header>
   

      
   

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading" align="center">Produits Disponible Dans Le Stock</h1>
          <p class="lead text-muted">Bienvenue à l'espace du Stock</p>
          <p class="lead text-muted">📦Les Derniers Produits Stockées📦</p>
          <p>
            <a href="ajouter.php" class="btn btn-primary my-2">Ajouter Un Produit</a>
            <a href="recherche.php" class="btn btn-secondary my-2">Rechercher Un Produit</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light" align="center">
        <div class="container">
           
          <div class="row">
            
  <?php foreach($produits as $produit):?>

            <div class="col-md-8">
              <div class="card mb-3 box-shadow">
             

                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 >
              <?= $produit->nom ?>
             </h4>
                      <center><img src="<?=$produit->image ?>
                      " width="40%" ></img></center>
                      <br>
                      <div ><h6 class="titre" >Description:</h6><?= $produit->description?> </div>
                      <div class="prix">
                        
                        &nbsp;  &nbsp;  <h6 class="titre" >N°:</h6><?= $produit->id ?><br>
                          <hr>
                        &nbsp;   &nbsp; <h6 class="titre" >Prix:</h6><?= $produit->prix ?>DH
                        </tr>
                        </div>
                       <br> 
                        &nbsp;&nbsp;<div align="center"><button class="bt1" ><a href="./config/update.php">Mis A jour</a></button></div>
                    
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>
            </div>
          
<?php  endforeach;?>
           
    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>
