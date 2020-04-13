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
        
        <?php
            if(isset($_SESSION['prenom'])){
                ?>
        <p>Bon retour parmi nous <?= $_SESSION['prenom'];?></p>
        
                <?php
            }else{
                echo 'Pas connecté.';
            }
        ?>
        
    </body>

</html>