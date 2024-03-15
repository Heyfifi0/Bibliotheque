@extends('layout.layout')

@section('title', 'Editeurs')

@section('content')

{{-- @dd($editeurs) --}}

<h1>Liste des éditeurs</h1>

{{-- Table avec la liste des éditeurs --}}
<table>
    {{-- En-tête --}}
    <thead>
        <tr>
            <th>ID</th>
            <th>Libellé</th>
            <th>Ouvrages</th>
        </tr>
    </thead>

    {{-- Contenu --}}
    <tbody>
        @foreach ($editeurs as $editeur)
            <tr>
                <td>{{ $editeur->id_editeur }}</td>
                <td>{{ $editeur->libelle }}</td>

                {{-- On va (essayer de) mettre les ouvrages là-dedans --}}
                <td>
                    <select name="ouvrages" id="ouvrages" readonly>
                        <option value="">Ouvrages</option>
                        <option value="">Ouvrage 1</option>
                        <option value="">Ouvrage 2</option>
                        <option value="">Ouvrage 3</option>
                    </select>
                </td>
                <td class="text-blue-600 underline"><a href="{{ route('editeurs.edit', $editeur) }}">Modifier</a></td>

                <form action="{{ route('editeurs.destroy', $editeur->id_editeur) }}" method="POST">
                    @csrf
                    @method('delete')

                    <td class="text-red-600"><button class="underline">Supprimer</button></td>
                </form>

            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('editeurs.create') }}" class="text-blue-600 underline">Ajouter un éditeur</a>
@endsection
