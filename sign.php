<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Sign</title>
<link rel="icon" href="logo.jpg" type="image">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/floating-labels/">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="floating-labels.css" rel="stylesheet">
  </head>

  <body>
    <form class="form-signin" method="post" >
      <div class="text-center mb-4">
        
        <h1 class="h3 mb-3 font-weight-normal">Se Connecter</h1>
        <p align="text-center">Bienvenue </p>
     
 </div>
    
      <div class="form-label-group">
        <label for="inputEmail">Email address</label>
        <input type="text" id="inputEmail" class="form-control" name="id" placeholder="login" required autofocus>
     
     
 </div>
    <div class="form-label-group">
        <label for="inputPassword">Password</label>
        <input type="password" id="inputPassword" class="form-control"  name="login" placeholder="Password" required>
      
     </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
 <div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
     

    </form>

<?php 

try{


if($_SERVER["REQUEST_METHOD"]=="POST")
   {
    $bdd=new PDO("mysql:host=localhost;dbname=site;charset=utf8","root","");
  
$nom=$_POST['id'];
$p=$_POST['login'];
$sel=$bdd->prepare("select id,pas from acces where id='$nom'AND pas='$p'");
         $sel->execute(array($id));
         $tab=$sel->fetchAll();

if(count($tab)>0)
{
 header('location:index.php');
 
}
else{
  echo "Mot De passe ou login invalide";
 header('location:sign.php');
}
}
}
catch(PDOEXECEPTION $e)
{
  echo $e->getMessage();
}
?>

  </body>
</html>
