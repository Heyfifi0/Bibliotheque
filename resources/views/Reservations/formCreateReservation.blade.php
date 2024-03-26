
@extends('layout.layout')
@section('content')
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

@endsection
