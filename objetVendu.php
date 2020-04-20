
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
                    <h2> <strong> Mes articles vendus (achats immédiats et enchères) </strong>  </h2>
                    <table class="table table-dark">  
                        <thead>     
                            <tr>   
                                <th>ID Objet</th> 
                                <th>Titre</th>
                                <th>Photo</th>
                                <th>Prix</th>   
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
                            $sql = "SELECT * FROM commande WHERE EmailVendeur='$email' AND TypeAchat='enchere' OR TypeAchat='achatImmediat'";
                            //AND (dateF>'$date' OR dateF='$date' AND dateH<'$heure') ";
                            if($result = mysqli_query($db, $sql)){
                                while ($row = $result->fetch_assoc()) {
                                    $id = $row["nItem"];
                                    $email = $row["EmailAcheteur"];
                                    $titre = $row["Titre"];
                                    $prix = $row["Prix"];
                                    $photo = $row["Photo"];
                                    echo "<tr>"; // début de ligne
                                    echo "<td>$id</td>"; // email
                                    echo "<td>$titre</td>"; // prenom
                                    echo "<td><img src=icone\\$photo width=75 height=75></td>"; // nom
                                    echo "<td>$prix</td>"; // prenom
                                    echo "<td>$email</td>";
                                    echo "</tr>"; // fin de la ligne
                                }
                            }
                            ?> 
                        </tbody>  
                    </table>
                    <h2> <strong> Mes articles vendus (négociations) </strong>  </h2>
                    <table class="table table-dark">  
                        <thead>     
                            <tr>   
                                <th>ID Objet</th> 
                                <th>Titre</th>
                                <th>Photo</th>
                                <th>Prix</th>   
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
                            $sql = "SELECT * FROM commande WHERE EmailVendeur='$email' AND TypeAchat='nego_paye'";
                            //AND (dateF>'$date' OR dateF='$date' AND dateH<'$heure') ";
                            if($result = mysqli_query($db, $sql)){
                                while ($row = $result->fetch_assoc()) {
                                    $id = $row["nItem"];
                                    $email = $row["EmailAcheteur"];
                                    $titre = $row["Titre"];
                                    $prix = $row["PrixPropose"];
                                    $id_offre = $row["NumeroCommande"];
                                    $photo1 = $row["Photo"];
                                    echo "<tr>"; // début de ligne
                                    echo "<td>$id</td>"; // email
                                    echo "<td>$titre</td>"; // prenom
                                    echo "<td><img src=icone\\$photo1 width=75 height=75></td>"; // nom
                                    echo "<td>$prix</td>"; // prenom
                                    echo "<td>$email</td>";
                                    echo "</tr>"; // fin de la ligne
                                }
                            }
                            ?> 
                        </tbody>  
                    </table>
                    <button onclick="location.href='http://pool/Vendeur.php'" type="button" class="btn btn-secondary">Retour</button>
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

