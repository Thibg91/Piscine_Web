<?php

include("traitement_SQL.php");
global $db;
$sql = "SELECT * FROM inscription WHERE Vendeur='en cours'";

if($result = mysqli_query($db, $sql)){
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["Email"];
        $field2name = $row["Prenom"];
        $field3name = $row["Nom"];
      echo'  <tr>  
      <td> '.$field1name.' </td>    
      <td> '.$field2name.' </td>   
      <td> '.$field3name.' </td>   
      <td colspan="2" align="center">    <input type="submit" value="Supprimer" />    </td>
     </tr>';
    }

}
?>