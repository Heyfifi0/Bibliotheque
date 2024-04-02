{{-- Utilise le layout 'admin.layout' --}}
@extends('admin.layout')

{{-- Section pour changer le titre de la page --}}
@section('title', 'Ouvrages')

{{-- Contenu de la page --}}
@section('content')

    <h1>Liste des ouvrages</h1>

    {{-- Lien pour ajouter un ouvrage --}}
    <p class="mt-5"><a href="{{ route('ouvrages.create') }}" class="text-blue-600 underline">Ajouter un ouvrage</a></p>

    <table>
        {{-- En-tête --}}
        <thead>
            <tr class="bg-slate-400">
                <th>ID</th>
                <th>Titre</th>
                <th>ISBN</th>
                <th>Type</th>
                <th>Editeur</th>
                <th>Genre(s)</th>
            </tr>
        </thead>

        {{-- Contenu --}}
        <tbody>
            @foreach ($ouvrages as $ouvrage)
                <tr>
                    <td>{{ $ouvrage->id_ouvrage }}</td>
                    <td>{{ $ouvrage->titre }}</td>
                    <td>{{ $ouvrage->code_isbn }}</td>
                    <td>{{ $ouvrage->type }}</td>
                    <td>{{ $ouvrage->editeurs->libelle }}</td>
                    <td>
                        @foreach ($ouvrage->genres as $genre)
                            {{ $genre->libelle }}
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Pagination des ouvrages (limitée à 5 ; voir OuvrageController) --}}
    <div>
        {{ $ouvrages->links() }}
    </div>

@endsection
