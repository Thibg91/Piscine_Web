<?php

include("traitement_SQL.php");
global $db;
$sql = "SELECT * FROM inscription WHERE Vendeur='en cours'";
if($result = mysqli_query($db, $sql)){
    while ($row = $result->fetch_assoc()) {
        $email = $row["Email"];
        $prenom = $row["Prenom"];
        $nom = $row["Nom"];
        echo "<tr id=\".$email.\">"; // début de ligne
        echo "<td>$email</td>"; // email
        echo "<td>$prenom</td>"; // prenom
        echo "<td>$nom</td>"; // nom
        echo "<td><button onclick=\"location.href='http://pool/ajouter_vendeur.php?email=$email'\" class=\"btn btn-primary\" type=\"button\">Ajouter</button></td>"; // supprimer ligne jQuery
        echo "</tr>"; // fin de la ligne
    }
}
?>