<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/userListe">
        <input type="submit" value="Retour à la liste"/>
    </form>
    <h1>Modification d'un utilisateur</h1>
    <form action="/userUpdate/update/{{$user->id_utilisateur}}" method="POST">
        @csrf 
        <label>Numero numéro d'utilisateur : {{$user->id_utilisateur}}</label><br><br>
        <label>Nom de l'utilisateur : </label>
        <input type="text" id="nom" name="nom" value="{{$user->nom}}"><br><br>
        <label>Prenom de l'utilisateur : </label>
        <input type="text" id="prenom" name="prenom" value="{{$user->prenom}}"><br><br>
        <label>Date de naissance de l'utilisateur : </label>
        <input type="text" id="date_naissance" name="date_naissance" value="{{$user->date_naissance}}"><br><br>
        <label>E-mail de l'utilisateur : </label>
        <input type="text" id="email" name="email" value="{{$user->email}}"><br><br>
        <label>Adresse de l'utilisateur : </label>
        <input type="text" id="adresse" name="adresse" value="{{$user->adresse}}"><br><br>
        <label>Code postal de l'utilisateur : </label>
        <input type="text" id="code_postal" name="code_postal" value="{{$user->code_postal}}"><br><br>
        <label>Ville de l'utilisateur : </label>
        <input type="text" id="ville" name="ville" value="{{$user->ville}}"><br><br>
        <label type="text">Etat de la newslatter : </label>
        <input type="checkbox" id="reception_newsletter" name="reception_newsletter" value="{{ $user->reception_newsletter}}" {{ $user->reception_newsletter == 1 ? 'checked' : ''}} ><br><br>
        <input type="submit" value="Valider">
    </form>
</body>
</html>