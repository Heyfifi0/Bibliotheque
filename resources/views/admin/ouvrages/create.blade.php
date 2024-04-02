@extends('admin.layout')

@section('title', 'Ajouter un ouvrage')

@section('content')

    <h1 class="mb-2">Ajouter un ouvrage</h1>

    {{-- Formulaire de création d'éditeur --}}
    <form action="{{ route('ouvrages.store') }}" method="post" class="flex flex-col w-80">
        @csrf

        <label for="titre">Titre</label>
        <input type="text" name="titre" id="titre" class="border border-black p-2 mb-5">
        @error('titre')
            <span class="text-red-500 mb-5">{{ $message }}</span>
        @enderror

        <label for="type">Type</label>
        <select name="type" id="type" class="mb-5">
            <option value="livre">livre</option>
            <option value="magazine">magazine</option>
            <option value="ebook">ebook</option>
        </select>

        <label for="code_isbn">ISBN</label>
        <input type="text" name="code_isbn" id="code_isbn" class="border border-black p-2 mb-5">
        @error('code_isbn')
            <span class="text-red-500 mb-5">{{ $message }}</span>
        @enderror

        <label for="genres">Genre(s)</label>
        <select name="genres" id="genres" class="mb-5">
            @foreach ($genres as $genre)
                <option value="{{ $genre->id_genre }}">{{ $genre->libelle }}</option>
            @endforeach
        </select>

        <label for="id_editeur">Editeur</label>
        <select name="id_editeur" id="id_editeur" class="mb-5">
            @foreach ($editeurs as $editeur)
                <option value="{{ $editeur->id_editeur }}">{{ $editeur->libelle }}</option>
            @endforeach
        </select>

        <button type="submit" class="border border-black p-3 mb-3">Ajouter</button>
    </form>

    <a href="{{ route('editeurs.index') }}" class="text-blue-600 underline">Revenir en arrière</a>
@endsection
