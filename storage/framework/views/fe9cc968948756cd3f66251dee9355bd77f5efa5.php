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

    <link href="gentella-style/css/bootstrap.min.css" rel="stylesheet">
    <link href="gentella-style/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="gentella-style/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="gentella-style/css/custom.css" rel="stylesheet">
    <link href="gentella-style/css/icheck/flat/green.css" rel="stylesheet">

    <script src="gentella-style/js/jquery.min.js"></script>

    <!--[if lt IE 9]>
    <script src="../assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body class="nav-md">

<div class="container body">


<div class="main_container">

<div class="col-md-3 left_col">
    <div class="left_col scroll-view">

        <div class="navbar nav_title" style="border: 0;">
            <a href="/web_mspa/public" class="site_title"> <span>Transparencia SPA</span></a>
        </div>
        <div class="clearfix"></div>



        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="index.html">Dashboard</a>
                            </li>
                            <li><a href="index2.html">Dashboard2</a>
                            </li>
                            <li><a href="index3.html">Dashboard3</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
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
                    <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="general_elements.html">General Elements</a>
                            </li>
                            <li><a href="media_gallery.html">Media Gallery</a>
                            </li>
                            <li><a href="typography.html">Typography</a>
                            </li>
                            <li><a href="icons.html">Icons</a>
                            </li>
                            <li><a href="glyphicons.html">Glyphicons</a>
                            </li>
                            <li><a href="widgets.html">Widgets</a>
                            </li>
                            <li><a href="invoice.html">Invoice</a>
                            </li>
                            <li><a href="inbox.html">Inbox</a>
                            </li>
                            <li><a href="calender.html">Calender</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="tables.html">Tables</a>
                            </li>
                            <li><a href="tables_dynamic.html">Table Dynamic</a>
                            </li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="chartjs.html">Chart JS</a>
                            </li>
                            <li><a href="chartjs2.html">Chart JS2</a>
                            </li>
                            <li><a href="morisjs.html">Moris JS</a>
                            </li>
                            <li><a href="echarts.html">ECharts </a>
                            </li>
                            <li><a href="other_charts.html">Other Charts </a>
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
                        <li><a href="<?php echo e(route('home')); ?>">  Ir al sitio</a>
                        </li>
                        <li><a href="/web_mspa/public">  Mi perfil</a>
                        </li>
                        <li><a href="<?php echo e(route('logout')); ?>"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a>
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
                <h3>Publicador de Documentos</h3>
            </div>


        </div>
        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="height:600px;">
                    <div class="x_title">
                        <h2>Plain Page</h2>

                        <div class="clearfix"></div>
                    </div>
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

<script src="gentella-style/js/bootstrap.min.js"></script>

<!-- chart js -->
<script src="gentella-style/js/chartjs/chart.min.js"></script>
<!-- bootstrap progress js -->
<script src="gentella-style/js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="gentella-style/js/nicescroll/jquery.nicescroll.min.js"></script>
<!-- icheck -->
<script src="gentella-style/js/icheck/icheck.min.js"></script>

<script src="gentella-style/js/custom.js"></script>

<!-- moris js -->
<script src="gentella-style/js/moris/raphael-min.js"></script>
<script src="gentella-style/js/moris/morris.js"></script>
<script src="gentella-style/js/moris/example.js"></script>

</body>

</html>



<?php /**PATH C:\xampp\htdocs\web_mspa\resources\views/home.blade.php ENDPATH**/ ?>