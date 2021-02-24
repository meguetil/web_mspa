<?php if(session('status_succes')): ?>
<div class="alert alert-success" role="alert">
    <?php echo e(session('status_succes')); ?>

</div>
<?php endif; ?>

<?php if($errors->any()): ?>
<div class="alert alert-danger" role="alert">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\web_mspa\resources\views/custom/message.blade.php ENDPATH**/ ?>