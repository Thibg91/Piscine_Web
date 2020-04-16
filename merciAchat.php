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
        <div class="row">

            <div class="col-2 blueECE"> </div>

            <div class="col-8">
                <h1>Merci pour votre achat <?php echo $_SESSION['prenom'].' '.$_SESSION['nom']; ?>!</h1>
                <h3>Vous recevrez prochainement un mail avec toutes les informations de livraison.</h3>
                <h4>L'équipe EBAY ECE s'occupe de tout.</h4>
                <button onclick="location.href='http://pool/Catégories.php'" type="button">Retourner à l'accueil</button>
            </div>
            <div class="col-2 blueECE">  </div>

        </div>


    </body>

</html>