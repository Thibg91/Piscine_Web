<?php session_start(); ?>
<?php

if(isset($_POST['enchere'])){

    extract($_POST);
    include("traitement_SQL.php");
    global $db;
    $id = $_GET['id'];
    $sql = "SELECT prix FROM items WHERE nItem='$id'";
    if($result = mysqli_query($db, $sql)){
        $row = $result->fetch_assoc();
        if($offre > $row['prix']){
            echo $row['prix'];
            $ancien = $row['prix'];
            $acheteur= $_SESSION['email'];
            echo $acheteur;
            $sql2 = "UPDATE items SET prix='$offre', ancienPrix='$ancien', emailAcheteur='$acheteur' WHERE nItem='$id'";
            $res = mysqli_query($db, $sql2);
        }
    }
    header('Location: http://pool/enchere.php?id='.$id.'');
    exit(); 
}
?>