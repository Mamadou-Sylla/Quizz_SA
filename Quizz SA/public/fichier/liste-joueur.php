<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
             <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
             <link rel="stylesheet" type="text/css" href="../css/admin-style.css">
             <link rel="stylesheet" type="text/css" href="../css/liste-joueur-style.css">
             <script type="text/javascript" src="../javascript/jquery/jquery-3.5.1.js"></script>
             <script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
             <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
             <title>Quizz-SA</title>
        </head>
    <body>
        <div class="container">
         <h2 class="list-title text-center">Top 10 des meilleurs Joueurs</h2>
            <table class="table" id="table">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Score</th>
                    <th scope="col">Action</th>
                    <th scope="col">Supprimer</th>
                </tr>
                </thead>
            </table>
            <div id="div_pagination">
                <input type="hidden" id="txt_rowid" value="0">
                <input type="hidden" id="txt_allcount" value="0">
                <input type="button" class="btn-prev" value="Precedent" id="but_prev" />
                <input type="button" class="btn-next" value="Suivant" id="but_next" />
            </div>
        </div>
    </body>
</html>
 <!-- ------------------------------------------------------------------------------------------------------------------  -->

<script>
    // Total ligne par page
         /* Debut */
    var rowperpage = 8;

    $(document).ready(function() {
        getData();

        $("#but_prev").click(function() {
            // alert('prevOK');
            var rowid = Number($("#txt_rowid").val());
            var allcount = Number($("#txt_allcount").val());
            rowid -= rowperpage;
            if (rowid < 0) {
                rowid = 0;
            }
            $("#txt_rowid").val(rowid);
            getData();
        });

        $("#but_next").click(function() {
            //  alert('nextOK');
            var rowid = Number($("#txt_rowid").val());
            var allcount = Number($("#txt_allcount").val());
            rowid += rowperpage;
            if (rowid <= allcount) {
                $("#txt_rowid").val(rowid);
                getData();
            }

        });
    });
             /* Fin */
    // Total ligne par page

/* ------------------------------------------------------------------------------------------------------------------ */

     /* Connexion aux données */
          /*  Debut */
     function getData() {
                     
        var rowid = $("#txt_rowid").val();
        var allcount = $("#txt_allcount").val();

        $.ajax({
            url: 'http://localhost/Quizz-SA/public/data/pagination.php',
            type: 'post',
            data: { rowid: rowid, rowperpage: rowperpage },
            dataType: 'json',
            success: function(response) {
                
                createTablerow(response);
                alert(response);
                console.log(response);
            }
        });
    }
    // alert(response);
         /*  Fin  */
     /* Connexion aux données */

/* ------------------------------------------------------------------------------------------------------------------ */


     /* Creation Table */
         /* Debut */
     function createTablerow(data) {

var dataLen = data.length;

$("#table tr:not(:first)").remove();

for (var i = 0; i < dataLen; i++) {
    if (i == 0) {
        var allcount = data[i]['allcount'];
        $("#txt_allcount").val(allcount);
    } else {
        var prenom = data[i]['prenom'];
        var nom = data[i]['nom'];
        var score = data[i]['score'];
        var login = data[i]['login'];
        var role = data[i]['role'];
        var id = data[i]['id'];
        var btn = "<button class='active' id='active_" + login + "'>" + role + "</button>";

        $("#table").append("<tr id=" + id + "></tr>");
        $("#" + id).append("<td align='center' id='first_name' data-id1='" + id + "'>" + prenom + "</td>");
        $("#" + id).append("<td align='left' id='last_name' data-id2='" + id + "'>" + nom + "</td>");
        $("#" + id).append("<td align='center'>" + score + "</td>");
        $("#" + id).append("<td align='center'>" + btn + "</td>");
        $("#" + id).append("<td align='center'> <button id" + id + " class='delete' name='delete'>Supprimer</button> </td>");
    }
}
}
             /* Fin */
        /* Creation Table */

/* ------------------------------------------------------------------------------------------------------------------ */

        /* Supprimer un joueur */
              /* Debut */
              
              $(document).on("click", ".delete", function() {
        var $ele = $(this).parent().parent();

        // alert(id);
        $.ajax({
            url: 'http://localhost/Quizz-SA/public/data/pagination.php',
            type: "POST",
            cache: false,
            data: {
                id: $(this).closest('tr').attr('id')
            },

            success: function(dataResult) {
                alert(dataResult);
                if (dataResult == "deleted") {
                    $ele.fadeOut().remove();
                    // getData();
                }

            }
        });
    });

              /* Fin */
        /*Supprimer un joueur */

/* ------------------------------------------------------------------------------------------------------------------ */

        /* Activation du button et AJAX request */
              /* Debut */
              
      $(document).on("click", ".active", function() {
        alert("ok");
        var id = this.id;
        var split_id = id.split("_");
        var login = split_id[1];

        var activeText = $(this).text();

        // Get active state
        var active = 0;
        if (activeText == "Active") {
            active = 1;
        } else {
            active = 0;
        }

        // AJAX request
        $.ajax({
            url: 'http://localhost/Quizz-SA/public/data/pagination.php',
            type: 'post',
            data: { login: login, active: active, request: 1 },
            success: function(response) {
                alert(response);
                $("#" + id).html(response);
                // getData();
            }
        });
    });
              /* Fin */
        /* Activation du button et AJAX request */

/* ------------------------------------------------------------------------------------------------------------------ */

        /* AJAX request */
              /* Debut */
              
    function edit_data(id, text, column_name) {
        $.ajax({
            url: 'http://localhost/Quizz-SA/public/data/pagination.php',
            method: "POST",
            data: { id: id, text: text, column_name: column_name },
            success: function(data) {
                alert(data);
            }
        });
    }
    $(document).ready(function() {
        $("#first_name").blur(function() {
            alert("Handler called.");
            });
        });

              /* Fin */
        /* AJAX request */

/* ------------------------------------------------------------------------------------------------------------------ */

</script>

<!--
    emp_table->table
    empid->prenom 
    empname->nom
    salary->score
    statut->role
-->