<?php session_start(); ?> 
<!DOCTYPE html> 
<html> 

    <head> 
        <title>Ebay ECE</title>
        <link href="icone\favicon.jpg" rel="icon" type="images/x-icon" />  
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="css\bootstrap.min.css"/> 
        <link rel="stylesheet" href="css\style.css"/>
    </head> 

    <body> 

        <div classe= "blue">
            <h1 id="logo">        <img src="icone\logo.jpg" alt="Ebay ECE" />     </h1> 
        </div>
        <div id="menu" class="text-center">  
            <button type="button" class="btn btn-outline-info" > <a href="Cat%C3%A9gories.php"><svg class="bi bi-grid" width="6em" height="6em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 2.5A1.5 1.5 0 012.5 1h3A1.5 1.5 0 017 2.5v3A1.5 1.5 0 015.5 7h-3A1.5 1.5 0 011 5.5v-3zM2.5 2a.5.5 0 00-.5.5v3a.5.5 0 00.5.5h3a.5.5 0 00.5-.5v-3a.5.5 0 00-.5-.5h-3zm6.5.5A1.5 1.5 0 0110.5 1h3A1.5 1.5 0 0115 2.5v3A1.5 1.5 0 0113.5 7h-3A1.5 1.5 0 019 5.5v-3zm1.5-.5a.5.5 0 00-.5.5v3a.5.5 0 00.5.5h3a.5.5 0 00.5-.5v-3a.5.5 0 00-.5-.5h-3zM1 10.5A1.5 1.5 0 012.5 9h3A1.5 1.5 0 017 10.5v3A1.5 1.5 0 015.5 15h-3A1.5 1.5 0 011 13.5v-3zm1.5-.5a.5.5 0 00-.5.5v3a.5.5 0 00.5.5h3a.5.5 0 00.5-.5v-3a.5.5 0 00-.5-.5h-3zm6.5.5A1.5 1.5 0 0110.5 9h3a1.5 1.5 0 011.5 1.5v3a1.5 1.5 0 01-1.5 1.5h-3A1.5 1.5 0 019 13.5v-3zm1.5-.5a.5.5 0 00-.5.5v3a.5.5 0 00.5.5h3a.5.5 0 00.5-.5v-3a.5.5 0 00-.5-.5h-3z" clip-rule="evenodd"/>
                </svg> <FONT size="6"> Categories </FONT></a> </button>

            <button type="button" class="btn btn-outline-info" ><a href="Compte.php"><svg class="bi bi-person-lines-fill" width="6em" height="6em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 100-6 3 3 0 000 6zm7 1.5a.5.5 0 01.5-.5h2a.5.5 0 010 1h-2a.5.5 0 01-.5-.5zm-2-3a.5.5 0 01.5-.5h4a.5.5 0 010 1h-4a.5.5 0 01-.5-.5zm0-3a.5.5 0 01.5-.5h4a.5.5 0 010 1h-4a.5.5 0 01-.5-.5zm2 9a.5.5 0 01.5-.5h2a.5.5 0 010 1h-2a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
                </svg> <FONT size="6"> Mon Compte </FONT> </a></button>

            <button type="button" class="btn btn-outline-info"><a href="Achat.php"> <svg class="bi bi-bag-fill" width="6em" height="6em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 4h14v10a2 2 0 01-2 2H3a2 2 0 01-2-2V4zm7-2.5A2.5 2.5 0 005.5 4h-1a3.5 3.5 0 117 0h-1A2.5 2.5 0 008 1.5z"/>
                </svg> <FONT size="6"> Achats </FONT>  </a> </button>

            <button type="button" class="btn btn-outline-info"><a href="Vendre.php"><svg class="bi bi-credit-card" width="6em" height="6em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14 3H2a1 1 0 00-1 1v8a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1zM2 2a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H2z" clip-rule="evenodd"/>
                <rect width="3" height="3" x="2" y="9" rx="1"/>
                <path d="M1 5h14v2H1z"/>
                </svg> <FONT size="6"> Vendre </FONT> </a> </button> 

            <button type="button" class="btn btn-outline-info"><a href="Panier.php"> <svg class="bi bi-bucket" width="6em" height="6em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 1.5A4.5 4.5 0 003.5 6h-1a5.5 5.5 0 1111 0h-1A4.5 4.5 0 008 1.5z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M1.61 5.687A.5.5 0 012 5.5h12a.5.5 0 01.488.608l-1.826 8.217a1.5 1.5 0 01-1.464 1.175H4.802a1.5 1.5 0 01-1.464-1.175L1.512 6.108a.5.5 0 01.098-.42zm1.013.813l1.691 7.608a.5.5 0 00.488.392h6.396a.5.5 0 00.488-.392l1.69-7.608H2.624z" clip-rule="evenodd"/>
                </svg>  <FONT size="6"> Mon Panier </FONT> </a>  </button>    

            <button type="button" class="btn btn-outline-info"> <a href="Admin.php">  <svg class="bi bi-shield-lock-fill" width="6em" height="6em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.187 1.025C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 012.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 01-2.418 2.3 6.942 6.942 0 01-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 01-1.007-.586 11.192 11.192 0 01-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 012.415 1.84a61.11 61.11 0 012.772-.815zm3.328 6.884a1.5 1.5 0 10-1.06-.011.5.5 0 00-.044.136l-.333 2a.5.5 0 00.493.582h.835a.5.5 0 00.493-.585l-.347-2a.5.5 0 00-.037-.122z" clip-rule="evenodd"/>
                </svg> <FONT size="6"> Admin </FONT> </a></button>
    
        </div> 

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

