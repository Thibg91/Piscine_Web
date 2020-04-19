
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
     <section>
   <div class="row">
   <div class="col-2 blueECEleft" ;> </div>
   <div class="col-8">
     <?php if(isset($_SESSION['email'])) 
     { ?>
        <?php if ($_SESSION['vendeur'] == 'oui'){ ?>
        <h2><strong>Vendre </strong> </h2>

        <form action="traitement_vente.php" method="post">
            <div class="form-group row">
             <div class="col-sm-12">type de vente (au moins un):</div>
              <div class="col-sm-12">
               <div class="form-check">
                <input type="checkbox" name="enchere" id="enchere"  value="oui" />
                <label class="form-check-label" for="gridCheck1"> Encheres
                
                <input type="checkbox" name="MeilleureO" id="MeilleureO" value="oui" />  <label class="form-check-label" for="gridCheck1"> Meilleure offre
                	
                <input type="checkbox" name="AchatM" value="oui" /> <label class="form-check-label" for="gridCheck1"> Achetez-le maintenant
                </label>
               </div>
              </div>
             </div>
            <div class="form-group row">
             <label class="col-sm-3 col-form-label">Ajouter un titre : </label>
              <div class="col-sm-6">
               <input type="text"  class="form-control" name="titre" value="" required >
               <small class="form-text text-muted">(obligatoire)</small>
              </div>
             </div>

             <div class="form-group row">
             <label class="col-sm-3 col-form-label">Ajouter une description : </label>
              <div class="col-sm-6">
              	<textarea class="form-control" name="description" rows="3" value="" required ></textarea>
               <small class="form-text text-muted">(obligatoire)</small>
              </div>
             </div>

            <div class="form-group row">
            <label class="col-sm-3 col-form-label">Choisissez une catégorie: </label>
             <select class="col-sm-6 form-control" name="cat">
                <option value="vip">Accessoires VIP</option>
                <option value="musee">Bon pour le musée</option>
                <option value="tresor">Férailles ou Trésors</option>
            </select>
            </div>
            
            <div class="row">
               <label class="col-sm-3 col-form-label">Joindre une première photo: </label> 
               <div class="col-sm-6">
                <input type="file" name="picture1" accept="image/png, image/jpeg" required="" />
                <small class="form-text text-muted align-center">(obligatoire)</small>
            </div>    
            </div>
            <div class="row">
               <label class="col-sm-3 col-form-label">Joindre une deuxième photo: </label> 
               <div class="col-sm-6">
               <input type="file" name="picture2" accept="image/png, image/jpeg"  />
            </div>    
            </div>
            <div class="row">
               <label class="col-sm-3 col-form-label">Joindre une troisième photo: </label> 
               <div class="col-sm-6">
                <input type="file" name="picture3" accept="image/png, image/jpeg" />
            </div>    
            </div>
            <div class="row">
               <label class="col-sm-3 col-form-label">Joindre une vidéo: </label> 
               <div class="col-sm-6">
              <input type="file" name="video"/>
            </div>    
            </div>
               
                
            <div class="row">
             <label class="col-sm-2 col-form-label"> Ajouter un prix : </label> 
             <div class="col-sm-4">
              <input type="number" name="prix" value="" required="" />
              <small class="form-text text-muted align-center">(obligatoire)</small>
            </div>
            <label class="col-sm-2 col-form-label"> Ajouter un prix d'achat immédiat:</label> 
             <div class="col-sm-4">
               <input type="number" name="immediat" value="" required="" />
               <small class="form-text text-muted align-center">(obligatoire)</small>
            </div>    
            </div> 

            <div class="row">
            <label class="col-sm-2 col-form-label"> Date de fin d'enchère:</label> 
             <div class="col-sm-4">
               <input type="date" name="finD" value="" required="" />
                <input type="time" name="finH" value="" required="" />
               <small class="form-text text-muted align-center">(obligatoire)</small>
            </div> 
            </div>    
            <td colspan="2" align="center"> <input type="submit" value="Valider" class="btn btn-primary mb-2" /></td>  
        </form>
        <br>
        <br>
        
        <button onclick="location.href='http://pool/Vendeur.php'" type="button" class="btn btn-secondary"> Retour</button>
       
        
        <div class="col-sm-3"></div>
        <?php } else if ($_SESSION['vendeur'] == 'non'){ ?>

        <p>Vous n'etes pas encore inscrit.</p>
        <form action="traitement_vendeur.php" method="post">
            <input type="submit" value="Demander à être vendeur" name="vendeur" />
        </form>

        <?php }
        else if ($_SESSION['vendeur'] == 'en cours'){
        ?>
        <p>Votre demande est en cours.</p>
        <?php } }else { ?>
    <p>Vous n'êtes pas connecté, veuillez vous identifier et faire une demande si vous ne possedez pas de compte vendeur</p>
    <a href="#"  id="a-connexion" data-toggle="modal" data-target="#popupModal">Connexion</a>
    <br>
    <button onclick="location.href='http://pool/accueil.php'" type="button" class="btn btn-secondary">retour</button>
    <?php } ?>
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
</div>  
    </body>
</html>

