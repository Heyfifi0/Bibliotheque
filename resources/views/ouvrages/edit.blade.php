<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edition d'un ouvrage</h1>

    <form action="{{ route('ouvrages.update', $ouvrage->id_ouvrage) }}" method="post"> 
    @csrf
    @method('PUT')
    <div class="form-group"> 
            <label for="titre"> Titre : </label>
            <input type="text" class="form-control" id="titre" name="titre"  required value="{{ $ouvrage->titre }}"> </input>    
            
            <select class="form-control" id="type" name="type" required >
                <option value="livre" {{ $ouvrage->type == 'livre' ? 'selected' : '' }}>Livre</option>
                <option value="ebook" {{ $ouvrage->type == 'ebook' ? 'selected' : '' }}>E-book</option>
                <option value="magazine" {{ $ouvrage->type == 'magazine' ? 'selected' : '' }}>Magazine</option>
            </select>



            <select class="form-control" id="auteur" name="auteur" required>
                @foreach($auteurs as $auteur)
                    <option value="{{ $auteur->id_auteur }}" {{ $ouvrage->auteurs->contains($auteur->id_auteur) ? 'selected' : '' }}>{{ $auteur->nom }} {{ $auteur->prenom }}</option>
                @endforeach
            </select>

            <select class="form-control" id="genre" name="genre" required>
                @foreach($genres as $genre)
                    <option value="{{ $genre->id_genre }}" {{ $ouvrage->genres->contains($genre->id_genre) ? 'selected' : '' }}>{{ $genre->libelle }}</option>
                @endforeach
            </select>

            <select class="form-control" id="editeur" name="id_editeur" required>
            @foreach($editeurs as $editeur)
                <option value="{{ $editeur->id_editeur }}" {{ $ouvrage->id_editeur == $editeur->id_editeur ? 'selected' : '' }}>{{ $editeur->libelle }}</option>
            @endforeach
        </select>

        </div>
    <button type="submit">Mettre à jour</button>
</form>
</body>
</html>
