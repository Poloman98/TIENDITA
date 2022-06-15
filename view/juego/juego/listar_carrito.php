
    <h3>PRODUCTOS EN CARRITO</h3>
    <table class="table table-striped">
        <tr>
            <th>Indice</th>
            <th>Nombre</th>
            <th>Portada</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <!-- <th>Editar</th>
            <th>Eliminar</th> -->
        </tr>
        <?php
        $indice=1;
        while ($car= mysqli_fetch_assoc($data)){
                echo "<tr>";
                echo "<td>".$indice++."</td>";
                echo "<td>".utf8_decode($car['jue_nombre'])."</td>";
                echo "<td class='col-md-2'><img src='".$car['jue_imagen']."' width=40% /></td>";
                echo "<td>".$car['det_car_cantidad']."</td>";
                echo "<td>$ ".$car['jue_precio']."</td>";
                // echo "<td><a href='". getUrl("Juego/Juego", "Juego", "getEditar",array("jue_id"=>$car['jue_id']))."'><button class='btn btn-primary'>Editar</button></td>";
                echo "<td><a href='". getUrl("Juego/Juego", "Juego", "",array("jue_id"=>$car['det_car_id']))."'><button class='btn btn-danger'>Eliminar</button></td>";
                echo "</tr>";
            }
            
        ?>
        <tfoot>
            <tr>
                <!-- <td><?= "El total es: ".$car['det_car_subtotal']; ?></td> -->
            </tr>
        </tfoot>
    </table>


