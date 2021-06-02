<?php

include "../config.php";

$return_arr = array();

$query = $db->prepare("SELECT * FROM usuarios ORDER BY nombres");
$query->execute();
$data = $query->fetchAll();

foreach ($data as $row) :
    $id = $row['id'];
    $usuario = $row['usuario'];
    $nombres = $row['nombres'];
    $email = $row['email'];
    $fecha = $row['fecha'];

    $return_arr[] = array(
        "id" => $id,
        "usuario" => $usuario,
        "nombres" => $nombres,
        "email" => $email,
        "fecha" => $fecha
    );
endforeach;

// Encoding array in JSON format
echo json_encode($return_arr);
