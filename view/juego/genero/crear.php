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
    <center><h1 class="page-header">REGISTRAR GENERO</h1></center>
</div>
<div class="container ">
    <form method="post" action="<?php echo getUrl("Juego/Genero", "genero", "postCrear") ?>">
        
        <div class="col-md-5 form-group">
                <label class="">Genero</label>

                <input class="form-control" name="genero" placeholder="Nombre Genero" maxlength="30">
                <p class="text-muted">M&aacute;ximo 30 Caract&eacute;res</p>
        </div><br><br><br><br><br>
        
        <center>
            <div class="col-md-10"><br>
                <input class="btn btn-primary btn-lg" name="registrar" value="Registrar" type="submit">
                <a href="<?php echo getUrl("Juego/Genero", "genero", "listar"); ?>" class="btn btn-danger btn-lg">Cancelar</a>
            </div>
        </center>
</form>
</div>