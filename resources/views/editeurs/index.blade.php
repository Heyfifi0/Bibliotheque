@extends('layout.layout')

@section('title', 'Editeurs')

@section('content')
<table>
    <caption>Liste des éditeurs</caption>
    <thead>
        <tr>
            <th>ID</th>
            <th>Libellé</th>
            <th>Modification</th>
            <th>Suppression</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($editeurs as $editeur)
            <tr>
                <td>{{ $editeur->id_editeur }}</td>
                <td>{{ $editeur->libelle }}</td>
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
