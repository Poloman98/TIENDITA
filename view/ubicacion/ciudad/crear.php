<style>
    .jumbotron{
        max-width: 100%;
        background: white;
    }
    div{
        max-width: 100%;
    }
</style>
<div class="container-fluid jumbotron">
    <center><h1 class="page-header">REGISTRAR CIUDAD</h1></center>
</div>
<div class="container ">
    <form method="post" action="<?php echo getUrl("Ubicacion/Ciudad", "Ciudad", "postCrear") ?>">
        <div class="col-md-5 form-group">
            <label>Pa&iacute;s</label>
            <select class="form-control" name='pais' id="pais" data-url="<?php echo getUrl("Ubicacion/Ciudad", "Ciudad", "getDepto",false,"ajax") ?>">
                <option>Seleccione</option>
                <?php
                    
                    while($pai= mysqli_fetch_assoc($pais)){
                        echo "<option value='".$pai['pai_id']."'>". utf8_encode($pai['pai_descripcion'])."</option>";
                    }
                
                ?>
                
            </select>
        </div>
        <div class="col-md-5 form-group">
            <label>Departamento</label>
            <select class="form-control" name="departamento" id="departamento">
                <option>Seleccione</option>
                
            </select>
        </div>
        <div class="col-md-5 form-group">
                <label class="">Ciudad</label>

                <input class="form-control" name="ciu_descripcion" placeholder="Nombre Ciudad" maxlength="30">
        </div><br><br><br><br><br>
        
        <center>
            <div class="col-md-10"><br>
                <input class="btn btn-primary btn-lg" name="registrar" value="Registrar" type="submit">
                <a href="<?php echo getUrl("Juego/Genero", "genero", "listar"); ?>" class="btn btn-danger btn-lg">Cancelar</a>
            </div>
        </center>
</form>
</div>

