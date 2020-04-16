<?php

if(isset($_POST['paiement'])){

    extract($_POST);
    if(isset($sauvegarder)) {
        include("traitement_SQL.php");
        global $db;
        $email = $_SESSION['email'];
        $sql = "UPDATE inscription SET TypeCarte='$type', numCarte='$numCarte', NomCarte='$nomCarte', DateExpiration='$dateCarte', CodeSecurite='$code' WHERE Email='$email'";

        if($result = mysqli_query($db, $sql)){
            $_SESSION['type'] = $type;
            $_SESSION['numCarte'] = $numCarte;
            $_SESSION['nomCarte'] = $nomCarte;
            $_SESSION['dateCarte'] = $dateCarte;
            $_SESSION['code'] = $code;
        }
        else {
            echo 'Il n\'y a pas de compte associé à l\'adresse'.$email;
        }

    }
    header('Location: http://pool/merciAchat.php');
    exit(); 
}
?>