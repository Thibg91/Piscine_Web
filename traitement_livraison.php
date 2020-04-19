<?php session_start(); ?>
<?php

if(isset($_POST['livraison'])){

    extract($_POST);
    include("traitement_SQL.php");
    global $db;

    $erreur = '';
    extract($_POST);
    echo $numCarte;
    if (strlen($numCarte) != 16){
        $erreur .= '<br>Erreur sur le numéro de la carte.';
    }
    if (strlen($code) != 3 && strlen($code) != 4){
        $erreur .= '<br>Erreur sur le code de votre carte.';
    }
    if ($annee == date('y') && $mois < date('m')){
        $erreur .= '<br>Erreur sur la date de votre carte.';
    }
    if (strlen($tel) != 10 && substr($tel,0,1) != 0){
        $erreur .= '<br>Erreur sur le numéro de téléphone.';
    }
    if (strlen($poste) != 5){
        $erreur .= '<br>Erreur sur le code postal.';
    }
    if ($erreur == ''){
        $mois .= $annee;
        $email = $_SESSION['email'];
        $sql = "UPDATE inscription SET AdresseL1='$adresseL1', AdresseL2='$adresseL2', Ville='$ville', Pays='$pays', Telephone='$tel', CodePostal='$poste', TypeCarte='$type', numCarte='$numCarte', DateExpiration='$mois', CodeSecurite='$code', NomCarte='$nomCarte' WHERE Email='$email'";

        if(mysqli_query($db, $sql)){
            echo 'ok';
            $sql2 = "SELECT * FROM inscription WHERE Email='$email'";
            if($r = mysqli_query($db, $sql2)){
                $rows = $r->fetch_assoc();
                $_SESSION['adresse1'] = $rows['AdresseL1'];
                $_SESSION['adresse2'] = $rows['AdresseL2'];
                $_SESSION['ville'] = $rows['Ville'];
                $_SESSION['codePostal'] = $rows['CodePostal'];
                $_SESSION['pays'] = $rows['Pays'];
                $_SESSION['tel'] = $rows['Telephone'];
                $_SESSION['type'] = $rows['TypeCarte'];
                $_SESSION['numCarte'] = $rows['numCarte'];
                $_SESSION['dateCarte'] = $rows['DateExpiration'];
                $_SESSION['code'] = $rows['CodeSecurite'];
                $_SESSION['nomCarte'] = $rows['NomCarte'];
            }
            header('Location: http://pool/Compte.php');
            exit();
        }
        else {
            echo 'Il n\'y a pas de compte associé à l\'adresse'.$email;
        }
    }
    else{
        header('Location: http://pool/modification_compte.php?erreur='.$erreur.'');
        exit();
    }


}
?>