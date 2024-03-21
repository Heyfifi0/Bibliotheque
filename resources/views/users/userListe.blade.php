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
    <form action="userCreate">
        <input type="submit" value="Ajouter un utilisateur"/>
    </form>
    <br>
    <table>
        <tr><th>Identifiant</th><th>Nom</th><th>Prenom</th><th>Statut</th><th>Date naissance</th><th>Email</th><th>Adresse</th><th>Code Postal</th><th>Ville</th><th>Newslatter</th><th>MAJ</th></tr>
        @foreach($users  as $user)
        <tr><th>{{$user['id_utilisateur']}}</th>
        <th><p>{{$user['nom']}}</th>
        <th><p>{{$user['prenom']}}</th>
        <th><p>{{$user['statut']}}</th>
        <th><p>{{$user['date_naissance']}}</th>
        <th><p>{{$user['email']}}</th>
        <th><p>{{$user['adresse']}}</th>
        <th><p>{{$user['code_postal']}}</th>
        <th><p>{{$user['ville']}}</th>
        <th><p>{{$user['reception_newsletter']}}</th>
        <td>
        <a href="/userValide/{{$user->id_utilisateur}}" class="btn btn-secondary " tabindex="-1" role="button" >Valider</a><br>
        <a href="/userUpdate/{{$user->id_utilisateur}}" class="btn btn-secondary " tabindex="-1" role="button" >Modifier</a><br>
        <a href="/userDelete/{{$user->id_utilisateur}}" class="btn btn-secondary " tabindex="-1" role="button" >Supprimer</a></td></tr>
        @endforeach
    </table>     
    
</body>
</html>