@if (Auth::guest())
<!--Notificaciones -->
@if (Session::has('message'))
<p id="Alert" class="alert alert-danger">{{Session::get('message')}}</p>
@endif
@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops!</strong> Existe un problema con los registros ingresados.<br><br>

    <ul>
        @foreach ($errors->all() as $error)
        <li id="Alert">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<h4 class="modal-title" id="myModalLabel">Cuenta de usuario</h4>

<form class="login-form" id="FormularioLog" role="form" method="POST" action="{{route('login')}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    &nbsp;

    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
        <input type="text" id="Rut" name="Rut" class="form-control"
               placeholder="rut sin puntos ni guión" value="{{ old('rut') }}"
               />
    </div>


    &nbsp;
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock"></span></span>
    <input type="password" name="password" class="form-control" placeholder="Contraseña" />
    </div>
    &nbsp;
    <div class="input-group">
        <label> <input type="checkbox" name="remember">Recordarme &nbsp;</input> </label>

        <button type="submit" id="BtnIng" name="ingresar" class="btn btn-primary">Ingresar</button>
    </div>
</form>


@else
<h4>{{ Auth::user()->Nombre_Participante }} {{ Auth::user()->Apellidos_Participante }}</h4>


<li><a href="{{route('home')}}" style="color: #FFFFFF;"> <span class="glyphicon glyphicon-log-in"></span>&nbsp&nbspIr a publicador</a></li>
<li><a href="{{route('logout')}}" style="color: #FFFFFF;"><span class="glyphicon glyphicon-log-out"></span>&nbsp&nbspCerrar sesión</a></li>





@endif

<script>
    $(document).ready(function () {
        $('#Rut').Rut({
            on_error: function(){ alert('Rut incorrecto'); }
        });
    });
</script>