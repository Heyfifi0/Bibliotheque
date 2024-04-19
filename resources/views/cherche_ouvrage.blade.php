@extends('layout.layout')

@section('content')
<div class="container mx-auto px-4">
    <!-- Barre de recherche -->
    <div class="flex items-center justify-between mt-8">
        <div class="w-1/3">
            <label for="searchTitle" class="block text-gray-700">Titre:</label>
            <input type="text" id="searchTitle" onkeyup="search()" placeholder="Rechercher par titre..." class="block w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="w-1/3">
            <label for="searchAuthor" class="block text-gray-700">Auteur:</label>
            <input type="text" id="searchAuthor" onkeyup="search()" placeholder="Rechercher par auteur..." class="block w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <div class="w-1/3">
            <label for="searchGenre" class="block text-gray-700">Genre:</label>
            <input type="text" id="searchGenre" onkeyup="search()" placeholder="Rechercher par genre..." class="block w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
        </div>
    </div>

    <!-- Tableau des ouvrages -->
    <table id="ouvrageTable" class="mt-8 w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm">
                <th class="px-4 py-2">Titre</th>
                <th class="px-4 py-2">Editeur</th>
                <th class="px-4 py-2">Auteurs</th>
                <th class="px-4 py-2">Types</th>
                <th class="px-4 py-2">Genres</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ouvrages as $ouvrage)
            <tr class="border-b border-gray-300">
                <td class="px-4 py-2">{{ $ouvrage->titre }}</td>
                <td class="px-4 py-2">{{ $ouvrage->editeurs->libelle }}</td>
                <td class="px-4 py-2">
                    @foreach($ouvrage->auteurs as $auteur)
                    {{ $auteur->prenom }} {{ $auteur->nom }}
                    @if(!$loop->last)
                    ,
                    @endif
                    @endforeach
                </td>
                <td class="px-4 py-2"> {{ $ouvrage->type }}</td>
                <td class="px-4 py-2">
                    @foreach($ouvrage->genres as $genre)
                    {{ $genre->libelle }}
                    @if(!$loop->last)
                    ,
                    @endif
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function search() {
        var inputTitle = document.getElementById("searchTitle").value.toUpperCase();
        var inputAuthor = document.getElementById("searchAuthor").value.toUpperCase();
        var inputGenre = document.getElementById("searchGenre").value.toUpperCase();
        var table = document.getElementById("ouvrageTable");
        var rows = table.getElementsByTagName("tr");

        for (var i = 0; i < rows.length; i++) {
            var titleColumn = rows[i].getElementsByTagName("td")[0];
            var authorColumn = rows[i].getElementsByTagName("td")[2];
            var genreColumn = rows[i].getElementsByTagName("td")[4];

            if (titleColumn && authorColumn && genreColumn) {
                var titleValue = titleColumn.textContent || titleColumn.innerText;
                var authorValue = authorColumn.textContent || authorColumn.innerText;
                var genreValue = genreColumn.textContent || genreColumn.innerText;

                if (titleValue.toUpperCase().indexOf(inputTitle) > -1 &&
                    authorValue.toUpperCase().indexOf(inputAuthor) > -1 &&
                    genreValue.toUpperCase().indexOf(inputGenre) > -1) {
                    rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
                }
            }
        }
    }
</script>
@endsection
