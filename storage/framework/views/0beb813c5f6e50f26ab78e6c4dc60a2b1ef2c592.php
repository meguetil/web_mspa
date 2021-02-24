

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Publicar Documento - <?php echo e($sec->titulo_seccion); ?></div>

                <div class="card-body">

                    <?php echo $__env->make('custom.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php if(session('status')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('status')); ?>

                    </div>
                    <?php endif; ?>

                    <form action="" method="POST">
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
                                <input type="text" class="form-control" data-inputmask="'mask': '99/99/9999'" id="fecha_pub" placeholder="Fecha de Publicación en el D.O" name="fecha_pub">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" data-inputmask="'mask': '99/99/9999'" id="fecha_mod" placeholder="Fecha de Modificación o Derogación" name="fecha_mod">


                            </div>

                            <div class="form-group">
                            <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
                                Añadir Archivo
                                <input class="sr-only" id="inputImage" name="file" type="file" accept="doc/*">
                                        <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="Suba el Archivo">
                                          <span class="fa fa-upload"></span>
                                        </span>
                            </label>
                            </div>
                            <hr>
                            <input class="btn btn-success" type="submit" value="Publicar">



                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<!-- /input mask -->
<?php echo $__env->make('platadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_mspa\resources\views/PlataformaPub/create.blade.php ENDPATH**/ ?>