<?php session_start(); ?>
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
    if ($annee == date('y') && $mois < date('m')){
        $erreur .= '<br>Erreur sur la date de votre carte.';
    }
    if ($erreur == ''){
        if(isset($sauvegarder)) {
            include("traitement_SQL.php");
            global $db;
            $mois .= $annee;
            $email = $_SESSION['email'];
            $sql = "UPDATE inscription SET TypeCarte='$type', numCarte='$numCarte', NomCarte='$nomCarte', DateExpiration='$mois', CodeSecurite='$code' WHERE Email='$email'";

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
        include("traitement_SQL.php");
        global $db;
        $email = $_SESSION['email'];
        for ($j = 0; $j <= strlen($_SESSION['panier']); $j=$j+7){
            $id = substr($_SESSION['panier'],$j,7);
            $sql = "SELECT * FROM items WHERE nItem='$id'";
            if($result = mysqli_query($db, $sql)){
                while ($row = $result->fetch_assoc()) {
                    $vendeur = $row['emailVendeur'];
                    $titre = $row['titre'];
                    $prix = $row['AchatImmediat'];
                    $type = 'achatImmediat';
                    $nItem = $row['nItem'];
                    $adresseL1 = $_SESSION['Newadresse1'];
                    $adresseL2 = $_SESSION['Newadresse2'];
                    $ville = $_SESSION['Newville'];
                    $poste = $_SESSION['NewcodePostal'];
                    $pays = $_SESSION['Newpays'];
                    $tel = $_SESSION['Newtel'];
                    $sql2 = "INSERT INTO commande(EmailAcheteur, EmailVendeur, Titre, Prix, TypeAchat, AdresseL1, AdresseL2, Ville, CodePostal, Pays, Telephone, NumeroCarte, nItem, PrixPropose) VALUES ('$email', '$vendeur', '$titre', '$prix', '$type', '$adresseL1', '$adresseL2', '$ville', '$poste', '$pays','$tel', '$numCarte', '$nItem', '')";
                    if ($res = mysqli_query($db, $sql2)){
                        }
                    }
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