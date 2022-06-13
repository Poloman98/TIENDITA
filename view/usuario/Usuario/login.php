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
    .container{
        width: 40%;
    }
</style>
<div class="container-fluid jumbotron">
    <center><h1 class="page-header">Bienvenido</h1></center>
</div>

<form name="crearJuego" method="post" action="<?php echo getUrl("Usuario","Usuario","postLogin"); ?>">
    <div class="container">
       
            <label>Correo </label>
            <input class="form-control" name="correo" type="email" placeholder="Ejemplo@ejemplo.com"><br>
       
       
            <label>Password</label>
            <input class="form-control" name="pass" type="password" placeholder="Password"><br><br>
            <input class="btn btn-success btn-lg center-block" value="Ingresar" name="enviar" type="submit">
    </div>
</form>
