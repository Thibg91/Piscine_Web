<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ebay ECE</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        
        Veuillez-vous connecter:<br>
        <form method="post">
            
            Email: <input type="email" name="email"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" value="Connexion" name="formsend" id="formsend" />
            
        </form>
        <?php include 'traitement_connexion.php'; ?>
        Pas encore inscrit? Inscrivez-vous en <a href="inscription.php">cliquant ici.</a>
        
    </body>

</html>