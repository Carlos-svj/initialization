<div id="contenido">
    <form autocomplete="on" method="post" name="aupdate_vehicle" id="update_vehicle" onsubmit="return validate();" action="index.php?page=controller_vehicle&op=update">
        <h1>Modificar vehiculo</h1>
        <table border='0'>
            <tr>
                <td>id_vehicle: </td>
                <td><input type="text" id="id_vehicle" name="id_vehicle" placeholder="id_vehicle" value="<?php echo $vehicle['id_vehicle'];?>" readonly/></td>
                <td><font color="red">
                    <span id="error_id_vehicle" class="error">
                        <?php
                            echo "$error_id_vehicle";
                        ?>
                    </span>
                </font></font></td>
            </tr>
        
            <tr>
                <td>marca: </td>
                <td><input type="text" id="marca" name="marca" placeholder="marca" value="<?php echo $vehicle['marca'];?>"/></td>
                <td><font color="red">
                    <span id="error_marca" class="error">
                        <?php
                            echo "$error_marca";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>modelo: </td>
                <td><input type="text" id="modelo" name="modelo" placeholder="modelo" value="<?php echo $vehicle['modelo'];?>"/></td>
                <td><font color="red">
                    <span id="error_modelo" class="error">
                        <?php
                            echo "$error_modelo";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            
            <tr>
                <td>HP: </td>
                <td><input type="text" id= "HP" name="HP" placeholder="HP" value="<?php echo $vehicle['HP'];?>"/></td>
                <td><font color="red">
                    <span id="error_HP" class="error">
                        <?php
                            echo "$error_HP";
                        ?>
                    </span>
                </font></font></td>
            </tr>
            

            <tr>
                <td>Km: </td>
                <td><input type="text" id= "Km" name="Km" placeholder="Km" value="<?php echo $vehicle['Km'];?>"/></td>
                <td><font color="red">
                    <span id="error_Km" class="error">
                        <?php
                            echo "$error_Km";
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>Anyo_produccion: </td>
                <td><input type="text" id="Anyo_produccion" name="Anyo_produccion" placeholder="Anyo_produccion" value="<?php echo $vehicle['Anyo_produccion'];?>"/></td>
                <td><font color="red">
                    <span id="error_Anyo_produccion" class="error">
                        <?php
                            echo "$error_Anyo_produccion";
                        ?>
                    </span>
                </font></font></td>
                
            </tr>

            <tr>
                <td>tipo: </td>
                <td>
                    <?php
                        if ($vehicle['tipe']==="coche"){
                    ?>
                        <input type="radio" id="tipe" name="tipe" placeholder="tipe" value="coche" checked/>coche
                        <input type="radio" id="tipe" name="tipe" placeholder="tipe" value="moto"/>moto
                    <?php    
                        }else{
                    ?>
                        <input type="radio" id="tipe" name="tipe" placeholder="tipe" value="coche"/>coche
                        <input type="radio" id="tipe" name="tipe" placeholder="tipe" value="moto" checked/>moto
                    <?php   
                        }
                    ?>
                </td>
                <td><font color="red">
                    <span id="error_tipe" class="error">
                        <?php
                            echo "$error_tipe";
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>color: </td>
                <td><input type="text" id= "color" name="color" placeholder="color" value="<?php echo $vehicle['color'];?>"/></td>
                <td><font color="red">
                    <span id="error_color" class="error">
                        <?php
                            echo "$error_color";
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td>precio: </td>
                <td><input type="text" id= "precio" name="precio" placeholder="precio" value="<?php echo $vehicle['precio'];?>"/></td>
                <td><font color="red">
                    <span id="error_color" class="error">
                        <?php
                            echo "$error_precio";
                        ?>
                    </span>
                </font></font></td>
            </tr>

            <tr>
                <td><input type="submit" name="update" id="update"/></td>
                <td align="right"><a href="index.php?page=controller_vehicle&op=list">Volver</a></td>
            </tr>
        </table>
    </form>
</div>