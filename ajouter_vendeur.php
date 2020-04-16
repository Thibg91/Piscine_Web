<?php
include("traitement_SQL.php");
global $db;
$email = $_GET['email'];
$sql = "UPDATE inscription SET Vendeur='oui' WHERE Email='$email'";
echo $email;
if(mysqli_query($db, $sql)){
    header('Location: http://pool/gerer_enCours.php');
    exit();
}
?>