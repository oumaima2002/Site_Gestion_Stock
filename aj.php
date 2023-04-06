<?php 


$bdd=new PDO("mysql:host=localhost;dbname=site;charset=utf8","root","");
$nom=$_POST['nom'];
$image=$_POST['image'];
$prix=$_POST['prix'];
$description=$_POST['description'];



$req="INSERT INTO produits (image,nom,prix,description) VALUES ('$image','$nom','$prix','$description')";
$bdd->exec($req);

header('location:index.php');


?>