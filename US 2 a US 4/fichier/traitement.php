<?php
session_start();
    if (isset($_POST['connect'])) {
        # code...
        require_once('../data/data.php');
        $Erreur=[];
        if (!empty($_POST['login']) && !empty($_POST['password'])){
            # code...
            if (preg_match('/^[a-zA-Z0-9]*$/', $_POST['login']) && preg_match('/^[a-zA-Z0-9]*$/', $_POST['password'])) {
                # code...
               $login=$_POST['login'];
               $password= $_POST['password'];
                    // On se connecte à MySQL
               
                    $result= getUserConnexion($login,$password);

                    // $req->execute(array($_POST['login'],$_POST['password']));


                        if ($result!==false) {
                            # code...
                            $result_array=$result->fetch();
                            if ($result_array['role']==='admin') {
                                # code...
                                $_SESSION['user']=$result_array;
                                header('location:admin.php');
                            }
                            else if($result_array['role']==='joueur'){
                                $_SESSION['joueur']=$result_array;
                               echo $_SESSION['joueur']['nom'];
                               header('location:jeux.php');
                                // Si l'utilisateur tente d'accéder à la ressource via l'URI
                                        if ("GET" === $_SERVER["REQUEST_METHOD"]) {
                                            // Renvoie l'utilisateur à la racine du serveur
                                            header("Location: ../index.php");
                                            // Met fin au script par mesure de sécurité
                                            die();
                                        }
                                    
                                                                }
                            else{
                                header('location:../index.php? msg= Login ou Mot de passe incorrecte!');
                            }      
                        }

                    
            }
            else{
                $Erreur='Caractére invalide';
            }  
        }
        else{
            $Erreur='Ce champ est Obligatoire';
        }
        foreach ($Erreur as $Error) {
            # code...
                if (isset($Error)) {
                    # code...
                    echo "<span>".$Error."</span>";
                }
            
        }
    }
?>