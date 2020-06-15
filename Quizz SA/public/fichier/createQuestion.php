<?php
require_once('../data/data.php');
if(isset($_POST['enregistrer'])){
    // $Erreur=[];
    // if (!empty($_POST['nombre']) && !empty($_POST['question']) && !empty($_POST['texte'])){
    //     # code...
    //     if ((preg_match('/[a-zA-Z0-9]{2,25}/',$_POST['nombre'])) && (preg_match('/[a-zA-Z0-9]{2,25}/',$_POST['question'])) && (preg_match('/[a-zA-Z0-9]{2,25}/',$_POST['texte']))){
    //         # code...
    //         if ($_POST['nombre']>1){
                # code...
                $score=$_POST['nombre'];
                $question=$_POST['question'];
                $type=$_POST['typeReponse'];
                $texte=$_POST['texte'];
                if ($_POST['typeReponse']=='texte') {
                    # code...
                    $pdo=getConnexion();
                    $sql="INSERT INTO `question`(NBREPOINT, QUESTION, TYPE, REPONSE) VALUES (?,?,?,?)";
                    $req=$pdo->prepare($sql);
                    $req->execute(array($score,$question,$type,$texte));
                    echo "success";
                }
                // else if ($_POST['typeReponse']=='simple' && $_POST['typeReponse']=='multiple') {
                //     # code...
                // }
        }
//         else{
//         $Erreur="Veuillez choisir un nombre positif!";
//         }
//     }  
//     else{
//         $Erreur="Caractére invalide!";
//     }
// }
// else{
//     $Erreur="Tous les champ sont obligatoire!";
// }
// }
?>
