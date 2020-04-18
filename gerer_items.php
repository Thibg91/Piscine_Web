
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
   <div class="container-fluid backgroundBlue">
   <div class="row">
   <div class="col-sm-2"> </div>
   <div class="col-sm-8">
        <?php if(isset($_SESSION['email'])) 
{ ?>
   <?php if ($_SESSION['admin'] == 'oui'){ ?>
    <div class="container-fluid backgroundwhite">
        <h3> Liste des Items </h3>
        <table class="table table-condensed table-dark">  
            <thead>     
                <tr>   
                    <th>N° d'identification</th> 
                    <th>Photo</th>   
                    <th>Nom</th> 
                    <th> Description</th>  
                    <th>enchère ?</th> 
                    <th>Meilleure Offre ?</th> 
                    <th>Achetez-le maintenant ?</th>
                    <th>Date de fin de mise en vente</th>
                    <th>Prix</th>
                    <th>Supprimer</th>
                </tr> 
            </thead>  

            <?php
            while($donnees = mysqli_fetch_array($reponse))
            {
            ?>
            <tbody> 
                <tr>  
                    <td> <?php echo $donnees['nItem'];?> </td>    
                    <td>  <img src= icone\<?php echo $donnees['photo'];?> width="75"  height= "75"> </td>   
                    <td> <?php echo $donnees['titre'];?> </td>   
                    <td> <?php echo $donnees['descr'];?> </td> 
                    <td> <?php echo $donnees['enchere'];?> </td> 
                    <td> <?php echo $donnees['meilleureO'];?> </td> 
                    <td> <?php echo $donnees['achatM'];?> </td> 
                    <td> <?php echo $donnees['prix'];?> </td> 
                    <td> <?php echo "le " ,$donnees['dateF'], " à " ,$donnees['dateH']; ?> </td> 
                    <td colspan="2" align="center">    <input type="button" class="btn btn-primary" value="Supprimer" /> </td>
                </tr>  
                <?php
            } 
            mysqli_close($db_found); 
                ?>
            </tbody>  
        </table> 
        
        <button onclick="location.href='http://pool/Admin.php'" type="button">Retour</button>
        <?php }else if ($_SESSION['admin'] == 'non'){ 
    ?>
    <p>Vous n'avez pas les droits d'Admin.</p>
    <button onclick="location.href='http://pool/accueil.php'" type="button">retour</button>
    <?php } }else { ?>
    <p>Vous n'avez pas les droits d'Admin.</p>
    <button onclick="location.href='http://pool/accueil.php'" type="button">retour</button>
    <?php } ?>
  </div> 

  </div> 
  <div class="col-sm-2 ">  </div>
</div>
    <div class="footer">  
    <?php include("footer.html"); ?> 
    </div> 
  
 </div>
 





    </body>
</html>