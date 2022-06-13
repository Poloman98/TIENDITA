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
    <center><h1 class="page-header">ACTUALIZAR DEPARTAMENTO</h1></center>
</div>
    <?php  
        
        if($dep= mysqli_fetch_assoc($departamento)){
    
    ?>
<div class="container-fluid">
    <form method="post" action="<?php echo getUrl("Ubicacion/Departamento", "Departamento", "postEditar") ?>">
        
            <div class="col-md-5 form-group center-block">
                <label class="">Codigo</label>
        
                <input class="form-control" readonly name="dep_id" value="<?php echo $dep['dep_id']; ?>">
            </div>
            <div class="col-md-5 form-group center-block">
                <label class="">Departamento</label>
        
                <input class="form-control" name="dep_descripcion" value="<?php echo $dep['dep_descripcion']; ?>">
            </div><br><br><br><br><br>
        
        <center>
            <div class="col-md-10"><br>
                <input class="btn btn-primary btn-lg" name="registrar" value="Actualizar" type="submit">
                <a href="<?php echo getUrl("Ubicacion/Departamento", "Departamento", "listar"); ?>" class="btn btn-danger btn-lg">Cancelar</a>
            </div>
        </center>
</form>
</div>
<?php
        }
?>