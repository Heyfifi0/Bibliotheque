<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Abonnement</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .form-container {
            width: 450px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container label {
            display: block;
            margin-bottom: 5px;
        }
        .form-container input[type="text"],
        .form-container input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
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
