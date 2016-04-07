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
                            <a href="<?php echo (base_url() . 'index.php/medico/home'); ?>">
                                <i class="fa fa-dashboard"></i> <span>Home</span>
                            </a>
                        </li>
                        <li >
                            <a href="#">
                                <i class="fa fa-gavel"></i> <span>Lista de Trabajo</span>
                            </a>
                        </li>

                        <li class="active">
                            <a href="<?php echo (base_url() . 'index.php/medico/atencion'); ?>">
                                <i class="fa fa-globe"></i> <span>Atencion</span>
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
                            <div class="col-md-2">
                            <div class="stat">
                                <div class="stat-icon" style="color:#fa8564;">
                                    <i class="fa fa-file-o fa-3x stat-elem"></i>
                                </div>
                                <h5 class="stat-info">999 Projects</h5>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="stat">
                                <div class="stat-icon" style="color:#45cf95;">
                                    <i class="fa fa-paperclip fa-3x stat-elem"></i>
                                </div>
                                <h5 class="stat-info">999 Documents</h5>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="stat">
                                <div class="stat-icon" style="color:#AC75F0">
                                    <i class="fa fa-envelope-o fa-3x stat-elem"></i>
                                </div>
                                <h5 class="stat-info">999 Messages</h5>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="stat">
                                <div class="stat-icon" style="color:#45cf95;">
                                    <i class="fa fa-check-square-o fa-3x stat-elem"></i>
                                </div>
                                <h5 class="stat-info">1000 Tasks</h5>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="stat">
                                <div class="stat-icon" style="color:#AC75F0">
                                    <i class="fa fa-dollar fa-3x stat-elem"></i>
                                </div>
                                <h5 class="stat-info">$99999 Earnings</h5>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="stat">
                                <div class="stat-icon" style="color:#fa8564">
                                    <i class="fa fa-refresh fa-spin fa-3x stat-elem"></i>
                                </div>
                                <h5 class="stat-info">Procesing....</h5>
                            </div>
                        </div>

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
                                        <div class="panel-body"><p><code>.progress</code></p>
                                          <div class="progress">
                                            <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                              <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                          </div>
                                          <p>Class: <code>.sm</code></p>
                                          <div class="progress progress-sm active">
                                            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                              <span class="sr-only">20% Complete</span>
                                            </div>
                                          </div>
                                          <p>Class: <code>.xs</code></p>
                                          <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                              <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                          </div>
                                          <p>Class: <code>.xxs</code></p>
                                          <div class="progress progress-xxs">
                                            <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                              <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                          </div>
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
