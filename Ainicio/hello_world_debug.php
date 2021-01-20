<?php
    error_reporting(E_ALL);
    if (!ini_get('display_errors')) {
        ini_set('display_errors', true);
    }

    $colors = array('rojo', 'azul', 'verde', 'amarillo');
    foreach ($colors as $color) {  //array en php
        echo "¿Le gusta el " . $color . "?<br>";
    }

    function debug_php_print_r($array) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
    debug_php_print_r($colors);

    function debug_php_var_dump($array) {
        echo '<pre>';
        var_dump($array);
        echo '</pre>';
    }
    debug_php_var_dump($colors);

    function console_log($data){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
    }
    console_log($colors);

////////////////// arrays bidimensionales en PHP
    $array = array(
        "foo" => "bar",
        42    => 24,
        "multi" => array(
             "dimensional" => array(
                 "array" => "foo"
             )
        )
    );
    console_log($array["foo"]);
    console_log($array[42]);
    console_log($array["multi"]["dimensional"]["array"]);

////////////////// recorrer un array multidimensional en php
    $array = array(
        array("admin1", "admin1", "administrador"),
        array("prof1", "prof1", "profesor"),
        array("alum1", "alum1", "alumno")
    );
    function checkUser1($array, $usu) {
        foreach($array as $arrayInterno){
           foreach($arrayInterno as $palabra){
              if($palabra === $usu){
                return true;
              }
           }
        }
        return false;
    }
    console_log(checkUser1($array, 'administrador'));
    console_log(checkUser1($array, 'superadmin'));

    function checkUser2( $buscar, $array, $estricto = false ) {
        foreach ( $array as $item ) {
              if ( ( $estricto ? $item === $buscar : $item == $buscar) ||
                 ( is_array( $item ) && in_array( $buscar, $item, $estricto ) ) ) {
                  return true;
              }
          }
          return false;
    }
    console_log(checkUser2('administrador', $array));
    console_log(checkUser2('superadmin', $array));
