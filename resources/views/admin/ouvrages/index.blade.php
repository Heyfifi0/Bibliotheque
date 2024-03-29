@extends('admin.layout')

@section('title', 'Ouvrages')

@section('content')

    <h1>Liste des ouvrages</h1>

    {{-- Liste des éditeurs --}}
    <table>
        {{-- En-tête --}}
        <thead>
            <tr class="bg-slate-400">
                <th>ID</th>
                <th>Editeur</th>
                <th>Titre</th>
                <th>ISBN</th>
                <th>Type</th>
                <th>Genre(s)</th>
            </tr>
        </thead>

        {{-- Contenu --}}
        <tbody>
            @foreach ($ouvrages as $ouvrage)
                <tr>
                    <td>{{ $ouvrage->id_ouvrage }}</td>
                    <td>{{ $ouvrage->editeurs->libelle }}</td>
                    <td>{{ $ouvrage->titre }}</td>
                    <td>{{ $ouvrage->code_isbn }}</td>
                    <td>{{ $ouvrage->type }}</td>
                    @foreach ($ouvrage->genres as $genre)
                        <td>{{ $genre->libelle }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>


    {{-- {{ $editeurs->links() }} --}}


    <p class="mt-5"><a href="{{ route('ouvrages.create') }}" class="text-blue-600 underline">Ajouter un ouvrage</a></p>

@endsection

