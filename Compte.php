<?php session_start(); ?>
<!DOCTYPE html> 

<html>

    <head> 
        <title>Ebay ECE</title>
        <link href="favicon.jpg" rel="icon" type="images/x-icon" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="css\bootstrap.min.css"/>
        <link rel="stylesheet" href="css\style.css"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>     </head> 


<body>
    
    <?php include("entete.php"); ?>
      <br>
        <br>
        <h2> Mon compte </h2>
        <h3>Mes informations personnelles</h3>
        <p> Prénom: <?= $_SESSION['prenom']; ?> </p> 
        <p> Adresse ligne 1: <?= $_SESSION['adresse1']; ?> </p> 
        <p> Adresse ligne 2: <?= $_SESSION['adresse2']; ?> </p>
        <p> Ville: <?= $_SESSION['ville']; ?> </p>
        <p> Code Postal: <?= $_SESSION['codePostal']; ?> </p>
        <p> Pays: <?= $_SESSION['pays']; ?> </p>
        <p> N° de Téléphone: <?= $_SESSION['tel']; ?> </p>
        <a href="modification_compte.php">Modifier vos informations</a>

        <h3>Mon historique d'achat</h3>
        <table class="table">  
            <thead>     
                <tr>   
                    <th>Photo</th>   
                    <th>Nom</th>   
                    <th>Prix</th> 
                    <th>Info</th> 
                </tr> 
            </thead>   
            <tbody> 
                <tr>    
                    <td> <img src="ForT.jpeg" style="width: 50%;"> </td>    
                    <td>ferraille ou trésor </td>   
                    <td>250 euros</td> 
                    <td> </td>
                </tr>   
            </tbody>  
        </table> 


    </body>

</html>