<div id="contenido">
    <div class="container">
        <div class="row">
            <h3>LISTA DE VEHICULOS</h3>
        </div>
        <div class="row">
            <p><a href="index.php?page=controller_vehicle&op=create"><img src="view/img/mas.png"></a></p>

            <table>
                <tr>
                    <td width=125><b>ID_Vehiculo</b></th>
                    <td width=125><b>Marca</b></th>
                    <td width=125><b>Modelo</b></th>
                    <th width=350><b>Operaciones</b></th>
                </tr>
                <?php
                if ($rdo->num_rows === 0) {
                    echo '<tr>';
                    echo '<td align="center"  colspan="3">NO HAY NINGUN vehiculo disp.</td>';
                    echo '</tr>';
                } else {
                    foreach ($rdo as $row) {
                        echo '<tr>';
                        echo '<td width=125>' . $row['id_vehicle'] . '</td>';
                        echo '<td width=125>' . $row['marca'] . '</td>';
                        echo '<td width=125>' . $row['modelo'] . '</td>';
                        echo '<td width=350>';
                        echo '<a class="Button_blue" href="index.php?page=controller_vehicle&op=read&id=' . $row['id_vehicle'] . '">Read</a>';
                        echo '&nbsp;';
                        echo '<a class="Button_green" href="index.php?page=controller_vehicle&op=update&id=' . $row['id_vehicle'] . '">Update</a>';
                        echo '&nbsp;';
                        echo '<a class="Button_red" href="index.php?page=controller_vehicle&op=delete&id=' . $row['id_vehicle'] . '">Delete</a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>

<!-- modal window -->
<section id="id_vehicle_modal">
    <div id="details_vehicle" hidden>
        <div id="details">
            <div id="container">
                id_vehicle: <div id="id_vehicle"></div></br>
                marca: <div id="marca"></div></br>
                modelo: <div id="modelo"></div></br>
                HP: <div id="Hp"></div></br>
                Km: <div id="Km"></div></br>
                Anyo_produccion: <div id="Anyo_produccion"></div></br>
                color: <div id="color"></div></br>
                precio: <div id="precio"></div></br>
            </div>
        </div>
    </div>
</section>
