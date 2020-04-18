
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
                    <div class="container-fluid">
                        <?php if(isset($_SESSION['email'])) { ?>
                        <?php if ($_SESSION['admin'] == 'oui'){ ?>
                        <h3> Liste des Items </h3>
                        <table class="table">  
                            <thead>     
                                <tr>   
                                    <th class="col-md-1">N° d'identification</th> 
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

                            <?php while($donnees = mysqli_fetch_array($reponse)) { ?>
                            <tbody> 
                                <tr>  
                                    <td class="col-md-1"> <?php echo $donnees['nItem'];?> </td>    
                                    <td>  <img src= icone\<?php echo $donnees['photo'];?> width="75"  height= "75"> </td>   
                                    <td> <?php echo $donnees['titre'];?> </td> 
                                    <td> <?php echo $donnees['descr'];?> </td> 
                                    <td> <?php echo $donnees['enchere'];?> </td> 
                                    <td> <?php echo $donnees['meilleureO'];?> </td> 
                                    <td> <?php echo $donnees['achatM'];?> </td> 
                                    <td> <?php echo "le " ,$donnees['dateF'], " à " ,$donnees['dateH']; ?> </td>
                                    <td> <?php echo $donnees['prix'];?> </td> 
                                    <td><button onclick="location.href='http://pool/supprimer_item.php?id=<?php echo $donnees['nItem'];?>'" type="button">Supprimer</button></td>";
                                </tr>  
                                <?php } mysqli_close($db_found); ?>
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
                        <div class="bigwhiteblock"></div>
                    </div>
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