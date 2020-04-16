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
        <?php include("entete.php"); ?>
        <br>
        <br>

        <?php if ($_SESSION['admin'] == 'oui'){ ?>


        <h2> Admin </h2>
        <h2>Que voulez-vous faire?</h2>
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <button onclick="location.href='http://pool/gerer_items.php'" type="button">Voir tous les items</button>
            <button onclick="location.href='http://pool/gerer_enCours.php'" type="button">Demande en cours</button>
            <button onclick="location.href='http://pool/gerer_vendeur.php'" type="button">Vendeurs Actuels</button>
        </div>
        <div class="col-sm-3"></div>
    </body>
    <?php } else if ($_SESSION['admin'] == 'non'){ 
    header('Location: http://pool/Catégories.php');
    exit();
    ?>
    <p>Vous n'avez pas les droits d'Admin.</p>
    <?php } ?>
</html>