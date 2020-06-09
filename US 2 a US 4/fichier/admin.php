<?php session_start();?>
<?php ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> 
             <meta name="viewport" content="width=device-width, initial-scale=1">
             <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
             <link rel="stylesheet" type="text/css" href="../css/admin-style.css">
             <script type="text/javascript" src="../javascript/jquery/jquery-3.5.1.js"></script>
             <script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
             <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
             <title>Quizz-SA</title>
        </head>
    <body>
        <div class="container">
              <div class="row header">
                  <div class="col-md-2  col-xs-2 col-xs-2 logo">    
                            <img src="../css/Image/logo-QuizzSA.png" class="image" alt="Logo Quizz SA"/>
                  </div>
                  <div class="col-md-8 col-xs-8 title">
                        <h1 class="text-center">Le plaisir de Jouer</h1>
                  </div>
                  <div class="col-md-2 col-xs-2 user">
                        <div class="photo" style="background-image:url('../css/Image/profil.jpeg');">
                            <!-- profil user -->
                        </div>
                        <?php echo"<h5>".$_SESSION['user']['prenom']." ".$_SESSION['user']['nom']."</h5>"?>
                        
                  </div> 
              </div>  
              <div class="row navbar">
                 <div class="col-md-9 col-xs-9 item">
                        <h3>CRÉEZ ET PARAMETREZ VOS QUIZZ</h3>
                  </div>
                  <div class="col-md-3 col-xs-3 disconnect">
                  <a class="btn  btn-disconnect text-decoration-none" href="../fichier/deconnexion.php" role="button" name="disconnect">Déconnexion</a>
                        <?php
                              
                                    // require('../fichier/deconnexion.php');
                               
                        ?>
                  </div>
              </div>
              <div class="row wrapper">
                  <div class="col-md-3 col-xs-3 menu">
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item"><a class="text-decoration-none" href="admin.php?page=liste-question">Liste Question <span class="icone"><img id="icone" src="../css/Image/icon-list.png"/></span></a></li>
                          <li class="list-group-item"><a class="text-decoration-none" href="admin.php?page=creer-admin">Créer Admin <span class="add"><img id="icone" src="../css/Image/add-admin.png"/></span></a></li>
                          <li class="list-group-item"><a class="text-decoration-none" href="admin.php?page=liste-joueur">Liste Joueur <span class="list"><img id="icone" src="../css/Image/icon-list.png"/></span></a></li>
                          <li class="list-group-item"><a class="text-decoration-none" href="admin.php?page=creer-question">Créer Question <span ><img id="icone" src="../css/Image/add.png"/></span></a></li>

                      </ul>
                  </div>
                  <div class="col-md-6 col-xs-6 view">
                      <!-- <img src="Css/Image/logo-QuizzSA.png" class="view-logo" alt="Logo Quizz SA"/>
                      <p>Bienvenue dans la page <br/> administrateur de Quizz SA <br/> créez et paramétrez votre jeu</p> -->
                      <?php
                        if(isset($_GET['page'])) {
                            $page=$_GET['page'];
                            switch($page) {
                                case'liste-question':
                                    include('liste-question.php');
                                    break;
                                case'creer-admin':
                                    include('creer-admin.php');
                                    break;
                                case'liste-joueur':
                                    include('liste-joueur.php');
                                    break;
                                case'creer-question':
                                        include('creer-question.php');
                                        break;
                                default:
                                        echo"<p style='color:black'>liste-question</p>";
                                        break;
                                    }
                        } else {
                           $accueil="<img src='../css/Image/logo-QuizzSA.png' class='view-logo' alt='Logo Quizz SA'/>
                           <p>Bienvenue dans la page <br/> administrateur de Quizz SA <br/> créez et paramétrez votre jeu</p>";
                           echo $accueil;
                                }
                            ?>
                  </div>
              </div>
        </div>
    </body>
</html>

