<?php require_once('../data/data.php'); 
require_once("../fichier/liste-joueur.php");
            $pdo=getConnexion();
            $sql="SELECT prenom, nom, score FROM `user` WHERE role='joueur' ORDER BY score DESC";
            $requete=$pdo->query($sql);
            // $joueur=$req->fetchAll();
            // var_dump($joueur);
            
        
                    // $i=0;
                    // while( $joueur=$req->fetch()){  
                    //     $i++;                    
                    //     echo "<tr>";
                    //     echo "<th scope='row'>".$i."</th>";
                    //     echo "<td>".$joueur['prenom']."</td>";
                    //     echo "<td>".$joueur['nom']."</td>";
                    //     echo "<td id='point'>".$joueur['score']."  pts</td>";
                    //     echo "</tr>";
                    // }
                    // <?php

/* Getting post data */
$rowid = $_POST['rowid'];
$rowperpage = $_POST['rowperpage'];

/* Count total number of rows */
$query = "SELECT count(*) as allcount FROM user where role = 'joueur'";
$fetch =$pdo->query($query);
// echo"Debut fetch <br/>";
// var_dump($fetch);
// echo"Fin fetch <br/>";
// echo"Debut resultats <br/>";
$resultat= $fetch->fetch();
// var_dump($resultat);
// echo"Fin resultats <br/>";
// echo"Debut allcount <br/>";
$allcount = $resultat['allcount'];
// var_dump($allcount);
// echo"Fin allcount";
 
/* Selecting rows */
$mysql = "SELECT * FROM user where role = 'joueur' ORDER BY score DESC LIMIT ".$rowid.",".$rowperpage;
$req=$pdo->query($mysql);
// echo"Debut resultats <br/>";
// var_dump($req);
// echo"Fin resultats <br/>";

$employee_arr = array();
$employee_arr[] = array("allcount" => $allcount);

while($row= $req->fetch(PDO::FETCH_ASSOC)){
    echo "les noms";
    var_dump($row['prenom']);
    $id = $row['IdUser'];
    $prenom = $row['prenom'];
    $nom = $row['nom'];
    $score = $row['score'];
    if ($row['statut'] == 1) {
        $statut ='Active';
    }else{
        $statut = 'Inactive';
    }
    $login = $row['userLogin'];
    

    $employee_arr[] = array("id" => $id,"prenom" => $prenom,"nom" => $nom,"score" => $score,"statut" => $statut,"login" => $login);
}

/* encoding array to json format */
echo json_encode($employee_arr);

// if (isset($_POST['delete'])) {
//     $conn = getConnexion();
//     $id = $_GET['id'];
//     $count=$conn->prepare("DELETE FROM utilisateurs WHERE id=" . $id);
//     $count->execute();
//     exit();
// }

?>
                