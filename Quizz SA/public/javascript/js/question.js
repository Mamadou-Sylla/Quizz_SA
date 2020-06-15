                        
                        //Ajout d'input
    var cpt=0;
    var i=1;
    var j=1;
    function onAddInputTexte(){ 
        
        cpt++;
        var divInputs=document.getElementById('form');
        var newInput=document.createElement('div');
        newInput.setAttribute('class','row');
        newInput.setAttribute('id','row_'+cpt);
        newInput.innerHTML=`
        <div class=" form-inline   items-form" id="items-form">
                        <label class="label"for="password">Réponse 1</label>
                        <input type="text" class="input" id="input" name="texte" error="error_1">
                        <button type="button" id="RemoveInput" onclick='onRemoveInput(${cpt})'></button>
                    </div>
                <span class="erreur"  id="error_1"> </span>
        </div>
        `;
        divInputs.appendChild(newInput);
    }
        function onAddInputSimple(){
             
        cpt++;
        var divInputs=document.getElementById('form');
        var newInput=document.createElement('div');
        newInput.setAttribute('class','row');
        newInput.setAttribute('id','row_'+cpt);
        newInput.innerHTML=`
        <div class=" form-inline   items-form" id="items-form">
                        <label class="label"for="password">Réponse 1</label>
                        <input type="text" class="input" id="input" name="texte[${i}]" error=" error_1">
                        <input type="radio" id="radio" name="vrai" value="${i}">
                        <button type="button" id="RemoveInput" onclick='onRemoveInput(${cpt})'></button>
                    </div>
                <span class="erreur"  id="error_1"> </span> 
        `;
        divInputs.appendChild(newInput);
        i++;
        }
        function onAddInputMultiple(){
                 
        cpt++;
        var divInputs=document.getElementById('form');
        var newInput=document.createElement('div');
        newInput.setAttribute('class','row');
        newInput.setAttribute('id','row_'+cpt);
        newInput.innerHTML=`
            <div class=" form-inline   items-form" id="items-form">
                <label class="label"for="password">Réponse 1</label>
                <input type="text" class="input" id="input" name="texte[${j}]" error=" error_1">
                <input type="checkbox" id="checkbox" name="vrai[]" value="${j}">
                <button type="button" id="RemoveInput" onclick='onRemoveInput(${cpt})'></button>
            </div>
            <span class="erreur"  id="error_1"> </span> 
        `;
        divInputs.appendChild(newInput);
        j++;
        }
        function onAddInput(){
            var type=document.getElementById("liste-reponse");
            if (type.value == 'texte') {
            return onAddInputTexte();
        } else if (type.value == 'simple') {
            return onAddInputSimple();
        } else if (type.value == 'multiple') {
            return onAddInputMultiple();
        }  
        }
    function onRemoveInput(nbr){
        var target=document.getElementById('row_'+nbr);
        target.remove();
    }
                            //Ajout d'input

                            //Validation
window.onload=function(){
    $('#form').submit(function(event){
        if ($(".nombre").val()==="") {
            var message=document.getElementById("error");
            message.innerText="Ce champ est obligatoire!";
                erreur=true;
            event.preventDefault();
        }else if($(".nombre").val()<1){
            var message=document.getElementById("error");
            message.innerText="Veuillez choisir un nombre positif!";             
            event.preventDefault();
        }
        if ($("#input").val()==="") {
            var msg=document.getElementById("error_1");
            msg.innerText="Ce champ est obligatoire!";
                erreur=true;
            event.preventDefault();
        }
        else  if ($("#input").val().match('/[a-zA-Z0-9]{2,25}/')) {
            var msg=document.getElementById("error_1");
            msg.innerText="Caractére invalide!";
                erreur=true;
            event.preventDefault();
        }
    });
}
                           //Validation
                           
                        //    u