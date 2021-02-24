

<?php $__env->startSection('content'); ?>
<div class="x_title">
    <h2>Gestor de Archivos    -  <small>Seleccione el destino de los archivos</small></h2>

    <div class="clearfix"></div>
    <div class="x_content">
        <br />
        <?php echo Form::open(['route'=>'documento.store', 'method'=>'POST',
        'class'=>'form-horizontal form-label-left','id'=>'demo-form2']); ?>

            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Menú :</label>
                <div class="col-md-9 col-sm-9 col-xs-12">

                   <select class="select2_group form-control" name="seccion">
                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <optgroup label="<?php echo e($item->id); ?>. <?php echo e($item->nombre_item); ?>">

                            <?php if($item->id == 1): ?>
                                <?php $__currentLoopData = $sec1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($seccion->id); ?>"><?php echo e($seccion->titulo_seccion); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <?php if($item->id == 2): ?>
                                <?php $__currentLoopData = $sec2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($seccion->id); ?>"><?php echo e($seccion->titulo_seccion); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <?php if($item->id == 3): ?>
                            <?php $__currentLoopData = $sec3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($seccion->id); ?>"><?php echo e($seccion->titulo_seccion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <?php if($item->id == 4): ?>
                            <?php $__currentLoopData = $sec4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($seccion->id); ?>"><?php echo e($seccion->titulo_seccion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <?php if($item->id == 5): ?>
                            <?php $__currentLoopData = $sec5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($seccion->id); ?>"><?php echo e($seccion->titulo_seccion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <?php if($item->id == 6): ?>
                            <?php $__currentLoopData = $sec6; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($seccion->id); ?>"><?php echo e($seccion->titulo_seccion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <?php if($item->id == 7): ?>
                            <?php $__currentLoopData = $sec7; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($seccion->id); ?>"><?php echo e($seccion->titulo_seccion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <?php if($item->id == 8): ?>
                            <?php $__currentLoopData = $sec8; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($seccion->id); ?>"><?php echo e($seccion->titulo_seccion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <?php if($item->id == 9): ?>
                            <?php $__currentLoopData = $sec9; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($seccion->id); ?>"><?php echo e($seccion->titulo_seccion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <?php if($item->id == 10): ?>
                            <?php $__currentLoopData = $sec10; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($seccion->id); ?>"><?php echo e($seccion->titulo_seccion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <?php if($item->id == 11): ?>
                            <?php $__currentLoopData = $sec11; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($seccion->id); ?>"><?php echo e($seccion->titulo_seccion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <?php if($item->id == 12): ?>
                            <?php $__currentLoopData = $sec12; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($seccion->id); ?>"><?php echo e($seccion->titulo_seccion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <?php if($item->id == 13): ?>
                            <?php $__currentLoopData = $sec13; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($seccion->id); ?>"><?php echo e($seccion->titulo_seccion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <?php if($item->id == 14): ?>
                            <?php $__currentLoopData = $sec14; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($seccion->id); ?>"><?php echo e($seccion->titulo_seccion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <?php if($item->id == 15): ?>
                            <?php $__currentLoopData = $sec15; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($seccion->id); ?>"><?php echo e($seccion->titulo_seccion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <?php if($item->id == 16): ?>
                            <?php $__currentLoopData = $sec16; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($seccion->id); ?>"><?php echo e($seccion->titulo_seccion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <?php if($item->id == 17): ?>
                            <?php $__currentLoopData = $sec17; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($seccion->id); ?>"><?php echo e($seccion->titulo_seccion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <?php if($item->id == 18): ?>
                            <?php $__currentLoopData = $sec18; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($seccion->id); ?>"><?php echo e($seccion->titulo_seccion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <?php if($item->id == 19): ?>
                            <?php $__currentLoopData = $sec19; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($seccion->id); ?>"><?php echo e($seccion->titulo_seccion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <?php if($item->id == 20): ?>
                            <?php $__currentLoopData = $sec20; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($seccion->id); ?>"><?php echo e($seccion->titulo_seccion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <?php if($item->id == 21): ?>
                            <?php $__currentLoopData = $sec21; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seccion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($seccion->id); ?>"><?php echo e($seccion->titulo_seccion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>


                        </optgroup>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>

                </div>
            </div>

            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <?php echo Form::submit('Cargar',['class'=>'btn btn-success', 'id'=>'submit-all']); ?>


                </div>
            </div>
            <?php echo Form::close(); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('platadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_mspa\resources\views/PlataformaAdmin/pubdoc.blade.php ENDPATH**/ ?>