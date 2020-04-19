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
            <section>
             <div class="row">
                 <div class="col-2 blueECEleft"> </div>
                 <div class="col-8">

                   <form action="verification_livraison.php" method="post">  
                      <h3>Mes informations de livraison</h3>
                      <?php if (isset($_GET['erreur'])){$erreur = $_GET['erreur']; echo $erreur.'<br>';} ?>

                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label"><strong>Email:  </strong>  </label>
                        <label class="col-sm-6 col-form-label"> <?=$_SESSION['email']; ?>  </label>
                    </div>

                    <div class="form-group row">
                     <label class="col-sm-3 col-form-label"><strong>Adresse ligne 1:</strong> </label>
                     <div class="col-sm-6">
                        <input type="text" class="form-control"name="adresseL1" id="adresseL1" value="<?= $_SESSION['adresse1']; ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                 <label class="col-sm-3 col-form-label"><strong>Adresse ligne 2: </strong> </label>
                 <div class="col-sm-6">
                    <input type="text" class="form-control" name="adresseL2" id="adresseL2" value="<?= $_SESSION['adresse2']; ?>">
                </div>
            </div>

            <div class="form-group row">
             <label class="col-sm-3 col-form-label"><strong>Ville:</strong>  </label>
             <div class="col-sm-6">
                 <input type="text"class="form-control" name="ville" id="ville" value="<?= $_SESSION['ville']; ?>" required>
             </div>
         </div>

         <div class="form-group row">
             <label class="col-sm-3 col-form-label"><strong>Code Postal:</strong>  </label>
             <div class="col-sm-6">
              <input type="number" class="form-control" name="poste" id="poste" value="<?= $_SESSION['codePostal']; ?>" required>
          </div>
      </div>

      <div class="form-group row">
         <label class="col-sm-3 col-form-label"><strong>Pays:</strong>  </label>
         <div class="col-sm-6">
            <input type="text" class="form-control" name="pays" id="pays" value="<?= $_SESSION['pays']; ?>" required>
        </div>
    </div>

    <div class="form-group row">
     <label class="col-sm-3 col-form-label"><strong>N° de téléléphone:</strong>  </label>
     <div class="col-sm-6">
        <input type="tel" class="form-control"  name="tel" id="tel" value="0<?= $_SESSION['tel']; ?>" required>
    </div>
</div> 

<div class="col-auto">
  <div class="form-check mb-2">
    <input class="form-check-input" type="checkbox"  name="sauvegarder">
    <label class="form-check-label" for="autoSizingCheck">
     <strong>Enregistrer ces informations</strong>  
   </label>
</div>
</div>


<td colspan="2" align="center"><input type="submit" class="btn btn-primary mb-2" value="Procéder au paiement" name="livraison" />

</form>
<div class="bigwhiteblock"></div>
</div>
<div class="col-2 blueECEright">  </div>
</div>
</section>

<div class="row">
  <div class="col-2 blueECEleft">  </div> 
  <div class="col-8 footer">  
    <?php include("footer.html"); ?> 
</div> 
<div class="col-2 blueECEright">  </div>
</div>


</body>

</html>