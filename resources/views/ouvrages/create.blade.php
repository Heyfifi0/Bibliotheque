@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ asset('/css/create.css') }}">
	<title>Ouvrages</title>
</head>
<body>
<div class="form-container">
    <h1>Ajout d'un ouvrage</h1>
    <form action="{{ route('ouvrages.store') }}" method="post">
        @csrf 
        <div class="form-group"> 
            <label for="titre" style="margin-top:30px"> Titre : </label>
            <input type="text" class="form-control" id="titre" name="titre" required> </input>    
            
            <select class="form-control" id="type" name="type" style="margin-top:10px" required>
                <option value="">Sélectionnez un type</option>
                <option value="livre">Livre</option>
                <option value="ebook">E-book</option>
                <option value="magazine">Magazine</option>
            </select>

            <select class="form-control" id="auteur" name="auteur" style="margin-top:10px" required>
                <option value="">Sélectionnez un auteur</option>
                @foreach($auteurs as $auteur)
                    <option value="{{ $auteur->id_auteur }}">{{ $auteur->nom }} {{ $auteur->prenom }}</option>
                @endforeach
            </select>

            <select class="form-control" id="genre" name="genre" style="margin-top:10px" required>
                <option value="">Sélectionnez un genre</option>
                @foreach($genres as $genre)
                    <option value="{{ $genre->id_genre }}">{{ $genre->libelle }}</option>
                @endforeach
            </select>

            <select class="form-control" id="editeur" name="editeur" style="margin-top:10px" required>
                <option value="">Sélectionnez un éditeur</option>
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
@endsection
