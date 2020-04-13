<?php

if(isset($_POST['formsend'])){

    extract($_POST);
    if(!empty($password) && !empty($prenom) && !empty($nom) && !empty($email) && !empty($confirmationPassword) ) {

        include("traitement_SQL.php");
        global $db;

        $sql = "SELECT COUNT(email) as compte FROM inscription WHERE email='$email'";

        if($result = mysqli_query($db, $sql)){
            $row = $result->fetch_assoc();
            if ($row['compte'] == 0) {
                if ($password == $confirmationPassword){
                    $sql2 = "INSERT INTO inscription (Prenom, Nom, Email, Password) VALUES ('$prenom', '$nom', '$email', '$password')";

                    if(mysqli_query($db, $sql2)) {
                        echo 'Bienvenue';
                        header('Location: http://Piscine/connexion.php');
                        exit();
                    }
                    else {
                        echo 'Vous n\'etes pas encore inscrit';
                    }
                }
                else {
                    echo 'Erreur dans le mot de passe, veuillez recommencer.';
                }
            }
            else {
                echo 'Il existe déjà un compte associer à cette addresse mail';
            }
        }
    }
}

?>