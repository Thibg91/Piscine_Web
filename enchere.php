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
                <div class="col-2 blueECEleft"> </div>
                <div class="col-8">

        <?php 
        include("traitement_SQL.php");
        global $db;
        $id = $_GET['id'];
        $sql = "SELECT * FROM items WHERE nItem='$id'";
        if($result = mysqli_query($db, $sql)){
            while ($row = $result->fetch_assoc()) {
                $prix = $row["prix"];
                $description = $row["descr"];
                $photo = $row["photo1"];
                $now = $row['achatM'];
                $enchere = $row['enchere'];
        ?> 
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">   
                 <div class="card bg-dark text-white" style="width: 20rem;">   
                    <img src=icone\\<?php echo $photo?> style="width: 50%;">  
                    <div class="caption">
                        <form method="post" action="traitement_enchere.php?id=<?php echo $id; ?>">
                            <P><?php if (isset($_GET['erreur'])){echo $_GET['erreur'];} ?></P>
                            <p><strong> Prix: </strong>  <?php echo $prix?></p>
                            <?php if (isset($_SESSION['email'])){?>
                            <p>Veuillez mettre un prix supérieur au précédent.</p>
                            <?php if ($_SESSION['adresse1'] != '' && $_SESSION['ville'] != '' && $_SESSION['codePostal'] != '' && $_SESSION['pays'] != ''&& $_SESSION['tel'] != ''&& $_SESSION['type'] != ''&& $_SESSION['code'] != ''&& $_SESSION['numCarte'] != ''&& $_SESSION['nomCarte'] != ''&& $_SESSION['dateCarte'] != ''){?>
                            <p class="col-md-6"><strong> Nouvelle Offre:</strong>  </p>  <input type="number" class="form-control col-md-8" name="offre">
                              <br>
                            <input type="submit" class="btn btn-info" name="enchere" value="Sousmettre l'enchère">

                            <?php } else{ ?>
                            <p>Vous devez avoir une adresse de livraison valide et une carte valide pour enchérir.</p>
                            <button onclick="location.href='http://pool/Compte.php'" type="button">Aller à Mon Compte</button>
                            <?php } } else {?>
                            <p>Veuillez vous connecter pour mettre une enchere</p>
                            <?php } ?>
                            <p>Description: <?php echo $description?></p>  
                        </form> 
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
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