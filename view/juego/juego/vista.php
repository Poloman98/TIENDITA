<style>
    .container{
        max-width: 102%;
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
    <div class=" col-lg-4 col-md-4 col-sm-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <label><?php echo $jue['jue_nombre'] ?></label><br>
            </div>    
        
        
        <img class="" src="<?php echo $jue['jue_imagen'] ?>" width="180"><br><br>
        
        
        <p><?php echo "$ ".$jue['jue_precio']." COP"; ?></p>
        <a class="btn btn-primary boton" href="<?php echo getUrl("Juego/Juego", "Juego", "detalle", array("jue_id"=>$jue['jue_id'])) ?>">Detalle</a>
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