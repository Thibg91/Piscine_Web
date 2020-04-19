<?php
$date = date('y-m-d');
$heure = date('h:i:s');
include("traitement_SQL.php");
global $db;
$sql = "SELECT * FROM commande WHERE TypeAchat='negoOK'";
if($result = mysqli_query($db, $sql)){
    while ($row = $result->fetch_assoc()) {
        $sql2 = "UPDATE commande SET TypeAchat='nego_paye' WHERE TypeAChat='negoOK'";
        mysqli_query($db, $sql2);
    }
}
$sql3 = "DELETE FROM items WHERE dateF<'$date' OR (dateF='$date' AND dateH <'$heure')";
mysqli_query($db, $sql3);

$sql4 = "SELECT * FROM commande WHERE TypeAchat='achatImmediat'";
if ($res = mysqli_query($db, $sql4)){
    echo 'test';
    while ($rows = $res->fetch_assoc()) {
        $nItem = $rows['nItem'];
        $sql5 = "DELETE FROM items WHERE nItem='$nItem'";
        mysqli_query($db, $sql5);
        $sql6 = "DELETE FROM commande WHERE nItem='$nItem' AND TypeAchat!='achatImmediat'";
        mysqli_query($db, $sql6);
    }
}

$sql7 = "SELECT *, MAX(Prix) FROM commande WHERE TypeAchat='enchere' AND (dateF<'$date' OR (dateF='$date' AND dateH <'$heure'))";
if ($r = mysqli_query($db, $sql7)){
    echo 'test';
    while ($ro = $r->fetch_assoc()) {
        $nItem = $ro['nItem'];
        $prixMax = $ro['Prix'];
        $sql8 = "DELETE FROM items WHERE nItem='$nItem'";
        mysqli_query($db, $sql8);
        $sql9 = "DELETE FROM commande WHERE nItem='$nItem' AND Prix!='$prixMax'";
        mysqli_query($db, $sql9);
    }
}

?>