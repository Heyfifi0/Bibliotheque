<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Abonnement</title><link rel="stylesheet" href="{{ asset('/css/create.css') }}">
    
</head>
<body>
    <div class="form-container">
        <h2>Ajouter Abonnement</h2>
        <form action="{{ route('abonnements.store') }}" method="post">
            @csrf
            <label for="id_type_abonnement">Type d'Abonnement</label>
            <input type="text" id="id_type_abonnement" name="id_type_abonnement" value="">
            <label for="id_utilisateur">Utilisateur ID</label>
            <input type="text" id="id_utilisateur" name="id_utilisateur" value="">
            <label for="date_debut">Date de Début</label>
            <input type="date" id="date_debut" name="date_debut" value="">
            <label for="date_fin">Date de Fin</label>
            <input type="date" id="date_fin" name="date_fin" value="">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
