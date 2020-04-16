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
        <?php 
        include("traitement_SQL.php");
        global $db;
        $id = $_GET['id'];
        $sql = "SELECT * FROM items WHERE nItem='$id'";
        if($result = mysqli_query($db, $sql)){
            while ($row = $result->fetch_assoc()) {
                $prix = $row["prix"];
                $description = $row["descr"];
                $photo = $row["photo"];
                $now = $row['achatM'];
                $enchere = $row['enchere'];
        ?> 
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">   
                <div class="img-thumbnail">     
                    <img src=icone\\<?php echo $photo?> style="width: 50%;">  
                    <div class="caption">
                        <form method="post" action="traitement_enchere.php?id=<?php echo $id; ?>">
                            <p>Prix: <?php echo $prix?></p>
                            <?php if (isset($_SESSION['email'])){?>
                            <p>Veuillez mettre un prix supérieur au précédent.</p>
                            <p>Nouvelle Offre: <input type="number" name="offre"></p>
                            <input type="submit" name="enchere" value="Sousmettre l'enchère">
                            <?php } else {?>
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
    </body>
</html>