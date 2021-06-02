<html>

<title>Operaciones</title>

<body>

    <?php

    if ($_REQUEST['radio1'] == "suma") {

        $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
    } else {

        if ($_REQUEST['radio1'] == "resta") {

            $resta = $_REQUEST['valor1'] - $_REQUEST['valor'];
            echo "la resta es:" . $resta;
        }
    }

    ?>

</body>

</html>