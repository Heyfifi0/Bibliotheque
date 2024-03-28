<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ asset('/css/create.css') }}">
	<title>Ouvrages</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

</head>
<body>
<div class="form-container">
    <h1>Edition d'un ouvrage</h1>
    <form action="{{ route('ouvrages.update', $ouvrage->id_ouvrage) }}" method="post"> 
    @csrf
    @method('PUT')
    <div class="form-group"> 
            <label for="titre" style="margin-top:30px"> Titre : </label>
            <input type="text" class="form-control" id="titre" name="titre"  required value="{{ $ouvrage->titre }}"> </input>    
            
            <label for="titre" style="margin-top:10px"> Type : </label>
            <select class="form-control" id="type" name="type"  required >
                <option value="livre" {{ $ouvrage->type == 'livre' ? 'selected' : '' }}>Livre</option>
                <option value="ebook" {{ $ouvrage->type == 'ebook' ? 'selected' : '' }}>E-book</option>
                <option value="magazine" {{ $ouvrage->type == 'magazine' ? 'selected' : '' }}>Magazine</option>
            </select>
            
            <label for="titre" style="margin-top:10px"> Auteurs : </label>
            <select class="form-control" id="auteur" name="auteur[]" style="margin-top:10px" required multiple>
                @foreach($auteurs as $auteur)
                    <option value="{{ $auteur->id_auteur }}" {{ $ouvrage->auteurs->contains($auteur->id_auteur) ? 'selected' : '' }}>{{ $auteur->nom }} {{ $auteur->prenom }}</option>
                @endforeach
            </select>
            
            <label for="titre" style="margin-top:10px"> Genres : </label>
            <select class="form-control" id="genre" name="genre[]" style="margin-top:10px" required multiple>
                @foreach($genres as $genre)
                    <option value="{{ $genre->id_genre }}" {{ $ouvrage->genres->contains($genre->id_genre) ? 'selected' : '' }}>{{ $genre->libelle }}</option>
                @endforeach
            </select>

            {{-- Sélection de l'éditeur, choix unique --}}
            <label for="titre" style="margin-top:10px"> Editeur : </label>
            <select class="form-control" id="editeur" name="editeur" required>
            @foreach($editeurs as $editeur)
                <option value="{{ $editeur->id_editeur }}" {{ $ouvrage->id_editeur == $editeur->id_editeur ? 'selected' : '' }}>{{ $editeur->libelle }}</option>
            @endforeach
        </select>

        </div>
    <button type="submit" class="btn btn-primary">Mettre à jour</button>
    
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
