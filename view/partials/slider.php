<?php
    include_once 'model/MasterModel.php';
    
    $objConnection=new MasterModel();
    
    $sql="select * from juego order by jue_id desc limit 6";
    $juego=$objConnection->consultar($sql);
?>
<style>
    .container{
        margin-left: 10.5%;
    }
    .col-md-4{
        margin-left: -4%;
    }
    .boton{
        margin-left: 15%;
    }
</style>

<div id="myCarousel" class="carousel slide center-block" data-ride="carousel" >
    
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
            <center><img class="first-slide imagen" src="web/sliders/uncharted-4-portada.png" alt="First slide"></center>
          
        </div>
        <div class="item">
            <center><img class="second-slide imagen" src="web/sliders/call_of_duty_black_ops_3.png" alt="Second slide"></center>
          
        </div>
        <div class="item">
            <center><img class="third-slide imagen" src="web/sliders/gta-5_portada.png" alt="Third slide"></center>
          
        </div>
        <div class="item">
            <center><img class="four-slide imagen" src="web/sliders/fifa-18-portada-1.jpg" alt="Fourth slide"></center>
          
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
</div><br><br><br><br><br>
<center><h1 class="page-header">Novedades</h1></center>
<div class="container">
    <?php
        while($jue= mysqli_fetch_assoc($juego)){
    ?>
    <div class="col-md-4 form-group">
        <br><label><?php echo $jue['jue_nombre'] ?></label><br>
        <img class="" src="<?php echo $jue['jue_imagen'] ?>" width="50%"><br><br>
        <p><?php echo "$ ".$jue['jue_precio']." COP" ?></p>
        <a class="btn btn-primary boton" href="<?php echo getUrl("Juego/Juego", "Juego", "detalle", array("jue_id"=>$jue['jue_id'])) ?>">Detalle</a>
    </div>
    <?php
        }
    ?> 
</div>
