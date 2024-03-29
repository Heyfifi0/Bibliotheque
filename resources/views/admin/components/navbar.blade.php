{{-- Component Navbar --}}

<nav class="navbar">
    <ul>
        <li class="navbar-item"></li>
        <li class="navbar-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="navbar-item"><a href="{{ route('auteurs.index') }}">Auteurs</a></li>
        <li class="navbar-item"><a href="{{ route('abonnements.index') }}">Abonnements</a></li>
        <li class="navbar-item"><a href="{{ route('editeurs.index') }}">Editeurs</a></li>
        <li class="navbar-item"><a href="{{ route('genres.index') }}">Genres</a></li>
        <li class="navbar-item"><a href="{{ route('ouvrages.index') }}">Ouvrages</a></li>

        <form action="{{ route('logout') }}" method="post">
            @csrf
            <li class="navbar-item"><button type="submit">Se déconnecter</button></li>
        </form>

    </ul>
</nav>
