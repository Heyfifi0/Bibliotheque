<?php $__env->startSection('title', 'utilise le Template'); ?>
<?php $__env->startSection('corps'); ?>
ici le corps de utilise template


<?php echo $__env->make('templatebase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/bibliotheque/resources/views/utilisetemplate.blade.php ENDPATH**/ ?>