<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<!-- Script SUPPRIMER -->
<script type="text/javascript"> 
    function supprimer(id){
    alert(id);
    $.get('supprimer_vendeur.php', { idsup:id });
}
    </script>