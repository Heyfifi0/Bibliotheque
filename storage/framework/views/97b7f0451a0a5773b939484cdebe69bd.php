<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/app.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <h1>Liste des utilisateurs ! </h1>
    <table>
        <tr><th>Identifiant</th><th>Nom</th><th>Prenom</th><th>Date naissance</th><th>email</th></tr>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr><th><?php echo e($user['id_utilisateur']); ?></th><th><p>
        <?php echo e($user['nom']); ?></th>
        <td><a href="ici la route qui appelle la vue update" class="btn btn-secondary " tabindex="-1" role="button" >MAJ</a></td></tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>     
</body>
</html><?php /**PATH /home/deb/Documents/biblio/Bibliotheque/resources/views/userListe.blade.php ENDPATH**/ ?>