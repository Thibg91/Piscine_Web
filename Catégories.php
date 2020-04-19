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
                    <h2> Catégories</h2>

                      <div class="row">   
    

      <div class="col-md-4">
        <a href="ForT.php">   
          <div class="card bg-dark text-white" style="width: 20rem;">
            <img src="icone\ForT.jpeg"  style="width: 100%;" class="img-responsive center-block" alt="ForT">
            <div class="card-body">
              <p class="card-text"> <strong>Ferraille ou Trésor</strong></p>
            </div>
          </div>  
        </a>  
      </div> 

      <div class="col-md-4">
        <a href="musee.php"> 
          <div class="card bg-dark text-white" style="width: 20rem;">
            <img src="icone\musee.jpg" style="width: 100%;" class="img-responsive center-block" alt="musée">
            <div class="card-body">
              <p class="card-text"> <strong>Bon pour le Musée</strong></p>
            </div>
          </div>  
        </a>  
      </div> 

 <div class="col-md-4">
        <a href="AVIP.php"> 
          <div class="card bg-dark text-white" style="width: 20rem;">
             <img src="icone\AVIP.jpg"  style="width: 100%;" class="img-responsive center-block" alt="AVIP">
            <div class="card-body">
              <p class="card-text"> <strong>Accessoire VIP</strong></p>
            </div>
          </div>  
        </a>  
      </div>
</div>
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



