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
    <center><h1 class="page-header">ELIMINAR GENERO</h1></center>
</div>
    <?php  
        
        if($gen= mysqli_fetch_assoc($genero)){
    
    ?>
<div class="container-fluid">
    <form method="post" action="<?php echo getUrl("Genero", "Genero", "postEliminar") ?>">
        
        <center>
            <div class="col-md-10 form-group">
                <label class="">Codigo</label>
        
                <input class="form-control" readonly name="pla_id" value="<?php echo $gen['gen_id']; ?>">
            </div>
            <div class="col-md-10 form-group ">
                <label>Plataforma</label>
        
                <input class="form-control" readonly name="pla_descripcion" value="<?php echo $gen['gen_descripcion']; ?>">
            </div><br><br><br><br><br>
        </center>
        <center>
            <div class="col-md-10"><br>
                <h2>¿Seguro que quiere eliminar &eacute;ste G&eacute;nero?</h2>
                <button class="btn btn-primary btn-lg" name="registrar" type="submit"><i class="fa fa-check fa-fw"></i>Aceptar</button>
                <a href="<?php echo getUrl("Juego/Genero", "Genero", "listar"); ?>" class="btn btn-danger btn-lg"><i class="fa fa-times fa-fw"></i>Cancelar</a>
            </div>
        </center>
</form>
</div>
<?php
        }
?>
