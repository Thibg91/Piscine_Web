<!DOCTYPE HTML>
<html>
    <head>

        <!-- Script SUPPRIMER -->
        <script type="text/javascript"> 
            function accepter(id){
                var email = id;
                $.ajax({
                    url: 'ajouter_vendeur.php', 
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
                echo "<td><a class=\"accepter\" onclick=\"accepter('$email');\" alt=\"Accepter\" title=\"Accepter\"><span>Accepter</span></td>"; // supprimer ligne jQuery
                echo "</tr>"; // fin de la ligne
            }
        }
        ?>

    </body>
</html>