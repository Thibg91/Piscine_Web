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

        Inscription:<br>
        <form method="post">

            Prénom: <input type="text" name="prenom" id="prenom"><br>
            Nom: <input type="text" name="nom" id="nom"><br>
            Email: <input type="email" name="email" id="email"><br>
            Password: <input type="password" name="password" id="password"><br>
            Confirmation Password: <input type="password" name="confirmationPassword" id="confirmationPassword"><br>
            <input type="submit" value="Incription" name="formsend" id="formsend" />

            <?php include 'traitement_inscription.php';?>
        </form>

        Déjà inscrit? Connectez-vous en <a href="connexion.php">cliquant ici.</a>

    </body>

</html>