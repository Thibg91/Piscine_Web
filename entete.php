<?php session_start(); ?>
 <!DOCTYPE html>
 <html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="css\bootstrap.min.css"/>
  <link rel="stylesheet" href="css\style.css"/>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
 </head>
<body>
  <?php if(isset($_SESSION['photoBack'])) { 
    include("traitement_SQL.php");
                $email = $_SESSION['email'];
   $sqlx = "SELECT * FROM inscription WHERE Email='$email'";
   if($resultx = mysqli_query($db, $sqlx)){
    $rowx = $resultx->fetch_assoc();
   $photoIDx = $rowx['photoID']; 
   $photoBackx = $rowx['photoBack'] ;
   }
  } ?> 
<style type="text/css">
.backgroundmaj {
background-color:white;
background-image:url(icone\\<?php echo $photoBackx?>); 
 background-size: cover;
}
</style>

<style type="text/css">
.backgrounde 
{
 background-image:url("../icone/entete.jpg");
 background-size: cover;
}
</style>


<?php 
if(isset($_SESSION['photoBack'])&&($_SESSION['photoBack'] != ''))
{ 
 $banniere = "backgroundmaj"; 
 }else { $banniere = "backgrounde";} 
 ?>
   
 <div class="<?php echo($banniere) ?>">
 <h1 id="logo" class="text-center posbout" >        <img src="icone\logo.jpg" alt="Ebay ECE" />     </h1> 
   
 <ul> 

   <?php if(isset($_SESSION['photoID'])&&($_SESSION['photoID'] != '')) 
{?> <li> <a href="Compte.php"> <img src=icone\\<?php echo $photoIDx?> width="30" height="30"> <FONT size="3"> Mon Compte </FONT></a> </li>
<?php }else {?> <li><a href="Compte.php"><svg class="bi bi-person-lines-fill" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 100-6 3 3 0 000 6zm7 1.5a.5.5 0 01.5-.5h2a.5.5 0 010 1h-2a.5.5 0 01-.5-.5zm-2-3a.5.5 0 01.5-.5h4a.5.5 0 010 1h-4a.5.5 0 01-.5-.5zm0-3a.5.5 0 01.5-.5h4a.5.5 0 010 1h-4a.5.5 0 01-.5-.5zm2 9a.5.5 0 01.5-.5h2a.5.5 0 010 1h-2a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
</svg> <FONT size="3"> Mon Compte </FONT> </a></li>  <?php } ?>
    
     <li> <a href="accueil.php"><svg class="bi bi-house-fill" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 01-1.5 1.5h-9A1.5 1.5 0 012 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 011.414 0l6.647 6.646a.5.5 0 01-.708.708L8 2.207 1.354 8.854a.5.5 0 11-.708-.708L7.293 1.5z" clip-rule="evenodd"/>
</svg> <FONT size="3"> Accueil </FONT></a> </li>

<li> <a href="Cat%C3%A9gories.php"><svg class="bi bi-grid" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 2.5A1.5 1.5 0 012.5 1h3A1.5 1.5 0 017 2.5v3A1.5 1.5 0 015.5 7h-3A1.5 1.5 0 011 5.5v-3zM2.5 2a.5.5 0 00-.5.5v3a.5.5 0 00.5.5h3a.5.5 0 00.5-.5v-3a.5.5 0 00-.5-.5h-3zm6.5.5A1.5 1.5 0 0110.5 1h3A1.5 1.5 0 0115 2.5v3A1.5 1.5 0 0113.5 7h-3A1.5 1.5 0 019 5.5v-3zm1.5-.5a.5.5 0 00-.5.5v3a.5.5 0 00.5.5h3a.5.5 0 00.5-.5v-3a.5.5 0 00-.5-.5h-3zM1 10.5A1.5 1.5 0 012.5 9h3A1.5 1.5 0 017 10.5v3A1.5 1.5 0 015.5 15h-3A1.5 1.5 0 011 13.5v-3zm1.5-.5a.5.5 0 00-.5.5v3a.5.5 0 00.5.5h3a.5.5 0 00.5-.5v-3a.5.5 0 00-.5-.5h-3zm6.5.5A1.5 1.5 0 0110.5 9h3a1.5 1.5 0 011.5 1.5v3a1.5 1.5 0 01-1.5 1.5h-3A1.5 1.5 0 019 13.5v-3zm1.5-.5a.5.5 0 00-.5.5v3a.5.5 0 00.5.5h3a.5.5 0 00.5-.5v-3a.5.5 0 00-.5-.5h-3z" clip-rule="evenodd"/>
</svg> <FONT size="3"> Catégories </FONT></a> </li>

<li><a href="Achat.php"> <svg class="bi bi-bag-fill" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M1 4h14v10a2 2 0 01-2 2H3a2 2 0 01-2-2V4zm7-2.5A2.5 2.5 0 005.5 4h-1a3.5 3.5 0 117 0h-1A2.5 2.5 0 008 1.5z"/>
</svg> <FONT size="3"> Achats </FONT>  </a> </li>
             
<li><a href="Vendeur.php"><svg class="bi bi-credit-card" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 3H2a1 1 0 00-1 1v8a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1zM2 2a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H2z" clip-rule="evenodd"/>
  <rect width="3" height="3" x="2" y="9" rx="1"/>
  <path d="M1 5h14v2H1z"/>
</svg> <FONT size="3"> Vendre </FONT> </a> </li> 
            
<li><a href="Panier.php"> <svg class="bi bi-bucket" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 1.5A4.5 4.5 0 003.5 6h-1a5.5 5.5 0 1111 0h-1A4.5 4.5 0 008 1.5z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M1.61 5.687A.5.5 0 012 5.5h12a.5.5 0 01.488.608l-1.826 8.217a1.5 1.5 0 01-1.464 1.175H4.802a1.5 1.5 0 01-1.464-1.175L1.512 6.108a.5.5 0 01.098-.42zm1.013.813l1.691 7.608a.5.5 0 00.488.392h6.396a.5.5 0 00.488-.392l1.69-7.608H2.624z" clip-rule="evenodd"/>
</svg>  <FONT size="3"> Mon Panier </FONT> </a>  </li>   

        
<li> <a href="Admin.php">  <svg class="bi bi-shield-lock-fill" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.187 1.025C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 012.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 01-2.418 2.3 6.942 6.942 0 01-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 01-1.007-.586 11.192 11.192 0 01-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 012.415 1.84a61.11 61.11 0 012.772-.815zm3.328 6.884a1.5 1.5 0 10-1.06-.011.5.5 0 00-.044.136l-.333 2a.5.5 0 00.493.582h.835a.5.5 0 00.493-.585l-.347-2a.5.5 0 00-.037-.122z" clip-rule="evenodd"/>
</svg> <FONT size="3"> Admin </FONT> </a></li>

<?php if(!isset($_SESSION['photoID'])) 
{ ?>
  <li style="float:right"> 
  <a href="#"  id="a-connexion" data-toggle="modal" data-target="#popupModal"><svg class="bi bi-lock-fill" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <rect width="11" height="9" x="2.5" y="7" rx="2"/>
  <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 117 0v3h-1V4a2.5 2.5 0 00-5 0v3h-1V4z" clip-rule="evenodd"/>
</svg>
  <FONT size="3"> Connexion </FONT>
</a>
<div class="modal fade" id="popupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Veuillez-vous connecter: </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="post">
        <div class="form-group">
           <label> Email :</label>
           <input type="email" class="form-control" name="email" placeholder="Entrer email">
        </div>
        <div class="form-group">
           <label>Password:</label>
           <input type="password" class="form-control" name="password" placeholder="Entrer Password">
        </div>
          <input type="submit" class="btn btn-primary" value="Soumettre" name="formsend" id="formsend" /> 
       </form>
       Pas encore inscrit? Inscrivez-vous en <button onclick="location.href='http://pool/inscription.php'" class="btn btn-success" type="button">cliquant ici.</button>
       <?php include 'traitement_connexion.php'; ?>

      </div>
      <div class="modal-footer"> 
     <button type="button" class="btn btn-secondary" data-dismiss="modal"> Fermer </button>
      </div>
    </div>
  </div>
</div>   
 </li>
<?php } ?>

<?php if(isset($_SESSION['email'])) 
{ ?>
<li style="float:right"> 
  <a href="traitement_deconnexion.php" id="a-deconnexion"> 
  <svg class="bi bi-box-arrow-right" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11.646 11.354a.5.5 0 010-.708L14.293 8l-2.647-2.646a.5.5 0 01.708-.708l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M4.5 8a.5.5 0 01.5-.5h9a.5.5 0 010 1H5a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M2 13.5A1.5 1.5 0 01.5 12V4A1.5 1.5 0 012 2.5h7A1.5 1.5 0 0110.5 4v1.5a.5.5 0 01-1 0V4a.5.5 0 00-.5-.5H2a.5.5 0 00-.5.5v8a.5.5 0 00.5.5h7a.5.5 0 00.5-.5v-1.5a.5.5 0 011 0V12A1.5 1.5 0 019 13.5H2z" clip-rule="evenodd"/> <FONT size="3"> Deconnexion </FONT> 
</svg> 
</a>
</li>
<?php } ?>



</ul>  
 
 

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>




 </div>
 </body>
 </html>