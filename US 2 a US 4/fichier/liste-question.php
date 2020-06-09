<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> 
             <meta name="viewport" content="width=device-width, initial-scale=1">
             <meta name="viewport" content="width=device-width, initial-scale=1">
             <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
             <link rel="stylesheet" type="text/css" href="../css/admin-style.css">
             <link rel="stylesheet" type="text/css" href="../css/liste-question-style.css">
             <script type="text/javascript" src="../javascript/jquery/jquery-3.5.1.js"></script>
             <script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
             <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
             <script type="text/javascript" src="../javascript/js/monscript.js"></script>
             <title>Quizz-SA</title>
        </head>
    <body>
        <div class="container" id="mybar">
            <form class="form" id="form" action="" method="post">
                    <div class="valid">
                        <label for="prenom">Nbre question/Jeu</label>
                        <input type="text" class="ok" name="ok" error=" error">
                        <button type="submit" class=" btn-ok" name="ok">OK</button>      
                    </div>
                    <span  id="error"> </span>
                    <div class="form-group">
                            <label class="question" for="question">1. Quels sont les langages web ?</label><br/>
                            <input class="answer" type="checkbox" checked name="">
                            <label class="reponse" for="html">HTML</label><br/>
                            <input class="answer" type="checkbox" name="">
                            <label class="reponse" for="html">C</label><br/>
                            <input class="answer" type="checkbox" checked name="">
                            <label class="reponse" for="html">Javascript</label>
                    </div>
                    <div class="form-group">
                        <label class="question"  for="question">2. Qui est le ballon d'or Africain 2019 ?</label><br/>
                        <input class="answer" type="radio" name="">
                        <label class="reponse" for="html">Sadio Mané</label><br/>
                        <input class="answer" type="radio" name="" checked>
                        <label class="reponse" for="html">Mouhamed Salah</label>
                    </div>
                    <div class="form-group">
                        <label class="question"  for="question">3. Qui est le president des USA ?</label><br/>
                        <input class="answer" type="text" value="Donald TRUMP" name="">
                    </div>
                    <div class="form-group">
                        <label class="question"  for="question">4. Quelle est la prémiere ecole de codage gratuite au Sénégal ?</label><br/>
                        <input class="answer" type="radio" name="">
                        <label class="reponse" for="html">Simplon</label><br/>
                        <input class="answer" type="radio" name="" checked>
                        <label class="reponse" for="html">Sonatel Academy ?</label>
                    </div>
                    <div class="form-group">
                        <label class="question"  for="question">5. Quel est la capitale du Japon ?</label><br/>
                        <input class="answer" type="radio" name="" checked>
                        <label class="reponse" for="html">TOKYO</label><br/>
                        <input class="answer" type="radio" name="">
                        <label class="reponse" for="html">TAIPEI</label>
                    </div>
                    <button type="submit" class="btn-pagination" name="pagination">Pagination</button>      
            </form>
        </div>
    </body>
</html>
