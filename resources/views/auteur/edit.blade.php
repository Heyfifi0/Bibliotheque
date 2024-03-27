@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/css_auteur_ed.css') }}">
</head>
<body>
    <h1>Modifier l'auteur</h1>
    <form action="{{ route('auteurs.update', $auteur->id_auteur) }}" method="post">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" class="form-control" id="nom" name="nom" value="{{ $auteur->nom }}" required>
        <label for="prenom">Prenom :</label>
        <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $auteur->prenom }}" required>
    </div>
    <a href="javascript:history.back()" class="back-button">Retour</a>
    <button type="submit" class="btn btn-primary">Mettre à jour</button>
</form>
</body>
</html>
@endsection

