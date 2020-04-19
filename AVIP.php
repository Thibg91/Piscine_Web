<!DOCTYPE html> 

<html>

    <head> 
        <title>Ebay ECE</title>
        <link href="icone\favicon.jpg" rel="icon" type="images/x-icon" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">

    </head> 



    <body>
        <?php include("entete.php"); ?>
        <br>
        <br>
        <section>
            <div class="row">
                <div class="col-2 blueECEleft" ;> </div>
                <div class="col-8">
                    <button style="float:left" onclick="location.href='http://pool/Catégories.php'"class="btn btn-secondary" type="button">Retour aux Catégories</button>
                    <?php if (!isset($_GET['filtre'])){ ?>
                    <button style="float:right" onclick="location.href='http://pool/AVIP.php?filtre=filtre'" class="btn btn-info" type="button">Filtre</button>
                    <?php } if (isset($_GET['filtre'])){ ?>

                    <form style="float:right" method="post">
                        <select name="mode" class="browser-default custom-select">
                            <option selected>mode d'achat</option>
                            <option value="achat">Achat Immédiat</option>
                            <option value="offre">Meilleure Offre</option>
                            <option value="enchere">Enchère</option>
                        </select>
                       <input style="float:right" type="submit" class="btn btn-info" name="submit" value="Accepter"> 
                    </form>
                    <button style="float:right" onclick="location.href='http://pool/AVIP.php'" class="btn btn-secondary">Annuler</button>
                    <?php } ?>
                    <br>
                    <br>
                    <?php 
                    include("traitement_SQL.php");
                    global $db;
                    $nom='vip';
                    $sql = '';
                    if(isset($_POST['mode'])){
                        extract($_POST);
                        if ($mode=='achat'){
                            $sql .= "SELECT * FROM items WHERE Categorie='$nom' AND achatM='oui'  ORDER BY dateF DESC";
                        }
                        if ($mode=='offre'){
                            $sql .= "SELECT * FROM items WHERE Categorie='$nom' AND meilleureO='oui'  ORDER BY dateF DESC";
                        }
                        if ($mode=='enchere'){
                            $sql .= "SELECT * FROM items WHERE Categorie='$nom' AND enchere='oui'  ORDER BY dateF DESC";
                        }
                    }
                    else {
                        $sql = "SELECT * FROM items WHERE Categorie='$nom' ORDER BY dateF DESC";
                    }
                    if($result = mysqli_query($db, $sql)){
                        while ($row = $result->fetch_assoc()) {
                            $prix = $row["prix"];
                            $description = $row["descr"];
                            $photo1 = $row["photo1"];
                            $id = $row["nItem"];
                            $titre = $row["titre"];
                    ?> 
                     <div class="card mb-3 bg-dark text-white" style="max-width: 1000px;">
                      <div class="row no-gutters">
                        <div class="col-md-3">

                         <img  src=icone\\<?php echo $photo1?> style="width: 75%; " class="img-responsive center-block" alt="Image non disponible">
                     </div>
                     <div class="col-md-5">
                      <div class="card-body">
                         <h5 class="card-title"><?php echo $titre?></h5> 
                         <p class="card-text"><strong>Description:</strong> <?php echo $description?></p>
                     </div>
                 </div>
                 <div class="col-md-2" ><p class="card-text"><br><br><strong>Prix:</strong>  <?php echo $prix?></p></div> 
                 <div class="col-md-2" ><br><br><a href="item.php?id=<?php echo $id; ?>" class="btn btn-info">Aller voir l'item</a></div> 

             </div>
         </div>

                    <br>
                    <?php } } ?>
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