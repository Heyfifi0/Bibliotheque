<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/bootstrap.min.css')}}" rel='stylesheet' type='text/css'> 
    <title>Réservation</title>
</head>
<body>
<h1>Modifier la réservation</h1>

<form action="/reservation-modify" method="post">
    @csrf

    <table>
        <tr>
            <th>identifiant</th>
            <th>utilisateur</th>
            <th>ouvrage</th>
            <th>date</th>
        </tr>
        <tr>
            <td><input type="text" name="id" value={{$reservation->id_reservation}} readonly></input></td>
            <td>
    <select name="user">
    @foreach($users as $unUtilisateur)
        @if ($unUtilisateur->id_utilisateur != $reservation->id_utilisateur)
        <option value={{$unUtilisateur->id_utilisateur}}>
            {{$unUtilisateur->prenom}}
            {{$unUtilisateur->nom}}
        </option>
        @else
        <option value={{$unUtilisateur->id_utilisateur}} selected>
            {{$unUtilisateur->prenom}}
            {{$unUtilisateur->nom}}
        </option>        
        @endif
    
    @endforeach    
</select>
</td>
<td>
    <select name="ouvrage">
    @foreach($ouvrages as $unOuvrage)
        @if ($unOuvrage->id_ouvrage != $reservation->id_ouvrage)
        <option value={{$unOuvrage->id_ouvrage}}>
            {{$unOuvrage->titre}}
        </option>
        @else
        <option value={{$unOuvrage->id_ouvrage}} selected>
            {{$unOuvrage->titre}}
        </option>        
        @endif
    
    @endforeach    
    </select>
</td>
<td>
    <input type="date" name="date" value={{$reservation->date_reservation}}></input>
</td>
</tr>
</table>
    <input type="submit" value="valider">    
</form>

</body>