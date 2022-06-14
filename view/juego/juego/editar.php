<?php

dd( $_SESSION['cliente'] );

?>


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
    <center><h1 class="page-header">EDITAR JUEGO</h1></center>
</div>
    <?php 
        
        if($jue= mysqli_fetch_assoc($juego)){
    ?>
<form name="crearJuego" method="post" action="<?php echo getUrl("Juego/Juego","Juego","postEditar"); ?>" enctype="multipart/form-data">
    <div class="container">
        <div class="">
            <input class="form-control" name="jue_id" type="hidden" value="<?php echo $jue['jue_id'] ?>">
        </div>
        <div class="col-md-5 form-group ">
            <label>Nombre Juego</label>
            <input class="form-control" name="nombre" type="text" value="<?php echo $jue['jue_nombre'] ?>">
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
                        if($pai['pai_id']==$jue['pai_id']){
                            echo "<option selected value='".$pai['pai_id']."'>".utf8_encode($pai['pai_descripcion'])."</option>";
                        }else{
                        echo "<option value='".$pai['pai_id']."'>".utf8_encode($pai['pai_descripcion'])."</option>";
                        }
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
                            $cas_jue= mysqli_fetch_assoc($cas_des);
                            if($casa['cas_des_id']==$cas_jue['cas_des_id']){
                                echo "<option selected $sel value='".$casa['cas_des_id']."'>".$casa['cas_des_descripcion']."</option>";
                            }else{
                                echo "<option $sel value='".$casa['cas_des_id']."'>".$casa['cas_des_descripcion']."</option>";
                            }
                        
                    }
                ?>
            </select>
        </div>
        <div class="form-group col-md-5">
            <label>Cantidad de Jugadores</label>
            <input class="form-control" name="jugadores" value="<?php echo $jue['jue_jugadores'] ?>" min="1" type="number">
        </div>
        <div class="form-group col-md-5">
            <label>Cantidad de Unidades</label>
            <input class="form-control" name="cantidad" value="<?php echo $jue['jue_cantidad'] ?>" min="1" type="number">
        </div>
        <div class="form-group col-md-5">
            <label>Año de Lanzamiento</label>
            <input class="form-control" name="año" value="<?php echo $jue['jue_anio'] ?>" min="1980" type="number">
        </div>
        <div class="form-group col-md-5">
            <label>Precio</label>
            <input class="form-control" name="precio" value="<?php echo $jue['jue_precio'] ?>" min="1980" type="number">
        </div>
        <div class="col-md-5 form-group">
            <label>Plataforma</label>
            <?php
                    while($pla= mysqli_fetch_assoc($plataforma)){
                       if($pla['pla_id']==$jue['pla_id']){
                           echo "<div><input checked name='plataforma[]'  class='col-md-3' type='checkbox' value='".$pla['pla_id']."'>".$pla['pla_descripcion']."</div>";
                       }else{
                            echo "<div><input name='plataforma[]'  class='col-md-3' type='checkbox' value='".$pla['pla_id']."'>".$pla['pla_descripcion']."</div>";
                        }
                    }
                ?>
        </div>
        <div class="col-md-5 form-group">
            <label>Idioma</label>
            <?php
                    while($idi= mysqli_fetch_assoc($idioma)){
                        
                        echo "<div><input name='idioma[]' class='col-md-3' type='checkbox' value='".$idi['idi_id']."'>".utf8_encode($idi['idi_descripcion'])."</div>";
                    }
                ?>
        </div>
        <div class="col-md-10 form-group">
            <label>Descripci&oacute;n</label>
            <textarea class="form-control center-block" rows="5" placeholder="Escribe la Sinopsis del juego" maxlength="200" name="descripcion"><?php echo utf8_encode($jue['jue_descripcion']); ?></textarea><br>
        </div>
        <div class="col-md-10 form-group">
            <input type="file" name="imagen" class="form-control-file">
        </div>
        <div class="col-md-10 form-group">
            <center>
                
                <input class="btn btn-primary btn-lg" type="submit" name="registrar" value="Editar">&nbsp; &nbsp; &nbsp;
                <a class="btn btn-lg btn-danger" href="<?php echo getUrl("Juego/Juego", "juego", "listar"); ?>">Cancelar</a>
            </center><br>
        </div>
    </div>
</form>
<?php
        }
?>