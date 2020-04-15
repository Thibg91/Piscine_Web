<?php session_start(); ?> 
<!DOCTYPE html> 
<html> 

    <head> 
        <title>Ebay ECE</title>
        <link href="icone\favicon.jpg" rel="icon" type="images/x-icon" />  
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="css\bootstrap.min.css"/> 
        <link rel="stylesheet" href="css\style.css"/>
    </head> 

    <body> 
        <?php
        include("traitement_SQL.php");
        global $db;
        $email = $_SESSION['email'];
        $sql = "SELECT Vendeur FROM inscription WHERE Email='$email'";
        if($result = mysqli_query($db, $sql)){
            $row = $result->fetch_assoc();
            $_SESSION['vendeur'] = $row['Vendeur'];
        }

        ?>

       <?php include("entete.php"); ?>
        <br>
        <br>
        <?php if ($_SESSION['vendeur'] == 'oui'){ ?>

        <h2>Que voulez-vous faire?</h2>
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <button onclick="location.href='http://pool/vendre.php'" type="button">Vendre un objet</button>
            <button onclick="location.href='http://pool/objetEnVente.php'" type="button">Objets en vente</button>
            <button onclick="location.href='http://pool/objetVendu.php'" type="button">Objets Vendus</button>
        </div>
        <div class="col-sm-3"></div>
        <?php } else if ($_SESSION['vendeur'] == 'non'){ ?>

        <p>Vous n'etes pas encore inscrit.</p>
        <form method="post">
            <input type="submit" value="Demander à être vendeur" name="vendeur" />
        </form>

        <?php }
        else if ($_SESSION['vendeur'] == 'en cours'){
        ?>
        <p>Votre demande est en cours.</p>
        <?php }include 'traitement_vendeur.php'; ?>

        <div id="footer">Copyright &copy; 2020 Ebay ECE
            <br>    
            <a href="mailto:Ebay.ECE@gmail.com">Ebay.ECE@gmail.com</a>  
        </div>   
    </body>
</html>

