<?php 



try{
$bdd=new PDO('mysql:host=localhost;dbname=site',"root","");
if($_SERVER["REQUEST_METHOD"]=="POST")
   {
    $nom=$_POST['nom'];
    $des=$_POST['des'];
    $id=$_POST['id'];
	$req="UPDATE  produits SET nom='$nom',description='$des' WHERE (id=$id) ";
	$bdd->exec($req);
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

    <title>Top navbar example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbar-static/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" href="logo.jpg" type="image">
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
        <form method="post" action="update.php">	
<table border="2" align="center" width="50%">
	<th colspan="2"> <marquee>Mise A jour </marquee></th>
	<tr><td>ID:</td><td><input type="text" name="id"></td></tr>
	<tr><td>Nom:</td><td><input type="text" name="nom"></td></tr>
	<tr><td>Description:</td><td><input type="text" name="des"></td></tr>
	<tr ><td colspan="2"><button type="submit">Mise a jour</button></td></tr>
</table>

</form>
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
