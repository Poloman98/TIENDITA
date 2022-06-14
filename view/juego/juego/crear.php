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
    <center><h1 class="page-header">REGISTRAR JUEGO</h1></center>
</div>

<form name="crearJuego" method="post" action="<?php echo getUrl("Juego/Juego","Juego","postCrear"); ?>" enctype="multipart/form-data">
    <div class="container">
        <div class="col-md-5 form-group ">
            <label>Nombre Juego</label>
            <input class="form-control" name="nombre" type="text" placeholder="Nombre Juego">
        </div>
        
        <div class="col-md-5 form-group">
            <label>G&eacute;nero</label>
            
            <select class="form-control" name="genero[]" id="selectGenero">
                <option>Seleccione</option>
                <?php
                    foreach($genero as $gen){
                        
                        echo "<option value='".$gen['gen_id']."'>".$gen['gen_descripcion']."</option>";
                    }
                ?>
            </select>
            <div id="contenedor">
            
            </div>
        </div>
        <div class="row">
            <button type="button" class="btn btn-success boton" id="generoProducto">+</button>
        </div>
        
        <div class="col-md-5 form-group">
            <label>Pa&iacute;s</label>
            <select name="pais" class="form-control">
                <option>Seleccione</option>
                <?php
                    while($pai= mysqli_fetch_assoc($pais)){
                        echo "<option value='".$pai['pai_id']."'>".utf8_encode($pai['pai_descripcion'])."</option>";
                    }
                ?>
            </select>

        </div>
        <div class="col-md-5 form-group">
            <label>Casa Desarrolladora</label>
            <select class="form-control" name="casa_desarrolladora[]">
                <option>Seleccione</option>
                <?php
                    while($casa= mysqli_fetch_assoc($casa_desarrolladora)){
                        echo "<option value='".$casa['cas_des_id']."'>".$casa['cas_des_descripcion']."</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-group col-md-5">
            <label>Cantidad de Jugadores</label>
            <input class="form-control" name="jugadores" placeholder="Cantidad" min="1" type="number">
        </div>
        <div class="form-group col-md-5">
            <label>Cantidad de Unidades</label>
            <input class="form-control" name="cantidad" placeholder="Cantidad Unidades" min="1" type="number">
        </div>
        <div class="form-group col-md-5">
            <label>Año de Lanzamiento</label>
            <input class="form-control" name="año" placeholder="Año Lanzamiento" min="1980" type="number">
        </div>
        <div class="form-group col-md-5">
            <label>Precio</label>
            <input class="form-control" name="precio" placeholder="Precio" min="1" type="number">
        </div>
        <div class="col-md-5 form-group">
            <!-- <label>Plataforma</label> -->
            <?php
                    //while($pla= mysqli_fetch_assoc($plataforma)){
                    //    echo "<div><input class='col-md-3' name='plataforma[]' type='checkbox' value='".$pla['pla_id']."'>".$pla['pla_descripcion']."</div>";
                    //}
                 ?>
        <!-- </div> -->
        <div class="col-md-5 form-group">
            <label>Idioma</label>
            <?php
                    while($idi= mysqli_fetch_assoc($idioma)){
                        echo "<div><input class='col-md-3' name='idioma[]' type='checkbox' value='".$idi['idi_id']."'>".$idi['idi_descripcion']."</div>";
                    }
                ?>
        </div>
        <div class="col-md-10 form-group">
            <label>Descripcion</label>
            <textarea rows="5" class="form-control center-block" name="descripcion" placeholder="Escribe la Sinopsis del juego" maxlength="1200" name="descripcion"></textarea>
        </div>
        <div class="col-md-10 form-group">
            <input type="file" name="imagen" class="form-control-file">
        </div>
        <div class="col-md-10 form-group">
            <center>
                <input class="btn btn-primary btn-lg" type="submit" name="registrar" value="Registrar">&nbsp; &nbsp; &nbsp;
                <a href="<?php echo getUrl("Juego/Juego", "juego", "listar"); ?>"><button class="btn btn-danger btn-lg" name="cancelar">Cancelar</button></a>
            </center><br>
        </div>
    </div>
</form>