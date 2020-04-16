
<!DOCTYPE html> 
<html> 

    <head> 
        <title>Ebay ECE</title>
        <link href="icone\favicon.jpg" rel="icon" type="images/x-icon" />  
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="css\bootstrap.min.css"/>
        <link rel="stylesheet" href="css\style.css"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
    </head> 

    <body> 

        <?php include("entete.php"); ?>
        <br>
        <br>
        <h2> Vendre </h2>

        <form action="traitement_vente.php" method="post">
            <p>      
                type de vente :<br />
                <input type="checkbox" name="enchere" id="enchere"  value="oui" /> Encheres
                <input type="checkbox" name="MeilleureO" id="MeilleureO" value="oui" /> Meilleure offre
                <input type="checkbox" name="AchatM" value="oui" /> Achetez-le maintenant
                <br />
            </p>
            <p>
                Ajouter un titre :<br />
                <input type="text" name="titre" value="" required/>
            </p>
            <br />

            <p>
                Ajouter une description :<br />
                <textarea name="description" rows="6" cols="40" required="">
                </textarea>
            </p>
            <br />
            <p>Choisissez une catégorie</p>
            <select name="cat">
                <option value="vip">Accessoires VIP</option>
                <option value="musee">Bon pour le musée</option>
                <option value="tresor">Férailles ou Trésors</option>
            </select>
            <br />
            <br>
            <p>
                joindre une ou plusieurs photos :<br />
                <input type="file" name="picture" accept="image/png, image/jpeg" required="" />
            </p>  
            <br />    
            <p>
                Ajouter un prix :<br />
                <input type="number" name="prix" value="" required="" />
            </p>
            <br />

            <p>
                Date de fin d'enchère:<br />
                <input type="date" name="finD" value="" required="" />
                <input type="time" name="finH" value="" required="" />
            </p>
            <br />

            <td colspan="2" align="center"> <input type="submit" value="Valider"  /></td>  


        </form>
        <button onclick="location.href='http://pool/Vendeur.php'" type="button">Retour</button>
        <div id="footer">Copyright &copy; 2020 Ebay ECE
            <br>    
            <a href="mailto:Ebay.ECE@gmail.com">Ebay.ECE@gmail.com</a>  
        </div>   
    </body>
</html>

