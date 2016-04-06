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

                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <section class="sidebar">

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

                            </ul>
                            <!--breadcrumbs end -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <!--progress bar start-->
                                    <section class="panel">
                                        <header class="panel-heading">
                                            Ingresar al Sistema
                                        </header>
                                        <div class="panel-body">
                                            <form method="post" action="login/log_in">
                                                <div class="form-group">
                                                    <label for="username">Username</label>
                                                    <input type="username" class="form-control" name="username" id="username" placeholder="Username">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                                </div>
                                                
                                                
                                                <button type="submit" class="btn btn-primary">Ingresar</button>
                                            </form>
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
                Created by Ricardo Toledo , @2016
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
