<?php $__env->startSection('title', 'Teste'); ?>

<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $pizzas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pizza): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><?php echo e($pizza->sabor); ?> -- <?php echo e($pizza->tamanho); ?> -- <?php echo e($pizza->preco); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/pizzaria/resources/views/welcome.blade.php ENDPATH**/ ?>