<?php

if(isset($_POST['paiement'])){

    $erreur = '';
    extract($_POST);
    echo $numCarte;
    if (strlen($numCarte) != 16){
        $erreur .= '<br>Erreur sur le numéro de la carte.';
    }
    if (strlen($code) != 3 && strlen($code) != 4){
        $erreur .= '<br>Erreur sur le code de votre carte.';
    }
    if (strlen($dateCarte) != 4 && ((substr($dateCarte,0,2) > date('m') && substr($dateCarte,0,2) < 12 && substr($dateCarte,2,2) == date('y')) ||( substr($dateCarte,2,2) > date('y') && substr($dateCarte,0,2) < 12 ))){
        $erreur .= '<br>Erreur sur la date de votre carte.';
    }
    if ($erreur == ''){
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
    else {
        header('Location: http://pool/paiement.php?erreur='.$erreur.'');
        exit(); 
    }
}
?>