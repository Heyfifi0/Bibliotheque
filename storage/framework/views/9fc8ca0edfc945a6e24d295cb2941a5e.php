<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Saisie d'un Utilisateur</h1>
    <form action ='userCreate/enreg' method="POST"><?php echo csrf_field(); ?>
        <label>Nom de l'Utilisateur</label>
        <input type="text" id="nom" name="nom"><br><br>
        <label>Prenom de l'Utilisateur</label>
        <input type="text" id="prenom" name="prenom"><br><br>
        <label>Date de naissance de l'Utilisateur</label>
        <input type="date" id="date_naissance" name="date_naissance"><br><br>
        <label>Email de l'Utilisateur</label>
        <input type="text" id="email" name="email"><br><br>
        <label>Mot de passe de l'Utilisateur</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe"><br><br>
        <label>Adresse de l'Utilisateur</label>
        <input type="text" id="adresse" name="adresse"><br><br>
        <label>Code postal de l'Utilisateur</label>
        <input type="text" id="code_postal" name="code_postal"><br><br>
        <label>Ville de l'Utilisateur</label>
        <input type="text" id="ville" name="ville"><br><br>
        <label type="text">Voulez vous souscrire à la newslatter : </label>
        <input type="checkbox" id="reception_newsletter" name="reception_newsletter" checked/><br><br>
    
        <input type="submit" value="Valider">
    </form> 
</body>
</html><?php /**PATH /home/deb/Documents/biblio/Bibliotheque/resources/views/userCreate.blade.php ENDPATH**/ ?>