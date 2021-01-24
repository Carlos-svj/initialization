function validate_id_vehicle(texto){
    if (texto.length > 0){
        var reg = /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_marca(texto){
    if (texto.length > 0){
        var reg=/^[a-zA-Z]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_modelo(texto){
    if (texto.length > 0){
        var reg=/^[a-zA-Z]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_HP(texto){
    if (texto.length > 0){
        var reg=/^[0-9]{2,3}$/;
        return reg.test(texto);
    }
    return false;
}
///^\d+$/ o 
function validate_Km(texto){
    if (texto.length > 0){
        var reg= /^[0-9]+$/;
        return reg.test(texto);
    }
    return false;
}

function validate_Anyo_produccion(texto){
    if (texto.length > 0){
        var reg=/^([012][1-9]|3[01])(\/)(0[1-9]|1[012])\2(\d{4})$/;
        return reg.test(texto);
    }
    return false;
}

function validate_tipo(texto){ //si es coxe o moto
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
}

function validate_color(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}
function validate_precio(texto){
    if (texto.length > 0){
        var reg= /^[0-9]+$/;
        return reg.test(texto);
    }
    return false;
}
/*
function validate_observaciones(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}
*/
function validate(){ //te la returnsra el create
    /* console.log('hola validate js');
     return true;  */

    var check=true;
    
    var v_id_vehicle=document.getElementById('id_vehicle').value;
    var v_marca=document.getElementById('marca').value;
    var v_modelo=document.getElementById('modelo').value;
    var v_HP=document.getElementById('HP').value;
    var v_Km=document.getElementById('Km').value;
    var v_Anyo_produccion=document.getElementById('Anyo_produccion').value;
    var v_tipo=document.getElementsByName('tipo');
    var v_color=document.getElementById('color').value;
    var v_precio=document.getElementById('precio').value;

    
    var r_id_vehicle=validate_vehicle(v_vehicle);
    var r_marca=validate_marca(v_marca);
    var r_modelo=validate_modelo(v_modelo);
    var r_HP=validate_HP(v_HP);
    var r_Km=validate_Km(v_Km);
    var r_Anyo_produccion=validate_Anyo_produccion(v_Anyo_produccion);
    var r_tipo=validate_tipo(v_tipo);
    var r_color=validate_color(v_color);
    //var r_observaciones=validate_observaciones(v_observaciones);
    var r_precio=validate_precio(v_precio);
    
    if(!r_id_vehicle){
        document.getElementById('error_id_vehicle').innerHTML = " * El vehiculo introducido no es valido";
        check=false;
    }else{
        document.getElementById('error_id_vehicle').innerHTML = "";
    }
    if(!r_marca){
        document.getElementById('error_marca').innerHTML = " * La marca del vehiculo no es valida ";
        check=false;
    }else{
        document.getElementById('error_marca').innerHTML = "";
    }
    if(!r_modelo){
        document.getElementById('error_modelo').innerHTML = " * El modelo introducido no es valido";
        check=false;
    }else{
        document.getElementById('error_modelo').innerHTML = "";
    }
    if(!r_HP){
        document.getElementById('error_HP').innerHTML = " * El numero de caballos de potencia no es valid";
        check=false;
    }else{
        document.getElementById('error_HP').innerHTML = "";
    }
    if(!r_Km){
        document.getElementById('error_Km').innerHTML = " * No has introducido un caracter valido";
        check=false;
    }else{
        document.getElementById('error_Km').innerHTML = "";
    }
    if(!r_Anyo_produccion){
        document.getElementById('error_Anyo_produccion').innerHTML = " * No has introducido ninguna fecha";
        check=false;
    }else{
        document.getElementById('error_Anyo_produccion').innerHTML = "";
    }
    if(!r_tipo){
        document.getElementById('error_tipo').innerHTML = " * El tipo de vehiculo introducido no es valida";
        check=false;
    }else{
        document.getElementById('error_tipo').innerHTML = "";
    }
    if(!r_color){
        document.getElementById('error_color').innerHTML = " * No has seleccionado ningun color";
        check=false;
    }else{
        document.getElementById('error_color').innerHTML = "";
    }
    if(!r_precio){
        document.getElementById('error_precio').innerHTML = " * El precio introducido no es valido";
        check=false;
    }else{
        document.getElementById('error_precio').innerHTML = "";
    }
    
    return check;
}