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
        <?php 
        include("traitement_SQL.php");
        global $db;
        $nom='tresor';
        $sql = "SELECT * FROM items WHERE Categorie='$nom' ORDER BY dateF DESC";
        if($result = mysqli_query($db, $sql)){
            while ($row = $result->fetch_assoc()) {
                $prix = $row["prix"];
                $description = $row["descr"];
                $photo = $row["photo"];
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
    <?php include("footer.php"); ?> 
    </div> 
   <div class="col-2 blueECEright">  </div>
 </div>
</div> 
    </body>
</html>