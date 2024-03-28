@extends('layout.layout')
@section('content')

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ asset('/css/index.css') }}">
	<title>Ouvrages</title>

</head>

    <div class="container">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-6">
							<h2>Liste des ouvrages</h2>
						</div>
						<div class="col-xs-6">
							<a href="{{ route('ouvrages.create') }}" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un Abonnement</span></a>				
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Titres</th>
                            <th>Editeurs</th>
                            <th>Auteurs</th>
                            <th>Types</th>
                            <th>Genres</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($livres as $livre)
                        <tr>
                            <td> {{ $livre->titre}}</td>
                            <td> {{ $livre->editeurs->libelle }}</td>
                            <td>
                                @foreach($livre->auteurs as $auteur)
                                    {{ $auteur->nom }} {{ $auteur->prenom }}
                                    @if(!$loop->last)
                                        ,
                                    @endif
                                @endforeach
                            </td>
                            <td> {{ $livre->type}}  </td> 
                            <td> 
                                @foreach($livre->genres as $genre)
                                    {{ $genre->libelle }} 
                                    @if(!$loop->last)
                                        ,
                                    @endif
                                @endforeach
                            </td> 
                                <td>
                                    <a href="{{ route('ouvrages.edit', $livre->id_ouvrage) }}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <form action="{{ route('ouvrages.destroy', $livre->id_ouvrage) }}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" onclick="return confirm('Voulez vous vraiment supprimer cet ouvrage?')" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
			</div>
		</div>        
    </div>
    {{$livres->links()}}
@endsection
