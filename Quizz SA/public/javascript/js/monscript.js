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
    

                           
// $(document).ready(function () 
// {
    


//     $("#btn").click(function(){
    
// $("#form").submit(function(e)
//         {
//             e.preventDefault()
//             const prenom = $('#prenom').val();
//             const nom = $('#nom').val();
//             const login = $('#helplogin').val();
//             const password = $('#helppassword').val();
//             const avatar = $('.btn-avatar').val();
        
//             $.ajax({
//                 type: "POST",
//                 url: "createAdmin.php",
//                 data: {
//                     prenom:prenom,
//                     nom:nom,
//                     userlogin:login,
//                     password:password,
//                     profil:avatar
//                 },               
//                 success: function (response) {
//                     $('html').html(response)
                    
//                 }
//             });
            
            
//         });
//     });
// });

