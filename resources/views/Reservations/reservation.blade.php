
@extends('layout.layout')
@section('content')



<div>
    <table class="table-auto">
    <tr>
        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">réservation</th>
        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">livre</th>
        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">utilisateur</th>
        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">date de la réservation</th>    
    </tr>
    @foreach($reservations as $uneReservation)
    <tr class="hover:bg-gray-100">
    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{$uneReservation->id_reservation}}</td>
    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{$uneReservation->ouvrage->titre}}</td>
    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{$uneReservation->utilisateur->prenom}}
    {{$uneReservation->utilisateur->nom}}</td>
    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{$uneReservation->date_reservation}}</td>
    <td class="inline-flex"><button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l"><a href="{{ url('/reservations-delete').'/'.$uneReservation->id_reservation}}">Supprimer</a></button>
    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r"><a href="{{ url('/reservations-modify-form').'/'.$uneReservation->id_reservation}}">Modifier</a></button></td>
</tr>
    @endforeach
</table>

<button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded"><a href="/reservations-create-form">Créer une réservation</a></button>

</div>    
@endsection
