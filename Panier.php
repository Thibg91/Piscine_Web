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
  
 <div class="row">
  
  <div class="col-2 blueECE"> </div>

  <div class="col-8">
    <h2> Article(s) dans votre panier </h2>

  <table class="table">  
    <thead>     
     <tr>   
      <th>Photo</th>   
      <th>Nom</th>   
      <th>Prix</th> 
      <th>Info</th> 
      <th>Supprimer</th>

     </tr> 
    </thead>   
    <tbody> 
     <tr>    
      <td> <img src="icone\ForT.jpeg" style="width: 50%;"> </td>    
      <td>ferraille ou trésor </td>   
      <td>250 euros</td> 
      <td> </td>
      <td> checkbox </td>
     </tr>   
    </tbody>  
   </table> 
     </div>
 <div class="col-2 blueECE">  </div>

</div> 
</body>

<td colspan="2" align="center">   
  <input type="submit" value="Proceder au paiement" />
</td> 

</html>