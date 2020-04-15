<?php

if(isset($_POST['vendeur'])){

    include("traitement_SQL.php");
    global $db;
    $email = $_SESSION['email'];
    $sql = "UPDATE inscription SET Vendeur='en cours' WHERE Email='$email'";
    if(mysqli_query($db, $sql)){
        $_SESSION['vendeur'] = 'en cours';
    }
}
?>