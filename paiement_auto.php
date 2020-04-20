<?php
$date = date('y-m-d');
$heure = date('h:i:s');
include("traitement_SQL.php");
global $db;
$sql = "SELECT * FROM commande WHERE TypeAchat='negoOK'";
if($result = mysqli_query($db, $sql)){
    while ($row = $result->fetch_assoc()) {
        $nItem = $row['nItem'];
        $sql2 = "UPDATE commande SET TypeAchat='nego_paye' WHERE TypeAChat='negoOK'";
        mysqli_query($db, $sql2);
        $sql0 = "DELETE FROM items WHERE nItem=$nItem";
        mysqli_query($db, $sql0);
    }
}
$sql3 = "DELETE FROM items WHERE dateF<'$date' OR (dateF='$date' AND dateH <'$heure')";
mysqli_query($db, $sql3);

$sql4 = "SELECT * FROM commande WHERE TypeAchat='achatImmediat'";
if ($res = mysqli_query($db, $sql4)){
    while ($rows = $res->fetch_assoc()) {
        $nItem = $rows['nItem'];
        $sql5 = "DELETE FROM items WHERE nItem='$nItem'";
        mysqli_query($db, $sql5);
        $sql6 = "DELETE FROM commande WHERE nItem='$nItem' AND TypeAchat!='achatImmediat'";
        mysqli_query($db, $sql6);
    }
}
  $sql7 = "SELECT * FROM commande WHERE TypeAchat='enchere' AND DateF<'$date'";
if ($ress = mysqli_query($db, $sql7)){
    while ($rowss = $ress->fetch_assoc()) {
        $id = $rowss['nItem'];
        $sql8 = "SELECT MAX(Prix) as max FROM commande WHERE nItem='$id'";
        if ($r = mysqli_query($db, $sql8)){
            $ro = $r->fetch_assoc();
            $prix=$ro['max'];
            $sql9 = "DELETE FROM commande WHERE nItem='$id' AND Prix!='$prix'";
            mysqli_query($db, $sql9);
            $sql10 = "UPDATE commande SET TypeAchat='enchere_paye' WHERE nItem='$id'";
            mysqli_query($db, $sql10);
            $sql11 = "DELETE FROM items WHERE nItem='$id'";
            mysqli_query($db, $sql11);
        }
    }
}

$sql12 = "DELETE FROM commande WHERE TypeAchat='nego' AND ( dateF<'$date' OR (dateF='$date' AND dateH <'$heure'))";
mysqli_query($db, $sql12);

?>