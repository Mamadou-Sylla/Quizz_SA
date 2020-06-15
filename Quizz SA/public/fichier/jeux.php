<?php 

session_start();
        echo "Bonjour ici c'est pour jouer<br/>";
        echo htmlspecialchars($_SESSION['joueur']['profil']);

      
?>
<!-- 
<a class="btn  btn-disconnect text-decoration-none" href="../index.php?statut=logout" role="button" name="disconnect">Déconnexion</a>
