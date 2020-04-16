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
                <form action="verification_livraison.php" method="post">
                    <h3>Mes informations de livraison</h3>
                    <p> Email:  <?=$_SESSION['email']; ?> </p> 
                    <p> Adresse ligne 1: <input type="text" name="adresseL1" id="adresseL1" value="<?= $_SESSION['adresse1']; ?>" required> </p> 
                    <p> Adresse ligne 2: <input type="text" name="adresseL2" id="adresseL2" value="<?= $_SESSION['adresse2']; ?>"> </p>
                    <p> Ville: <input type="text" name="ville" id="ville" value="<?= $_SESSION['ville']; ?>" required> </p>
                    <p> Code Postal: <input type="number" name="poste" id="poste" value="<?= $_SESSION['codePostal']; ?>" required> </p>
                    <p> Pays: <input type="text" name="pays" id="pays" value="<?= $_SESSION['pays']; ?>" required> </p>
                    <p> N° de téléphone: <input type="tel" name="tel" id="tel" value="<?= $_SESSION['tel']; ?>" required> </p>
                    <p><input type="checkbox" name="sauvegarder">Enregistrer ces informations</p>
                    <input type="submit" value="Procéder au paiement" name="livraison" />
                </form>
            </div>
            <div class="col-2 blueECE">  </div>

        </div>


    </body>

</html>