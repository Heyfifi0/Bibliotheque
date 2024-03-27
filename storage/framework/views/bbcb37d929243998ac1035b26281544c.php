<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body class="flex">
    <div class="navbar">
        <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>


    <div class="flex-1 justify-center ml-10 mt-2">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html><?php /**PATH /home/deb/Documents/biblio/Bibliotheque/resources/views/layout/layout.blade.php ENDPATH**/ ?>