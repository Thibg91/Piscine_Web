
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
   <div class="col-2 blueECEleft" > </div>
   <div class="col-8">
 <?php if(isset($_SESSION['email'])) 
{ ?>
        <?php if ($_SESSION['vendeur'] == 'oui'){ ?>
        <table class="table">  
            <thead>     
                <tr>   
                    <th>ID Objet</th> 
                    <th>Titre</th>   
                    <th>Photo</th> 
                    <th>Description</th>
                    <th>Prix</th> 
                    <th>Catégorie</th>   
                    <th>Email de l'acheteur</th> 
                </tr> 
            </thead>   
           
                <?php
                include("traitement_SQL.php");
                global $db;
                $email = $_SESSION['email'];
                date_default_timezone_set('Europe/Paris');
                $date = date('y-m-d');
                $heure = date('h:i:s');
                $sql = "SELECT * FROM commande WHERE emailVendeur='$email' AND meilleureO='oui' AND (dateF<'$date' OR dateF='$date') ";
                if($result = mysqli_query($db, $sql)){
                    while ($row = $result->fetch_assoc()) {
                        $id = $row["nItem"];
                        $email = $row["EmailAcheteur"];
                        $descr = $row["Description"];
                        $titre = $row["Titre"];
                        $prix = $row["Prix"];
                        $cat = $row["Catégorie"];
                        $photo = $row["Photo"];  ?>
                        
                     <tbody>     
                      <tr>
                        <td><?php echo $id ?></td> 
                        <td><?php echo $titre ?></td> 
                         <td> <img src=icone\\<?php echo $photo?> style="width: 50%;"></td>
                        <td><?php echo $descr ?></td>
                        <td><?php echo $prix ?></td>
                        <td><?php echo $cat ?></td> 
                        <td><?php echo $email ?></td>
                         </tr>
                     </tbody>
               <?php     }
                }
                ?> 
        </table> 
        <button onclick="location.href='http://pool/Vendeur.php'" type="button">Retour</button>
        <?php } else if ($_SESSION['vendeur'] == 'non'){ ?>

        <p>Vous n'etes pas encore inscrit.</p>
        <form action="traitement_vendeur.php" method="post">
            <input type="submit" value="Demander à être vendeur" name="vendeur" />
        </form>

        <?php }
        else if ($_SESSION['vendeur'] == 'en cours'){
        ?>
        <p>Votre demande est en cours.</p>
        <?php } }else { ?>
    <p>Vous n'êtes pas connecté, veuillez vous identifier et faire une demande si vous ne possedez pas de compte vendeur</p>
    <a href="#"  id="a-connexion" data-toggle="modal" data-target="#popupModal">Connexion</a>
    <br>
    <button onclick="location.href='http://pool/accueil.php'" type="button">retour</button>
    <?php } ?>
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

