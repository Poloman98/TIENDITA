<style>
    .jumbotron{
        max-width: 100%;
        background: white;
    }
    div{
        max-width: 101%;
        
    }
    .form-control{
        max-width: 100%;
    }
</style>
<div class="container-fluid jumbotron">
    <center><h1 class="page-header">ELIMINAR PA&Iacute;S</h1></center>
</div>
    <?php  
        
        if($pai= mysqli_fetch_assoc($pais)){
    
    ?>
<div class="container-fluid">
    <form method="post" action="<?php echo getUrl("Ubicacion/Pais", "Pais", "postEliminar") ?>">
        
            <div class="col-md-5 form-group center-block">
                <label class="">Codigo</label>
        
                <input class="form-control" readonly name="pai_id" value="<?php echo $pai['pai_id']; ?>">
            </div>
            <div class="col-md-5 form-group center-block">
                <label class="">Pa&iacute;s</label>
        
                <input class="form-control" readonly name="pai_descripcion" value="<?php echo $pai['pai_descripcion']; ?>">
            </div><br><br><br><br><br>
        
        <center>
            <div class="col-md-10"><br>
                <input class="btn btn-primary btn-lg" name="registrar" value="Eliminar" type="submit">
                <a href="<?php echo getUrl("Ubicacion/Pais", "Pais", "listar"); ?>" class="btn btn-danger btn-lg">Cancelar</a>
            </div>
        </center>
</form>
</div>
<?php
        }
?>