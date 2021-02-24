

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Crear un Rol</h2></div>

                <div class="card-body">

                    <?php echo $__env->make('custom.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php if(session('status')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('status')); ?>

                    </div>
                    <?php endif; ?>

                    <form action="<?php echo e(route('role.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div>

                            <h3>Datos Requeridos</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="Nombre de Rol" name="name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="slug" placeholder="slug" name="slug">
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" placeholder="Descripción" name="description" id="description" rows="3"></textarea>
                            </div>

                            <hr>

                            <h4>Acceso Total</h4>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="fullaccessyes" name="full-access" class="custom-control-input" value="yes">
                            <label class="custom-control-label" for="fullaccessyes">Si</label>
                            </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="fullaccessno" name="full-access" class="custom-control-input" value="no" checked>
                            <label class="custom-control-label" for="fullaccessno">No</label>
                        </div>

                            <hr>
                            <h4>Lista de Permisos</h4>
                                <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                       class="custom-control-input"
                                       id="permission_<?php echo e($permission->id); ?>"
                                        value="<?php echo e($permission->id); ?>"
                                        name="permission[]">
                                <label class="custom-control-label" for="permission_<?php echo e($permission->id); ?>">
                                <?php echo e($permission->id); ?>

                                -
                                <?php echo e($permission->name); ?>


                                <em>(<?php echo e($permission->description); ?>)</em>
                                </label>
                            </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <hr>
                            <input class="btn btn-primary" type="submit" value="Guardar">



                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_mspa\resources\views/role/create.blade.php ENDPATH**/ ?>