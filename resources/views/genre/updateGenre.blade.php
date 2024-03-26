@extends('layout.layout')
@section('content')
    <h1 class="text-4xl">
        Modifier le nom du genre 
    </h1>
    <form action="{{ route('genres.update', $genre) }}" id="formUpdateGenre" method="post">
        @csrf
        @method('PUT')
        <label for="libelle">Nom du genre modifié :</label><br />
        <input type="text" id="libelle" name="libelle" value='{{ $genre->libelle }}'><br />
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Valider</button>
    </form>
@endsection