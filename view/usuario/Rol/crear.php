<?php
    include_once '../lib/conf/Connection.php';
    
    $objConnection=new Connection();
    
    $sql="select * from departamento";
    
    $conexion=$objConnection->getConnect();
    
    $departamento= mysqli_query($conexion, $sql);
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Crear Rol</h1>
        
    </div>
</div>

<div class="row">
    <form name="CrearRol" method="post" action="<?php echo getUrl("Usuario", "Rol","postCrear") ?>">
        <div class="form-group">
            <label>Código Ciudad</label>
            <input class="form-control" name="codigo">
            <label>Nombre Ciudad</label>
            <input class="form-control" name="nombre"><br>
            <label>Departamento</label>
            <select class="form-control">
                <option>Seleccione</option>
                <?php
                    while($dep= mysqli_fetch_assoc($departamento)){
                        echo "<option value='".$dep['dep_codigo']."'.>".$dep['dep_nombre']."</option>";
                    }
                ?>
            </select><br><br>
            <input type="submit" class="btn btn-primary" value="Registrar">
        </div>
    </form>
</div>