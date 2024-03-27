@extends('layout.layout')

@section('content')


    <h1>Liste des utilisateurs ! </h1><br>
    <form action="userCreate">
        <input class="bouton" type="submit" value="Ajouter un utilisateur"/>
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
                <p class="bouton"><a href="/userValide/{{$user->id_utilisateur}}"  tabindex="-1" role="button" >Valider</a></p>
            @else
            <p class="bouton"> <a href="/userDesactive/{{$user->id_utilisateur}}" tabindex="-1" role="button" >Désactiver</a></p>
            @endif
            <p class="bouton"> <a href="/userUpdate/{{$user->id_utilisateur}}"  tabindex="-1" role="button" >Modifier</a></p>
            <p class="bouton"> <a href="/userDelete/{{$user->id_utilisateur}}" tabindex="-1" role="button" >Supprimer</a></p></td></tr>
        @endforeach
    </table>     
    @endsection