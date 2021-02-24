<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portal de Transparencia</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap/bootstrap.js') }}"></script>
    <link href="{{asset('css/bootstrap/dashboard.css')}}" rel="stylesheet">


</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top flex-md-nowrap p-0 shadow">
    <div>
        <a href="{{route('inicio.index')}}" class="navbar-brand col-md-3 col-lg-2 mr-0 px-3"><img src="imgs\logo_transparencia.png" height="50"></a>
    </div>
    <div>
        <a href="https://www.portaltransparencia.cl/PortalPdT/web/guest/directorio-de-organismos-regulados?p_p_id=pdtorganismos_WAR_pdtorganismosportlet&p_p_lifecycle=0&p_p_state=normal&p_p_mode=view&_pdtorganismos_WAR_pdtorganismosportlet_entryId=716&redirect=http%3A%2F%2Fwww.portaltransparencia.cl%2FPortalPdT%2Fweb%2Fguest%2Fhome%3Fp_p_id%3D3%26p_p_lifecycle%3D0%26p_p_state%3Dmaximized%26p_p_mode%3Dview%26_3_groupId%3D0%26_3_keywords%3Dsan%2Bpedro%2Bde%2Batacama%26_3_struts_action%3D%252Fsearch%252Fsearch%26_3_redirect%3D%252FPortalPdT%252Fweb%252Fguest%252Fhome%253Fp_auth%253DgVKA8DxS%26_3_y%3D0%26_3_x%3D0" target="_blank"><img src="imgs\ConsejoTR_transparencia.png" height="50"></a>
    </div>
    <div class="ingreso" style="position:absolute; right: 2rem;">

        @if (Route::has('login'))
        @auth
        <a href="{{ url('/home') }}">Panel</a>
        @else
        <a href="{{ route('login') }}">Ingresar</a>
        @endauth
    </div>
    @endif
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!--

    <div class="flex-center position-ref full-height">

        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif -->
    <hr>
</nav>
<br>
<small class="text-muted"> <p class="text-right">Última actualización: 10/01/2021</p></small>
<hr>
@yield('content')


</div>



<div class="content">



</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="{{asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('js/bootstrap/dashboard.js') }}"></script>

</body>
</html>

