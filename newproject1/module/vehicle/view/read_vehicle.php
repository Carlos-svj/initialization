<div id="contenido">
    <h1>Informacion del Usuario</h1>
    <p>
    <table border='2'>
        <tr>
            <td>id_vehicle: </td>
            <td>
                <?php
                    echo $vehicle['id_vehicle'];
                ?>
            </td>
        </tr>
    
        <tr>
            <td>: </td>
            <td>
                <?php
                    echo $vehicle['marca'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>: </td>
            <td>
                <?php
                    echo $vehicle['modelo'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>: </td>
            <td>
                <?php
                    echo $vehicle['HP'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>: </td>
            <td>
                <?php
                    echo $vehicle['Km'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td> : </td>
            <td>
                <?php
                    echo $vehicle['Anyo_produccion'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>: </td>
            <td>
                <?php
                    echo $vehicle['color'];
                ?>
            </td>
            
        </tr>
        
        <tr>
            <td>precio: </td>
            <td>
                <?php
                    echo $vehicle['precio'];
                ?>
            </td>
        </tr>
        
    </table>
    </p>
    <p><a href="index.php?page=controller_vehicle&op=list">Volver</a></p>
</div>