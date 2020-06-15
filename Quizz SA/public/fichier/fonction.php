<!-- Connection -->
<?php
    function connection($login, $password){
        require_once('data.php');
        $login=stripcslashes($login);
        $password=stripcslashes($password);
        $admin=$bdd->prepare("SELECT * FROM admin WHERE LOGIN='$login' AND PASSWORD='$password'");
        
         $joueur=$bdd->prepare("SELECT * FROM joueur WHERE LOGIN='$login' AND PASSWORD='$password'");
         $execute=$admin->execute();
                         
                    $exect=$joueur->execute();

                    $data=$admin->fetch();
                        var_dump($joueur);
                    $donnees=$joueur->fetch();
    }
?>

<!-- Insertionn dans la base de donnée -->
<?php

?>