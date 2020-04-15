<?php
if (isset($_POST['email'])){
    include("traitement_SQL.php");
    global $db;
    $email = $_POST['email'];
    $sql = "UPDATE inscription SET Vendeur='oui' WHERE Email='$email'";
    if(mysqli_query($db, $sql)){
        $_SESSION['vendeur'] = 'oui';
        header('Location: http://pool/Admin.php');
        exit();
    }
}
?>