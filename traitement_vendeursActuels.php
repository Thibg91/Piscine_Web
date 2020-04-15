<!DOCTYPE HTML>
<html>
    <head>

        <!-- Script SUPPRIMER -->
        <script type="text/javascript"> 
            function supprimer(id){
                var email = id;
                $.ajax({
                    url: 'supprimer_vendeur.php', 
                    type: 'POST',
                    data: 'email='+id,
                    success: function(data){
                    }
                });
            }
        </script>
    </head>
    <body>
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
                echo "<td><a class=\"supprimer\" onclick=\"supprimer('$email');\" alt=\"Supprimer\" title=\"Supprimer\"><span>Supprimer</span></td>"; // supprimer ligne jQuery
                echo "</tr>"; // fin de la ligne
            }
        }
        ?>

    </body>
</html>