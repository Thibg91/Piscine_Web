<?php session_start(); ?>
<?php 

$enchere = isset($_POST["enchere"])? $_POST["enchere"] : "";
$MeilleureO = isset($_POST["MeilleureO"])? $_POST["MeilleureO"] : "";
$AchatM = isset($_POST["AchatM"])? $_POST["AchatM"] : "";
$titre = isset($_POST["titre"])? $_POST["titre"] : "";
$descr = isset($_POST["description"])? $_POST["description"] : "";
$photo1 = isset($_POST["picture1"])? $_POST["picture1"] : ""; 
$photo2 = isset($_POST["picture2"])? $_POST["picture2"] : "";
$photo3 = isset($_POST["picture3"])? $_POST["picture3"] : "";
$video = isset($_POST["video"])? $_POST["video"] : "";
$prix = isset($_POST["prix"])? $_POST["prix"] : "";
$immediat = isset($_POST["immediat"])? $_POST["immediat"] : ""; 
$dateF = isset($_POST["finD"])? $_POST["finD"] : ""; 
$dateH = isset($_POST["finH"])? $_POST["finH"] : "";
$cat = isset($_POST["cat"])? $_POST["cat"] : "";
$go ="lets go";

if(($enchere == "oui")&&($MeilleureO == "oui"))
{
    echo("Vous ne pouvez pas vendre un item par enchère et par meilleure offre en même temps");
    $go = '';


    echo '<input type="button" value="Précédent" onclick="history.back()">';

}

include("traitement_SQL.php");
global $db;
$email = $_SESSION['email'];
if (($db)&&($go == 'lets go')) {  
    $sql = "INSERT INTO Items(enchere, meilleureO, AchatM, titre, descr, photo1, photo2, photo3, video, prix, AchatImmediat, dateF, dateH, Categorie, emailAcheteur, emailVendeur) VALUES('$enchere', '$MeilleureO', '$AchatM', '$titre', '$descr','$photo1','$photo2','$photo3','$video', '$prix', '$immediat', '$dateF', '$dateH', '$cat','','$email')";    

    if ($result = mysqli_query($db, $sql)){    
        header('Location: http://pool/vendeur.php');
        exit(); 
    }
}   
mysqli_close($db); 

?>