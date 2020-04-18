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
        $id = $_GET['id'];
        $sql = "SELECT * FROM items WHERE nItem='$id'";
        if($result = mysqli_query($db, $sql)){
            while ($row = $result->fetch_assoc()) {
                $prix = $row["prix"];
                $description = $row["descr"];
                $photo = $row["photo"];
                $now = $row['achatM'];
                $enchere = $row['enchere'];
        ?> 
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">   
                <div class="img-thumbnail">     
                    <img src=icone\\<?php echo $photo?> style="width: 50%;">  
                    <div class="caption">
                        <form method="post" action="traitement_nego.php?id=<?php echo $id; ?>">
                            <P><?php if (isset($_GET['erreur'])){echo $_GET['erreur'];} ?></P>
                            <p>Prix: <?php echo $prix?></p>
                            <?php 
                            if (isset($_SESSION['email'])){
                                include("traitement_SQL.php");
                                global $db;
                                $id = $_GET['id'];
                                $email = $_SESSION['email'];
                                $sql = "SELECT COUNT(*) as compte FROM commande WHERE nItem='$id' AND EmailAcheteur='$email' AND TypeAchat='negoKO'";
                                $result = mysqli_query($db, $sql);
                                $row = $result->fetch_assoc();
                                if($row['compte'] < 6){ 
                                    $sql = "SELECT COUNT(*) as compte2 FROM commande WHERE nItem='$id' AND EmailAcheteur='$email' AND TypeAchat='nego'";
                                    $res = mysqli_query($db, $sql);
                                    $rows = $res->fetch_assoc();
                                    if($rows['compte2'] == 0){ 
                            ?>
                            <p>Faites votre offre.</p>
                            <?php if (isset($_SESSION['adresse1'])&&isset($_SESSION['ville'])&&isset($_SESSION['codePostal'])&&isset($_SESSION['pays'])&&isset($_SESSION['tel'])&&isset($_SESSION['numCarte'])&&isset($_SESSION['nomCarte'])&&isset($_SESSION['type'])&&isset($_SESSION['code'])&&isset($_SESSION['dateCarte'])){?>
                            <p>Proposé un prix: <input type="number" name="offre"></p>
                            <p><input type="checkbox" name="contrat" required>J'accepte le contrat de EBAY ECE.</p>
                            <input type="submit" name="enchere" value="Sousmettre l'offre">
                            <?php } else{ ?>
                            <p>Vous devez avoir une adresse de livraison valide et une carte valide pour enchérir.</p>
                            <button onclick="location.href='http://pool/Compte.php'" type="button">Aller à Mon Compte</button>
                            <?php } } else{echo 'Vous avez deja une offre en cours.';} }  } else {?>
                            <p>Veuillez vous connecter pour mettre une enchere</p>
                            <?php } ?>
                            <p>Description: <?php echo $description?></p>  
                        </form> 
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <?php } } ?>
    </body>
</html>