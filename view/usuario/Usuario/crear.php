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
    <center><h1 class="page-header">REGISTRAR USUARIO</h1></center>
</div>

<form name="crearJuego" method="post" action="<?php echo getUrl("Usuario","Usuario","postCrear"); ?>">
    <div class="container">
        <div class="col-md-5 form-group ">
            <label>Nombre </label>
            <input class="form-control" name="nombre" type="text" placeholder="Nombre">
        </div>
        <div class="col-md-5 form-group ">
            <label>Apellido</label>
            <input class="form-control" name="apellido" type="text" placeholder="Apellido">
        </div>
        <div class="col-md-5 form-group ">
            <label>Celular</label>
            <input class="form-control" name="celular" type="number" placeholder="Celular">
        </div>
        
        <div class="col-md-5 form-group ">
            <label>Direccion</label>
            <input class="form-control" name="direccion" type="text" placeholder="Direccion">
        </div>
        <div class="col-md-5 form-group ">
            <label>Cedula</label>
            <input class="form-control" name="cedula" type="text" placeholder="Cedula">
        </div>
        <div class="col-md-5 form-group ">
            <label>Tel&eacute;fono</label>
            <input class="form-control" name="telefono" type="text" placeholder="Telefono">
        </div>
        <div class="col-md-5 form-group ">
            <label>Ciudad</label>
            <select name="ciudad" class="form-control">
                <option>Seleccione...</option>
                <?php
                    while($ciu= mysqli_fetch_assoc($ciudad)){
                        echo "<option value='".$ciu['ciu_id']."'>".$ciu['ciu_descripcion']."</option>";
                    }
                ?>
            </select>
        </div>
        <div class="col-md-5 form-group ">
            <label>Correo</label>
            <input class="form-control" name="correo" type="email" placeholder="ejemplo@ejemplo.com">
        </div>
        <div class="col-md-5 form-group ">
            <label>Contraseña</label>
            <input class="form-control" name="contrasenia" type="password" placeholder="Password">
        </div>
        <div class="col-md-10 form-group ">
            <center>
                <br><input class="btn btn-success btn-lg" name="enviar" type="submit" value="Registrar">
            </center>
            <br>
        </div>
    </div>
</form>