<?php $__env->startSection('content'); ?>


    <h1>Liste des utilisateurs ! </h1><br>
    <form action="userCreate">
        <input class="bouton" type="submit" value="Ajouter un utilisateur"/>
    </form>

    <table class="shadow-lg bg-white border-collapse">
        <tr><th class="bg-blue-100 border text-left px-8 py-4">Identifiant</th><th class="bg-blue-100 border text-left px-8 py-4">Nom</th><th class="bg-blue-100 border text-left px-8 py-4">Prenom</th><th class="bg-blue-100 border text-left px-8 py-4">Statut</th><th class="bg-blue-100 border text-left px-8 py-4">Date naissance</th><th class="bg-blue-100 border text-left px-8 py-4">Email</th><th class="bg-blue-100 border text-left px-8 py-4">Adresse</th><th class="bg-blue-100 border text-left px-8 py-4">Code Postal</th><th class="bg-blue-100 border text-left px-8 py-4">Ville</th><th class="bg-blue-100 border text-left px-8 py-4">Newslatter</th><th class="bg-blue-100 border text-left px-8 py-4">MAJ</th></tr>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr  class="hover:bg-gray-50 focus:bg-gray-300 active:bg-purple-200" tabindex="0"><th><?php echo e($user['id_utilisateur']); ?></th>
        <th class="border px-8 py-4"><p><?php echo e($user['nom']); ?></th>
        <th class="border px-8 py-4"><p><?php echo e($user['prenom']); ?></th>
        <th class="border px-8 py-4"><p><?php echo e($user['statut']); ?></th>
        <th class="border px-8 py-4"><p><?php echo e($user['date_naissance']); ?></th>
        <th class="border px-8 py-4"><p><?php echo e($user['email']); ?></th>
        <th class="border px-8 py-4"><p><?php echo e($user['adresse']); ?></th>
        <th class="border px-8 py-4"><p><?php echo e($user['code_postal']); ?></th>
        <th class="border px-8 py-4"><p><?php echo e($user['ville']); ?></th>
        <th class="border px-8 py-4"><p><?php echo e($user['reception_newsletter']); ?></th>
        <td>
            <?php if($user->statut == "en attente"): ?>
                <p class="bouton"><a href="/userValide/<?php echo e($user->id_utilisateur); ?>"  tabindex="-1" role="button" >Valider</a></p>
            <?php else: ?>
            <p class="bouton"> <a href="/userDesactive/<?php echo e($user->id_utilisateur); ?>" tabindex="-1" role="button" >Désactiver</a></p>
            <?php endif; ?>
            <p class="bouton"> <a href="/userUpdate/<?php echo e($user->id_utilisateur); ?>"  tabindex="-1" role="button" >Modifier</a></p>
            <p class="bouton"> <a href="/userDelete/<?php echo e($user->id_utilisateur); ?>" tabindex="-1" role="button" >Supprimer</a></p></td></tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>     
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/deb/Documents/biblio/Bibliotheque/resources/views/users/userListe.blade.php ENDPATH**/ ?>