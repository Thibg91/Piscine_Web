
<!DOCTYPE html> 

<html>

    <head> 
        <title>Ebay ECE</title>
        <link href="favicon.jpg" rel="icon" type="images/x-icon" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="css\bootstrap.min.css"/>
        <link rel="stylesheet" href="css\style.css"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
    </head> 

    <body>
         <?php include("entete.php"); ?>
        <br>
        <br> 
<section>
   <div class="row">
   <div class="col-2 blueECEleft"> </div>
   <div class="col-8">
       
        <form  method="post">
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
   <div class="bigwhiteblock"></div>
  </div>
 <div class="col-2 blueECEright">  </div>
</div>
</section>

<div class="row">
  <div class="col-2 blueECEleft">  </div> 
   <div class="col-8 footer">  
    <?php include("footer.php"); ?> 
    </div> 
   <div class="col-2 blueECEright">  </div>
 </div>
    </body>

</html>