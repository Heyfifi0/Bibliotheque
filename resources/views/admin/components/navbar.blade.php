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

        <li class="navbar-item">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="logout-btn">Se déconnecter</button>
            </form>
        </li>

    </ul>
</nav>
