

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Roles</div>

                <div class="card-body">

                    <a href="<?php echo e(route('role.create')); ?>" class="btn btn-primary float-right">
                        Crear
                    </a>
                    <?php echo $__env->make('custom.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Description</th>
                            <th scope="col">Full Access</th>
                            <th colspan="3"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($role->id); ?></th>
                            <td><?php echo e($role->name); ?></td>
                            <td><?php echo e($role->slug); ?></td>
                            <td><?php echo e($role->description); ?></td>
                            <td><?php echo e($role['full-access']); ?></td>
                            <td><a class="btn btn-info" href="<?php echo e(route('role.show', $role->id)); ?>">Mostrar</a></td>
                            <td><a class="btn btn-success" href="<?php echo e(route('role.edit', $role->id)); ?>">Editar</a></td>
                            <td><a class="btn btn-danger" href="<?php echo e(route('role.edit', $role->id)); ?>">Eliminar</a></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                    <?php echo e($roles->links()); ?>


                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_mspa\resources\views/role/index.blade.php ENDPATH**/ ?>