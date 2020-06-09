<?php
function getConnexion(){
    $ObjetPDO="";
    try{
        $ObjetPDO=new PDO ("mysql:host=localhost; dbname=mydbase; charset=utf8", 'root' ,'');
        $ObjetPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $ObjetPDO;
        echo 'Connexion réussie';
    }
    
    /*On capture les exceptions si une exception est lancée et on affiche
     *les informations relatives à celle-ci*/
    catch(PDOException $e){
      echo "Erreur : " . $e->getMessage();
    }

}


function getUserConnexion($login,$password){

    $pdo=getConnexion();

    $sql="SELECT * FROM `user` WHERE userLogin=:userLogin AND password=:password";

    $req=$pdo->prepare($sql);

    $req->execute(array('userLogin'=>$login, 'password'=>$password));

    return $req;

    
}

function createAdmin($prenom,$nom,$login,$password,$avatar,$role='admin',$score=NULL){

    $pdo=getConnexion();

    $sql="INSERT INTO `user`(prenom, nom, userLogin, password, profil, role, score) VALUES (?,?,?,?,?,?,?)";

    $req=$pdo->prepare($sql);

    $req->execute(array($prenom,$nom,$login,$password,$avatar,$role='admin',$score=0));

    return $req;
}
function createJoueur($prenom,$nom,$login,$password,$avatar,$role='joueur',$score=NULL){

    $pdo=getConnexion();

    $sql="INSERT INTO `user`(prenom, nom, userLogin, password, profil, role, score) VALUES (?,?,?,?,?,?,?)";

    $req=$pdo->prepare($sql);

    $req->execute(array($prenom,$nom,$login,$password,$avatar,$role='joueur',$score=0));

    return $req;
}
?>
