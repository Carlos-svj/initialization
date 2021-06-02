// YE CANVIAR O EL MIRES LO DES LES EXPRESSIONES REGULARES
// O T'EN VAS A FER PUÑETES VA CHE ANIMAT

//
function validate_id_vehicle(texto) {
  //mira avore si esta ple yau
  if (texto.length > 0) {
    return true;
  }
  return false;
}

function validate_marca(texto) {
  //açÔ s'en te que anar fora
  if (texto.length > 0) {
    var reg = /^[a-zA-Z]*$/;
    return reg.test(texto);
  }
  return false;
}

function validate_modelo(texto) {
  //mira avore si esta ple yau
  if (texto.length > 0) {
    return true;
  }
  return false;
}

function validate_HP(texto) {
  if (texto.length > 0) {
    var reg = /^[0-9]{3,4}$/;
    return reg.test(texto);
  }
  return false;
}
///^\d+$/ o
function validate_Km(texto) {
  if (texto.length > 0) {
    var reg = /^[0-9]+$/;
    return reg.test(texto);
  }
  return false;
}

function validate_Anyo_produccion(texto) {
  //mira avore si esta ple yau
  if (texto.length > 0) {
    return true;
  }
  return false;
}

/* function validate_tipo(texto){ //si es coxe o moto
    var i;
    var ok=0;
    for(i=0; i<texto.length;i++){
        if(texto[i].checked){
            ok=1
        }
    }
 
    if(ok==1){
        return true;
    }
    if(ok==0){
        return false;
    }
} */

function validate_color(texto) {
  if (texto.length > 0) {
    return true;
  }
  return false;
}
// function validate_precio(texto){
//     if (texto.length > 0){
//         var reg= /^[0-9]+$/;
//         return reg.test(texto);
//     }
//     return false;
// }

function validate_precio(texto) {
  //perque puñeta em trau 250000.00 aixin ane el zero
  if (texto.length > 0) {
    return true;
  }
  return false;

  // var RE = /^\d*\.?\d*$/;
  // if (RE.test(valor)) {
  //     return true;
  // } else {
  //     return false;
  // }
}

/*
function validate_observaciones(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}
*/
function validate() {
  //te la returnsra el create

  /* console.log('hola validate js');
    
     return true;  */

  var check = true;

  var v_id_vehicle = document.getElementById("id_vehicle").value;
  var v_marca = document.getElementById("marca").value;
  var v_modelo = document.getElementById("modelo").value;
  var v_HP = document.getElementById("HP").value;
  var v_Km = document.getElementById("Km").value;
  var v_Anyo_produccion = document.getElementById("Anyo_produccion").value;
  var v_color = document.getElementById("color").value;
  var v_precio = document.getElementById("precio").value;

  var r_id_vehicle = validate_id_vehicle(v_id_vehicle);
  var r_marca = validate_marca(v_marca);
  var r_modelo = validate_modelo(v_modelo);
  var r_HP = validate_HP(v_HP);
  var r_Km = validate_Km(v_Km);
  var r_Anyo_produccion = validate_Anyo_produccion(v_Anyo_produccion);
  var r_color = validate_color(v_color);
  var r_precio = validate_precio(v_precio);

  if (!r_id_vehicle) {
    document.getElementById("error_id_vehicle").innerHTML =
      " * El vehiculo introducido no es valido";
    //per parar return false
    check = false;
  } else {
    document.getElementById("error_id_vehicle").innerHTML = "";
  }
  if (!r_marca) {
    document.getElementById("error_marca").innerHTML =
      " * La marca del vehiculo no es valida ";
    check = false;
  } else {
    document.getElementById("error_marca").innerHTML = "";
  }
  if (!r_modelo) {
    document.getElementById("error_modelo").innerHTML =
      " * El modelo introducido no es valido";
    check = false;
  } else {
    document.getElementById("error_modelo").innerHTML = "";
  }
  if (!r_HP) {
    document.getElementById("error_HP").innerHTML =
      " * El numero de caballos de potencia no es valid";
    check = false;
  } else {
    document.getElementById("error_HP").innerHTML = "";
  }
  if (!r_Km) {
    document.getElementById("error_Km").innerHTML =
      " * No has introducido un caracter valido";
    check = false;
  } else {
    document.getElementById("error_Km").innerHTML = "";
  }
  if (!r_Anyo_produccion) {
    document.getElementById("error_Anyo_produccion").innerHTML =
      " * No has introducido ninguna fecha";
    check = false;
  } else {
    document.getElementById("error_Anyo_produccion").innerHTML = "";
  }

  if (!r_color) {
    document.getElementById("error_color").innerHTML =
      " * No has seleccionado ningun color";
    check = false;
  } else {
    document.getElementById("error_color").innerHTML = "";
  }
  if (!r_precio) {
    document.getElementById("error_precio").innerHTML =
      " * El precio introducido no es valido";
    check = false;
  } else {
    document.getElementById("error_precio").innerHTML = "";
  }

  //    console.log('hola validate js');
  //     return true;
  document.update_vehicle.submit();
  document.update_vehicle.action =
    "index.php?page=controller_vehicle&op=update";
  //  implementar el ajax per a que arreplegue les dades i li xufles ahi a tope va

  $(document).ready(function () {
    // $("#table_crud").DataTable();
    $(".id_vehicle").click(function () {
      var id = this.getAttribute("id");
      // gastar
      $ajax(
        "module/vehicle/controller/controller_vehicle.php? op=read_modal&modal=" +
          id,
        function (data, status) {
          var json = JSON.parse(data);
          console.log(json);

          if (json === "error") {
            window.location.href = "index.php?page=503";
          } else {
            console.log(json.id_vehicle);
            $("#id_vehicle").html(json.id_vehicle);
            $("#marca").html(json.id_vehicle);
            $("#modelo").html(json.id_vehicle);
            $("#HP").html(json.id_vehicle);
            $("#Km").html(json.id_vehicle);
            $("#Anyo_produccion").html(json.id_vehicle);
            $("#color").html(json.id_vehicle);
            $("#precio").html(json.id_vehicle);

            $("#details_vehicle").show();
            $("#id_vehicle_modal").dialog({
              width: 850,
              height: 500,
              resizable: "false",
              modal: "true",
              buttons: {
                Ok: function () {
                  $(this).dialog("close");
                },
              },
              show: {
                effect: "blind",
                duration: 1000,
              },
              hide: {
                effect: "explode",
                duration: 1000,
              },
            });
          } //end-else
        }
      );
    });
  });
}
