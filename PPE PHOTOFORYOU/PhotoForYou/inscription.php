

<?php include'includes/entete.php';?>

    
    
    <div id="body">
		<form action="traitement.php" method="post">
								
								Prénom: <input type="text" name="prenom" placeholder="Prenom"><br><br>
								Nom: <input type="text" name="nom" placeholder="Nom"><br><br>
								Types: <SELECT name="Type" size="1">
								<OPTION value="client">Client</OPTION>
								<OPTION value="photographe">Photographe</OPTION>
								</SELECT><br><br>
								Pseudo: <input type="text" name="pseudo" placeholder="Pseudo"><br><br>
		                       	mail : <input type="text" name="mail" placeholder="mail"><br><br>
		                       	Mot de passe : <input type="password" name="pwd" placeholder="Mot de passe"><br><br>
		                       	Confirmation mot de passe : <input type="password" name="pwd2" placeholder="Confirmation"><br><br>

		                       <input type="submit" value="Confirmer">
		 </form>
		 <?php include'includes/cotedroit1.php';?>	
             <?php include'includes/pieddepage.php';?>
        <div >

              </div>
    </div>
   

           
    



        </div>
        
        
    	
</div>
</body>
</html>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

