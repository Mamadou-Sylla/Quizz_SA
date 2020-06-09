<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
             <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
             <link rel="stylesheet" type="text/css" href="../css/admin-style.css">
             <link rel="stylesheet" type="text/css" href="../css/creer-joueur-style.css">
             <script type="text/javascript" src="../javascript/jquery/jquery-3.5.1.js"></script>
             <script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
             <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
             <script type="text/javascript" src="../javascript/js/createplayer.js"></script>

             <title>Quizz-SA</title>
        </head>
    <body>
        <div class="container">
            <div class="row header">
                <div class="col-md-2 col-xs-2 logo">    
                        <img src="../css/Image/logo-QuizzSA.png" class="image" alt="Logo Quizz SA"/>
                </div>
                <div class="col-md-10 col-xs-10 title">
                    <h1 class=" title text-center">Le plaisir de Jouer</h1>
                </div>
            </div>  
            <div class="row navbar">
                <div class="col-md-12 col-xs-12 item">
                        <h2 class="slogan text-center">INSCRIVEZ, JOUEZ POUR AUGMENTER TON CULTURE GÉNÉRAL !</h2>
                </div>
            </div>
              <div class="row avatar-inscrire">
                <div class="col-md-3 col-xs-3 avatar">
                     <div class="joueur-photo">
                         <img id="avatar"/>    
                     </div>
                     <form class="form" id="form" action="createPlayer.php" method="post">
                     <div class="upload-btn-wrapper">
                        <button class="btn-avatar">Avatar</button>
                        <input type="file" accept="image/png, image/jpeg" name="photo" onchange="document.getElementById('avatar').src= window.URL.createObjectURL(this.files[0])"; />
                    </div>
                </div>
                <div class="col-md-6 col-xs-6 inscrire">
                        <h2 class=" registre text-center">Registre</h2>                                    
                        <div class="form-inline   items">
                            <label class="label" for="prenom">Prenom</label>
                            <input type="text" class="input form-control prenom-pwd" id="prenom" name="prenom" placeholder="   prenom" error=" error_1"><br/>       
                        </div>
                            <span class="erreur"  id="error_1"> </span>
                            <div class="form-inline   items-form">
                                <label class="label"for="nom">Nom</label>
                                <input type="text" class="input form-control nom-login" id="nom" name="nom" placeholder="   nom" error=" error_2">
                            </div>
                            <span class="erreur"  id="error_2"> </span>
                            <div class="form-inline   items-form">
                                <label class="label"for="login">Login</label>
                                <input type="text" class="input form-control nom-login" id="helplogin" name="login" placeholder="   login" error=" error_3">
                            </div>
                            <span class="erreur"  id="error_3"> </span>
                            <div class=" form-inline   items-form">
                                <label class="label"for="password">Password</label>
                                <input type="password" class="inputPwd form-control prenom-pwd" id="helppassword" name="password" placeholder="  password" error=" error_4">
                            </div>
                            <span class="erreur"  id="error_4"> </span>
                            <div class="form-inline   items-form">
                                <label class="label"for="confirm-pwd">Confirm Password</label>
                                <input type="password" class="inputConfirm form-control confirm-pwd" id="confirmPwd" name="confirm-pwd" placeholder="  confirm password" error=" error_5">
                            </div>
                            <span class="erreur error_5"  id="error_5"> </span>
                            <div class="save">
                                <button type="submit" class="btn-save " name="btn-save">Enregistrer</button>
                            </div>
                </form>
            </div>
        </div>
    </body>

                                  