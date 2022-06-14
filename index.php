<?php
    include_once 'lib/helpers.php';
    include_once 'view/partials/head.php';
    session_start();
?>
<body>
    <div id="wrapper">
        <?php
            include_once 'view/partials/sidebar-left.php';
        ?>
        
        <div id="page-wrapper">
            <?php 
            
                if(isset($_GET['modulo'])){
                    resolve();
                }
                else{
            ?>
                <div class="row">
                    <div class="col-lg-12">
                        <center><h1 class="page-header">Contenido Destacado</h1></center>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">

                </div>
            <?php
                include_once 'view/partials/slider.php';
                }
            ?>
            </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <?php
        include_once 'view/partials/footer.php';
    ?>