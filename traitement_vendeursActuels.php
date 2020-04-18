<?php

include("traitement_SQL.php");
global $db;
$sql = "SELECT * FROM inscription WHERE Vendeur='oui'";
if($result = mysqli_query($db, $sql)){
    while ($row = $result->fetch_assoc()) {
        $email = $row["Email"];
        $prenom = $row["Prenom"];
        $nom = $row["Nom"];
        echo "<tr id=\".$email.\">"; // début de ligne
        echo "<td>$email</td>"; // email
        echo "<td>$prenom</td>"; // prenom
        echo "<td>$nom</td>"; // nom
        echo "<td><button onclick=\"location.href='http://pool/supprimer_vendeur.php?email=$email'\" class=\"btn btn-danger\" type=\"button\">Supprimer</button></td>"; // supprimer ligne jQuery
        echo "</tr>"; // fin de la ligne
    }
}
?>
