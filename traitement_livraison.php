<?php

if(isset($_POST['livraison'])){

    extract($_POST);
    include("traitement_SQL.php");
    global $db;
    $email = $_SESSION['email'];
    $sql = "UPDATE inscription SET AdresseL1='$adresseL1', AdresseL2='$adresseL2', Ville='$ville', Pays='$pays', Telephone='$tel', CodePostal='$poste' WHERE Email='$email'";

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
            header('Location: http://pool/Compte.php');
            exit();
        }
    }
    else {
        echo 'Il n\'y a pas de compte associé à l\'adresse'.$email;
    }


}
?>