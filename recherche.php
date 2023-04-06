<?php 


try{
$bdd=new PDO('mysql:host=localhost;dbname=site',"root","");
if($_SERVER["REQUEST_METHOD"]=="POST")
   {
 	
    $nom=$_POST['nom'];
	$req="SELECT * FROM  produits WHERE nom LIKE '%$nom%' ";
	$r=$bdd->query($req);
   $row=$r->fetchAll(PDO::FETCH_ASSOC);	
}
}catch(PDOException $e)
{
	echo $e->getMessage();
}



?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="php">
    <meta name="author" content="oumaima ouasli">
    
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>rechercher</title>
<link rel="icon" href="logo.jpg" type="image">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbar-static/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-top.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="index.php">📦Stock</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="recherche.php">Rechercher </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="update.php">Update</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="index.php">Stocke generale</a>
          </li>
        </ul>
       
      </div>
    </nav>

    <main role="main" class="container">
      <div class="jumbotron">
      	<form method="POST" action="recherche.php">
	
<h4 align="left" > Rechercher Un Produit </h4> <br>
<input align="center" type="text" name="nom">
<button type="submit">Rechercher</button>
</form>
<br>
<table border="2" width="50%" align="center">
	<th colspan="5">Liste De Recherche</th>
	<tr> <td>ID</td><td>IMAGE</td><td>NOM</td><td>PRIX</td><td>DESCRIPTION</td></tr>
	<?php
	if($_SERVER["REQUEST_METHOD"]=="POST")
   {
       foreach($row as $key):
      echo "<tr><td>".$key['id'].'</td>';
        echo "<td>".$key['image'].'</td>';
          echo "<td>".$key['nom'].'</td>';
            echo "<td>".$key['prix'].'</td>';
            echo "<td>".$key['description'].'</td></tr>';
       endforeach ;
   }
	?>
</table>
      </div>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
