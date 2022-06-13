<style>
    .jumbotron{
        max-width: 100%;
        background: white;
    }
    div{
        max-width: 100%;
    }
    .container{
        margin-left: 20%;
        margin-top: -5%;
    }
    .imagen{
        margin-left: 15%;
    }
    .juego{
        width: 15em;
        height: 18em;
    }
</style>
<div class=" jumbotron">
    <center><h1 class="page-header">ELIMINAR JUEGO</h1></center>
</div>
    <?php 
        
        if($jue= mysqli_fetch_assoc($juego)){
            
    ?>
<form name="crearJuego" method="post" action="<?php echo getUrl("Juego/Juego","Juego","postEliminar"); ?>">
    <div class="container">
        <input type="hidden" name="jue_id" value="<?php echo $jue['jue_id'] ?>">
        <div class="col-md-10 form-group imagen">
            <img src="<?php echo $jue['jue_imagen'] ?>" class="juego"><br><br><br>
        </div>
        <div class="col-md-5 form-group">
            <label>C&oacute;digo</label>
            <?php echo "<br>". $jue['jue_id']; ?>
        </div>
        <div class="col-md-5 form-group">
            <label>Nombre</label>
            <?php echo "<br>". $jue['jue_nombre']; ?>
        </div>
        <div class="col-md-5 form-group">
            <label>Plataforma</label>
            <?php
                while ($pla= mysqli_fetch_assoc($plataforma)){
                    echo "<br>". utf8_encode($pla['pla_descripcion']);
                }
            ?> 
        </div>
        <div class="col-md-5 form-group">
            <label>Idioma</label>
            <?php
                while ($idi= mysqli_fetch_assoc($idioma)){
                    echo "<br>". utf8_encode($idi['idi_descripcion']);
                }
            ?> 
        </div>
        <div class="col-md-5 form-group">
            <label>G&eacute;nero</label>
            <?php
                while ($gen= mysqli_fetch_assoc($genero)){
                    echo "<br>". utf8_encode($gen['gen_descripcion']);
                }
            ?> 
            
        </div>
        
        <div class="col-md-5 form-group">
            <label>Casa Desarrolladora</label>
            <?php
                while ($casa= mysqli_fetch_assoc($casas)){
                    echo "<br>". utf8_encode($casa['cas_des_descripcion']);
                }
            ?> 
        </div>
        <div class="col-md-5 form-group">
            <label>Precio</label>
            <?php
                
                    echo "<br>". utf8_encode($jue['jue_precio']);
                
            ?> 
        </div>
    </div>
    <div class="col-md-12 form-group">
        <center>
            <br><br>
            <input class="btn btn-primary btn-lg" type="submit" name="registrar" value="Eliminar">&nbsp; &nbsp; &nbsp;
            <a class="btn btn-lg btn-danger" href="<?php echo getUrl("Juego/Juego", "juego", "listar"); ?>">Cancelar</a>
        </center><br>
    </div>
    
</form>
<?php
        }
?>