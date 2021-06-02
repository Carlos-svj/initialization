<?php
if (isset($_REQUEST['pos']))
    $inicio = $_REQUEST['pos'];

?>
<html>

<head>
    <title>Problema</title>
</head>

<body>

    <?php

    $conexion = mysqli_connect("localhost", "root", "", "provetes") or
        die("problemas de conexion");
    $registros = mysqli_query($conexion, "select alu.codigo as  
    codigo,
    nombre,
    mail,
    codigocurso, 
    nombrecurso 
   from alumnos as alu
inner join cursos as cur on cur.codigo=alu.codigocurso
limit $inicio,2") or
        die("Problemas en el select:" . mysqli_error($conexion));
    $impresos = 0;
    while ($reg = mysqli_fetch_array($registros)) {
        $impresos++;
        echo "Codigo:" . $reg['codigo'] . "<br>";
        echo "Nombre:" . $reg['nombre'] . "<br>";
        echo "Mail:" . $reg['mail'] . "<br>";
        echo "Curso:" . $reg['nombrecurso'] . "<br>";
        echo "<hr>";
    }

    if ($inicio == 0)
        echo "anteriores ";
    else {
        $anterior = $inicio + 2;
        echo "<a href=\"pagina8.php?pos=$anterior\">Anteriores</a>";
    }
    if ($impresos == 2) {
        $proximo = $inicio + 2;
        echo "<a href=\"pagina1.php?pos=$proximo\">Siguientes</a>";
    } else
        echo "siguientes";
    mysqli_close($conexion);

    function foo()
    {
        echo "en foo klk";
    }
    ?>



</body>

</html>