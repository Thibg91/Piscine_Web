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
 <?php include("entete.php"); ?>
        <br>
        <br> 
<section>
   <div class="row">
   <div class="col-2 blueECEleft"> </div>
   <div class="col-8">
        <h2><strong>Inscription:</strong></h2>
        <br>
        <form action="traitement_inscription.php" method="post" >


          <div class="form-row">
      <div class="form-group col-md-6">
       <label>Prénom:</label>
       <input type="text" class="form-control" name="prenom" id="prenom">
      </div>
    <div class="form-group col-md-6">
      <label>Nom:</label>
      <input type="text" class="form-control" name="nom" id="nom">
    </div>
    </div>

         <div class="form-group">
    <label>Email: </label>
   <input type="email" class="form-control" name="email" id="email">
  </div>

       <div class="form-row">
    <div class="form-group col-md-6">
      <label>Password: </label>
      <input type="password" class="form-control"name="password" id="password">
    </div>

    <div class="form-group col-md-6">
      <label>Confirmation Password:</label>
      <input type="password" class="form-control" name="confirmationPassword" id="confirmationPassword">
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-10"></div>
    <div class="form-group col-md-2"> <td colspan="2" align="center"> <input type="submit" value="Valider" class="btn btn-primary mb-2" /></td></div>
    </div>
 
           
        </form>
  <button onclick="location.href='http://pool/accueil.php'" type="button" class="btn btn-secondary"> Retour </button>
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