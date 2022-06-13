<style>
    .jumbotron{
        max-width: 100%;
        background: white;
    }
    div{
        max-width: 101%;
    }
    .boton{
        margin-top: 2.25%;
    }
</style>
<div class="container-fluid jumbotron">
    <center><h1 class="page-header">PERFIL</h1></center>
</div>
<?php
    if($usu= mysqli_fetch_assoc($usuario)){
?>
<form name="crearJuego" method="post" action="<?php echo getUrl("Usuario","Usuario","postEditar"); ?>">
    <div class="container">
        <div class="col-md-5 form-group ">
            <label>Nombre </label>
            <input class="form-control" name="nombre" type="text" placeholder="Nombre" value="<?php echo $usu['cli_nombre'] ?>">
        </div>
        <div class="col-md-5 form-group ">
            <label>Apellido</label>
            <input class="form-control" name="apellido" type="text" placeholder="Apellido" value="<?php echo $usu['cli_apellido'] ?>">
        </div>
        <div class="col-md-5 form-group ">
            <label>Celular</label>
            <input class="form-control" name="celular" type="number" placeholder="Celular" value="<?php echo $usu['cli_celular'] ?>">
        </div>
        
        <div class="col-md-5 form-group ">
            <label>Direccion</label>
            <input class="form-control" name="direccion" type="text" placeholder="Direccion" value="<?php echo $usu['cli_direccion'] ?>">
        </div>
        <div class="col-md-5 form-group ">
            <label>N° Documneto</label>
            <input class="form-control" name="cedula" type="text" placeholder="Cedula" value="<?php echo $usu['cli_id'] ?>" readonly>
        </div>
        <div class="col-md-5 form-group ">
            <label>Tel&eacute;fono</label>
            <input class="form-control" name="telefono" type="text" placeholder="Telefono" value="<?php echo $usu['cli_telefono'] ?>">
            <input class="form-control" name="id" type="hidden"  value="<?php echo $usu['usu_id'] ?>">
            
        </div>
        <div class="col-md-5 form-group ">
            <label>Ciudad</label>
            <select name="ciudad" class="form-control">
                <option>Seleccione...</option>
                <?php
                    while($ciu= mysqli_fetch_assoc($ciudad)){
                        if($ciu['ciu_id']==$usu['ciu_id']){
                            echo "<option selected value='".$ciu['ciu_id']."'>".$ciu['ciu_descripcion']."</option>";
                        }else{
                        echo "<option value='".$ciu['ciu_id']."'>".$ciu['ciu_descripcion']."</option>";
                        }
                    }
                ?>
            </select>
        </div>
        <div class="col-md-5 form-group ">
            <label>Correo</label>
            <input class="form-control" name="correo" type="email" placeholder="ejemplo@ejemplo.com" value="<?php echo $usu['usu_correo'] ?>">
        </div>
        <?php
            if($_SESSION['rol']=="master"){
        ?>
        <div class="col-md-5 form-group ">
            <label>Tipo Usuario</label>
            <select name="rol" class="form-control">
                <option>Seleccione...</option>
                <?php
                    while($rol= mysqli_fetch_assoc($tipo_usuario)){
                        if($rol['rol_id']==$usu['rol_id']){
                            echo "<option selected value='".$rol['rol_id']."'>".$rol['rol_descripcion']."</option>";
                        }else{
                        echo "<option value='".$rol['rol_id']."'>".$rol['rol_descripcion']."</option>";
                        }
                    }
                ?>
            </select>
        </div>
        <?php
            }
        ?>
        <div class="col-md-10 form-group ">
            <center>
                <br><input class="btn btn-success btn-lg" name="enviar" type="submit" value="Actualizar">
            </center>
            <br>
        </div>
    </div>
</form>
<?php
    }
?>