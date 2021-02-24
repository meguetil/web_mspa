<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gestor de Documentos - Sistema de Transparencia SPA </title>

    <!-- Bootstrap core CSS -->


    <link href="<?php echo e(asset('gentella-style/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('gentella-style/fonts/css/font-awesome.min.css')); ?>" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?php echo e(asset('gentella-style/css/custom.css')); ?>" rel="stylesheet">

    <script src="<?php echo e(asset('gentella-style/js/jquery.min.js')); ?>"></script>

    <script src="<?php echo e(asset('gentella-style/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('gentella-style/js/custom.js')); ?>"></script>
    <script src="<?php echo e(asset('gentella-style/js/input_mask/jquery.inputmask.js')); ?>"></script>
    <!-- input_mask -->

</head>


<body class="nav-md">

<div class="container body">


    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <div class="navbar nav_title" style="border: 0;">
                    <a href="<?php echo e(route('inicio.index')); ?>" class="site_title"> <span>Transparencia SPA</span></a>
                </div>
                <div class="clearfix"></div>



                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                    <li><a href="index.html">Dashboard</a>
                                    </li>
                                    <li><a href="index2.html">Dashboard2</a>
                                    </li>
                                    <li><a href="index3.html">Dashboard3</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-edit"></i> Gestión de Usuarios <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                    <li><a href="form.html">General Form</a>
                                    </li>
                                    <li><a href="form_advanced.html">Advanced Components</a>
                                    </li>
                                    <li><a href="form_validation.html">Form Validation</a>
                                    </li>
                                    <li><a href="form_wizards.html">Form Wizard</a>
                                    </li>
                                    <li><a href="form_upload.html">Form Upload</a>
                                    </li>
                                    <li><a href="form_buttons.html">Form Buttons</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-desktop"></i> Gestión de Documento <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                    <li><a href="<?php echo e(route('documento.index')); ?>">Publicar Documento</a>
                                    </li>
                                    <li><a href="#">Carga en masa</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->

            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

            <div class="nav_menu">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <?php echo e(Auth::user()->name); ?>

                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                <li><a href="<?php echo e(route('inicio.index')); ?>">  Volver al sitio</a>
                                </li>
                                <li><a href="#">  Mi perfil</a>
                                </li>
                                <li><a href="<?php echo e(Url('logout')); ?>"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>

        </div>
        <!-- /top navigation -->

        <!-- page content -->


        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Sistema de Transparencia</h3>
                    </div>


                </div>
                <div class="clearfix"></div>

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel" style="height:600px;">



                <?php echo $__env->yieldContent('content'); ?>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- /page content -->
    </div>

</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>




</body>

</html>


<script>
    $(document).ready(function () {
        $(":input").inputmask();
    });
</script><?php /**PATH C:\xampp\htdocs\web_mspa\resources\views/platadmin.blade.php ENDPATH**/ ?>