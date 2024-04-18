@extends('admin.layout')
@section('content')

<div class="container mx-auto px-4">
    <table class="table-auto w-full bg-black text-red-600 border-2 border-red-600 shadow-xl rounded-lg">
        <thead>
            <tr>
                <th class="px-4 py-2">🔥 Genre numéro</th>
                <th class="px-4 py-2">👹 Genre</th>
                <th class="px-4 py-2">💀 Actions Diaboliques</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mesGenres as $unGenre)
            <tr>
                <td class="border px-4 py-2 text-red-400">{{$unGenre['id_genre']}}</td>
                <td class="border px-4 py-2 text-red-400">{{$unGenre['libelle']}}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('genres.edit', $unGenre->id_genre) }}" class="btn btn-secondary px-2 py-1 bg-red-700 hover:bg-red-800 text-white font-bold rounded-full shadow-md demonic-icons transition duration-300 ease-in-out transform hover:scale-105" tabindex="-1" role="button">🔥 Ensorceler</a>
                    <form action="{{ route('genres.destroy', $unGenre->id_genre) }}" method="post" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-secondary px-2 py-1 bg-black hover:bg-gray-800 text-white font-bold rounded-full shadow-md evil-icons transition duration-300 ease-in-out transform hover:scale-105">💀 Anéantir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-8">
        <a href="{{ route('genres.create') }}" class="inline-block bg-red-700 hover:bg-red-800 text-white font-bold py-3 px-6 rounded-full shadow-xl demonic-icons transition duration-300 ease-in-out transform hover:scale-105">👹 Invoquer un Nouveau Mal</a>
    </div>
</div>





















@endsection
