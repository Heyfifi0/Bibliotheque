@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/css/create.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <title>Ouvrages</title>
</head>
<body>
<div class="form-container">
    <h1>Ajout d'un ouvrage</h1>
    <form action="{{ route('ouvrages.store') }}" method="post">
        @csrf 
        <div class="form-group"> 
            {{-- Champ de saisie pour le titre --}}
            <label for="titre" style="margin-top:30px"> Titre : </label>
            <input type="text" class="form-control" id="titre" name="titre" required> </input>    
            
            {{-- Sélection du type d'ouvrage, choix multiple --}}
            <label for="titre" > Type : </label>
            <select class="form-control" id="type" name="type" required>
                <option value="">Sélectionnez un type</option>
                <option value="livre">Livre</option>
                <option value="ebook">E-book</option>
                <option value="magazine">Magazine</option>
            </select>
            
            {{-- Sélection des auteurs --}}
            <div style="margin-top:10px">
                <label for="titre" > Auteurs : </label>
                <select class="form-control" id="auteur" name="auteur[]" required multiple>
                    @foreach($auteurs as $auteur)
                        <option value="{{ $auteur->id_auteur }}">{{ $auteur->nom }} {{ $auteur->prenom }}</option>
                    @endforeach
                </select>
            </div>
            {{-- Sélection des genres --}}
            <div style="margin-top:10px">
                <label for="titre" > Genres : </label>
                <select class="form-control" id="genre" name="genre[]" required multiple>
                    @foreach($genres as $genre)
                        <option value="{{ $genre->id_genre }}">{{ $genre->libelle }}</option>
                    @endforeach
                </select>
            </div>

            {{-- Sélection de l'éditeur, choix unique --}}
            <label for="titre" style="margin-top:10px"> Editeur : </label>
            <select class="form-control" id="editeur" name="editeur" required>
                <option >Sélectionnez un éditeur</option>
                @foreach($editeurs as $editeur)
                    <option value="{{ $editeur->id_editeur }}">{{ $editeur->libelle }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary"> Créer</button>
    </form>
    <a href="javascript:history.back()" class="back-button">Retour</a>
    </div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    $('#auteur').select2({
        placeholder: "Sélectionnez un ou plusieurs auteurs"
    });
    $('#genre').select2({
        placeholder: "Sélectionnez un ou plusieurs genres"
    });
});
</script>
@endsection
