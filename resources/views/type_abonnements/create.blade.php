<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Type Abonnement</title>
    <link rel="stylesheet" href="{{ asset('/css/create.css') }}">
</head>
<body>
    <div class="form-container">
        <h2>Ajouter Type Abonnement</h2>
        <form action="{{ route('type_abonnements.store') }}" method="post">
            @csrf
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" value="">
            <label for="prix">Prix</label>
            <input type="text" id="prix" name="prix" value="">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
