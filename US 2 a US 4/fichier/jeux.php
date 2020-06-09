<?php 

session_start();
        echo "Bonjour ici c'est pour jouer/n";
        echo htmlspecialchars($_SESSION['joueur']['profil']);

      
?>

<a class="btn  btn-disconnect text-decoration-none" href="../index.php?statut=logout" role="button" name="disconnect">Déconnexion</a>


<?php 


        include("../fichier/deconnexion.php");
is_connect();
?>