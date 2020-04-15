<?php session_start(); ?> 
<!DOCTYPE html> 
<html> 

    <head> 
        <title>Ebay ECE</title>
        <link href="icone\favicon.jpg" rel="icon" type="images/x-icon" />  
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="css\bootstrap.min.css"/>
        <link rel="stylesheet" href="css\style.css"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
    </head> 

    <body> S

       
        <?php if ($_SESSION['vendeur'] == 'oui'){ ?>
        
        <?php include("entete.php"); ?>
        <br>
        <br>
        <h2> Vendre </h2>

       <form action="traitement_vente.php" method="post">
<p>      
type de vente :<br />
<input type="checkbox" name="enchere" id="enchere"  value="oui" /> Encheres
<input type="checkbox" name="MeilleureO" id="MeilleureO" value="oui" /> Meilleure offre
<input type="checkbox" name="AchatM" value="oui" /> Achetez-le maintenant
<br />
</p>
<p>
 Ajouter un titre :<br />
   <input type="text" name="titre" value="" required/>
</p>
   <br />
  
<p>
   Ajouter une description :<br />
   <textarea name="description" rows="6" cols="40" required="">
   </textarea>
</p>
<br />
<p>
   joindre une ou plusieurs photos :<br />
    <input type="file" name="picture" accept="image/png, image/jpeg" required="" />
</p>  
      <br />    
<p>
   Ajouter un prix :<br />
   <input type="number" name="prix" value="" required="" />
</p>
<br />
       
 <p>
   Date de fin d'enchère:<br />
   <input type="date" name="finD" value="" required="" />
   <input type="time" name="finH" value="" required="" />
</p>
<br />
             
<td colspan="2" align="center"> <input type="submit" value="Valider"  /></td>  


</form>
        
        <?php } else if ($_SESSION['vendeur'] == 'non'){ ?>
        
        <p>Vous n'etes pas encore inscrit.</p>
        <form method="post">
            <input type="submit" value="Demander à être vendeur" name="vendeur" />
        </form>
        
        <?php }
        else if ($_SESSION['vendeur'] == 'en cours'){
        ?>
        <p>Votre demande est en cours.</p>
        <?php } include 'traitement_vendeur.php'; ?>

        <div id="footer">Copyright &copy; 2020 Ebay ECE
            <br>    
            <a href="mailto:Ebay.ECE@gmail.com">Ebay.ECE@gmail.com</a>  
        </div>   
    </body>
</html>

