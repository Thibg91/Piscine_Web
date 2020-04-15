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
        $nom='vip';
        $sql = "SELECT * FROM items WHERE Categorie='$nom'";
        if($result = mysqli_query($db, $sql)){
            while ($row = $result->fetch_assoc()) {
                $prix = $row["prix"];
                $description = $row["descr"];
                $photo = $row["photo"];
                echo '  <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">   
                                <div class="thumbnail">     
                                    <img src=icone\\'.$photo.' style="width: 50%;">  
                                    <div class="caption">
                                        <p>'.$prix.'</p>
                                        <p>'.$description.'</p>  
                                    </div>    
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>';
            }
        }
        ?>
    </body>
</html>