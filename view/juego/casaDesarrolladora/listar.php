
    <table class="table table-striped">
        <tr>
            <th>Indice</th>
            <th>Casa</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <?php
        $indice=1;
            foreach ($casa_desarrolladora as $casa){
                echo "<tr>";
                    echo "<td>".$indice++."</td>";
                    echo "<td>".$casa['cas_des_descripcion']."</td>";
                    echo "<td><a href='". getUrl("Juego/CasaDesarrolladora", "CasaDesarrolladora", "getEditar",array("casa_id"=>$casa['cas_des_id']))."'><button class='btn btn-primary'>Editar</button></a></td>";
                    echo "<td><a href='". getUrl("Juego/CasaDesarrolladora", "CasaDesarrolladora", "getEliminar",array("casa_id"=>$casa['cas_des_id']))."'><button type='button' class='btn btn-danger'>Eliminar</button></a></td>";
                echo "</tr>";
            }
            
        ?>
    </table>