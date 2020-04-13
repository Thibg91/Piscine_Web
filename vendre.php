
 
<!DOCTYPE html> 
<html> 

    <head> 
  <title>Ebay ECE</title>
  <link href="icone\favicon.jpg" rel="icon" type="images/x-icon" />  
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head> 
 
<body> 
   
  
    
    <h1 id="logo">        <img src="icone\logo.jpg" alt="Ebay ECE" />     </h1> 
   <div id="menu">  
            <a href="Cat%C3%A9gories.php"><img src="icone\catégorie.jpg" alt="categories" width="50" height="50"/></a>   
            <a href="Achat.php"><img src="icone\achat.jpg" alt="achat" width="50" height="50"/> </a>   
            <a href="Vendre.php"><img src="icone\vendre.jpg" alt="vendre" width="50" height="50"/></a>     
            <a href="Compte.php">  <img src="icone\compte.jpg" alt="compte" width="50" height="50"/></a>
            <a href="Panier.php"><img src="icone\panier.jpg" alt="panier" width="50" height="50"/></a>     
            <a href="Admin.php">  <img src="icone\admin.jpg" alt="admin" width="50" height="50"/></a>
        </div> 
    <h2> Vendre </h2>
 
          
        
 
   <form action="traitementventes.php" method="post">
       
 type de vente :<br />
<input type="radio" name="Tvente" value="ench" /> Enchères
<input type="radio" name="Tvente" value="offre" /> Meilleure offre
<input type="radio" name="Tvente" value="achatM" /> Achetez-le maintenant
<br />
<p>
   Ajouter un titre :<br />
   <input type="text" name="titre" value="" />
</p>
   <br />

<p>
   Ajouter une description :<br />
   <textarea name="description" rows="6" cols="40">
   </textarea>
</p>
  
    <br />    
<p>
   Ajouter un prix :<br />
   <input type="number" name="prix" value="" />
</p>
<br />
       
 <p>
   Date de fin d'enchère:<br />
   <input type="date" name="finD" value="" />
   <input type="time" name="finH" value="" />
</p>
<br />
       
       
       
       
<td colspan="2" align="center">    <input type="submit" value="Valider" />    </td>  

</form>
 
   
        <div id="footer">Copyright &copy; 2020 Ebay ECE
            <br>    
            <a href="mailto:Ebay.ECE@gmail.com">Ebay.ECE@gmail.com</a>  
        </div>   
 </body>
</html>

