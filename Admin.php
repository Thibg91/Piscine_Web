 
<!DOCTYPE html> 

<html>

    <head> 
        <title>Ebay ECE</title>
        <link href="icone\favicon.jpg" rel="icon" type="images/x-icon" /> 
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
    <?php if(isset($_SESSION['email'])) 
{ ?>
   <?php if ($_SESSION['admin'] == 'oui'){ ?>
       
      <h2> Admin </h2>
        <h2>Que voulez-vous faire?</h2>
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <button onclick="location.href='http://pool/gerer_items.php'" type="button" class="btn-primary btn btn-lg" >Voir tous les items</button>
            <button onclick="location.href='http://pool/gerer_enCours.php'" type="button" class="btn-primary btn btn-lg">Demande en cours</button>
            <button onclick="location.href='http://pool/gerer_vendeur.php'" type="button" class="btn-primary btn btn-lg">Vendeurs Actuels</button>
        </div>
        <div class="col-sm-3"></div>

    <?php }else if ($_SESSION['admin'] == 'non'){ 
    ?>
    <p>Vous n'avez pas les droits d'Admin.</p>
    <button onclick="location.href='http://pool/accueil.php'" type="button" class="btn btn-secondary">retour</button>
    <?php } }else { ?>
    <p>Vous n'avez pas les droits d'Admin.</p>
    <button onclick="location.href='http://pool/accueil.php'" type="button" class="btn btn-secondary">retour</button>
    <?php } ?>

    <div class="bigwhiteblock"></div>
 </div>
 <div class="col-2 blueECEright">  </div>
</div>
</section>
</body>
<div class="row">
  <div class="col-2 blueECEleft">  </div> 
   <div class="col-8 footer">  
    <?php include("footer.html"); ?> 
    </div> 
   <div class="col-2 blueECEright">  </div>
 </div>


</html>