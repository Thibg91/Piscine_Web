  
 <!DOCTYPE html> 

<?php 
$Prenom = "";
$Adresse1 = "";
$Adresse2 = "";
$Ville = "";
$Cpostal= "";
$Pays= "";
$Ntel= "";
?>


<html>

 <head> 
  <title>Ebay ECE</title>
  <link href="logo.png" rel="icon" type="images/x-icon" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 </head> 

<body>
    
    <h1> Ebay ECE </h1>
    
    
   <div id="menu">  
            <a href="Cat%C3%A9gories.html"><img src="primehomenav.gif" alt="categories" width="107" height="25"/></a>   
            <a href="Achat.html"> <img src="primehomenav.gif" alt="achat" width="107" height="25"/> </a>   
            <a href="Vendre.html"><img src="primefinancingnav.gif" alt="vendre" width="107" height="25"/></a>     
            <a href="Compte.html">  <img src="primecontactnav.gif" alt="compte" width="107" height="25"/></a>
            <a href="Panier.html"><img src="primefinancingnav.gif" alt="panier" width="107" height="25"/></a>     
            <a href="Admin.html">  <img src="primecontactnav.gif" alt="admin" width="107" height="25"/></a>
        </div> 
    
    <h2> Mon compte </h2>
    <h3>Mes informations personnelles</h3>
<p> Prénom: <?php echo "$Prenom"; ?> </p> 
<p> Adresse ligne 1: <?php echo "$Adresse1"; ?> </p> 
<p> Adresse ligne 2: <?php echo "$Adresse2"; ?> </p>
<p> Ville: <?php echo "$Ville"; ?> </p>
<p> Code Postal: <?php echo "$Cpostal"; ?> </p>
<p> Pays: <?php echo "$Pays"; ?> </p>
<p> N° de léléphone: <?php echo "$Ntel"; ?> </p> 

<h3>Mon historique d'achat</h3>
<table class="table">  
    <thead>     
     <tr>   
      <th>Photo</th>   
      <th>Nom</th>   
      <th>Prix</th> 
      <th>Info</th> 
     </tr> 
    </thead>   
    <tbody> 
     <tr>    
      <td> <img src="ForT.jpeg" style="width: 50%;"> </td>    
      <td>ferraille ou trésor </td>   
      <td>250 euros</td> 
      <td> </td>
     </tr>   
    </tbody>  
   </table> 


</body>

</html>