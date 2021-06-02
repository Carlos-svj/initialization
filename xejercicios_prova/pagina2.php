<html>

<head> yee priim</head>

<body>
    <?php

    $dia = date("d/m/y");
    if ($dia <= 10) {

        echo "sitio activo";
    } else {
        echo "sitio fuera de servicio";
    }

    ?>


</body>

</html>