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
        <div class="row">
  
  <div class="col-2 blueECE"> </div>

  <div class="col-8">

        <h2> Article(s) dans votre panier </h2>
        <?php 
        include("traitement_SQL.php");
        global $db;
        $test = 0;
        $prixFinal = 0;
        $nbItem = 0;
        if (isset($_GET['id'])){
            for ($i = 0; $i <= strlen($_SESSION['panier']); $i=$i+7){
                if ($_GET['id'] == substr($_SESSION['panier'],$i,7)){
                    $test = 1;
                }
            }
            if ($test == 0){
                $_SESSION['panier'] .= $_GET['id'];

            }
        }
        if($_SESSION['panier']!=''){
            for ($j = 0; $j <= strlen($_SESSION['panier']); $j=$j+7){
                $id = substr($_SESSION['panier'],$j,7);
                $sql = "SELECT * FROM items WHERE nItem='$id'";
                if($result = mysqli_query($db, $sql)){
                    while ($row = $result->fetch_assoc()) {
                        $prix = $row["prix"];
                        $description = $row["descr"];
                        $photo = $row["photo"];
                        $nbItem++;
                        $prixFinal = $prixFinal + $prix;
                        
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
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <?php } } } } echo 'Prix Final= '.$prixFinal.' et nombre item= '.$nbItem; ?>
       </div>
 <div class="col-2 blueECE">  </div>

</div>
    </body>

    <td colspan="2" align="center">   
        <input type="submit" value="Proceder au paiement" />
    </td> 


</html>