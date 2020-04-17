
<!DOCTYPE html> 
<html> 

    <head> 
        <title>Ebay ECE</title>
        <link href="icone\favicon.jpg" rel="icon" type="images/x-icon" />  
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="css\bootstrap.min.css"/> 
        <link rel="stylesheet" href="css\style.css"/>
    </head> 

    <body>

    	<?php include("entete.php"); ?>
        <br>
        <br>
        <section>
   <div class="row">
   <div class="col-2 blueECEleft" ;> </div>
   <div class="col-8"> 
        <?php if ($_SESSION['vendeur'] == 'oui'){ ?>

        <h2>Que voulez-vous faire?</h2>
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <button onclick="location.href='http://pool/vendre.php'" type="button">Vendre un objet</button>
            <button onclick="location.href='http://pool/objetEnVente.php'" type="button">Objets en vente</button>
            <button onclick="location.href='http://pool/objetVendu.php'" type="button">Objets Vendus</button>
        </div>
        <div class="col-sm-3"></div>
        <?php } else if ($_SESSION['vendeur'] == 'non'){ ?>

        <p>Vous n'etes pas encore inscrit.</p>
        <form action="traitement_vendeur.php" method="post">
            <input type="submit" value="Demander à être vendeur" name="vendeur" />
        </form>

        <?php }
        else if ($_SESSION['vendeur'] == 'en cours'){
        ?>
        <p>Votre demande est en cours.</p>
        <?php } ?>

        <div id="footer">Copyright &copy; 2020 Ebay ECE
            <br>    
            <a href="mailto:Ebay.ECE@gmail.com">Ebay.ECE@gmail.com</a>  
        </div>   
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
</div>
    </body>
</html>

