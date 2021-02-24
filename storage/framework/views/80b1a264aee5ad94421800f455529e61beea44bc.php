

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Portada Transparencia Activa  </a></li>
            <li class="breadcrumb-item active" aria-current="page">Actos y documentos del organismo que hayan sido objeto de publicación en el Diario Oficial</li>
        </ol>
    </nav>
</div>
<br>
<div class="container">
    <div class="table-responsive-sm">
        <main role="main" class="">
            <table class="table table-hover text-center">
                <thead>
                <tr>
                    <th scope="col">Tipo de Norma</th>
                    <th scope="col">Número de Norma</th>
                    <th scope="col">Denominación Norma</th>
                    <th scope="col">Fecha de Publicación en el D.O</th>
                    <th scope="col">Fecha de Modificación o Derogación</th>
                    <th colspan="3">Enlace Archivo</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $sunoitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $archivo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td><?php echo e($archivo->tipo_norma); ?></td>
                    <td><?php echo e($archivo->numero); ?></td>
                    <td><?php echo e($archivo->denominacion); ?></td>
                    <td><?php echo e($archivo->fecha_pub); ?></td>
                    <td><?php echo e($archivo->fecha_mod); ?></td>
                    <td><a class="btn btn-info" href="<?php echo e($archivo->link); ?>" target="_blank">Visualizar</a></td>


                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <div class="text-center">
                <!--<nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>-->
                <?php echo $sunoitas->render(); ?>

            </div>


    </div>
    </main>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('visor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_mspa\resources\views/visor/index.blade.php ENDPATH**/ ?>