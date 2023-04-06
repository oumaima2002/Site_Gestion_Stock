<?php
//tester la connectivite

	try{
	//se connecter à la base de données
	$bdd=new PDO("mysql:host=localhost;dbname=site;charset=utf8","root","");
	$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
       
		 }catch(Exception $e)
			{
			 echo "Non connecté".$e->getMessage();
			}



 ?>