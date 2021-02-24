

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
                <div class="card-header">Publicar Documento - Actos y documentos del organismo que hayan sido objeto de publicación en el Diario Oficial</div>

                <div class="card-body">

                    <?php echo Form::open(['route'=>'sunoita.store', 'method'=>'POST',
                    'class'=>'form-horizontal form-label-left','id'=>'demo-form2','files' => true]); ?>

                    <?php echo csrf_field(); ?>

                        <div>

                            <h3>Datos Requeridos</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" id="tipo_norma" placeholder="Tipo de Norma" name="tipo_norma">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="numero" placeholder="Número de Norma" name="numero">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="denominacion" placeholder="Denominación de Norma" name="denominacion">
                            </div>
                            <div class="form-group">
                          <!--      <?php echo Form::date('name', \Carbon\Carbon::now());; ?> -->


                                <input type="text" class="form-control" data-inputmask="'mask': '99-99-9999'" id="fecha_pub" placeholder="Fecha de Publicación en el D.O" name="fecha_pub">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" data-inputmask="'mask': '99-99-9999'" id="fecha_mod" placeholder="Fecha de Modificación o Derogación" name="fecha_mod">
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
<?php echo $__env->make('platadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_mspa\resources\views/PlataformaPub/1/create.blade.php ENDPATH**/ ?>