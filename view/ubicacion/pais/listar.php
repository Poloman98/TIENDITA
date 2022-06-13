<style>
    .buscar{
        width: 40%;
        margin-left: 20%;
        margin-top: 2%;
    }
    table{
        margin-top: 5%;
    }
    .btn{
        margin-top: 2%;
    }
</style>
<form method="post" action="<?php echo getUrl("Ubicacion/Pais", "Pais", "buscar") ?>">
<center><div class="col-md-10">
    <input class="form-control buscar col-md-8" type="text" placeholder="Buscar..." name="busqueda">
    <button type="submit"  class="btn btn-success">Buscar</button><br>
</div>
</center>
</form>
<br>


<table class="table table-striped">
        <tr>
            <th>Indice</th>
            <th>Pa&iacute;s</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <?php
        $indice=1;
            foreach ($pais as $pai){
                echo "<tr>";
                    echo "<td>".$indice++."</td>";
                    echo "<td>".utf8_encode($pai['pai_descripcion'])."</td>";
                    echo "<td><a href='". getUrl("Ubicacion/Pais", "Pais", "getEditar",array("pai_id"=>$pai['pai_id']))."'><button class='btn btn-primary'>Editar</button></a></td>";
                    echo "<td><a href='". getUrl("Ubicacion/Pais", "Pais", "getEliminar",array("pai_id"=>$pai['pai_id']))."'><button type='button' class='btn btn-danger'>Eliminar</button></a></td>";
                echo "</tr>";
            }
            
        ?>
    </table>

