<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ajout d'un ouvrage</h1>
    <form action="{{ route('ouvrages.store') }}" method="post">
        @csrf 
        <div class="form-group"> 
            <label for="titre"> Titre : </label>
            <input type="text" class="form-control" id="titre" name="titre" required> </input>    
            
            <select class="form-control" id="type" name="type" required>
                <option value="">Sélectionnez un type</option>
                <option value="livre">Livre</option>
                <option value="ebook">ebook</option>
                <option value="magazine">Magazine</option>
            </select>

            <label for="id_editeur"> Editeur : </label>
            <input type="text" class="form-control" id="id_editeur" name="id_editeur" required> </input>    
        </div>
        <button type="submit" class="btn btn-primary"> Créer</button>
    </form>
</body>
</html>
