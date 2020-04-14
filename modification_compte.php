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

        <h1> Ebay ECE </h1>


        <div id="menu">  
            <a href="Cat%C3%A9gories.php"><img src="primehomenav.gif" alt="categories" width="107" height="25"/></a>   
            <a href="Achat.php"><img src="primelistingsbtn.gif" alt="achat" width="107" height="25"/> </a>   
            <a href="Vendre.php"><img src="primefinancingnav.gif" alt="vendre" width="107" height="25"/></a>     
            <a href="Compte.php">  <img src="primecontactnav.gif" alt="compte" width="107" height="25"/></a>
            <a href="Panier.php"><img src="primefinancingnav.gif" alt="panier" width="107" height="25"/></a>     
            <a href="Admin.php">  <img src="primecontactnav.gif" alt="admin" width="107" height="25"/></a>
        </div> 
        <form method="post">
            <h2> Mon compte </h2>
            <h3>Mes informations personnelles</h3>
            <p> Prénom:<?=$_SESSION['prenom']; ?> </p> 
            <p> Adresse ligne 1: <input type="text" name="adresseL1" id="adresseL1" value="<?= $_SESSION['adresse1']; ?>"> </p> 
            <p> Adresse ligne 2: <input type="text" name="adresseL2" id="adresseL2" value="<?= $_SESSION['adresse2']; ?>"> </p>
            <p> Ville: <input type="text" name="ville" id="ville" value="<?= $_SESSION['ville']; ?>"> </p>
            <p> Code Postal: <input type="number" name="poste" id="poste" value="<?= $_SESSION['codePostal']; ?>"> </p>
            <p> Pays: <input type="text" name="pays" id="pays" value="<?= $_SESSION['pays']; ?>"> </p>
            <p> N° de léléphone: <input type="number" name="tel" id="tel" value="<?= $_SESSION['tel']; ?>"> </p>
            <input type="submit" value="Enregistrer mes informations" name="livraison" />
        </form>
        <?php include 'traitement_livraison.php'; ?>
        
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