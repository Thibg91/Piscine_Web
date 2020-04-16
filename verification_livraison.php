<?php

if(isset($_POST['livraison'])){

    extract($_POST);
    if(isset($sauvegarder)) {
        include("traitement_SQL.php");
        global $db;
        $email = $_SESSION['email'];
        $sql = "UPDATE inscription SET AdresseL1='$adresseL1', AdresseL2='$adresseL2', Pays='$pays', Ville='$ville', CodePostal='$poste', Telephone='$tel' WHERE Email='$email'";

        if($result = mysqli_query($db, $sql)){
            $_SESSION['adresse1'] = $adresseL1;
            $_SESSION['adresse2'] = $adresseL2;
            $_SESSION['ville'] = $ville;
            $_SESSION['codePostal'] = $poste;
            $_SESSION['pays'] = $pays;
            $_SESSION['tel'] = $tel;
        }
        else {
            echo 'Il n\'y a pas de compte associé à l\'adresse'.$email;
        }

    }
    header('Location: http://pool/paiement.php');
    exit(); 
}
?>