<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Portal de Transparencia</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="<?php echo e(asset('css/bootstrap/bootstrap.min.css')); ?>" rel="stylesheet">
        <script src="<?php echo e(asset('js/bootstrap/bootstrap.js')); ?>"></script>


    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top flex-md-nowrap p-0 shadow">
        <div>
            <a href="<?php echo e(url('/')); ?>" class="navbar-brand col-md-3 col-lg-2 mr-0 px-3"><img src="imgs\logo_transparencia.png" height="50"></a>
        </div>
        <div>
            <a href="https://www.portaltransparencia.cl/PortalPdT/web/guest/directorio-de-organismos-regulados?p_p_id=pdtorganismos_WAR_pdtorganismosportlet&p_p_lifecycle=0&p_p_state=normal&p_p_mode=view&_pdtorganismos_WAR_pdtorganismosportlet_entryId=716&redirect=http%3A%2F%2Fwww.portaltransparencia.cl%2FPortalPdT%2Fweb%2Fguest%2Fhome%3Fp_p_id%3D3%26p_p_lifecycle%3D0%26p_p_state%3Dmaximized%26p_p_mode%3Dview%26_3_groupId%3D0%26_3_keywords%3Dsan%2Bpedro%2Bde%2Batacama%26_3_struts_action%3D%252Fsearch%252Fsearch%26_3_redirect%3D%252FPortalPdT%252Fweb%252Fguest%252Fhome%253Fp_auth%253DgVKA8DxS%26_3_y%3D0%26_3_x%3D0" target="_blank"><img src="imgs\ConsejoTR_transparencia.png" height="50"></a>
        </div>
        <div class="ingreso" style="position:absolute; right: 2rem;">

        <?php if(Route::has('login')): ?>
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('/home')); ?>">Panel</a>
                <?php else: ?>
                <a href="<?php echo e(route('login')); ?>">Ingresar</a>
           <?php endif; ?>
        </div>
        <?php endif; ?>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Inicio Modal logueo -->
        <div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-modal="true">
            <div class="row">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php echo $__env->make('auth.ModalLogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin Modal logueo -->
        <!--

        <div class="flex-center position-ref full-height">

            <?php if(Route::has('login')): ?>
            <div class="top-right links">
                <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('/home')); ?>">Home</a>
                <?php else: ?>
                <a href="<?php echo e(route('login')); ?>">Login</a>
            <?php endif; ?>
            </div>
            <?php endif; ?> -->
        <hr>
    </nav>
    <br>
    <small class="text-muted"> <p class="text-right">Última actualización: 10/01/2021</p></small>
    <hr>
    <div class="container-fluid">
    <div class="row">
    <nav id="sidebarMenu text-center" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse shadow-lg">
        <div class="sidebar-sticky pt-3 text-center">
            <ul class="nav flex-column">
                <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Enlaces de Interes</span>
                </h5>
                <li class="nav-item text-center">
                    <a class="nav-link text-decoration-none text-center" href="<?php echo e(url('//www.municipiosanpedroatacama.cl')); ?>" target="_blank">
                        <h7 class="d-flex text-center">Sitio Municipalidad</h7>
                        <img class=" img-thumbnail" src="imgs/ban_logomuni.png">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-decoration-none" href="<?php echo e(url('//www.registros19862.cl')); ?>" target="_blank">
                        <h7 class="d-flex">Ley 19862</h7>
                        <img class=" img-thumbnail" src="imgs/ban_ley.gif" >
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-decoration-none" href="<?php echo e(url('//www.portaltransparencia.cl/PortalPdT/web/guest/directorio-de-organismos-regulados?p_p_id=pdtorganismos_WAR_pdtorganismosportlet&p_p_lifecycle=0&p_p_state=normal&p_p_mode=view&_pdtorganismos_WAR_pdtorganismosportlet_entryId=716&redirect=http%3A%2F%2Fwww.portaltransparencia.cl%2FPortalPdT%2Fweb%2Fguest%2Fhome%3Fp_p_id%3D3%26p_p_lifecycle%3D0%26p_p_state%3Dmaximized%26p_p_mode%3Dview%26_3_groupId%3D0%26_3_keywords%3Dsan%2Bpedro%2Bde%2Batacama%26_3_struts_action%3D%252Fsearch%252Fsearch%26_3_redirect%3D%252FPortalPdT%252Fweb%252Fguest%252Fhome%253Fp_auth%253DgVKA8DxS%26_3_y%3D0%26_3_x%3D0')); ?>" target="_blank">
                        <h7 class="d-flex">Información Transparencia</h7>
                        <img class="img-thumbnail" src="imgs/banner_info_leytrans.jpg" >
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-decoration-none" href="<?php echo e(url('//www.sanpedrodeatacamatransparente.cl/resources/formulario.pdf')); ?>" target="_blank">
                        <h7 class="d-flex">Solicitud de Información</h7>
                        <img src="imgs/ban_form.png" class="img-thumbnail">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-decoration-none" href="<?php echo e(url('//www.mercadopublico.cl/Portal/Modules/Site/Busquedas/ResultadoBusqueda.aspx?qs=1&IdEmpresa=byUkGx6fLdM=')); ?>" target="_blank">
                        <h7 class="d-flex">Mercado Público</h7>
                        <img src="imgs/ban_mercadopublico.png" class="img-thumbnail">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-decoration-none" href="<?php echo e(url('//www.bcn.cl/leychile/')); ?>" target="_blank">
                        <h7 class="d-flex">Ley Chile</h7>
                        <img src="imgs/ban_leychile.png" class="img-thumbnail">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-decoration-none" href="<?php echo e(url('//www.chileatiende.gob.cl/')); ?>" target="_blank">
                         <h7 class="d-flex">Chile Atiende</h7>
                         <img src="imgs/ban_ChileAtiende.jpg" class="img-thumbnail">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-decoration-none" href="<?php echo e(url('https://www.leylobby.gob.cl/instituciones/MU298')); ?>" target="_blank">
                        <h7 class="d-flex">Ley del Lobby</h7>
                        <img src="imgs/ban_platLoby.png" class="img-thumbnail">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-decoration-none" href="<?php echo e(url('//www.infolobby.cl/')); ?>" target="_blank">
                        <h7 class="d-flex">Información Loby</h7>
                        <img src="imgs/x.png" class="img-thumbnail">
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        <div class="row">
            <div class="col">
                <div class="row" style="padding: 4%;">
                    <div class="card bg-light mb-3 shadow" style="width: 100%">
                        <div class="card-header">01. PUBLICACIONES EN DIARIO OFICIAL</div>
                        <a href="<?php echo e(Url('visor')); ?>" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Actos y documentos del organismo que hayan sido objeto de publicación en el Diario Oficial</a>
                    </div>
                </div>
                <div class="row" style="padding: 4%;">
                    <div class="card bg-light mb-3 shadow" style="width: 100%">
                        <div class="card-header">02. POTESTADES Y MARCO NORMATIVO</div>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                            Normas Organicas</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                            Potestades, competencias, facultades, atribuciones y tareas</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Otras normas que atribuyen competencias</a>
                    </div>
                </div>
                <div class="row" style="padding: 4%;">
                    <div class="card bg-light mb-3 shadow" style="width: 100%">
                        <div class="card-header">03. ESTRUCTURA ORGÁNICA Y FACULTADES, FUNCIONES Y ATRIBUCIONES</div>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Organigrama</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Facultades, funciones y atribuciones de sus unidades u órganos internos</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Reglamentos e Instructivos</a>
                    </div>
                </div>
                <div class="row" style="padding: 4%;">
                    <div class="card bg-light mb-3 shadow" style="width: 100%">
                        <div class="card-header">04. PERSONAL Y REMUNERACIONES</div>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Escala Remuneraciones</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Personal de planta</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Personal a contrata</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Personal sujeto a Código de Trabajo</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Personas naturales contratadas a honorarios</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Sumarios e Investigaciones</a>
                    </div>
                </div>
                <div class="row" style="padding: 4%;">
                    <div class="card bg-light mb-3 shadow" style="width: 100%">
                        <div class="card-header">05. ADQUISICIONES Y CONTRATACIONES</div>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Mercado Público</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Contratación de bienes inmuebles</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Otras compras</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Contratos y Consultoría</a>
                    </div>
                </div>
                <div class="row" style="padding: 4%;">
                    <div class="card bg-light mb-3 shadow" style="width: 100%">
                        <div class="card-header">06. INFORMACIÓN PRESUPUESTARIA</div>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Presupuestos asignados y modificaciones</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Balance de ejecución presupuestaria</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Estado de situación financiera</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Pasivos del municipio</a>
                    </div>
                </div>
                <div class="row" style="padding: 4%;">
                    <div class="card bg-light mb-3 shadow" style="width: 100%">
                        <div class="card-header">07. TRANSFERENCIAS DE FONDOS Y APORTES ECONÓMICOS ENTREGADOS</div>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Transferencias reguladas por Ley N°19.862</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Otras transferencias</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row" style="padding: 4%;">
                    <div class="card bg-light mb-3 shadow" style="width: 100%">
                        <div class="card-header">08. ACTOS Y RESOLUCIONES CON EFECTOS SOBRE TERCEROS</div>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Ordenanzas Municipales</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Decretos Alcaldicios</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Permisos de Obras</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Permisos Municipales</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Patentes Municipales</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Concesiones</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Concursos Públicos</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Convenios y Comodatos</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Contratos y arriendos de Bienes Municipales</a>
                    </div>
                </div>
                <div class="row" style="padding: 4%;">
                    <div class="card bg-light mb-3 shadow" style="width: 100%">
                        <div class="card-header">09. SUBSIDIOS Y BENEFICIOS</div>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Subsidios y Beneficios Propios</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Subsidios y Beneficios como Intermediario</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Nómina de Beneficiarios</a>

                    </div>
                </div>
                <div class="row" style="padding: 4%;">
                    <div class="card bg-light mb-3 shadow" style="width: 100%">
                        <div class="card-header">10. PARTICIPACIÓN CIUDADANA</div>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Consejo Comunal de Organizaciones de la Sociedad Civil</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Cuenta Pública</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Ordenanzas de Participación Ciudadana</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             OIRS</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Mecanismos de Participación Ciudadana</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Consejos Consultivos</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Consejos Escolares</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Consejo de desarrollo local de salud (CDL)</a>

                    </div>
                </div>
                <div class="row" style="padding: 4%;">
                    <div class="card bg-light mb-3 shadow" style="width: 100%">
                        <div class="card-header">11.  LOBBY Y GESTIÓN DE INTERESES</div>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Acceso a sitio Ley de Lobby</a>

                    </div>
                </div>
                <div class="row" style="padding: 4%;">
                    <div class="card bg-light mb-3 shadow" style="width: 100%">
                        <div class="card-header">12. TRÁMITES ANTE EL ORGANISMO</div>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Trámites ante el órgano</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Chile Atiende</a>

                    </div>
                </div>
                <div class="row" style="padding: 4%;">
                    <div class="card bg-light mb-3 shadow" style="width: 100%">
                        <div class="card-header">13. DOCUMENTOS RESERVADOS</div>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Índice de actos y documentos calificados como secretos o reservados (*)</a>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row" style="padding: 4%;">
                    <div class="card bg-light mb-3 shadow" style="width: 100%">
                        <div class="card-header">14. COSTOS DE REPRODUCCIÓN</div>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Costos directos de reproducción de la información solicitada</a>

                    </div>
                </div>
                <div class="row" style="padding: 4%;">
                    <div class="card bg-light mb-3 shadow" style="width: 100%">
                        <div class="card-header">15. ANTECEDENTES PREPARATORIOS DE LAS NORMAS JURÍDICAS</div>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Antecedentes preparatorios de las normas jurídicas generales que afecten a empresas de menor tamaño</a>
                    </div>
                </div>
                <div class="row" style="padding: 4%;">
                    <div class="card bg-light mb-3 shadow" style="width: 100%">
                        <div class="card-header">16. DIFICULTADES TÉCNICAS, VISUALIZADORES & PLUG-INS</div>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Dificultades técnicas</a>
                    </div>
                </div>
                <div class="row" style="padding: 4%;">
                    <div class="card bg-light mb-3 shadow" style="width: 100%">
                        <div class="card-header">17. OTROS ANTECEDENTES</div>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Consejo Municipal/Actas</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Gestión y Planificación Comunal</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Autoridades Municipales</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Consejo comunal de seguridad públicaitem</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Organizaciones Comunitarias</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Informaciones/Informs Municipales</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Certificación Ambiental (SCAM)</a>
                    </div>
                </div>
                <div class="row" style="padding: 4%;">
                    <div class="card bg-light mb-3 shadow" style="width: 100%">
                        <div class="card-header">18. FISCALIZACIONES Y AUDITORIAS A LA GESTIÓN</div>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Fiscalizaciones a la gestión</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Auditorías a la gestión</a>
                    </div>
                </div>
                <div class="row" style="padding: 4%;">
                    <div class="card bg-light mb-3 shadow" style="width: 100%">
                        <div class="card-header">19. INFORME ANUAL A LA SUBDERE</div>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Dotación, planta de personal y remuneraciones</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Escalafón de mérito</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Política de recursos humanos e información relativa al personal</a>
                    </div>
                </div>
                <div class="row" style="padding: 4%;">
                    <div class="card bg-light mb-3 shadow" style="width: 100%">
                        <div class="card-header">20. PARTICIPACIÓN EN OTRAS ENTIDADES</div>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Entidades en que tiene participación, representación o intervención el organismo</a>
                    </div>
                </div>
                <div class="row" style="padding: 4%;">
                    <div class="card bg-light mb-3 shadow" style="width: 100%">
                        <div class="card-header">21.- DECLARACIÓN DE PATRIMONIO E INTERESES LEY 20.880</div>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                             Declaración de patrimonio e intereses Ley N°20.880</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </div>

    </div>



    <div class="content">



    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('js/bootstrap/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap/dashboard.js')); ?>"></script>

     </body>
</html>
<?php /**PATH C:\xampp\htdocs\web_mspa\resources\views/welcome.blade.php ENDPATH**/ ?>