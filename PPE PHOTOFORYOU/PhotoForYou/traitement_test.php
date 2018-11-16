<?php
session_start();



 try
{
	//connexion à la bdd
	$bdd = new PDO('mysql:host=localhost;dbname=photoforyou;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$donnees = $bdd->query('select * from users where email="'.$_POST['email'].'"');
// on teste si nos variables sont définies

$donnees=$donnees->fetch(PDO::FETCH_ASSOC);
if ($_POST['email'] == $donnees['email']  &&  $_POST['mdp']== $donnees['motdepasse']) {
		// tout est ok, on peut démarrer la session

		
		session_start ();
		
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['mdp'] = $_POST['mdp'];
		$co = 1;
		$_SESSION['conn'] = 'ok';
		// on redirige notre visiteur vers une page de notre section membre
		header ('location: pagemembre.php');
             
             
	}
             
	else{
		//si c'est faux, retour à la connexion
		header('location: pagemembre1.php');
		
	}

                
?>


