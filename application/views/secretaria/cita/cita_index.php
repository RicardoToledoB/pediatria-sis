<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pediatria | Sis</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="description" content="Developed By M Abdur Rokib Promy">
        <meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">
        <!-- bootstrap 3.0.2 -->
        <link rel="stylesheet" href="<?php echo base_url("resources/css/bootstrap.min.css"); ?>" />

        <!-- font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url("resources/css/font-awesome.min.css"); ?>" />

        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo base_url("resources/css/ionicons.min.css"); ?>" />


        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url("resources/css/style.css"); ?>" />


    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Pediatria
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">


                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">

                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress progress-striped xs">
                                                    <div class="progress-bar progress-bar-success" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress progress-striped xs">
                                                    <div class="progress-bar progress-bar-danger" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress progress-striped xs">
                                                    <div class="progress-bar progress-bar-info" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress progress-striped xs">
                                                    <div class="progress-bar progress-bar-warning" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>

                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span><?php echo $nombre ?><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li class="dropdown-header text-center">Mi Cuenta</li>

                                <li class="divider"></li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-user fa-fw pull-right"></i>
                                        Perfil
                                    </a>
                                   
                                </li>

                                <li class="divider"></li>

                                <li>
                                     <a href=<?php echo (base_url() . 'index.php/login/log_out') ?>><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                              
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url("resources/img/avatar5.png"); ?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hola , <?php echo $nombre ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>

                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li >
                            <a href="<?php echo (base_url() . 'index.php/secretaria/home'); ?>">
                                <i class="fa fa-dashboard"></i> <span>Home</span>
                            </a>
                        </li>
                        <li >
                            
                            <a href="<?php echo (base_url() . 'index.php/secretaria/paciente'); ?>">
                                <i class="fa fa-gavel"></i> <span>Pacientes</span>
                            </a>
                        </li>

                        <li class="active">
                            <a href="<?php echo (base_url() . 'index.php/secretaria/cita'); ?>">
                                <i class="fa fa-globe"></i> <span>Citas</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-glass"></i> <span>Reportes</span>
                            </a>
                        </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <div class="right-side">

                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <!--breadcrumbs start -->
                            <ul class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Current page</li>
                            </ul>
                            <!--breadcrumbs end -->
                        </div>
                    </div>
                    <div class="row">


                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <!--progress bar start-->
                                    <section class="panel">
                                        <header class="panel-heading">
                                            Basic Progress Bars
                                        </header>
                                        <div class="panel-body table-responsive">
                                            <div class="box-tools m-b-15">

                                                <div class="input-group">
                                                    <a href="cita/nuevo" class="btn btn-primary">Nuevo</a>
                                                    <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    
                                                        <th>ID</th>
                                                        <th>Paciente</th>
                                                        <th>Fecha Cita</th>
                                                        <th>Hora Cita</th>
                                                        <th>Estado</th>
                                                   
                                                </thead>
                                                <tbody>
                                                     <?php foreach ($cita as $ci) { ?>
                                                    <tr>
                                                        <td><?php echo $ci->cita_id ?></td>
                                                        <td><?php echo $ci->rut ?></td>
                                                        <td><?php echo $ci->fecha ?></td>
                                                        <td><?php echo $ci->hora ?></td>
                                                        <td><?php echo $ci->estado ?></td>
                                                    </tr>

                                                <?php } ?>
                                                </tbody>
                                               
                                            </table>
                                        </div>
                                    </section>
                                    <!--progress bar end-->

                                </div>
                            </div>







                        </div>



                    </div>

                </section>
            </div>
            <div class="footer-main">
                Copyright &copy Director, 2014
            </div>
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->

        <script type="text/javascript" src="<?php echo base_url("resources/js/jquery.min.js"); ?>"></script>


        <!-- Bootstrap -->
        <script type="text/javascript" src="<?php echo base_url("resources/js/bootstrap.min.js"); ?>"></script>

        <!-- Director App -->
        <script type="text/javascript" src="<?php echo base_url("resources/js/Director/app.js"); ?>"></script>

    </body>
</html>
