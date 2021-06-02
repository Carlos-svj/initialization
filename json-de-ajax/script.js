$(document).ready(function(){
    $.ajax({
        url: 'inc/ajaxfile.php',
        type: 'get',
        dataType: 'JSON',
        success: function(response){
            var len = response.length;
            for(var i=0; i<len; i++){
                var id = response[i].id;
                var usuario = response[i].usuario;
                var nombres = response[i].nombres;
                var email = response[i].email;
                var fecha = response[i].fecha;

                var tr_str = "<tr>" +
                    "<td align='left'>" + (i+1) + "</td>" +
                    "<td align='left'>" + usuario + "</td>" +
                    "<td align='left'>" + nombres + "</td>" +
                    "<td align='left'>" + email + "</td>" +
                    "<td align='left'>" + fecha + "</td>" +
                    "</tr>";

                $("#userTable tbody").append(tr_str);
            }

        }
    });
});