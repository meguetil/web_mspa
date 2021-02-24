

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('custom.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if(session('status')): ?>
<div class="alert alert-success" role="alert">
    <?php echo e(session('status')); ?>

</div>
<?php endif; ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Publicar Documento - Potestades, competencias, facultades, atribuciones y tareas</div>

                <div class="card-body">

                    <?php echo Form::open(['route'=>'sdositb.store', 'method'=>'POST',
                    'class'=>'form-horizontal form-label-left','id'=>'demo-form2','files' => true]); ?>

                    <?php echo csrf_field(); ?>

                        <div>

                            <h3>Datos Requeridos</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" id="tipo_norma" placeholder="Unidad u órgano Interno" name="unidad">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="numero" placeholder="Facultades Funciones o Atribuciones" name="facultades">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="denominacion" placeholder="Fuente Legal" name="fuente_legal">
                            </div>
                            <div class="form-group">
                                <label for="link"> Seleccione el Archivo: </label>
                                <input class="form-check-input"  name="link" type="file" accept="doc/*" id="link">
                            </div>

                            <hr>
                            <?php echo Form::submit('Publicar',['class'=>'btn btn-success', 'id'=>'submit-all']); ?>


                    <?php echo Form::close(); ?>


                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<!-- /input mask -->
<?php echo $__env->make('platadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_mspa\resources\views/PlataformaPub/sec2/2/create.blade.php ENDPATH**/ ?>