<style>
    .jumbotron{
        max-width: 100%;
        background: white;
    }
    .form-control{
        max-width: 50%;
    }
</style>
<div class="container-fluid jumbotron">
    <center><h1 class="page-header">ELIMINAR CASA DESARROLLADORA</h1></center>
</div>
    <?php  
        
        if($casa= mysqli_fetch_assoc($casa_desarrolladora)){
    
    ?>
<div class="container-fluid">
    <form method="post" action="<?php echo getUrl("Juego/CasaDesarrolladora", "CasaDesarrolladora", "postEliminar"); ?>">
        
            <div class="col-md-10 form-group center-block">
                <label class="">Codigo</label>
               
                <input class="form-control" readonly name="casa_id" value="<?php echo $casa['cas_des_id']; ?>">
            </div>
            <div class="col-md-10 form-group center-block">
                <label class="">Casa Desarrolladora</label>
        
                <input class="form-control" readonly name="cas_des_descripcion" value="<?php echo $casa['cas_des_descripcion']; ?>">
            </div><br><br><br><br><br>
        
        <center>
            <div class="col-md-10"><br>
                <input class="btn btn-primary btn-lg" name="registrar" value="Eliminar" type="submit">
                <a href="<?php echo getUrl("Juego/CasaDesarrolladora", "CasaDesarrolladora", "listar"); ?>" class="btn btn-danger btn-lg">Cancelar</a>
            </div>
        </center>
</form>
</div>
<?php
        }
?>