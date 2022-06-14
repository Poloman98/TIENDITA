
    <table class="table table-striped table-hover">
        <tr>
            <th>Indice</th>
            <th>Documento</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Editar</th>
            <th>Eliminar</th>

        </tr>
        <?php
        $indice=1;
            while ($cli= mysqli_fetch_assoc($cliente)){
                echo "<tr>";
                echo "<td>".$indice++."</td>";
                echo "<td>".$cli['cli_id']."</td>";
                echo "<td>".$cli['cli_nombre']."</td>";
                echo "<td>".$cli['cli_apellido']."</td>";
                // echo "<td>".$cli['rol_descripcion']."</td>";
                echo "<td><a href='". getUrl("Usuario", "Usuario", "getEditar",array("cli_id"=>$cli['cli_id']))."'><button class='btn btn-primary'>Editar</button></td>";                
                echo "<td><a href='". getUrl("Usuario", "Usuario", "getEliminar",array("cli_id"=>$cli['cli_id']))."'><button class='btn btn-danger'>Eliminar</button></td>";
                echo "</tr>";
            }
            
        ?>
    </table>