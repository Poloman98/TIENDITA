
<table class="table table-striped">
        <tr>
            <th>Indice</th>
            <th>Departamento</th>
            <th>Pa&iacute;s</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <?php
        $indice=1;
            foreach ($departamento as $dep){
                echo "<tr>";
                    echo "<td>".$indice++."</td>";
                    echo "<td>".$dep['dep_descripcion']."</td>";
                    echo "<td>".utf8_encode($dep['pai_descripcion'])."</td>";
                    echo "<td><a href='". getUrl("Ubicacion/Departamento", "Departamento", "getEditar",array("dep_id"=>$dep['dep_id']))."'><button class='btn btn-primary'>Editar</button></a></td>";
                    echo "<td><a href='". getUrl("Ubicacion/Departamento", "Departamento", "getEliminar",array("dep_id"=>$dep['dep_id']))."'><button type='button' class='btn btn-danger'>Eliminar</button></a></td>";
                echo "</tr>";
            }
            
        ?>
    </table>

