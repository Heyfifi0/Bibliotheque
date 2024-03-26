@extends('layout.layout')
@section('content')

    <table class="table table-striped table-bordered">
        <tr><th>Genre numéro</th><th>Genre</th></tr>
        <button><a href="{{ route('genres.create') }}">Ajoutez Genre</button>
        @foreach($mesGenres  as $unGenre)
        <tr><th>{{$unGenre['id_genre']}}</th><th><p>
        {{$unGenre['libelle']}}</th>
        
        <td><a href="{{ route('genres.edit', $unGenre->id_genre) }}" class="btn btn-secondary " tabindex="-1" role="button">MAJ</a></td>
        <td><a href="" class="btn btn-secondary " tabindex="-1" role="button" ></a>
            <form action="{{ route('genres.destroy', $unGenre->id_genre) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
        </th>
        @endforeach
    </table> 
@endsection
