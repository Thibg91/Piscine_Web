
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

 <?php if(isset($_GET['erreur'])){ echo $_GET['erreur'];} ?>

                     <form action="traitement_livraison.php"  method="post">    
  <div class="form-group row">
    <label class="col-sm-3 col-form-label"><strong>Prénom: </strong>  </label>
    <label class="col-sm-6 col-form-label"><?=$_SESSION['prenom']; ?>  </label>
 </div>

 <div class="form-group row">
   <label class="col-sm-3 col-form-label"><strong>Adresse ligne 1:</strong> </label>
   <div class="col-sm-6">
     <input type="text" class="form-control" name="adresseL1" id="adresseL1" value="<?= $_SESSION['adresse1']; ?>" >
   </div>
 </div>

 <div class="form-group row">
   <label class="col-sm-3 col-form-label"><strong>Adresse ligne 2: </strong> </label>
   <div class="col-sm-6">
    <input type="text" class="form-control" name="adresseL2" id="adresseL2" value="<?= $_SESSION['adresse2']; ?>" >
   </div>
 </div>

 <div class="form-group row">
   <label class="col-sm-3 col-form-label"><strong>Ville:</strong>  </label>
   <div class="col-sm-6">
   <input type="text" class="form-control" name="ville" id="ville" value="<?= $_SESSION['ville']; ?>">
   </div>
 </div>
             
<div class="form-group row">
   <label class="col-sm-3 col-form-label"><strong>Code Postal:</strong>  </label>
   <div class="col-sm-6">
   <input type="number" class="form-control" name="poste" id="poste" value="<?= $_SESSION['codePostal']; ?>">
   </div>
 </div>

 <div class="form-group row">
   <label class="col-sm-3 col-form-label"><strong>Pays:</strong>  </label>
   <div class="col-sm-6">
    <input type="text" class="form-control" name="pays" id="pays" value="<?= $_SESSION['pays']; ?>">
   </div>
 </div>

  <div class="form-group row">
   <label class="col-sm-3 col-form-label"><strong>N° de téléléphone:</strong>  </label>
   <div class="col-sm-6">
    <input type="tel" class="form-control" name="tel" id="tel" value="0<?= $_SESSION['tel']; ?>">
   </div>
 </div> 

 <div class="form-group row">
    <label class="col-sm-3 col-form-label"><strong>Type de carte:</strong>  </label>
 <select name="type" class="browser-default custom-select col-sm-6">
                            <option value="visa">Visa</option>
                            <option value="master">Master Card</option>
                            <option value="amex">American Express</option>

                        </select>
</div>
  





 <div class="form-group row">
 <label class="col-sm-2 col-form-label"><strong>Numéro de carte:</strong>  </label>
 <div class="col-sm-1"></div>
<input class="form-control col-sm-2" type="number" name="numCarte" value="<?= $_SESSION['numCarte']; ?>"> 
<div class="col-sm-1"></div>
<label class="col-sm-2 col-form-label"><strong>Date d'expiration:</strong>  </label>
 <select class="form-control col-sm-2" name="mois"> 
  <option value="01">Janvier</option>
  <option value="02">Février</option>
  <option value="03">Mars</option>
  <option value="04">Avril</option>
  <option value="05">Mai</option>
  <option value="06">Juin</option>
  <option value="07">Juillet</option>
  <option value="08">Août</option>
  <option value="09">Septembre</option>
  <option value="10">Octobre</option>
  <option value="11">Novembre</option>
  <option value="12">Décembre</option>
</select> 


<select  class="form-control col-sm-1" name="annee">
  <option value="20">2020</option>
  <option value="21">2021</option>
  <option value="22">2022</option>
  <option value="23">2023</option>
  <option value="24">2024</option>
  <option value="25">2025</option>
</select>
</div>

 <div class="form-group row">
   <label class="col-sm-3 col-form-label"><strong>Code de sécurité:</strong> </label>
   <div class="col-sm-6">
   <input type="number" class="form-control" name="code" value="<?= $_SESSION['code']; ?>">
   </div>
 </div>

  <div class="form-group row">
   <label class="col-sm-3 col-form-label"><strong>Nom sur la carte:</strong> </label>
   <div class="col-sm-6">
   <input type="text" name="nomCarte" class="form-control" value="<?= $_SESSION['nomCarte']; ?>">
   </div>
 </div>

<div class="form-group row">
 <label class="col-sm-3 col-form-label"> <strong>Joindre une bannière:</strong> </label> 
 <div class="col-sm-6">
  <input type="file" name="photoBack" accept="image/png, image/jpeg" />
</div>    
</div>

<div class="form-group row">
 <label class="col-sm-3 col-form-label"><strong>Joindre une photo d'identité:</strong>  </label> 
 <div class="col-sm-6">
   <input type="file" name="photoID" accept="image/png, image/jpeg"  />
 </div>    
</div>
    
<td colspan="2" align="center">
  <input type="submit" class="btn btn-primary mb-2" value="Enregistrer mes informations" name="livraison" />

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