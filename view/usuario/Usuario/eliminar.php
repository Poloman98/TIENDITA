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
<form name="crearJuego" method="post" action="<?php echo getUrl("Usuario","Usuario","postEliminar"); ?>">
    <div class="container">
        <div class="col-md-5 form-group ">
            <label>Nombre </label>
            <input class="form-control" name="nombre" type="text" readonly value="<?php echo $usu['cli_nombre'] ?>">
        </div>
        <div class="col-md-5 form-group ">
            <label>Apellido</label>
            <input class="form-control" name="apellido" type="text" readonly value="<?php echo $usu['cli_apellido'] ?>">
        </div>
        <div class="col-md-5 form-group ">
            <label>Celular</label>
            <input class="form-control" name="celular" type="number" readonly value="<?php echo $usu['cli_celular'] ?>">
        </div>
        
        <div class="col-md-5 form-group ">
            <label>Direccion</label>
            <input class="form-control" name="direccion" type="text" readonly value="<?php echo $usu['cli_direccion'] ?>">
        </div>
        <div class="col-md-5 form-group ">
            <label>N° Documneto</label>
            <input class="form-control" name="cedula" type="text" readonly value="<?php echo $usu['cli_id'] ?>" readonly>
        </div>
        <div class="col-md-5 form-group ">
            <label>Tel&eacute;fono</label>
            <input class="form-control" name="telefono" type="text" readonly value="<?php echo $usu['cli_telefono'] ?>">
            <input class="form-control" name="id" type="hidden"  value="<?php echo $usu['usu_id'] ?>">
            
        </div>
        <div class="col-md-5 form-group ">
            <label>Ciudad</label>
            <input class="form-control" name="ciudad" type="text" readonly value="<?php echo $usu['ciu_descripcion'] ?>">
        </div>
        <div class="col-md-5 form-group ">
            <label>Correo</label>
            <input class="form-control" name="correo" type="email" readonly value="<?php echo $usu['usu_correo'] ?>">
        </div>
        <?php
            if($_SESSION['rol']=="master"){
        ?>
        <div class="col-md-5 form-group ">
            <label>Tipo Usuario</label>
            <input class="form-control" name="rol" type="text" readonly value="<?php echo $usu['rol_descripcion'] ?>">
        </div>
        <?php
            }
        ?>
        <div class="col-md-10 form-group ">
            <center>
                <br><input class="btn btn-danger btn-lg" name="enviar" type="submit" value="Eliminar">
            </center>
            <br>
        </div>
    </div>
</form>
<?php
    }
?>