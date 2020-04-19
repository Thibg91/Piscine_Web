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

            <div class="col-2 blueECEleft"> </div>

            <div class="col-8">
                <form action="verification_paiement.php" method="post">
                    <h3>Mes informations de livraison</h3>
                    <?php if (isset($_GET['erreur'])){$erreur = $_GET['erreur']; echo $erreur.'<br>';} ?>


<div class="form-group row">
    <label class="col-sm-3 col-form-label"><strong>Type de carte:</strong>  </label>
 <select name="type" class="browser-default custom-select col-sm-6">
                            <option value="visa">Visa</option>
                            <option value="master">Master Card</option>
                            <option value="amex">American Express</option>
                        </select>
</div>


<div class="form-group row">
   <label class="col-sm-3 col-form-label"><strong>Numéro de carte: </strong> </label>
   <div class="col-sm-6">
   <input type="number" class="form-control" name="numCarte" value="<?= $_SESSION['numCarte']; ?>" required>
   </div>
 </div>

<div class="form-group row">
   <label class="col-sm-3 col-form-label"> <strong>Date d'expiration:</strong> </label>
   <div class="col-sm-6">
   <input type="number" class="form-control" name="dateCarte" value="<?= $_SESSION['dateCarte']; ?>" required >
   </div>
 </div>

 <div class="form-group row">
   <label class="col-sm-3 col-form-label"><strong>Code de sécurité:</strong> </label>
   <div class="col-sm-6">
   <input type="number" class="form-control" name="code" value="<?= $_SESSION['code']; ?>" required>
   </div>
 </div>

  <div class="form-group row">
   <label class="col-sm-3 col-form-label"><strong>Nom sur la carte:</strong> </label>
   <div class="col-sm-6">
   <input type="text" name="nomCarte" class="form-control" value="<?= $_SESSION['nomCarte']; ?>"required>
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

<td colspan="2" align="center"><input type="submit" class="btn btn-primary mb-2" value="Payer" name="paiement" />

</form>
           <div class="bigwhiteblock"></div>
</div>
<div class="col-2 blueECEright">  </div>
</div>
</section>

        </div>


    </body>

</html>