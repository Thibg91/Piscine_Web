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
                $nego = $row['meilleureO'];
        ?> 
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">   
                <div class="img-thumbnail">     
                    <img src=icone\\<?php echo $photo?> style="width: 50%;">  
                    <div class="caption">
                        <p>Prix: <?php echo $prix?></p>
                        <p>Description: <?php echo $description?></p>  
                    </div>
                    <?php if ($now == 'oui'){ ?>
                    <button onclick="location.href='http://pool/Panier.php?id=<?php echo $id; ?>'" type="button">Ajouter au Panier</button>
                    <?php } if ($enchere == 'oui'){ ?>
                    <button onclick="location.href='http://pool/enchere.php?id=<?php echo $id; ?>'" type="button">Enchérir</button>
                    <?php } if ($nego == 'oui'){ ?>
                    <button onclick="location.href='http://pool/nego.php?id=<?php echo $id; ?>'" type="button">Négocier</button>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <?php } } ?>
    </body>
</html>