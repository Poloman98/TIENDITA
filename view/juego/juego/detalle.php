
<style>
    .jumbotron{
        background: white;
    }
    div{
        max-width: 100%;
    }
    .container{
        margin-left: 5%;
        margin-top: -5%;
        max-width: 90%;
    }
    .imagen{
        margin-left: 30%;
        margin-top: -5%;
        
    }
    .juego{
        width: 15em;
        height: 18em;
        border-radius: 0.4em;
    }
    .jumbotron{
        margin-left: -8%;
    }
    h1{
        text-align: center;
    }
</style>


    <?php 
        
        if($jue= mysqli_fetch_assoc($juego)){
            
    ?>
<div class=" jumbotron text-center">
    <h1 class="page-header"><?php echo $jue['jue_nombre'] ?></h1>
</div>
<!--<form name="crearJuego" method="post" action="<?php echo getUrl("Carrito","Carrito","postAgregar"); ?>">-->
    
        <div class="col-md-5 form-group imagen">
            <img src="<?php echo $jue['jue_imagen']?>" class="juego" id="imagen" data-zoom-image="<?php echo $jue['jue_imagen']?>">
            <br><br><br>
        </div>
        <div class="container">
                <div class="col-md-4 form-group">
                    <label>Nombre</label>
                    <?php echo "<br>". $jue['jue_nombre']; ?>
                </div>
                <div class="col-md-4 form-group">
                    <label>Precio</label>
                    <?php
                            echo "<br>$ ". utf8_encode($jue['jue_precio'])." COP";  
                    ?> 
        </div>
        <div class="col-md-4 form-group">
            <label>Plataformas Disponibles</label>
            <?php
                while ($pla= mysqli_fetch_assoc($plataforma)){
                    echo "<br>". utf8_encode($pla['pla_descripcion']);
                }
            ?> 
        </div>
        <div class="col-md-4 form-group">
            <label>Idioma</label>
            <?php
                while ($idi= mysqli_fetch_assoc($idioma)){
                    echo "<br>".$idi['idi_descripcion'];
                }
            ?> 
        </div>
        <div class="col-md-4 form-group">
            <label>G&eacute;nero</label>
            <?php
                while ($gen= mysqli_fetch_assoc($genero)){
                    echo "<br>". utf8_encode($gen['gen_descripcion']);
                }
            ?> 
            
        </div>
        <div class="col-md-3 form-group">
            <label>Casa Desarrolladora</label>
            <?php
                while ($casa= mysqli_fetch_assoc($casas)){
                    echo "<br>". utf8_encode($casa['cas_des_descripcion']);
                }
            ?> 
        </div>
        <div class="col-md-11 form-group">
            <br><label>Descripci&oacute;n</label>
            <textarea style="background: white;" class="form-control textarea" rows="8" readonly name="descripcion" value=""><?php echo $jue['jue_descripcion']; ?></textarea>
<!--            <p style="text-align: justify">//<?php echo utf8_encode($jue['jue_descripcion']); ?></p>-->
        </div>
    </div>
    <?php
        if(isset($_SESSION['cliente'])){
    ?>
    <div class="col-md-10 form-group">
        <center>
            <br><br>
            <form 
                action="http://localhost/tiendita/index.php?modulo=Juego/Juego&controlador=Juego&funcion=addCart"
                method="POST"
                >
                <input type="hidden" name="jue_id" value="<?php echo $jue['jue_id']?>">
                <input type="hidden" name="cliente" value="<?php echo $_SESSION['id']?>">
                
                <button class="btn btn-primary btn-lg" 
                        id="btn-add-cart" 
                        type="submit" >
                        <i class="fa fa-shopping-cart"></i>  Añadir
                </button>
            </form>
            
        </center><br>
    </div>
    
<!--</form>-->
<?php
        }
        }
?>

<script src="web/js/jquery-1.8.3.min.js"></script>

<script>
    $(document).ready(() => {
            $('#imagen').elevateZoom({zoomType: "inner",
        cursor: "crosshair",
        zoomWindowFadeIn: 500,
        zoomWindowFadeOut: 750});

    })

</script>