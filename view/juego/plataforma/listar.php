<div class="container-fluid jumbotron">
    <center><h1 class="page-header">PLATAFORMAS</h1></center>
</div>
    <table class="table table-striped">
        <tr>
            <th>Indice</th>
            <th>Plataforma</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <?php
        $indice=1;
            foreach ($plataforma as $pla){
                echo "<tr>";
                    echo "<td>".$indice++."</td>";
                    echo "<td>".$pla['pla_descripcion']."</td>";
                    echo "<td><a href='". getUrl("Juego/Plataforma", "Plataforma", "getEditar",array("pla_id"=>$pla['pla_id']))."'><button class='btn btn-primary'>Editar</button></a></td>";
                    echo "<td><a href='". getUrl("Juego/Plataforma", "Plataforma", "getEliminar",array("pla_id"=>$pla['pla_id']))."'><button type='button' class='btn btn-danger'>Eliminar</button></a></td>";
                echo "</tr>";
            }
            
        ?>
    </table>

