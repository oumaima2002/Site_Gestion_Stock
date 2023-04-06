<?php

function ajouter($image,$nom,$prix,$description)
{
if(require("connexion.php"))//si connexion est bonne
{
$req=$bdd->prepare("INSERT INTO produits (image,nom,prix,description)VALUES($image,$nom,$prix,$description)" );
$req->execute(array($image,$nom,$prix,$description));
$req->closeCursor();
}
}

function afficher()
{
	if(require("connexion.php"))
	{
		$req=$bdd->prepare("SELECT * FROM produits ORDER BY id  DESC");
		//recuperer les donnes
		$req->execute();
		$data= $req->fetchAll(PDO::FETCH_OBJ);
		return $data;
		$req->closeCursor();
	}
}

function supprimer($id)
{
	if(require("connexion.php"))
	{
		$req=$bdd->prepare("DELETE from produits where id=?");
		$req->execute(array($id));
	}
}

?>