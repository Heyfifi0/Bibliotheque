<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/bootstrap.min.css')}}" rel='stylesheet' type='text/css'> 
    <title>Réservation</title>
</head>
<body>
<h1>Créer une réservation</h1>

<form action="/reservations-create" method="post">
    @csrf
    <select name="user">
    @foreach($users as $unUtilisateur)
    <option value={{$unUtilisateur->id_utilisateur}}>
        {{$unUtilisateur->prenom}}
        {{$unUtilisateur->nom}}
</option>
    @endforeach   
     
</select>

    <select name="ouvrage">
    @foreach($ouvrages as $unOuvrage)
    <option value={{$unOuvrage->id_ouvrage}}>
        {{$unOuvrage->titre}}
    </option>
    
    @endforeach    
    </select>

    <input type="submit" value="valider">
</form>