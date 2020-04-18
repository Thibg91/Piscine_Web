<?php session_start(); ?>
<?php

if(isset($_POST['enchere'])){

    extract($_POST);
    include("traitement_SQL.php");
    global $db;
    $id = $_GET['id'];
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM items WHERE nItem='$id'";
    if($result = mysqli_query($db, $sql)){
        $row = $result->fetch_assoc();
        if($offre > $row['prix']){
            $vendeur = $row['emailVendeur'];
            $titre = $row['titre'];
            $prix = $row['prix'];
            $type = 'enchere';
            $nItem = $row['nItem'];
            $adresseL1 = $_SESSION['adresse1'];
            $adresseL2 = $_SESSION['adresse2'];
            $ville = $_SESSION['ville'];
            $poste = $_SESSION['codePostal'];
            $pays = $_SESSION['pays'];
            $tel = $_SESSION['tel'];
            $sql2 = "DELETE FROM commande WHERE nItem='$id'";
            $r = mysqli_query($db, $sql2);
            $sql3 = "INSERT INTO commande(EmailAcheteur, EmailVendeur, Titre, Prix, TypeAchat, AdresseL1, AdresseL2, Ville, CodePostal, Pays, Telephone, NumeroCarte, nItem, PrixPropose) VALUES ('$email', '$vendeur', '$titre', '$offre', '$type', '$adresseL1', '$adresseL2', '$ville', '$poste', '$pays','$tel', '$numCarte', '$nItem', '$offre')";
            $sql4 = "UPDATE items SET prix='$offre' WHERE nItem='$id'";
            $re = mysqli_query($db, $sql4);
            if ($res = mysqli_query($db, $sql3)){
                header('Location: http://pool/merciEnchere.php');
                exit(); 
            }
        }
        else {
            header('Location: http://pool/enchere.php?id='.$id.'&erreur=Enchère inférieure à la précédente.');
            exit(); 
        }
    }
}
?>