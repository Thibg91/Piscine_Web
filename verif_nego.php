<?php session_start(); ?>
<?php

include("traitement_SQL.php");
global $db;
$id = $_GET['id'];
$email = $_SESSION['email'];
$sql = "SELECT COUNT(*) as compte FROM commande WHERE nItem='$id' AND EmailAcheteur='$email'";
$result = mysqli_query($db, $sql);
if($row['compte'] < 5){
?>