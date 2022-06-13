
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
            <a class="navbar-brand" href="index.php"><img src="logo/x-games.png" width="18%" class="logo"></a>
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
<!--                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                     /.dropdown-messages 
                </li>-->
                <!-- /.dropdown -->
<!--                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                     /.dropdown-tasks 
                </li>-->
                <!-- /.dropdown -->
<!--                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                     /.dropdown-alerts 
                </li>-->
                <!-- /.dropdown -->
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
                            <a href="#"><i class="fa fa-tasks fa-fw"></i> Plataforma<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">PlayStation <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo getUrl("Juego/Plataforma", "Plataforma", "vista",array("pla_id"=>1)); ?>">PlayStation 3</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo getUrl("Juego/Plataforma", "Plataforma", "vista",array("pla_id"=>2)); ?>">PlayStation 4</a>
                                        </li>
                                    </ul>
                                <li>
                                    <a href="#">XBOX <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo getUrl("Juego/Plataforma", "Plataforma", "vista",array("pla_id"=>3)); ?>">XBOX 360</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo getUrl("Juego/Plataforma", "Plataforma", "vista",array("pla_id"=>4)); ?>">XBOX ONE</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Nintendo <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo getUrl("Juego/Plataforma", "Plataforma", "vista",array("pla_id"=>6)); ?>">WII U</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo getUrl("Juego/Plataforma", "Plataforma", "vista",array("pla_id"=>5)); ?>">Switch</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo getUrl("Juego/Plataforma", "Plataforma", "vista",array("pla_id"=>7)); ?>">PC</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo getUrl("Juego/Juego", "Juego", "vista") ?>"><i class="fa fa-gamepad fa-fw"></i> Juegos</a>
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-ok"></i> Recomendados </a>
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
                                    <a href="#">Plataforma<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo getUrl("Juego/Plataforma", "Plataforma", "getCrear") ?>">Registrar</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo getUrl("Juego/Plataforma", "Plataforma", "listar") ?>">Visualizar</a>
                                        </li>
                                    </ul>
                                </li>
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
