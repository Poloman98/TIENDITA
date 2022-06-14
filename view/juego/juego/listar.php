
    <table class="table table-striped">
        <tr>
            <th>Indice</th>
            <th>Nombre</th>
            <th>Portada</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <?php
        $indice=1;
            while ($jue= mysqli_fetch_assoc($juego)){
                echo "<tr>";
                echo "<td>".$indice++."</td>";
                echo "<td>".utf8_decode($jue['jue_nombre'])."</td>";
                echo "<td class='col-md-2'><img src='".$jue['jue_imagen']."' width=40% /></td>";
                echo "<td>".$jue['jue_cantidad']."</td>";
                echo "<td>$ ".$jue['jue_precio']."</td>";
                echo "<td><a href='". getUrl("Juego/Juego", "Juego", "getEditar",array("jue_id"=>$jue['jue_id']))."'><button class='btn btn-primary'>Editar</button></td>";
                echo "<td><a href='". getUrl("Juego/Juego", "Juego", "getEliminar",array("jue_id"=>$jue['jue_id']))."'><button class='btn btn-danger'>Eliminar</button></td>";
                echo "</tr>";
            }
            
        ?>
    </table>


