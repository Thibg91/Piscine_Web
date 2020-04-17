<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ebay ECE</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="css\bootstrap.min.css"/>
        <link rel="stylesheet" href="css\style.css"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    </head>
    <body>
        
        
        <div class="container" style="margin-top:50px;">

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#popupModal">
  Connexion
</button>


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
                    Email: <input type="email" name="email"><br>
                    Password: <input type="password" name="password"><br>
                    <input type="submit" value="Connexion" name="formsend" id="formsend" />
                    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Fermer </button>
      </div>
    </div>
  </div>
</div>   

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</div>
        <?php include 'traitement_connexion.php'; ?>
        <button onclick="location.href='http://pool/inscription.php'" type="button">cliquant ici.</button>
      
    </body>   

</html>