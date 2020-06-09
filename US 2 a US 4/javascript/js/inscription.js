                        //  Debut 
                        window.onload=function(){

                            // 1
                            let input_prenom= document.getElementById("form");
                            input_prenom.addEventListener('submit',function(e){   
                                let prenom= document.getElementById("prenom");
                                if(prenom.value.trim()==""){
                                    let prenom_error= document.getElementById("erreur_1");
                                    prenom_error.innerHTML="Ce champ est obligatoire!";
                                    prenom_error.style.color='red';
                                    e.preventDefault();
                                }
                                else if(prenom.value.match('/[a-zA-Z0-9]{2,25}/')){
                                    let prenom_match= document.getElementById("erreur_1");
                                    prenom_match.innerHTML="Caractére invalide!";
                                    prenom_match.style.color='red';
                                    e.preventDefault();
                                }                            
                              });
                                                  // 1 
                                                // 2
                              let input_nom= document.getElementById("form");
                           input_nom.addEventListener('submit',function(e){   
                                let nom= document.getElementById("nom");
                                if(nom.value.trim()==""){
                                    let nom_error= document.getElementById("erreur_2");
                                    nom_error.innerHTML="Ce champ est obligatoire!";
                                    nom_error.style.color='red';
                                    e.preventDefault();
                                }
                                else if(nom.value.match('/[a-zA-Z0-9]{2,25}/')){
                                    let nom_match= document.getElementById("erreur_2");
                                    nom_match.innerHTML="Caractére invalide!";
                                    nom_match.style.color='red';
                                    e.preventDefault();
                                }                            
                              });
                                                // 2
                                            // 3
                                let input_login= document.getElementById("form");
                           input_login.addEventListener('submit',function(e){   
                                let login= document.getElementById("helplogin");
                                if(login.value.trim()==""){
                                    let login_error= document.getElementById("erreur_3");
                                    login_error.innerHTML="Ce champ est obligatoire!";
                                    login_error.style.color='red';
                                    e.preventDefault();
                                }
                                else if(login.value.match('/[a-zA-Z0-9]{2,25}/')){
                                    let login_match= document.getElementById("erreur_3");
                                    login_match.innerHTML="Caractére invalide!";
                                    login_match.style.color='red';
                                    e.preventDefault();
                                }                            
                              });
                                            // 3
                                            // 4
                           let input_pwd= document.getElementById("form");
                           input_pwd.addEventListener('submit',function(e){   
                                let pwd= document.getElementById("helppassword");
                                if(pwd.value.trim()==""){
                                    let pwd_error= document.getElementById("erreur_4");
                                    pwd_error.innerHTML="Ce champ est obligatoire!";
                                    pwd_error.style.color='red';
                                    e.preventDefault();
                                }
                                else if(pwd.value.match('/[a-zA-Z0-9]{2,25}/')){
                                    let pwd_match= document.getElementById("erreur_4");
                                    pwd_match.innerHTML="Caractére invalide!";
                                    pwd_match.style.color='red';
                                    e.preventDefault();
                                }                            
                              });
                                            // 4                                       
                                            // 5
                           let input_confirm= document.getElementById("form");
                           input_confirm.addEventListener('submit',function(e){   
                                let confirmPwd= document.getElementById("confirmPwd");
                                if(confirmPwd.value.trim()==""){
                                    let confirmPwd_error= document.getElementById("erreur_5");
                                    confirmPwd_error.innerHTML="Ce champ est obligatoire!";
                                    confirmPwd_error.style.color='red';
                                    e.preventDefault();
                                }
                                else if(confirmPwd.value.match('/[a-zA-Z0-9]{2,25}/')){
                                    let confirmPwd_match= document.getElementById("erreur_5");
                                    confirmPwd_match.innerHTML="Caractére invalide!";
                                    confirmPwd_match.style.color='red';
                                    e.preventDefault();
                                }                          
                              });
                                            // 5
                                            //6
                                 let test= document.getElementById("form");
                                test. addEventListener('submit',function(e){
                                    let testPwd= document.getElementById("helppassword");
                                    let testconfirmPwd= document.getElementById("confirmPwd");
                                    if(testPwd.value!=testconfirmPwd.value){
                                    let confirmPwd_test= document.getElementById("erreur_5");
                                    confirmPwd_test.innerHTML="Erreur de confirmation!";
                                    confirmPwd_test.style.color='red';
                                    e.preventDefault();
                                } 
    
                                });
                               }
                                             
                                            // 6
                  
           //  Fin 
                           
$(document).ready(function () 
{
    


    $("#btn").click(function(){
    
$("#form").submit(function(e)
        {
            e.preventDefault()
            const prenom = $('#prenom').val();
            const nom = $('#nom').val();
            const login = $('#helplogin').val();
            const password = $('#helppassword').val();
            const avatar = $('.btn-avatar').val();
        
            $.ajax({
                type: "POST",
                url: "createAdmin.php",
                data: {
                    prenom:prenom,
                    nom:nom,
                    userlogin:login,
                    password:password,
                    profil:avatar
                },               
                success: function (response) {
                    $('html').html(response)
                    
                }
            });
            
            
        });
    });
});

