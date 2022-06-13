<style>
    .jumbotron{
        max-width: 100%;
        background: white;
    }
    div{
        max-width: 101%;
        
    }
    .form-control{
        max-width: 50%;
    }
</style>
<div class="container-fluid jumbotron">
    <center><h1 class="page-header">ACTUALIZAR GENERO</h1></center>
</div>
    <?php  
        
        if($gen= mysqli_fetch_assoc($genero)){
    
    ?>
<div class="container-fluid">
    <form method="post" action="<?php echo getUrl("Juego/genero", "Genero", "postEditar"); ?>">
        
            <div class="col-md-10 form-group center-block">
                <label class="">Codigo</label>
        
                <input class="form-control" readonly name="gen_id" value="<?php echo $gen['gen_id']; ?>">
            </div>
            <div class="col-md-10 form-group center-block">
                <label class="">Plataforma</label>
        
                <input class="form-control" name="gen_descripcion" value="<?php echo $gen['gen_descripcion']; ?>">
            </div><br><br><br><br><br>
        
        <center>
            <div class="col-md-10"><br>
                <input class="btn btn-primary btn-lg" name="registrar" value="Actualizar" type="submit">
                <a href="<?php echo getUrl("Juego/genero", "Genero", "listar"); ?>" class="btn btn-danger btn-lg">Cancelar</a>
            </div>
        </center>
</form>
</div>
<?php
        }
?>