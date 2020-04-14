<?php session_start(); ?>
<!DOCTYPE html> 

<html>

    <head> 
        <title>Ebay ECE</title>
        <link href="favicon.jpg" rel="icon" type="images/x-icon" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head> 

    <body>

<body>
    
    <h1 id="logo">        <img src="icone\logo.jpg" alt="Ebay ECE" />     </h1> 
   <div id="menu">  
            <a href="Cat%C3%A9gories.php"><img src="icone\catégorie.jpg" alt="categories" width="50" height="50"/></a>   
            <a href="Achat.php"><img src="icone\achat.jpg" alt="achat" width="50" height="50"/> </a>   
            <a href="Vendre.php"><img src="icone\vendre.jpg" alt="vendre" width="50" height="50"/></a>     
            <a href="Compte.php">  <img src="icone\compte.jpg" alt="compte" width="50" height="50"/></a>
            <a href="Panier.php"><img src="icone\panier.jpg" alt="panier" width="50" height="50"/></a>     
            <a href="Admin.php">  <img src="icone\admin.jpg" alt="admin" width="50" height="50"/></a>
        </div> 

        <h2> Mon compte </h2>
        <h3>Mes informations personnelles</h3>
        <p> Prénom: <?= $_SESSION['prenom']; ?> </p> 
        <p> Adresse ligne 1: <?= $_SESSION['adresse1']; ?> </p> 
        <p> Adresse ligne 2: <?= $_SESSION['adresse2']; ?> </p>
        <p> Ville: <?= $_SESSION['ville']; ?> </p>
        <p> Code Postal: <?= $_SESSION['codePostal']; ?> </p>
        <p> Pays: <?= $_SESSION['pays']; ?> </p>
        <p> N° de léléphone: <?= $_SESSION['tel']; ?> </p>
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