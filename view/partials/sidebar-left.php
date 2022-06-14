
<style>
    .botones{
        margin-top: 5%;
    }
</style>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- /.navbar-header -->
            <a class="navbar-brand" href="index.php"><img src="img/x-games.png" width="18%" class="logo"></a>
            <ul class="nav navbar-top-links navbar-right">
                <div class="container-fluid botones">
                    <?php
                        if(!isset($_SESSION['cliente'])){    
                    ?>
                        <a href="<?php echo getUrl("Usuario", "Usuario", "getLogin") ?>"><button class=" btn btn-outline btn-primary">Incio Sesion</button></a>
                        <a href="<?php echo getUrl("Usuario", "Usuario", "getCrear"); ?>"><button class="btn btn-primary">Registrate</button></a>
                    <?php
                            }
                    ?>
                </div>

                <?php
                    if(isset($_SESSION['cliente'])){
                ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <label><?php echo $_SESSION['cliente'] ?></label><i class="fa fa-user fa-fw  fa-lg"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php //echo getUrl("Usuario", "Usuario", "getEditar",array("cli_id"=>$_SESSION['id'])); ?>"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li><a href="<?php echo getUrl("Usuario", "Usuario", "getEditar",array("cli_id"=>$_SESSION['id'])); ?>"><i class="fa fa-gear fa-fw"></i> Actualizar Info</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo getUrl("Usuario", "Usuario", "Destroy"); ?>"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <?php
                    }
                ?>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                        </li> 
                        <li>
                            <a href="<?php echo getUrl("Juego/Juego", "Juego", "vista") ?>"><i class="fa fa-gamepad fa-fw"></i> Juegos</a>
                        </li>
                        
                        <?php 
                        if(isset($_SESSION['rol'])){
                            if($_SESSION['rol']=="admin" || $_SESSION['rol']=="master") 
                            {
                        ?>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Control<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="#">Juego<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo getUrl("Juego/Juego", "Juego", "getCrear") ?>">Registrar</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo getUrl("Juego/Juego", "Juego", "listar") ?>">Visualizar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Genero<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo getUrl("Juego/Genero", "Genero", "getCrear") ?>">Registrar</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo getUrl("Juego/Genero", "Genero", "listar") ?>">Visualizar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Casa Desarrolladora<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo getUrl("Juego/CasaDesarrolladora", "CasaDesarrolladora", "getCrear") ?>">Registrar</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo getUrl("Juego/CasaDesarrolladora", "CasaDesarrolladora", "listar") ?>">Visualizar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Ubicaci&oacute;n <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Ciudad<span class="fa arrow"></span></a>
                                            <ul class="nav nav-third-level">
                                                <li>
                                                    <a href="<?php echo getUrl("Ubicacion/Ciudad", "Ciudad", "getCrear") ?>">Registrar</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo getUrl("Ubicacion/Ciudad", "Ciudad", "listar") ?>">Visualizar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Departamento<span class="fa arrow"></span></a>
                                            <ul class="nav nav-third-level">
                                                <li>
                                                    <a href="<?php echo getUrl("Ubicacion/Departamento", "Departamento", "getCrear") ?>">Registrar</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo getUrl("Ubicacion/Departamento", "Departamento", "listar") ?>">Visualizar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Pa&iacute;s<span class="fa arrow"></span></a>
                                            <ul class="nav nav-third-level">
                                                <li>
                                                    <a href="<?php echo getUrl("Ubicacion/Pais", "Pais", "getCrear") ?>">Registrar</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo getUrl("Ubicacion/Pais", "Pais", "listar") ?>">Visualizar</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Usuario<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo getUrl("Usuario", "Usuario", "getCrear") ?>">Registrar</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo getUrl("Usuario", "Usuario", "listar") ?>">Visualizar</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <?php
                            }
                        }
                        ?>
<!--                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                     /.nav-third-level 
                                </li>
                            </ul>
                             /.nav-second-level 
                        </li>-->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
