<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel='stylesheet' type='text/css'> 
    <title><?php echo $__env->yieldContent("title"); ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="container">
        <?php echo $__env->yieldContent("corps"); ?>
    </div>    
</body>
</html><?php /**PATH /var/www/html/bibliotheque/resources/views/templatebase.blade.php ENDPATH**/ ?>