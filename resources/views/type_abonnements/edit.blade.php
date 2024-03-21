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
        <h2>Modifier Type Abonnement</h2>
        <form action="{{ route('type_abonnements.update', $type_abonnement->id_type_abonnement) }}" method="post">
            @csrf
            @method('PUT')
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" value="{{ $type_abonnement->nom }}">
            <label for="prix">Prix</label>
            <input type="text" id="prix" name="prix" value="{{ $type_abonnement->prix }}">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
