<?php session_start(); ?>
<?php

if(isset($_POST['livraison'])){

    $erreur = '';
    extract($_POST);
    $_SESSION['Newadresse1'] = $adresseL1;
    $_SESSION['Newadresse2'] = $adresseL2;
    $_SESSION['Newville'] = $ville;
    $_SESSION['NewcodePostal'] = $poste;
    $_SESSION['Newpays'] = $pays;
    $_SESSION['Newtel'] = $tel;
    if (strlen($tel) != 10 && substr($tel,0,1) != 0){
        $erreur .= '<br>Erreur sur le numéro de téléphone.';
    }
    if (strlen($poste) != 5){
        $erreur .= '<br>Erreur sur le code postal.';
    }
    if ($erreur == ''){
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
    else {
        header('Location: http://pool/livraison.php?erreur='.$erreur.'');
        exit(); 
    }
}
?>