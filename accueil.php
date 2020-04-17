<!DOCTYPE html> 

<html>

    <head> 
        <title>Ebay ECE</title>
        <link href="icone\favicon.jpg" rel="icon" type="images/x-icon" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="css\bootstrap.min.css"/>
        <link rel="stylesheet" href="css\style.css"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 

    </head> 



    <body>

        <?php include("entete.php"); ?>
        <br>
        <br>

        <section>
   <div class="row">
   <div class="col-2 blueECEleft" ;> </div>
   <div class="col-8"> 
                <h2> Tous les items</h2>
                <?php 
                include("traitement_SQL.php");
                global $db;
                $sql = "SELECT * FROM items ORDER BY dateF DESC";
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
    <?php include("footer.html"); ?> 
    </div> 
   <div class="col-2 blueECEright">  </div>
 </div>




    </body>


</html>



