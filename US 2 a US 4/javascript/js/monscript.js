//  Code Validation des champs input avec Js du page page index 
                        //  Debut 
window.onload=function(){
                          
     const inputs=document.getElementsByClassName("input");
            for(input of inputs){
                input.addEventListener("keyup", function(x){
                    if(x.target.hasAttribute("error")){
                        var idSpanError=x.target.getAttribute("error");
                        document.getElementById(idSpanError).textContent="";
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
}
                        //  Fin 
$(document).ready(function () 
{
    


    $(".btn-connect").click(function(){
    
$("#form").submit(function(e)
        {
            e.preventDefault()
            console.log('clic')
            const login = $('#login').val();
            const password = $('#password').val()
        
            $.ajax({
                type: "POST",
                url: "src/php/validerConnexion.php",
                data: {
                    userlogin:login,
                    password:password
                },               
                success: function (response) {
                    $('html').html(response)
                    
                }
            });
            
            
        });
    });
});

