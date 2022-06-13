
<style>
    .panel-primary{
        max-width: 70%;
    }
    .container{
        max-width: 100%;
        margin-left: 1em;
    }
    #imagen{
        margin-left: -2.5%;
        margin-top: 2%;
        border-radius: 0.4em;
    }
    .panel-primary{
        max-width: 80%;
    }
</style>
<center><h1 class="page-header">JUEGOS</h1></center>
<div class="container">
<?php
    $cont=1;
        while($jue= mysqli_fetch_assoc($juegos)){
            if($cont % 3== 0 or $cont==1){
                echo '<div class="row">';
            }
    ?>
<div class="col-lg-4 col-md-4 col-sm-4">
    <div class="panel panel-primary">
        <div class="panel-heading">
            
            <?php echo $jue['jue_nombre'] ?>
        </div>
        <div class="panel-body text-center">
            <center><img src="<?php echo $jue['jue_imagen'] ?>" width="105%" id="imagen"></center><br>
            <p><b>Precio:</b> $ <?php echo $jue['jue_precio']." COP"; ?></p>
            <a class="btn btn-primary boton" href="<?php echo getUrl("Juego/Juego", "Juego", "detalle", array("jue_id"=>$jue['jue_id'])) ?>">Detalle</a>
        </div>
    </div>
</div>
<?php
            if($cont % 3== 0){
                echo '</div>';
            }
            $cont++;
        }
?> 
</div>