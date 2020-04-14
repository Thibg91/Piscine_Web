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
<h2> Admin </h2>
<h3> Liste des Items </h3>
<-- doit pouvoir supprimer de la BDD pas comme l'historique-->
<table class="table">  
    <thead>     
     <tr>   
      <th>N° d'identification</th> 
      <th>Photo</th>   
      <th>Nom</th> 
      <th> catégorie</th>  
      <th>Prix</th> 
      <th>description</th> 
      <th>Supprimer</th>
 </tr> 
    </thead>   
    <tbody> 
     <tr>  
      <td>0145874 </td>    
      <td> <img src="icone\ForT.jpeg" style="width: 50%;"> </td>   
      <td>pièce or rare </td>   
      <td>ferraille ou trésor </td>   
      <td>250 euros</td> 
      <td> la y a une description</td>
      <td colspan="2" align="center">    <input type="submit" value="Supprimer" />    </td>
     </tr>   
    </tbody>  
   </table> 
</body>
<h3> Liste des vendeurs</h3>
<table class="table">  
    <thead>     
     <tr>   
      <th>email ECE</th> 
      <th>Pseudo</th>   
      <th>Nom</th> 
      <th>Supprimer</th>
 </tr> 
    </thead>   
    <tbody> 
     <tr>  
      <td>thibault.guisnel@edu.ece.fr </td>    
      <td> Thibg91 </td>   
      <td> Thibault Guisnel </td>   
      <td colspan="2" align="center">    <input type="submit" value="Supprimer" />    </td>
     </tr>   
    </tbody>  
   </table> 


</html>