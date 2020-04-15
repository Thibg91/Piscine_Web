<?php 

$enchere = isset($_POST["enchere"])? $_POST["enchere"] : "";
$MeilleureO = isset($_POST["MeilleureO"])? $_POST["MeilleureO"] : "";
$AchatM = isset($_POST["AchatM"])? $_POST["AchatM"] : "";
$titre = isset($_POST["titre"])? $_POST["titre"] : "";
$descr = isset($_POST["description"])? $_POST["description"] : "";
$photo = isset($_POST["picture"])? $_POST["picture"] : ""; 
$prix = isset($_POST["prix"])? $_POST["prix"] : ""; 
$dateF = isset($_POST["finD"])? $_POST["finD"] : ""; 
$dateH = isset($_POST["finH"])? $_POST["finH"] : "";
$nItem = 0;
$go ="lets go";

if(($enchere == "oui")&&($MeilleureO == "oui"))
{
    echo("Vous ne pouvez pas vendre un item par enchère et par meilleure offre en même temps");
    $go = '';


    echo '
<html>
<head>
<form>
<input type="button" value="Précédent" onclick="history.back()">
</form>
</head>
<body>
</body>
</html>';

}
$bdd = "piscine";
$bddconnection = mysqli_connect('localhost','root','');
$bddfound = mysqli_select_db($bddconnection,$bdd); 

if (($bddfound)&&($go == 'lets go')) {  
    $bool = "0";
    while($bool == "0")
    { $sql = "SELECT * FROM Items";   
     $sql .= " WHERE nItem LIKE '%$nItem%'";   
     $result = mysqli_query($bddconnection, $sql);        
     if (mysqli_num_rows($result) != 0)  
     {
         $bool = "0";
         $nItem = $nItem + '1' ;
     } 
     else 
     {  $bool = "1";
      $sql = "INSERT INTO Items(enchere, meilleureO, AchatM, titre, descr, photo, prix, dateF, dateH, nItem) VALUES('$enchere', '$MeilleureO', '$AchatM', '$titre', '$descr','$photo', '$prix', '$dateF', '$dateH', '$nItem ')";    
      $result = mysqli_query($bddconnection, $sql);    
      echo "Add successful." . "<br>"; 
     } 
    } 
}  
mysqli_close($bddconnection); 

?>
