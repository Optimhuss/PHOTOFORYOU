<?php 

 try
{
	$bdd = new PDO('mysql:host=localhost;dbname=photoforyou;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$type=$_POST['type'];
$Pseudo=$_POST['pseudo'];
$Mail=$_POST['mail'];
//cryptage du mot de passe
$Mdp=md5($_POST['pwd']);

$requete='Insert into users (email, type, prenom, nom, pseudo, motdepasse) 
values ("'.$Mail.'","'.$type.'","'.$prenom.'","'.$nom.'","'.$Pseudo.'","'.$Mdp.'")';
//les valeurs du formulaire pour l'nscripton sont envoyées à la bdd
  $bdd->query($requete);
  // on redirige vers l'accueil
header("location:index.php");