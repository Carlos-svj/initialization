<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>localhost</title>
    <style>

    .boton{
        border-radius: 5px;
        background: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 2%;
        text-decoration: none;
    }

    .boton:hover{
        border-radius: 5px;
        background: green;
        color: white;
        padding: 2%;
        text-decoration: none;
    }
    </style>
</head>
<body>
    <a href="../" class="boton" style="position: absolute;">VOLVER</a>
    <center>
        <?php
            $directorio = '.';
            $scan = opendir($directorio);
            echo "<table width=\"98%\" align=\"center\">";
            echo "<tr><td align=\"center\"><h1>LOCALHOST (Carlos Orquin)</h1><br><br></td></tr>";
            echo "<tr><td align=\"center\"><a class=\"boton\" href=\"http://localhost/phpmyadmin/\">PHPMyAdmin</a><br><br><br><br><br></td></tr>";
            while($elemento = readdir($scan)){
                //echo $elemento;
                if(is_dir($elemento) && $elemento != "." && $elemento != ".." ){
                    $listar = "<a class='boton' href='$elemento'>$elemento</a><br><br><br><br><br>";
                    echo "<tr><td align='center'>$listar</td></tr>";
                }
            }
            echo "</table>";

        ?>
    </center>
</body>
</html>
