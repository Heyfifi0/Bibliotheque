<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Nouveau auteur</h1>
<form action="{{ route('auteurs.store') }}" method="post">
@csrf

<div class="form-group">
    <label for="nom"> Nom : </label>
    <input type="text" class="form-controll" id="nom" name="nom" required></input>
    <label for="prenom"> Prenom : </label>
    <input type="text" class="form-controll" id="prenom" name="prenom" required></input>
</div>
<button type="submit" class="btn btn-primary"> Créer </button> 
</form>
</body>
</html>
