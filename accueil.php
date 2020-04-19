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
                <?php include('paiement_auto.php');?>
                <?php 
                include("traitement_SQL.php");
                global $db;
                $date=date('y-m-d');
                $heure = date('h:i:s');
                $sql = "SELECT * FROM items WHERE dateF>'$date' OR (dateF='$date' AND dateH >'$heure') ORDER BY dateF ASC";
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
                         <div class="col-md-2" ><br><br><a href="item.php?id=<?php echo $id; ?>" class="btn btn-primary">Aller voir l'item</a></div> 
                    
            </div>
        </div>

<br>
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



