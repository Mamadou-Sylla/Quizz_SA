<?php session_start();?>
<?php
    if (isset($_POST['connect'])) {
        # code...
        $Erreur=[];
        if (!empty($_POST['login']) && !empty($_POST['password'])){
            # code...
            if (preg_match('/^[a-zA-Z0-9]*$/', $_POST['login']) && preg_match('/^[a-zA-Z0-9]*$/', $_POST['password'])) {
                # code...
                //traitement php
            }
            else{
                $Erreur='Caractére invalide';
            }  
        }
        else{
            $Erreur='Ce champ est Obligatoire';
        }
        foreach ($Erreur as $Error) {
            # code...
            echo $Error;
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> 
             <meta name="viewport" content="width=device-width, initial-scale=1">
             <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
             <link rel="stylesheet" type="text/css" href="Css/style.css">
             <script src="Bootstrap/jquery/jquery.js"></script>
             <script src="Bootstrap/js/bootstrap.min.js"></script>
             <title>Quizz-SA</title>
        </head>
    <body>
        <div class="container">
                <div class="row">
                    <div class="item-logo col-md-6 col-xs-6 col-sm-12">
                        <div class="logo">
                        </div>
                        <h1>Le plaisir de Jouer</h1>
                    </div>
                    <div class="item-login col-md-6 col-xs-6 col-sm-12">
                         <div class="login">
                               
                                <form class="form" id="form" action="" method="post">
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
                                        <a href="#" class="link">S'incrire pour Jouer ?</a>
                                    </div>
                                </form>
                             </div>
                         </div>
                    </div>
                </div>
        </div>
    </body>
</html>

<!-- Code Validation des champs input avec Js -->
<script>
     const inputs=document.getElementsByClassName("input");
            for(input of inputs){
                input.addEventListener("keyup", function(x){
                    if(x.target.hasAttribute("error")){
                        var idSpanError=x.target.getAttribute("error");
                        document.getElementById(idSpanError).innerText="";
                    }
                });
            }
     document.getElementById("form").addEventListener('submit',function(e){   
    const inputs=document.getElementsByTagName("input");
    var erreur=false;
    for(input of inputs){
            if(input.hasAttribute("error")){
                var idSpanError=input.getAttribute("error"); 
           if(!input.value){
               var message=document.getElementById(idSpanError);
                message.innerText="Ce champ est obligatoire."
               erreur=true;
           e.preventDefault();    
      }
        else if(input.value.match('/^[a-zA-Z0-9]*$/')){  
                   var errorSyntaxe=document.getElementById(idSpanError);      
                   errorSyntaxe.innerText="Caractére invalide."
                   erreur=true;
               e.preventDefault();
            }
        }
    }
});
</script>

