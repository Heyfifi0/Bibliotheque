<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/bootstrap.min.css')}}" rel='stylesheet' type='text/css'> 
    <title>Réservation</title>
</head>
<body>
<h1>Réservations</h1>

<div class="container">
    <table>
    <tr>
        <th>réservation</th>
        <th>livre</th>
        <th>utilisateur</th>
        <th>date de la réservation</th>    
    </tr>
    <!--<form method="get" action="#">-->
    @foreach($reservations as $uneReservation)
    <tr>
    <td>{{$uneReservation->id_reservation}}</td>
    <td>{{$uneReservation->ouvrage->titre}}</td>
    <td>{{$uneReservation->utilisateur->prenom}}
    {{$uneReservation->utilisateur->nom}}</td>
    <td>{{$uneReservation->date_reservation}}</td>
    <td><button><a href="{{ url('/reservations-delete').'/'.$uneReservation->id_reservation}}">Supprimer</a></button></td>
    <td><button><a href="{{ url('/reservations-modify-form').'/'.$uneReservation->id_reservation}}">Modifier</a></button></td>
</tr>
    @endforeach
<!--</form>-->
</table>

<a href="/reservations-create-form">Créer une réservation</a>

</div>    
</body>
</html>