
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

            <div class="col-6">
                <h2> Article(s) dans votre panier </h2>
                <?php 
                include("traitement_SQL.php");
                global $db;
                 $test = 0;
                $_SESSION['prixFinal'] = 0;
                $nbItem = 0;
                if(isset($_GET['delete']) && isset($_SESSION['panier'])){
                    $recup = $_GET['delete'];
                    $_SESSION['panier'] = str_replace($recup,"",$_SESSION['panier']);
                }
                if (!isset($_SESSION['panier'])){
                    $_SESSION['panier'] = '';
                }
                if (isset($_GET['id']) && isset($_SESSION['panier'])){
                    for ($i = 0; $i <= strlen($_SESSION['panier']); $i=$i+7){
                        if ($_GET['id'] == substr($_SESSION['panier'],$i,7)){
                            $test = 1;
                        }
                    }
                }
                if (isset($_GET['id'])){
                    if ($test == 0){
                        $_SESSION['panier'] .= $_GET['id'];
                    }
                }
                if(isset($_SESSION['panier'])){
                    for ($j = 0; $j <= strlen($_SESSION['panier']); $j=$j+7){
                        $id = substr($_SESSION['panier'],$j,7);
                        $sql = "SELECT * FROM items WHERE nItem='$id'";
                        if($result = mysqli_query($db, $sql)){
                            while ($row = $result->fetch_assoc()) {
                                $prix = $row["AchatImmediat"];
                                $description = $row["descr"];

                                $photo1 = $row["photo1"];
                                $titre = $row["titre"];


                                $nbItem++;
                                $_SESSION['prixFinal'] = $_SESSION['prixFinal'] + $prix;

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
               <div class="col-md-2" ><br><br><a href="item.php?id=<?php echo $id; ?>" class="btn btn-info">Aller voir l'item</a></div> 

           </div>
       </div>
                <?php } } } }?>
             <div class="bigwhiteblock"></div>
            </div>
             <div class="col-md-2">
                <?php $prixFinal = $_SESSION['prixFinal'];?> 
                <table class="table table-dark">
                  <thead>
                    <tr>
                      <th scope="col">Prix Final:</th>
                      <th scope="col"><?php echo $prixFinal ?></th>
                  </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="col">nombre item:</th>
                  <td><?php echo $nbItem ?></td>
              </tr>
          </tbody>
      </table>

                <?php if(isset($_SESSION['email'])){if(isset($_SESSION['panier'])&&($nbItem != '0')){ ?>
                <button onclick="location.href='http://pool/livraison.php'" type="button" class="btn btn-primary">Acceder au paiement</button>
                <?php } else { ?>
                <button onclick="location.href='http://pool/Catégories.php'" type="button" class="btn btn-primary">Panier Vide</button>
                <?php }} else {?>
                <p>Veuillez vous connecter pour continuer.</p>
                <?php } ?>
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