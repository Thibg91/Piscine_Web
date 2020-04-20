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
                    $prixIm = $row["AchatImmediat"];
                    $description = $row["descr"];
                    $photo1 = $row["photo1"];
                    $photo2 = $row["photo2"];
                    $photo3 = $row["photo3"];
                    $video = $row["video"];
                    $now = $row['achatM'];
                    $titre = $row['titre'];
                    $enchere = $row['enchere'];
                    $nego = $row['meilleureO'];
                    $dateF = $row['dateF'];
                    $dateH = $row['dateH'];
                    ?> 
                    <div class="row">
                     <div class="card mb-4 bg-dark text-white w-100 h-10" style="max-width: 1000px max-height: 450px ;">
                      <div class="row no-gutters">
                        <div class="col-md-3">
                            <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                              <div class="carousel-inner  ">
                                <div class="carousel-item active ">
                                  <img  src=icone\\<?php echo $photo1?> style="width: 100%;" class="img-responsive center-block" alt="first slide">
                              </div>
                             <?php if($photo2 != '') {?>
                              <div class="carousel-item">
                                  <img  src=icone\\<?php echo $photo2?> style="width: 100%; " class="img-responsive center-block" alt="photo2">
                              </div>
                             <?php }
                             if($photo3 != ''){?>
                              <div class="carousel-item">
                                  <img  src=icone\\<?php echo $photo3?> style="width: 100%; " class="img-responsive center-block" alt="photo3">
                              </div>
                              <?php } if($video != ''){ ?>
                              <div class="carousel-item">
                                  <div class="embed-responsive embed-responsive-16by9">    
                                    <iframe class="embed-responsive-item" src=icone\\<?php echo $video?> style="width: 100%;" alt="video"> </iframe>     </div> 
                                </div>
                            <?php } ?>
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    
                    <div class="col-md-4">
                      <div class="card-body">
                       <h5 class="card-title"><?php echo $titre?></h5> 
                       <p class="card-text"><strong>Description:</strong> <?php echo $description?></p>
                   </div>
               </div>
               <div class="col-md-3" >
                <p class="card-text"><br><br><strong>Prix immédiat:</strong>  <?php echo $prixIm?> € </p>
                <p class="card-text"><strong>Prix:</strong>  <?php echo $prix?> € </p>
                <p class="card-text"><strong>Date:</strong>  <?php echo $dateF?> à <?php echo $dateH?> </p>
                
              </div> 
               <div class="col-md-2" > 
               
                <button onclick="location.href='http://pool/Panier.php?id=<?php echo $id; ?>'" type="button" class="btn btn-info" <?php if ($now == ''){echo("disabled"); } ?> >Ajouter au Panier</button>
                <br>
                <br>
                <button onclick="location.href='http://pool/enchere.php?id=<?php echo $id; ?>'" type="button" class="btn btn-info" <?php if ($enchere == ''){echo("disabled");}?> >Enchérir</button>
                 <br>
                 <br>
                 <button onclick="location.href='http://pool/nego.php?id=<?php echo $id; ?>'" type="button" class="btn btn-info" <?php if ($nego == ''){echo("disabled");}?> >
                 Négocier</button>
                
                </div>
            
        </div> 
        </div>
    </div>
    <button type="button" class="btn btn-outline-secondary"><a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">Retour à la page précédente</a></button>
    <div class="bigwhiteblock"></div>
</div>
  
<?php } } ?>
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