<?php
    if($pla= mysqli_fetch_assoc($plataforma)){
?>
<center><h1 class="page-header"><?php echo $pla['pla_descripcion'] ?></h1></center>
<div class="container">
    <?php
    }
        while($jue= mysqli_fetch_assoc($juegos)){
    ?>
    <div class="col-md-4 form-group">
        <br><label><?php echo $jue['jue_nombre'] ?></label><br>
        <img class="" src="<?php echo $jue['jue_imagen'] ?>" width="50%"><br><br>
        
        
        <p><?php echo "$ ".$jue['jue_precio']." COP"; ?></p>
        <a class="btn btn-primary boton" href="<?php echo getUrl("Juego/Juego", "Juego", "detalle", array("jue_id"=>$jue['jue_id'])) ?>">Detalle</a>
    </div>
    <?php
        }
    ?> 
</div>
