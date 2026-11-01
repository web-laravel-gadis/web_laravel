<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        
        <a class="navbar-brand" href="{{ route('home') }}">
            Web Laravel
        </a>

        <ul class="navbar-nav ms-auto flex-row">
            <li class="nav-item">
                <a class="nav-link text-white px-3" href="{{ url('/') }}">
                    Home
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white px-3" href="{{ url('/artikel') }}">
                    Artikel
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white px-3" href="{{ url('/profil') }}">
                    Profil
                </a>
            </li>
        </ul>

    </div>
</nav>

