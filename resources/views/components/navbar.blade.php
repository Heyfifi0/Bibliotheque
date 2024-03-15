{{-- Component Navbar --}}

<nav>
    <ul>
        <li class="navbar-item"><a href="{{ route('accueil') }}">Accueil</a></li>
        <li class="navbar-item"><a href="{{ route('auteurs.index') }}">Auteurs</a></li>
        <li class="navbar-item"><a href="{{ route('abonnements.index') }}">Abonnements</a></li>
        <li class="navbar-item"><a href="{{ route('editeurs.index') }}">Editeurs</a></li>
        <li class="navbar-item"><a href="{{ route('genres.index') }}">Genres</a></li>
        <li class="navbar-item"><a href="{{ route('ouvrages.index') }}">Ouvrages</a></li>
    </ul>
</nav>
