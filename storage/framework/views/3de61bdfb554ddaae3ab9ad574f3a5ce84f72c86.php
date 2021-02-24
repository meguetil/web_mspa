<?php if(Auth::guest()): ?>
<!--Notificaciones -->
<?php if(Session::has('message')): ?>
<p id="Alert" class="alert alert-danger"><?php echo e(Session::get('message')); ?></p>
<?php endif; ?>
<?php if(count($errors) > 0): ?>
<div class="alert alert-danger">
    <strong>Whoops!</strong> Existe un problema con los registros ingresados.<br><br>

    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li id="Alert"><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<h4 class="modal-title" id="myModalLabel">Cuenta de usuario</h4>

<form class="login-form" id="FormularioLog" role="form" method="POST" action="<?php echo e(route('login')); ?>">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    &nbsp;

    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
        <input type="text" id="Rut" name="Rut" class="form-control"
               placeholder="rut sin puntos ni guión" value="<?php echo e(old('rut')); ?>"
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


<?php else: ?>
<h4><?php echo e(Auth::user()->Nombre_Participante); ?> <?php echo e(Auth::user()->Apellidos_Participante); ?></h4>


<li><a href="<?php echo e(route('home')); ?>" style="color: #FFFFFF;"> <span class="glyphicon glyphicon-log-in"></span>&nbsp&nbspIr a publicador</a></li>
<li><a href="<?php echo e(route('logout')); ?>" style="color: #FFFFFF;"><span class="glyphicon glyphicon-log-out"></span>&nbsp&nbspCerrar sesión</a></li>





<?php endif; ?>

<script>
    $(document).ready(function () {
        $('#Rut').Rut({
            on_error: function(){ alert('Rut incorrecto'); }
        });
    });
</script><?php /**PATH C:\xampp\htdocs\web_mspa\resources\views/auth/ModalLogin.blade.php ENDPATH**/ ?>