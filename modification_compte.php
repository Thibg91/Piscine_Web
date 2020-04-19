
<!DOCTYPE html> 

<html>

    <head> 
        <title>Ebay ECE</title>
        <link href="favicon.jpg" rel="icon" type="images/x-icon" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="css\bootstrap.min.css"/>
        <link rel="stylesheet" href="css\style.css"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
    </head> 

    <body>
        <?php include("entete.php"); ?>
        <br>
        <br> 
        <section>
            <div class="row">
                <div class="col-2 blueECEleft"> </div>
                <div class="col-8">

                    <form  action="traitement_livraison.php" method="post">
                        <h2> Mon compte </h2>
                        <h3>Mes informations personnelles</h3>
                        <?php if (isset($_GET['erreur'])){$erreur = $_GET['erreur']; echo $erreur.'<br>';} ?>
                        <p> Prénom:<?=$_SESSION['prenom']; ?> </p> 
                        <p> Adresse ligne 1: <input type="text" name="adresseL1" id="adresseL1" value="<?= $_SESSION['adresse1']; ?>"> </p> 
                        <p> Adresse ligne 2: <input type="text" name="adresseL2" id="adresseL2" value="<?= $_SESSION['adresse2']; ?>"> </p>
                        <p> Ville: <input type="text" name="ville" id="ville" value="<?= $_SESSION['ville']; ?>"> </p>
                        <p> Code Postal: <input type="number" name="poste" id="poste" value="<?= $_SESSION['codePostal']; ?>"> </p>
                        <p> Pays: <input type="text" name="pays" id="pays" value="<?= $_SESSION['pays']; ?>"> </p>
                        <p> N° de léléphone: <input type="tel" name="tel" id="tel" value="0<?= $_SESSION['tel']; ?>"> </p>
                        <p> Type de carte: <select name="type">
                            <option value="visa">Visa</option>
                            <option value="master">Master Card</option>
                            <option value="amex">American Express</option>
                            </select> </p> 
                        <p> Numéro de carte: <input type="number" name="numCarte" value="<?= $_SESSION['numCarte']; ?>"> </p>
                        <p> Date d'expiration: <select name="mois">
                            <option value="01">Janvier</option>
                            <option value="02">Février</option>
                            <option value="03">Mars</option>
                            <option value="04">Avril</option>
                            <option value="05">Mai</option>
                            <option value="06">Juin</option>
                            <option value="07">Juillet</option>
                            <option value="08">Août</option>
                            <option value="09">Septembre</option>
                            <option value="10">Octobre</option>
                            <option value="11">Novembre</option>
                            <option value="12">Décembre</option>
                            </select> 
                            <select name="annee">
                                <option value="20">2020</option>
                                <option value="21">2021</option>
                                <option value="22">2022</option>
                                <option value="23">2023</option>
                                <option value="24">2024</option>
                                <option value="25">2025</option>
                            </select>
                        </p> 
                        <p> Code de sécurité: <input type="number" name="code" value="<?= $_SESSION['code']; ?>"> </p>
                        <p> Nom sur la carte: <input type="text" name="nomCarte" value="<?= $_SESSION['nomCarte']; ?>"> </p>
                        <input type="submit" value="Enregistrer mes informations" name="livraison" />
                    </form>
                    <div class="bigwhiteblock"></div>
                </div>
                <div class="col-2 blueECEright">  </div>
            </div>
        </section>

        <div class="row">
            <div class="col-2 blueECEleft">  </div> 
            <div class="col-8 footer">  
                <?php include("footer.html"); ?> 
            </div> 
            <div class="col-2 blueECEright">  </div>
        </div>
    </body>

</html>