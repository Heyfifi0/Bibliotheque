@extends('layout.layout')

@section('title', 'Créer un éditeur')

@section('content')
    <form action="{{ route('editeurs.store') }}" method="post" class="flex flex-col m-3 justify-center align-bottom">
        @csrf

        <label for="libelle">Nom de l'éditeur</label>
        <input type="text" name="libelle" id="libelle" class="border-2 border-black m-2 p-2">
        @error('libelle')
            <small>{{ $message }}</small>
        @enderror

        <button type="submit" class="border-2 border-black">Ajouter</button>
    </form>
@endsection
