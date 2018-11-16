<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PhotoForYou</title>
<link rel="stylesheet" href="css/styles.css" type="text/css" />
<head>
<body>
    <div id="container">
	<div id="header">
    	<h1><a href="index.php">PhotoForYou</a></h1>
        <h2>Des photos de pros pour les pros</h2>
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul>
        <?php
        //si l'utilisateur est connecté
        if($_SESSION['conn']='ok'){
            $co =0;
        }
        else{
            $co=1;
        }
        //requête pour afficher le menu selon si l'utilisateur est connecté ou non
        $conn= new mysqli("localhost","root","","photoforyou");
        $sql = 'Select*from menu where connexion=0';
        $sql2 = 'Select *from menu where connexion2=2';
        $req = $conn->query($sql);
        $req2= $conn->query($sql2);
         if($co != 1){
        while($lignetab = $req->fetch_assoc()){
           
            echo '<li><a href="'.$lignetab['Lien'].'">'.$lignetab['NomMenu'].'</a></li>';
        }
    }
       else{
            while($lignetab = $req2->fetch_assoc()){
                echo '<li><a href="'.$lignetab['Lien'].'">'.$lignetab['NomMenu'].'</a></li>';

        }
        }

        ?>
        </ul>
    </div>
        </head>
