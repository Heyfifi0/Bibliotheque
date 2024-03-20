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
    <label for="titre"> Titre : </label>
    <input type="text" class="form-control" id="titre" name="titre" required> </input>    

    <button type="submit">Mettre à jour</button>
</form>
</body>
</html>
