
    <table class="table table-striped table-hover">
        <tr>
            <th>Indice</th>
            <th>Documento</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Rol</th>
            <th>Editar</th>
            <?php
                if($_SESSION['rol']=="master"){
            ?>
            <th>Eliminar</th>
            <?php
                }
            ?>
        </tr>
        <?php
        $indice=1;
            while ($cli= mysqli_fetch_assoc($cliente)){
                echo "<tr>";
                echo "<td>".$indice++."</td>";
                echo "<td>".$cli['cli_id']."</td>";
                echo "<td>".$cli['cli_nombre']."</td>";
                echo "<td>".$cli['cli_apellido']."</td>";
                echo "<td>".$cli['rol_descripcion']."</td>";
                echo "<td><a href='". getUrl("Usuario", "Usuario", "getEditar",array("cli_id"=>$cli['cli_id']))."'><button class='btn btn-primary'>Editar</button></td>";
                
                if($_SESSION['rol']=="master"){
                echo "<td><a href='". getUrl("Usuario", "Usuario", "getEliminar",array("cli_id"=>$cli['cli_id']))."'><button class='btn btn-danger'>Eliminar</button></td>";
                }
                echo "</tr>";
            }
            
        ?>
    </table>