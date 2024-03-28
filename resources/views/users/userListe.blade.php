@extends('layout.layout')

@section('content')


    <h1>Liste des utilisateurs ! </h1><br>
    <form action="userCreate">
        <input class="boutonInput" type="submit" value="Ajouter un utilisateur"/>
    </form>

    <table class="shadow-lg bg-white border-collapse">
        <tr><th class="bg-blue-100 border text-left px-8 py-4">Identifiant</th><th class="bg-blue-100 border text-left px-8 py-4">Nom</th><th class="bg-blue-100 border text-left px-8 py-4">Prenom</th><th class="bg-blue-100 border text-left px-8 py-4">Statut</th><th class="bg-blue-100 border text-left px-8 py-4">Date naissance</th><th class="bg-blue-100 border text-left px-8 py-4">Email</th><th class="bg-blue-100 border text-left px-8 py-4">Adresse</th><th class="bg-blue-100 border text-left px-8 py-4">Code Postal</th><th class="bg-blue-100 border text-left px-8 py-4">Ville</th><th class="bg-blue-100 border text-left px-8 py-4">Newslatter</th><th class="bg-blue-100 border text-left px-8 py-4">MAJ</th></tr>
        @foreach($users  as $user)
        <tr  class="hover:bg-gray-50 focus:bg-gray-300 active:bg-purple-200" tabindex="0"><th>{{$user['id_utilisateur']}}</th>
        <th class="border px-8 py-4"><p>{{$user['nom']}}</th>
        <th class="border px-8 py-4"><p>{{$user['prenom']}}</th>
        <th class="border px-8 py-4"><p>{{$user['statut']}}</th>
        <th class="border px-8 py-4"><p>{{$user['date_naissance']}}</th>
        <th class="border px-8 py-4"><p>{{$user['email']}}</th>
        <th class="border px-8 py-4"><p>{{$user['adresse']}}</th>
        <th class="border px-8 py-4"><p>{{$user['code_postal']}}</th>
        <th class="border px-8 py-4"><p>{{$user['ville']}}</th>
        <th class="border px-8 py-4"><p>{{$user['reception_newsletter']}}</th>
        <td>
            @if($user->statut == "en attente")
                <p class="bouton"><a href="/userValide/{{$user->id_utilisateur}}"  tabindex="-1" role="button" class="bouton">Valider</a></p>
            @else
            <p class="bouton"> <a href="/userDesactive/{{$user->id_utilisateur}}" tabindex="-1" role="button" class="bouton">Désactiver</a></p>
            @endif
            <p class="bouton"> <a href="/userUpdate/{{$user->id_utilisateur}}"  tabindex="-1" role="button" class="bouton">Modifier</a></p>
            <p class="bouton"> <a href="/userDelete/{{$user->id_utilisateur}}" tabindex="-1" role="button" class="bouton">Supprimer</a></p></td></tr>
        @endforeach
    </table>  
    <div class="d-flex justify-content-center">
        {{ $users->links('pagination::bootstrap-4') }}
    </div>

    
    <div class="flex justify-center my-8">
        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
            {{-- Previous Page Link --}}
            @if ($users->onFirstPage())
                <span
                    class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500"
                    aria-disabled="true" aria-label="@lang('pagination.previous')">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $users->previousPageUrl() }}"
                    class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($users->getUrlRange(1, $users->lastPage()) as $page => $url)
                @if ($page === $users->currentPage())
                    <span aria-current="page"
                        class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-indigo-500 text-sm font-medium text-white hover:bg-indigo-600">{{ $page }}</span>
                @else
                    <a href="{{ $url }}"
                        class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">{{ $page }}</a>
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($users->hasMorePages())
                <a href="{{ $users->nextPageUrl() }}"
                    class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span
                    class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500"
                    aria-disabled="true" aria-label="@lang('pagination.next')">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </nav>
    </div>

    @endsection