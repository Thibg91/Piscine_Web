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
   <div class="col-2 blueECEleft" > </div>
   <div class="col-8"> 
   <h2> Achat </h2>
   
   <div class="row">   
    

      <div class="col-md-4">
        <a href="vue_enchere.php">  
          <div class="card bg-dark text-white" style="width: 20rem;">
            <img src="icone\encheres.jpg"  style="width: 100%;" class="img-responsive center-block" alt="Enchères">
            <div class="card-body">
              <p class="card-text"> <strong>Enchères</strong></p>
            </div>
          </div>  
        </a>  
      </div> 

      <div class="col-md-4">
        <a href="vue_achat.php">  
          <div class="card bg-dark text-white" style="width: 20rem;">
            <img src="icone\direct.jpg" style="width: 100%;" class="img-responsive center-block" alt="Achetez-le maintenant">
            <div class="card-body">
              <p class="card-text"> <strong>Achetez-le maintenant</strong></p>
            </div>
          </div>  
        </a>  
      </div> 

 <div class="col-md-4">
        <a href="vue_offre.php"> 
          <div class="card bg-dark text-white" style="width: 20rem;">
             <img src="icone\offre.jpg"  style="width: 100%;" class="img-responsive center-block" alt="Meilleure offre">
            <div class="card-body">
              <p class="card-text"> <strong>Meilleure offre</strong></p>
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
</div>






</body>


</html>