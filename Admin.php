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



    <body>
      <?php
      $bdd = 'piscine';
      $db_found = new mysqli( 'localhost', 'root', '', $bdd );
      $reponse = $db_found -> query('SELECT * FROM Items');
      ?> 
     
      <?php if ($_SESSION['admin'] == 'oui'){ ?>
       
      <?php include("entete.php"); ?>
      <br>
        <br>
        <h2> Admin </h2>
        <h3> Liste des Items </h3>
<table class="table table-hover table-dark">  
    <thead>     
     <tr>   
      <th>N° d'identification</th> 
      <th>Photo</th>   
      <th>Nom</th> 
      <th> Description</th>  
      <th>enchère ?</th> 
      <th>Meilleure Offre ?</th> 
      <th>Achetez-le maintenant ?</th>
      <th>Date de fin de mise en vente</th>
      <th>Prix</th>
      <th>Supprimer</th>
     </tr> 
    </thead>  

      <?php
       while($donnees = mysqli_fetch_array($reponse))
            {
            ?>
    <tbody> 
     <tr>  
      <td> <?php echo $donnees['nItem'];?> </td>    
      <td>  <img src= icone\<?php echo $donnees['photo'];?> width="75"  height= "75"> </td>   
      <td> <?php echo $donnees['titre'];?> </td>   
      <td> <?php echo $donnees['descr'];?> </td> 
      <td> <?php echo $donnees['enchere'];?> </td> 
      <td> <?php echo $donnees['meilleureO'];?> </td> 
      <td> <?php echo $donnees['achatM'];?> </td> 
      <td> <?php echo $donnees['prix'];?> </td> 
      <td> <?php echo "le " ,$donnees['dateF'], " à " ,$donnees['dateH']; ?> </td> 
      <td colspan="2" align="center">    <input type="button" class="btn btn-primary" value="Supprimer" /> </td>
     </tr>  
   <?php
        } 
       mysqli_close($db_found); 
     ?>
    </tbody>  
   </table> 
    
    <h3> Liste des demandes de vendeurs</h3>
    <table class="table">  
        <thead>     
            <tr>   
                <th>email ECE</th> 
                <th>Prenom</th>   
                <th>Nom</th> 
                <th>Supprimer</th>
            </tr> 
        </thead>   
        <tbody> 
            <?php include 'traitement_enCours.php'; ?>  
        </tbody>  
    </table> 
    <h3> Liste des vendeurs actuels</h3>
    <table class="table">  
        <thead>     
            <tr>   
                <th>email ECE</th> 
                <th>Prenom</th>   
                <th>Nom</th> 
                <th>Supprimer</th>
            </tr> 
        </thead>   
        <tbody> 
            <?php include 'traitement_vendeursActuels.php';?>
        </tbody>  
    </table> 
    <?php } else if ($_SESSION['admin'] == 'non'){ 
    header('Location: http://pool/Catégories.php');
    exit();
    ?>
    <p>Vous n'avez pas les droits d'Admin.</p>
    <?php } ?>

</html>