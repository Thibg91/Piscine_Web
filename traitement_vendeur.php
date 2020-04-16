<?php session_start(); ?>
<?php

include("traitement_SQL.php");
global $db;
$mail = $_SESSION['email'];
$sql = "UPDATE inscription SET Vendeur='en cours' WHERE Email='$mail'";
if(mysqli_query($db, $sql)){
    $_SESSION['vendeur'] = 'en cours';
    header('Location: http://pool/Vendeur.php');
    exit(); 
}

?>