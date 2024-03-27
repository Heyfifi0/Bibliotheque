
@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/css_auteur_ind.css') }}">
</head>
<body>
<div class="container">
<div class="title-container">
    <h1>Liste des auteurs</h1>
</div >
<!--table pour afficher les auteurs-->
<div class="table-container">
<table style="margin-left:auto;margin-right:auto; padding-top:80px; background-color: #D3D3D3">
    <tr>
        <th style="padding-right:50px;">Nom auteur</th>
        <th>Prenom auteur</th>
        <!--bouton create-->
        <th><a href = "{{ route('auteurs.create') }}" class="btn"><span class="btn btn-success font-weight-bold mr"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <title>Stockholm-icons / Navigation / Plus</title>
    <desc>Created with Sketch.</desc>
    <defs/>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/>
    </g>
</svg></span></a></th>
    <th><a href="{{ route('ouvrages.create')}}" class="btn  ">  Créer ouvrage </a></th>
</tr>    
        @foreach($auteurs as $auteur)
        <tr>
            <td style="padding-right:50px;">{{ $auteur -> nom}}</td>
            
            <td>{{ $auteur -> prenom }}</td>
            <!--bouton edit-->
            <td>
            <a href="{{ route('auteurs.edit', $auteur->id_auteur) }}" class="btn btn-primary">
                <span class="btn btn-primary font-weight-bold mr-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <title>Stockholm-icons / Design / Edit</title>
    <desc>Created with Sketch.</desc>
    <defs/>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
    </g>
</svg></span></a></td>

            <!--bouton delete-->
            <td>
            <form action="{{ route('auteurs.destroy', $auteur->id_auteur) }}" method="POST">
        @csrf
        @method('DELETE')
            <button onclick ="return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');" class="btn btn-danger">
            <span class="btn btn-danger font-weight-bold mr-2" ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <title>Stockholm-icons / Home / Trash</title>
    <desc>Created with Sketch.</desc>
    <defs/>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z" fill="#000000" fill-rule="nonzero"/>
        <path d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg></span></button>
</form>
</td>
            
        </tr> 
        @endforeach
       
</table>
<div class="pagination-container">
    {{ $auteurs->links() }}
</div>
</div>
</div>
</body>
</html>

@endsection

