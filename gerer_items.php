
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
        <?php include("entete.php"); ?>
        <br>
        <br>
        <?php include("traitement_sql.php");
        global $db;
        $sql = "SELECT * FROM items";
        $result = mysqli_query($db, $sql);
        ?> 
        <div class="row">
            <div class="col-2 blueECEleft"> </div>
            <div class="col-8">
                <div class="container-fluid">
                    <?php if(isset($_SESSION['email'])) { ?>
                    <?php if ($_SESSION['admin'] == 'oui'){ ?>
                    <button style="float:right" onclick="location.href='http://pool/Admin.php'" type="button">Retour</button>
                    <h3> Liste des Items </h3>
                    <div class="table table-responsive">
                        <table class="table table-hover table-bordered table-dark">  
                            <thead>     
                                <tr>   
                                    <th style="width: 5%">N° d'identification</th> 
                                    <th style="width: 5%">Photo</th>   
                                    <th style="width: 5%">Nom</th> 
                                    <th style="width: 5%"> Description</th>  
                                    <th style="width: 5%">enchère ?</th> 
                                    <th style="width: 5%">Meilleure Offre ?</th> 
                                    <th style="width: 5%">Achetez-le maintenant ?</th>
                                    <th style="width: 5%">Date de fin de mise en vente</th>
                                    <th style="width: 5%">Prix</th>
                                    <th style="width: 55%">Supprimer</th>
                                </tr> 
                            </thead>  

                            <?php while($donnees = $result->fetch_assoc()) { ?>
                            <tbody> 
                                <tr>  
                                    <td> <?php echo $donnees['nItem'];?> </td>    
                                    <td>  <img src= icone\<?php echo $donnees['photo'];?> width="75"  height= "75"> </td>   
                                    <td> <?php echo $donnees['titre'];?> </td> 
                                    <td> <?php echo $donnees['descr'];?> </td> 
                                    <td> <?php echo $donnees['enchere'];?> </td> 
                                    <td> <?php echo $donnees['meilleureO'];?> </td> 
                                    <td> <?php echo $donnees['achatM'];?> </td> 
                                    <td> <?php echo "le " .$donnees['dateF']. " à " .$donnees['dateH']; ?> </td>
                                    <td> <?php echo $donnees['prix'];?> </td> 
                                    <td><button onclick="location.href='http://pool/supprimer_item.php?id=<?php echo $donnees['nItem'];?>'" type="button">Supprimer</button></td>
                                </tr>  
                                <?php } mysqli_close($db); ?>
                            </tbody>  
                        </table>  
                    </div>
                    <?php }else if ($_SESSION['admin'] == 'non'){ 
                    ?>
                    <p>Vous n'avez pas les droits d'Admin.</p>
                    <button onclick="location.href='http://pool/accueil.php'" type="button">retour</button>
                    <?php } }else { ?>
                    <p>Vous n'avez pas les droits d'Admin.</p>
                    <button onclick="location.href='http://pool/accueil.php'" type="button">retour</button>
                    <?php } ?>
                    <div class="bigwhiteblock"></div>
                </div>
            </div>
            <div class="col-2 blueECEright">  </div>
        </div>
        <div class="row">
            <div class="col-2 blueECEleft">  </div> 
            <div class="col-8 footer">  
                <?php include("footer.html"); ?> 
            </div> 
            <div class="col-2 blueECEright">  </div>
        </div>
    </body>
</html>