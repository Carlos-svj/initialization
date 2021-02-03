
<?php
        function validate_id_vehicle($texto){
            if(empty($texto)){
                return false;
            }else{
                return true;
            }
        }
    /*  function validate_id_vehicle($texto){
         
        $sql = "SELECT * FROM vehicles";

        $reg="/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/";
        return preg_match($reg,$texto);
    } */
    
    function validate_marca($texto){
        if(empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    function validate_modelo($texto){
        if(empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
     function validate_HP($texto){
        if(empty($texto)){
            return false;
        }else{
            return true;
        }
    }

    function validate_Km($texto){
        if(empty($texto)){
            return false;
        }else{
            return true;
        }
    }
     
    function validate_Anyo_produccion($texto){
        if(empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    
    
    function validate_color($texto){
        if(empty($texto)){
            return false;
        }else{
            return true;
        }
    }

    function validate_precio($texto){
        if(empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
   
    
    function validate(){

         /*  echo 'hola validate php'; */  

       // echo '<script language="javascript">alert("hola post user ")</script>';

        $check=true;
        
         $v_id_vehicle=$_POST['id_vehicle'];
        $v_marca=$_POST['marca'];
        $v_modelo=$_POST['modelo'];
        $v_HP=$_POST['HP'];
        $v_Km=$_POST['Km'];
        $v_Anyo_produccion=$_POST['Anyo_produccion'];
/*         $v_tipo=$_POST['tipo'];
 */        $v_color=$_POST['color'];
        $v_precio=$_POST['precio'];
    
        
        $r_id_vehicle=validate_id_vehicle('v_id_vehicle');
        $r_marca=validate_marca('v_marca');
        $r_modelo=validate_modelo('v_modelo');
        $r_HP=validate_HP('v_HP');
        $r_Km=validate_Km('v_Km');
        $r_Anyo_produccion=validate_Anyo_produccion('v_Anyo_produccion');
/*         $r_tipo=validate_tipo('v_tipo');
 */        $r_color=validate_color('v_color');
        $r_precio=validate_precio('v_precio');
        
        if($r_id_vehicle !== 1){
            $error_id_vehicle = " * El id_vehicle introducido no es valido";
            $check=false;
        }else{
            $error_id_vehicle = "";
        }
        if($r_marca !== 1){
            $error_marca = " * La marca introducida no es valida";
            $check=false;
        }else{
            $error_marca = "";
        }
        if($r_modelo !== 1){
            $error_modelo = " * El modelo introducido no es valido";
            $check=false;
        }else{
            $error_modelo = "";
        }
        if($r_HP !== 1){
            $error_HP = " * El HP introducido no es valido";
            $check=false;
        }else{
            $error_HP = "";
        }
        if(!$r_Km){
            $error_Km = " * No has indicado kilometraje";
            $check=false;
        }else{
            $error_Km = "";
        }
        if(!$r_Anyo_produccion){
            $error_Anyo_produccion = " * No has introducido ninguna Anyo_produccion";
            $check=false;
        }else{
            $error_Anyo_produccion = "";
        }
      /*   if($r_tipo !== 1){
            $error_tipo = " * La tipo de vehiculo no es valido";
            $check=false;
        }else{
            $error_tipo = "";
        } */
        if(!$r_color){
            $error_color = " * No has seleccionado ningun color";
            $check=false;
        }else{
            $error_color = "";
        }
        if(!$r_precio){
            $error_precio = " * El texto introducido no es valido";
            $check=false;
        }else{
            $error_precio = "";
        }
         
        //return $check;
    }