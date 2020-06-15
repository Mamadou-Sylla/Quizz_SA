<?php
    if (isset($_POST['enregistrer'])) {
        # code...
        $Erreur=array();
        if (empty($_POST['prenom']) && empty($_POST['nom']) && empty($_POST['login']) && empty($_POST['password']) && empty($_POST['confirm-pwd']) && empty($_POST['avatar'])){
            # code...
            $Erreur="Tous les champs sont obligatoires";
        }
        else{
            $prenom=$_POST['prenom'];
            $nom=$_POST['nom'];
            $login=$_POST['login'];
            $password=$_POST['password'];
            $confirmPwd=$_POST['confirm-pwd'];
            $avatar=$_POST['myfile'];
            if (valid($prenom) &&valid($nom) && valid($login) && valid($password) && valid($confirmPwd)){
                # code...
                
                if ($password!=$confirmPwd) {
                    # code...
                    $Erreur="Erreur de confirmation du mot de passe";
                }
                else{

                    require_once('../data/data.php');
                                    
                    createAdmin( $prenom, $nom, $login, $confirmPwd, $avatar);  

                    header("location: admin.php?page=creer-admin");
                        
                }
            }
            
          
        }
    }
    if (isset($Erreur)) {
        # code...
        foreach($Erreur as $Error){
            echo "<span>".$Error."</span>";
        }
    }

?>

<?php
  function valid($text){
            $ok=false;
            if(preg_match('/^[a-zA-Z0-9]*$/', $text)){
                $ok=true;
                return $ok=true;
        }
    }
?>
