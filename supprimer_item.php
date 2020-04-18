<?php
include("traitement_SQL.php");
global $db;
$id = $_GET['id'];
$sql = "DELETE FROM items WHERE nItem='$id'";
if(mysqli_query($db, $sql)){
    $sql2 = "DELETE FROM commande WHERE nItem='$id'";
    if(mysqli_query($db, $sql2)){
        header('Location: http://pool/gerer_items.php');
        exit();
    }
}
?>