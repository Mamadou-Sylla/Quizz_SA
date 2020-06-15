<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
             <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
             <link rel="stylesheet" type="text/css" href="../css/admin-style.css">
             <link rel="stylesheet" type="text/css" href="../css/creer-question-style.css">
             <script type="text/javascript" src="../javascript/jquery/jquery-3.5.1.js"></script>
             <script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
             <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
             <script type="text/javascript" src="../javascript/js/question.js"></script>
             <title>Quizz-SA</title>
        </head>
    <body>
        <div class="container">
         <h2 class="setting text-center">Paramétrez vos Quizz</h2>
            <form class="form" id="form" action="../fichier/createQuestion.php" method="post">                                    
                <div class="form-inline   items">
                    <label class="label" for="prenom">Nbre de points</label>
                    <input type="number" class="nombre" id="inputs" name="nombre" error="error"><br/>       
                </div>
            <span class="erreur"  id="error"> </span>
                <div class="form-inline   items-form">
                    <label class="label"for="nom">Questions</label>
                    <input type="text" class="question" id="input" name="question" error=" error_2">
                </div>
            <span class="erreur"  id="error_1"> </span>
                <div class="form-inline   items-form">
                    <label class="label"for="login">Type de réponse</label>
                    <select name="typeReponse" class="liste-question" id="liste-reponse">
                        <option value="">Donnez le type de réponse </option>
                        <option value="texte">Question avec réponse texte</option>
                        <option value="simple">Question avec une réponse</option>
                        <option value="multiple">Question à choix multiples</option>
                    </select>
                    <button type="button" id="AddInput" onclick='onAddInput()'></button>
                </div>
                <div>
                    <!--  -->
            </div>
                    <button type="submit" class="enregistrer" name="enregistrer">Enregistrer</button>
            </form>
        </div>
    </body>
</html>
