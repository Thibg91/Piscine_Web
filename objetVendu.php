
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
            <tbody> 
                <?php
                include("traitement_SQL.php");
                global $db;
                $email = $_SESSION['email'];
                date_default_timezone_set('Europe/Paris');
                $date = date('y-m-d');
                $heure = date('h:i:s');
                $sql = "SELECT * FROM items WHERE emailVendeur='$email' AND meilleureO!='oui' AND (dateF<'$date' OR dateF='$date' AND dateH>'$heure') ";
                if($result = mysqli_query($db, $sql)){
                    while ($row = $result->fetch_assoc()) {
                        $id = $row["nItem"];
                        $email = $row["emailAcheteur"];
                        $descr = $row["descr"];
                        $titre = $row["titre"];
                        $prix = $row["prix"];
                        $cat = $row["Categorie"];
                        $photo = $row["photo"];
                        echo "<tr>"; // début de ligne
                        echo "<td>$id</td>"; // email
                        echo "<td>$titre</td>"; // prenom
                        echo "<td>$photo</td>"; // nom
                        echo "<td>$descr</td>"; // email
                        echo "<td>$prix</td>"; // prenom
                        echo "<td>$cat</td>"; // nom
                        echo "<td>$email</td>"; // supprimer ligne jQuery
                        echo "</tr>"; // fin de la ligne
                    }
                }
                ?> 
            </tbody>  
        </table> 
        <button onclick="location.href='http://pool/Vendeur.php'" type="button">Retour</button>
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

