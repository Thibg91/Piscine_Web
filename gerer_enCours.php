<!DOCTYPE html> 

<html>

    <head> 
        <title>Ebay ECE</title>
        <link href="icone\favicon.jpg" rel="icon" type="images/x-icon" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head> 



    <body>
        <?php
        $bdd = 'piscine';
        $db_found = new mysqli( 'localhost', 'root', '', $bdd );
        $reponse = $db_found -> query('SELECT * FROM Items');
        ?> 
        <?php include("entete.php"); ?>
        <br>
        <br> 
         <section>
   <div class="row">
   <div class="col-2 blueECEleft"> </div>
   <div class="col-8">
    <h3> Liste des demandes de vendeurs</h3>
    <table class="table">  
        <thead>     
            <tr>   
                <th>email ECE</th> 
                <th>Prenom</th>   
                <th>Nom</th> 
                <th>Supprimer</th>
            </tr> 
        </thead>   
        <tbody> 
            <?php include 'traitement_enCours.php'; ?>  
        </tbody>  
    </table>
        <button onclick="location.href='http://pool/Admin.php'" type="button">Retour</button>
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