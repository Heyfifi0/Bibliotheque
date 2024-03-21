<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Abonnement</title>
    <link rel="stylesheet" href="{{ asset('/css/create.css') }}">
</head>
<body>
    <div class="form-container">
        <h2>Modifier Abonnement</h2>
        <form action="{{ route('abonnements.update', $abonnement->id_abonnement) }}" method="post">
            @csrf
            @method('PUT')
            <label for="id_type_abonnement">Type d'Abonnement</label>
            <input type="text" id="id_type_abonnement" name="id_type_abonnement" value="{{ $abonnement->id_type_abonnement }}">
            <label for="id_utilisateur">Utilisateur ID</label>
            <input type="text" id="id_utilisateur" name="id_utilisateur" value="{{ $abonnement->id_utilisateur }}">
            <label for="date_debut">Date de Début</label>
            <input type="date" id="date_debut" name="date_debut" value="{{ $abonnement->date_debut }}">
            <label for="date_fin">Date de Fin</label>
            <input type="date" id="date_fin" name="date_fin" value="{{ $abonnement->date_fin }}">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
