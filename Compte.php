
<!DOCTYPE html> 

<html>

    <head> 
        <title>Ebay ECE</title>
        <link href="favicon.jpg" rel="icon" type="images/x-icon" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="css\bootstrap.min.css"/>
        <link rel="stylesheet" href="css\style.css"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>     </head> 


    <body>

        <?php include("entete.php"); ?>
        <br>
        <br>
        <section>
            <div class="row">
                <div class="col-2 blueECEleft" ;> </div>
                <div class="col-8"> 
                    <?php if(isset($_SESSION['email'])) { ?>

                    <h2><strong>Vos Informations</strong></h2>
                       <table class="table table-dark table-borderless">
                          <thead>
                            <tr>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <th scope="row">Prénom:</th>
                              <td><?= $_SESSION['prenom']; ?></td>
                              <th scope="row">N° de Téléphone:</th>
                              <td>0<?= $_SESSION['tel']; ?> </td>
                              
                          </tr>
                          <tr>
                              <th scope="row">Adresse ligne 1:</th>
                              <td><?= $_SESSION['adresse1']; ?></td>
                              <th scope="row">Adresse ligne 2:</th>
                              <td><?= $_SESSION['adresse2']; ?></td>
                              
                          </tr>
                          <tr>
                              <th scope="row">Ville: </th>
                              <td><?= $_SESSION['ville']; ?></td>
                              <th scope="row">Code Postal:</th>
                              <td><?= $_SESSION['codePostal']; ?></td>
                          </tr>
                          <tr>
                              <th scope="row">Pays:</th>
                              <td><?= $_SESSION['pays']; ?></td>
                              
                          </tr>
                          <tr>
                              
                              <th scope="row">Type de carte: </th>
                              <td><?= $_SESSION['type']; ?></td>
                          </tr>
                          <tr>
                              <th scope="row">Numéro de carte:</th>
                              <td><?= $_SESSION['numCarte'];?></td>
                              <th scope="row">Date d'expiration:</th>
                              <td><?= $_SESSION['dateCarte']; ?></td>
                          </tr>
                          <tr>
                              <th scope="row">Code de sécurité:</th>
                              <td><?= $_SESSION['code']; ?></td>
                              <th scope="row">Nom sur la carte:</th>
                              <td><?php echo $_SESSION['nomCarte']; ?></td>
                          </tr>
                      </tbody>
                  </table>
                  <button class="btn btn-outline-info btn-lg"> <a href="modification_compte.php">Modifier vos informations</a> </button>
                  <br>
                  <br>
                  <h3>Mon historique d'achat</h3>
                  <table class="table table-dark">  

                        <thead>     
                            <tr>  
                                <th>N° de commande</th> 
                                <th>Photo</th> 
                                <th>Titre</th>  
                                <th>Description</th>  
                                <th>Prix</th> 
                                <th>Date</th> 
                            </tr> 
                        </thead>   
                        <?php 
                                                         include("traitement_SQL.php");
                                                         global $db;
                                                         date_default_timezone_set('Europe/Paris');
                                                         $date = date('y-m-d');
                                                         $heure = date('h:i:s');
                                                         $email = $_SESSION['email'];
                                                         $sql = "SELECT * FROM commande WHERE EmailAcheteur='$email' ORDER BY dateF DESC";
                                                         if($result = mysqli_query($db, $sql)){
                                                             while ($row = $result->fetch_assoc()) {
                                                                 $Ncommande = $row["NumeroCommande"]; 
                                                                 $titre = $row["Titre"];
                                                                 $prix = $row["Prix"];
                                                                 $descr = $row["Description"];
                                                                 $photo = $row["Photo"];
                                                                 $dateF = $row["DateF"];
                                                                 $type = $row["TypeAchat"];
                                                                 ?>          
                                                                 <tbody> 
                                                                <?php  if(!(($date < $dateF)&&($type == 'enchere'))){ ?>
                                                                    <tr>    
                                                                        <td><?php echo $Ncommande?> </td> 
                                                                        <td> <img src=icone\\<?php echo $photo?> style="width: 33%;"> </td>
                                                                        <td><?php echo $titre?> </td> 
                                                                        <td><?php echo $descr?> </td>   
                                                                        <td><?php echo $prix?></td> 
                                                                        <td><?php echo $date?></td>
                                                                    </tr>   
                                                                  <?php }?>
                                                                </tbody>  
                                                            <?php  }} ?>
                                                        </table>

                                                        <h3>Mes enchères en cours</h3>
                                                            <table class="table table-dark">  
                                                                <thead>     
                                                                    <tr>  
                                                                        <th>N° items</th> 
                                                                        <th>Photo</th> 
                                                                        <th>Titre</th>  
                                                                        <th>Description</th>  
                                                                        <th>Prix</th> 
                                                                        <th>Date de fin</th> 
                                                                        <th>Meilleure offre ? </th> 
                                                                        <th>Aller voir l'annonce </th> 
                                                                    </tr> 
                                                                </thead>   
                                                                <?php 
                                                                include("traitement_SQL.php");
                                                                global $db;
                                                                $email = $_SESSION['email'];
                                                                $sql = "SELECT * FROM commande WHERE EmailAcheteur='$email' AND TypeAchat='enchere' ORDER BY dateF DESC";
                                                                if($result = mysqli_query($db, $sql)){
                                                                   while ($row = $result->fetch_assoc()) {
                                                                       $Nitem = $row["nItem"]; 
                                                                       $titre = $row["Titre"];
                                                                       $prix = $row["Prix"];
                                                                       $descr = $row["Description"];
                                                                       $photo = $row["Photo"];
                                                                       $dateF = $row["DateF"];
                                                                       $id = $row["nItem"];
                                                                   ?>

                                                                       <tbody> 
                                                                        <tr>    
                                                                            <td><?php echo $Nitem?> </td> 
                                                                            <td> <img src=icone\\<?php echo $photo?> style="width: 50%;"> </td>
                                                                            <td><?php echo $titre?> </td> 
                                                                            <td><?php echo $descr?> </td>   
                                                                            <td><?php echo $prix?></td> 
                                                                            <td><?php echo $date?></td>
                                                                            <td><?php echo "non"; ?></td>
                                                                            <td><a href="item.php?id=<?php echo $id; ?>">aller voir</a></td>
                                                                        </tr> 
                                                                        <?php  }}
                                                                        $sql = "SELECT * FROM items WHERE nItem='$id' AND enchere='oui' ORDER BY dateF DESC";
                                                                if($result = mysqli_query($db, $sql)){
                                                                   while ($row = $result->fetch_assoc()) {
                                                                       $Nitem = $row["nItem"]; 
                                                                       $titre = $row["titre"];
                                                                       $prix = $row["prix"];
                                                                       $descr = $row["descr"];
                                                                       $photo = $row["photo1"];
                                                                       $dateF = $row["dateF"];
                                                                       $id = $row["nItem"];
                                                                   ?>

                                                                       <tbody> 
                                                                        <tr>    
                                                                            <td><?php echo $Nitem?> </td> 
                                                                            <td> <img src=icone\\<?php echo $photo?> style="width: 50%;"> </td>
                                                                            <td><?php echo $titre?> </td> 
                                                                            <td><?php echo $descr?> </td>   
                                                                            <td><?php echo $prix?></td> 
                                                                            <td><?php echo $date?></td>
                                                                            <td><?php echo "oui"; ?></td>
                                                                            <td><a href="item.php?id=<?php echo $id; ?>">aller voir</a></td>
                                                                        </tr> 
                                                                      </tbody>  
                                                                <?php  }} ?>
                                                                 <?php  }else {echo "Vous n'êtes pas connecté";} ?> 


                                                        </table> 
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
