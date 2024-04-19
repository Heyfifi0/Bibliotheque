@extends('layout.layout')
@section('content')
<div class="container mx-auto">
    <div class="w-full max-w-xs mx-auto">
        <h2 class="text-2xl font-bold text-center my-4">Editer Ouvrage</h2>
        <form action="{{ route('ouvrages.update', $ouvrage) }}" method="post"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="titre">
                    Titre :
                </label>
                <input type="text" id="titre" name="titre" value=""
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="type_ouvrage">
                    Type d'Ouvrage :
                </label>
                <select id="type_ouvrage" name="type_ouvrage"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected hidden>Sélectionner un type d'Ouvrage</option>
                    <option value="livre">Livre</option>
                    <option value="ebook">E-book</option>
                    <option value="magazine">Magazine</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="id_auteurs">
                    Auteurs :
                </label>
                <select id="id_auteurs" name="id_auteurs[]"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required multiple>
                    <option value="" disabled selected hidden>Sélectionner les Auteurs</option>
                    @foreach($auteurs as $auteur)
                    <option value="{{ $auteur->id_auteur }}">{{ $auteur->nom }} {{ $auteur->prenom }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="id_genres">
                    Genres :
                </label>
                <select id="id_genres" name="id_genres[]"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    require multiple>
                    <option value="" disabled selected hidden>Sélectionner les Genres</option>
                    @foreach($genres as $genre)
                    <option value="{{ $genre->id_genre }}">{{ $genre->libelle }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="id_editeur">
                    Editeur :
                </label>
                <select id="id_editeur" name="id_editeur"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected hidden>Sélectionner un Editeur</option>
                    @foreach($editeurs as $editeur)
                    <option value="{{ $editeur->id_editeur }}">{{ $editeur->libelle }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex items-center justify-between">
                <input type="submit" value="Submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            </div>
        </form>
    </div>
</div>
@endsection
