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
        if($offre < $row['prix']){
            $vendeur = $row['emailVendeur'];
            $titre = $row['titre'];
            $prix = $row['prix'];
            $type = 'nego';
            $nItem = $row['nItem'];
             $descr = $row['descr'];
             $photo = $row['photo1'];
             $datef = $row['dateF'];
             $dateh = $row['dateH'];
             $cat = $row['categorie'];
            $adresseL1 = $_SESSION['adresse1'];
            $adresseL2 = $_SESSION['adresse2'];
            $ville = $_SESSION['ville'];
            $poste = $_SESSION['codePostal'];
            $pays = $_SESSION['pays'];
            $tel = $_SESSION['tel'];

            $sql3 = "INSERT INTO commande(EmailAcheteur, EmailVendeur, Titre, Prix, TypeAchat, AdresseL1, AdresseL2, Ville, CodePostal, Pays, Telephone, NumeroCarte, nItem,Description,Photo,DateF,DateH,Catégorie, PrixPropose) VALUES ('$email', '$vendeur', '$titre', '$offre', '$type', '$adresseL1', '$adresseL2', '$ville', '$poste', '$pays','$tel', '$numCarte', '$nItem','$descr' ,'$photo','$datef','$dateh' ,'$cat' , '$offre')";

            if ($res = mysqli_query($db, $sql3)){
                header('Location: http://pool/merciNego.php');
                exit(); 
            }
        }
        else {
            header('Location: http://pool/nego.php?id='.$id.'&erreur=Offre supérieure à la demande.');
            exit(); 
        }
    }
}
?>