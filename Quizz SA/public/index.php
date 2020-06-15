
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> 
             <meta name="viewport" content="width=device-width, initial-scale=1">
             <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
             <link rel="stylesheet" type="text/css" href="css/style.css">
             <script type="text/javascript" src="javascript/jquery/jquery-3.5.1.js"></script>
             <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
             <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
             <script type="text/javascript" src="javascript/js/monscript.js"></script>
             <title>Quizz-SA</title>
        </head>
    <body>
        <div class="container">
                <div class="row">
                    <div class="item-logo col-md-6 col-sm-6 col-xs-12" >
                        <div class="logo">
                        </div>
                        <h1>Le plaisir de Jouer</h1>
                    </div>
                    <div class="item-login col-md-6 col-sm-6 col-xs-12">
                         <div class="login">
                               
                                <form class="form" id="form" action="../public/fichier/traitement.php" method="post">
                                     <h2 id="title">S'identifier</h2>
                                    <div class="form-group">
                                        <label for="login">Login</label>
                                        <input type="text" class="input form-control " id="login" name="login" placeholder="   username" error="error_1">
                                        <span id="error_1"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="login">Mot de passe</label>
                                        <input type="password" class="input form-control" id="password" name="password" placeholder="  password" error="error_2">
                                        <span id="error_2"></span>
                                    </div>
                                    <div class="submit-link">
                                        <button type="submit" class="btn-connect" name="connect"> Connecter</button>
                                        <a href="../public/fichier/creer-joueur.php" class="link">S'incrire pour Jouer ?</a>
                                    </div>
                                </form>
                                    <?php 
                                    include('../public/fichier/traitement.php'); 
                                        if(isset($_GET['msg'])){
                                            $msg=$_GET["msg"];
                                            echo "<h4 style='color:red; text-align:center; font-size:20px; margin-top:10px;'>" .$_GET['msg']."</h4>";  
                                            } 
                                    ?>
                                </span>
                             </div>
                         </div>
                    </div>
                </div>
        </div>
    </body>
</html>

