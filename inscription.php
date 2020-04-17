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

        Déjà inscrit? Connectez-vous en  <a href="#"  id="a-connexion" data-toggle="modal" data-target="#popupModal">cliquant ici.</a>
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