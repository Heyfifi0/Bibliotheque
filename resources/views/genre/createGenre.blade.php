@extends('layout.layout')
@section('content')
    <h1 class="text-4xl">
        Ajoutez un genre
    </h1>
    <br />
    <form action="{{ route('genres.store') }}" id="formCreateGenre" method="post">
        @csrf
        <label for="libelle">Nom du nouveau genre :</label><br />
        <input type="text" id="libelle" name="libelle"><br />
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Valider</button>
    </form>
@endsection
