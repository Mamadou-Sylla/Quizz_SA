<!DOCTYPE html>
<html lang="fr">
    <head>
        <met<meta name="viewport" content="width=device-width, initial-scale=1">
             <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
             <link rel="stylesheet" type="text/css" href="../css/admin-style.css">
             <link rel="stylesheet" type="text/css" href="../css/creer-admin-style.css">
             <script type="text/javascript" src="../javascript/jquery/jquery-3.5.1.js"></script>
             <script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
             <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
             <!-- <script type="text/javascript" src="../javascript/js/monscript.js"></script> -->
             <title>Quizz-SA</title>
        </head>
        
    <body>
        <div class="container">
<!-- ../fichier/createAdmin.php -->
<script type="text/javascript" src="../javascript/js/inscription.js"></script>
            <form class="form" id="form" action="../fichier/createAdmin.php" method="post">
                <div class="row">
                     <h2 class=" admin-title text-center">Enregistrer un admin</h2>
                     <div class="col-6-md col-6-sm">
                                     
                                    <div class="form-inline items">
                                        <label class="label" for="prenom">Prenom</label>
                                        <input type="text" class="input form-control" id="prenom" name="prenom" placeholder="   prenom" erreur=" erreur_1"><br/>       
                                   
                                    </div>
                                    <span class="erreur"  id="erreur_1"> </span>
                                    <div class="form-inline   items-form">
                                        <label class="label"for="nom">Nom</label>
                                        <input type="text" class="input-nom input form-control" id="nom" name="nom" placeholder="   nom" erreur=" erreur_2">
                                    </div>
                                    <span class="erreur"  id="erreur_2"> </span>
                                    <div class="form-inline   items-form">
                                        <label class="label"for="login">Login</label>
                                        <input type="text" class="input input-login form-control" id="helplogin" name="login" placeholder="   login" erreur=" erreur_3">
                                    </div>
                                    <span class="erreur"  id="erreur_3"> </span>
                                    <div class=" form-inline   items-form">
                                        <label class="label"for="password">Password</label>
                                        <input type="password" class="input form-control" id="helppassword" name="password" placeholder="  password" erreur=" erreur_4">
                                    </div>
                                    <span class="erreur"  id="erreur_4"> </span>
                                    <div class="form-inline   items-form">
                                        <label class="label"for="confirm-pwd">Confirm Password</label>
                                        <input type="password" class="input form-control" id="confirmPwd" name="confirm-pwd" placeholder="  confirm password" erreur=" erreur_5">
                                    </div>
                                    <span class="erreur erreur_5"  id="erreur_5">  </span>
                                    <div class="submit-save">
                                        <button type="submit" class="btn-connect" id="btn" name="enregistrer">Enregistrer</button>
                                        <div class="upload-btn-wrapper">
                                            <button class="btn-avatar">Avatar</button>
                                            <input type="file" accept="image/png, image/jpeg" name="myfile" onchange="document.getElementById('avatar').src= window.URL.createObjectURL(this.files[0])"; />
                                        </div>
                                    </div>
                              </div>
                    <div class="col-6-md .col-6-sm">
                            <div class="avatar">  
                                 <img id="avatar"/>    
                             </div>
                    </div>
                </div>
            </form>
           
        </div>
    </body>
    
</html>



                       