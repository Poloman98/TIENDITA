
    <table class="table table-striped">
        <tr>
            <th>Indice</th>
            <th>Genero</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <?php
        $indice=1;
            foreach ($genero as $gen){
                echo "<tr>";
                    echo "<td>".$indice++."</td>";
                    echo "<td>".$gen['gen_descripcion']."</td>";
                    echo "<td><a href='". getUrl("Juego/Genero", "Genero", "getEditar",array("gen_id"=>$gen['gen_id']))."'><button class='btn btn-primary'><i class='fa fa-wrench fa-fw'></i>Editar</button></a></td>";
                    echo "<td><a href='". getUrl("Juego/Genero", "Genero", "getEliminar",array("gen_id"=>$gen['gen_id']))."'><button type='button' class='btn btn-danger'><i class='fa fa-times fa-fw'></i>Eliminar</button></a></td>";
                echo "</tr>";
            }
            
        ?>
    </table>
