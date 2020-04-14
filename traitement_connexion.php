<?php

if(isset($_POST['formsend'])){

    extract($_POST);
    if(!empty($password) && !empty($email)) {
        include("traitement_SQL.php");
        global $db;

        $sql = "SELECT COUNT(*) as compte FROM inscription WHERE Email='$email'";

        if($result = mysqli_query($db, $sql)){
            $raw = $result->fetch_assoc();
            if ($raw['compte'] == 1) {
                $sql2 = "SELECT *, COUNT(*) as compte2 FROM inscription WHERE Email='$email' AND Password='$password'";
                if ($res = mysqli_query($db, $sql2)){
                    $row = $res->fetch_assoc();
                        if ($row['compte2'] == 1) {
                            $_SESSION['nom'] = $row['Nom'];
                            $_SESSION['prenom'] = $row['Prenom'];
                            $_SESSION['email'] = $row['Email'];
                            $_SESSION['vendeur'] = $row['Vendeur'];
                            $_SESSION['admin'] = $row['Admin'];
                            $sql3 = "SELECT * FROM livraison WHERE Email='$email'";
                            if ($results = mysqli_query($db, $sql3)){
                                $rows = $results->fetch_assoc();
                                $_SESSION['adresse1'] = $rows['AdresseL1'];
                                $_SESSION['adresse2'] = $rows['AdresseL2'];
                                $_SESSION['ville'] = $rows['Ville'];
                                $_SESSION['codePostal'] = $rows['CodePostal'];
                                $_SESSION['pays'] = $rows['Pays'];
                                $_SESSION['tel'] = $rows['Telephone'];
                            }
                            header('Location: http://pool/Catégories.php');
                            exit();
                        }
                    else {
                        echo 'Erreur de mot de passe.';
                    }
                }
            }
            else {
                echo 'Il n\'y a pas de compte associé à l\'adresse'.$email;
            }

        }
    }
}
?>