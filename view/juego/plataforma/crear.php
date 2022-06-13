<style>
    .jumbotron{
        max-width: 100%;
        background: white;
    }
    div{
        max-width: 101%;
        
    }
</style>
<div class="container-fluid jumbotron">
    <center><h1 class="page-header">REGISTRAR PLATAFORMA</h1></center>
</div>
<div class="container-fluid">
    <form method="post" action="<?php echo getUrl("Juego/Plataforma", "Plataforma", "postCrear"); ?>">
        
            <div class="col-md-5 form-group center-block">
                <label class="">Plataforma</label>
        
                <input class="form-control" name="plataforma" placeholder="Nombre Plataforma">
            </div><br><br><br><br><br>
        
        <center>
            <div class="col-md-10">
                <input class="btn btn-primary btn-lg" name="registrar" value="Registrar" type="submit">
                <a href="<?php echo getUrl("Juego/Plataforma", "Plataforma", "listar") ?>" class="btn btn-danger btn-lg">Cancelar</a>
            </div>
        </center>
</form>
</div>
