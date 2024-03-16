@extends('layout.layout')

@section('title', 'Editeurs')

@section('content')

    <h1>Liste des éditeurs</h1>

    {{-- Liste des éditeurs --}}
    <table>
        {{-- En-tête --}}
        <thead>
            <tr class="bg-slate-400">
                <th>ID</th>
                <th>Libellé</th>
                <th>Ouvrages</th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        {{-- Contenu --}}
        <tbody>
            @foreach ($editeurs as $editeur)
                <tr>
                    <td>{{ $editeur->id_editeur }}</td>
                    <td>{{ $editeur->libelle }}</td>

                    <td class="text-green-600 underline"><a href="{{ route('editeurs.show', $editeur) }}">Détails</a></td>

                    <td class="text-blue-600 underline"><a href="{{ route('editeurs.edit', $editeur) }}">Modifier</a></td>

                    <form action="{{ route('editeurs.destroy', $editeur) }}" method="POST">
                        @csrf
                        @method('delete')

                        <td class="text-red-600"><button class="underline">Supprimer</button></td>
                    </form>

                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
