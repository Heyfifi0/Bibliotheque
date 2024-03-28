
@extends('layout.layout')
@section('content')



<div>
    <h1 class="text-5xl font-serif text-slate-500">Ouvrages</h1>
    <table class="table-auto mt-5">
    <tr>
        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">identifiant</th>
        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">titre</th>
        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">isbn</th>
        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">type</th>   
        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">éditeur</th> 
        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">auteur</th>       
        <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">genre</th>     
    </tr>
    @foreach($ouvrages as $unOuvrage)
        <tr class="hover:bg-gray-100">
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{$unOuvrage->id_ouvrage}}</td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{$unOuvrage->titre}}</td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{$unOuvrage->code_isbn}}</td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{$unOuvrage->type}}</td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{$unOuvrage->editeurs->libelle}}</td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">

        </td>
        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
            @foreach($unOuvrage->genres as $unGenre)
                {{$unGenre->libelle}}
            @if(!$loop->last)
                        ,
                    @endif
            @endforeach
        </td>

        </tr>
    @endforeach
</table>

</div>    
@endsection
