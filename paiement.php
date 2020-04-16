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
                <form action="verification_paiement.php" method="post">
                    <h3>Mes informations de livraison</h3>
                    <p> Type de carte: <select name="type">
                        <option value="visa">Visa</option>
                        <option value="master">Master Card</option>
                        <option value="amex">American Express</option>
                        </select> </p> 
                    <p> Numéro de carte: <input type="number" name="numCarte" value="<?= $_SESSION['numCarte']; ?>"> </p>
                    <p> Date d'expiration: <input type="number" name="dateCarte" value="<?= $_SESSION['dateCarte']; ?>" required> </p>
                    <p> Code de sécurité: <input type="number" name="code" value="<?= $_SESSION['code']; ?>" required> </p>
                    <p> Nom sur la carte: <input type="text" name="nomCarte" value="<?= $_SESSION['nomCarte']; ?>" required> </p>
                    <p><input type="checkbox" name="sauvegarder">Enregistrer ces informations</p>
                    <input type="submit" value="Payer" name="paiement" />
                </form>
            </div>
            <div class="col-2 blueECE">  </div>

        </div>


    </body>

</html>