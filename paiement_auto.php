<?php
$date = date('y-m-d');
$heure = date('h:i:s');
include("traitement_SQL.php");
global $db;
$sql = "SELECT *, MAX(Prix) FROM commande WHERE TypeAChat='enchere' GROUP BY nItem";
if($result = mysqli_query($db, $sql)){
    while ($row = $result->fetch_assoc()) {
        echo $row['NumeroCommande'].'<br>';}
}
//$sql2 = "DELETE FROM WHERE AND (dateF>'$date' OR (dateF='$date' AND dateH >'$heure')) ";
//mysqli_query($db, $sql2);

?>