<?php
include("traitement_SQL.php");
global $db;
$email = $_GET['email'];
$sql = "UPDATE inscription SET Vendeur='non' WHERE Email='$email'";
if(mysqli_query($db, $sql)){
    $_SESSION['vendeur'] = 'non';
    header('Location: http://pool/gerer_vendeur.php');
    exit();
}
?>