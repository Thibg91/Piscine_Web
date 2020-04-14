<?php
if (isset($_POST['email'])){
    include("traitement_SQL.php");
    global $db;
    $email = $_POST['email'];
    $sql = "UPDATE inscription SET Vendeur='non' WHERE Email='$email'";
    if(mysqli_query($db, $sql)){
        $_SESSION['vendeur'] = 'non';
        header('Location: http://pool/Vendre.php');
        exit();
    }
}
?>