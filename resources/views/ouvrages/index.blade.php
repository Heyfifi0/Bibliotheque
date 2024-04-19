@extends('layout.layout')
@section('content')
<div class="container mx-auto">
    <div class="overflow-x-auto">
        <div class="bg-white shadow-md rounded my-6">
            <div class="flex justify-between items-center px-6 py-4">
                <div class="flex items-center">
                    <h2 class="text-2xl font-bold">Liste <span class="text-gray-900">Ouvrages</span></h2>
                </div>
                <div class="flex">
                    <a href="{{ route('ouvrages.create') }}"
                        class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded flex items-center">
                        <span class="mr-2">
                            <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 5V19" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M5 12H19" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span>Ajouter un Ouvrage</span>
                    </a>
                </div>
            </div>
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Titre</th>
                        <th class="py-3 px-6 text-left">Editeur</th>
                        <th class="py-3 px-6 text-left">Auteurs</th>
                        <th class="py-3 px-6 text-left">Types</th>
                        <th class="py-3 px-6 text-left">Genres</th>
                        <th class="py-3 px-6 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($ouvrages as $ouvrage)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left font-semibold">{{ $ouvrage->titre }}</td>
                        <td class="py-3 px-6 text-left font-semibold">{{ $ouvrage->editeurs->libelle }}</td>
                        <td class="py-3 px-6 text-left font-semibold">
                            @foreach($ouvrage->auteurs as $auteur)
                                {{ $auteur->prenom }} {{ $auteur->nom }}
                                @if(!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </td>
                        <td class="py-3 px-6 text-left font-semibold">{{ $ouvrage->type }}</td>
                        <td class="py-3 px-6 text-left font-semibold">
                            @foreach($ouvrage->genres as $genre)
                                {{ $genre->libelle }}
                                @if(!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </td>
                        <td class="py-3 px-6 text-left flex">
                            <a href="{{ route('ouvrages.edit', $ouvrage) }}"
                                class="text-gray-500 hover:text-gray-700 mr-4" data-toggle="modal">
                                <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zm18.71-9.04a1 1 0 0 0 0-1.42l-2.34-2.34a1 1 0 0 0-1.42 0l-1.83 1.83 3.75 3.75 1.84-1.82z" />
                                </svg>
                            </a>
                            <form action="{{ route('ouvrages.destroy', $ouvrage) }}" method="post">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="text-red-500 hover:text-red-700">
                                    <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59L5 6.41l5.59 5.59-5.59 5.59L6.41 19l5.59-5.59 5.59 5.59L19 17.59l-5.59-5.59z" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
