<?php session_start(); ?>
<?php

include("traitement_SQL.php");
global $db;
$id = $_GET['id'];
$message = $_GET['message'];
$email = $_SESSION['email'];
if ($_GET['message'] == 'refuser'){
    $sql = "UPDATE commande SET TypeAchat=\"negoKO\" WHERE NumeroCommande='$id'";
    mysqli_query($db, $sql);
    echo 'test';
}
if ($_GET['message'] == 'accepter'){
    $sql4 = "UPDATE commande SET TypeAchat=\"negoOK\" WHERE NumeroCommande='$id'";
    mysqli_query($db, $sql4);
    $sql2 = "SELECT * FROM commande WHERE NumeroCommande='$id'";
    if($result = mysqli_query($db, $sql2)){
        $row = $result->fetch_assoc();
        $id_item = $row['nItem'];
        $sql3 = "DELETE FROM commande WHERE nItem='$id_item' AND TypeAchat!=\"negoOK\"";
        mysqli_query($db, $sql3);
    }
}
header('Location: http://pool/objetEnVente.php');
exit(); 
?>