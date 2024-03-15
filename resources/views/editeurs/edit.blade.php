@extends('layout.layout')

@section('title', 'Modifier un éditeur')

@section('content')
    <form action="{{ route('editeurs.update', $editeur->id_editeur) }}" method="post" class="flex flex-col m-3 justify-center align-bottom">
        @csrf
        @method('put')

        <label for="libelle">Nom de l'éditeur</label>
        <input type="text" name="libelle" id="libelle" class="border-2 border-black m-2 p-2" value="{{ $editeur->libelle }}">
        @error('libelle')
            <small>Nom incorrect</small>
        @enderror

        <button type="submit" class="border-2 border-black">Ajouter</button>
    </form>
@endsection

