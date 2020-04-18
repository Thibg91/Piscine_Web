
<!DOCTYPE html> 

<html>

    <head> 
        <title>Ebay ECE</title>
        <link href="favicon.jpg" rel="icon" type="images/x-icon" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="css\bootstrap.min.css"/>
        <link rel="stylesheet" href="css\style.css"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>     </head> 


<body>
    
    <?php include("entete.php"); ?>
      <br>
        <br>
       <section>
   <div class="row">
   <div class="col-2 blueECEleft" ;> </div>
   <div class="col-8"> 
    <?php if(isset($_SESSION['email'])) 
     { ?>
        <h2> Mon compte </h2>
        <h3>Mes informations personnelles</h3>
        <p> Prénom: <?= $_SESSION['prenom']; ?> </p> 
        <p> Adresse ligne 1: <?= $_SESSION['adresse1']; ?> </p> 
        <p> Adresse ligne 2: <?= $_SESSION['adresse2']; ?> </p>
        <p> Ville: <?= $_SESSION['ville']; ?> </p>
        <p> Code Postal: <?= $_SESSION['codePostal']; ?> </p>
        <p> Pays: <?= $_SESSION['pays']; ?> </p>
        <p> N° de Téléphone: <?= $_SESSION['tel']; ?> </p>
        <a href="modification_compte.php">Modifier vos informations</a>

        <h3>Mon historique d'achat</h3>
         <table class="table">  
            <thead>     
                <tr>  
                    <th>N° de commande</th> 
                    <th>Photo</th> 
                    <th>Titre</th>  
                    <th>Description</th>  
                    <th>Prix</th> 
                    <th>Date</th> 
                </tr> 
            </thead>   
          <?php 
           include("traitement_SQL.php");
        global $db;
        date_default_timezone_set('Europe/Paris');
                $date = date('y-m-d');
                $heure = date('h:i:s');
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM commande WHERE EmailAcheteur='$email' AND meilleureO ='oui'
        AND (dateF<'$date' OR dateF='$date') ORDER BY dateF DESC";
        if($result = mysqli_query($db, $sql)){
            while ($row = $result->fetch_assoc()) {
                $Ncommande = $row["NumeroCommande"]; 
                $titre = $row["Titre"];
                $prix = $row["Prix"];
                $descr = $row["Description"];
                $photo = $row["Photo"];
                $date = $row["DateF"];
 ?>          
            <tbody> 
                <tr>    
                    <td><?php echo $Ncommande?> </td> 
                    <td> <img src=icone\\<?php echo $photo?> style="width: 50%;"> </td>
                    <td><?php echo $titre?> </td> 
                    <td><?php echo $descr?> </td>   
                    <td><?php echo $prix?></td> 
                    <td><?php echo $date?></td>
                </tr>   
            </tbody>  
        <?php  }} ?>

        <h3>Mes enchères en cours</h3>
        <table class="table">  
            <thead>     
                <tr>  
                    <th>N° items</th> 
                    <th>Photo</th> 
                    <th>Titre</th>  
                    <th>Description</th>  
                    <th>Prix</th> 
                    <th>Date de fin</th> 
                    <th>Meilleure offre ? </th> 
                    <th>Aller voir l'annonce </th> 
                </tr> 
            </thead>   
          <?php 
           include("traitement_SQL.php");
        global $db;
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM commande WHERE EmailAcheteur='$email' AND TypeAchat=
        'enchere' ORDER BY dateF DESC";
        if($result = mysqli_query($db, $sql)){
            while ($row = $result->fetch_assoc()) {
                $Ncommande = $row["nItem"]; 
                $titre = $row["Titre"];
                $prix = $row["Prix"];
                $descr = $row["Description"];
                $photo = $row["Photo"];
                $date = $row["DateF"];
              //  $mOffre = $row["meilleureO"];
                $id = $row["nItem"];

 ?>          
            <tbody> 
                <tr>    
                    <td><?php echo $Ncommande?> </td> 
                    <td> <img src=icone\\<?php echo $photo?> style="width: 50%;"> </td>
                    <td><?php echo $titre?> </td> 
                    <td><?php echo $descr?> </td>   
                    <td><?php echo $prix?></td> 
                    <td><?php echo $date?></td>
                   <!-- <td><?php echo $mOffre?></td> -->
                    <td><a href="item.php?id=<?php echo $id; ?>">aller voir</td>
                    </tr>   
            </tbody>  
        <?php  }} ?>




   <?php  }else {echo "Vous n'êtes pas connecté";} ?> 
        
        </table> 
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