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
                    <button style="float:left" onclick="location.href='http://pool/Achat.php'" type="button">Retour à Achat</button>
                    <?php if (!isset($_GET['filtre'])){ ?>
                    <button style="float:right" onclick="location.href='http://pool/vue_offre.php?filtre=filtre'" type="button">Filtre</button>
                    <?php } if (isset($_GET['filtre'])){ ?>
                    <form style="float:right" method="post">
                        <select name="cat">
                            <option value="vip">Accessoires VIP</option>
                            <option value="musee">Bon pour le musée</option>
                            <option value="tresor">Férailles ou Trésor</option>
                        </select>
                        <input type="submit" name="submit" value="Accepter">
                    </form>
                    <button style="float:right" onclick="location.href='http://pool/vue_offre.php'">Annuler</button>
                    <?php } ?>
                    <br>
                    <br>
                    <?php 
                    include("traitement_SQL.php");
                    global $db;
                    $date=date('y-m-d');
                    $heure = date('h:i:s');
                    if(isset($_POST['submit'])){
                        extract($_POST);
                        $sql = "SELECT * FROM items WHERE Categorie='$cat' AND meilleureO='oui' AND (dateF>'$date' OR (dateF='$date' AND dateH >'$heure')) ORDER BY dateF ASC";
                    }
                    else {
                        $sql = "SELECT * FROM items WHERE meilleureO='oui' AND (dateF>'$date' OR (dateF='$date' AND dateH >'$heure')) ORDER BY dateF ASC";
                    }
                    if($result = mysqli_query($db, $sql)){
                        while ($row = $result->fetch_assoc()) {
                            $prix = $row["prix"];
                            $description = $row["descr"];
                            $photo = $row["photo1"];
                            $id = $row["nItem"];
                    ?> 
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">   
                            <div class="img-thumbnail">
                                <a href="item.php?id=<?php echo $id; ?>">
                                    <img src=icone\\<?php echo $photo?> style="width: 50%;">  
                                    <div class="caption">
                                        <p>Prix: <?php echo $prix?></p>
                                        <p>Description: <?php echo $description?></p>  
                                    </div>  
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
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