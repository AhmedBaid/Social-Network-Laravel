<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Social network</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href={{ route('homepage.index') }}>Acceuil</a>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href={{ route('show.login') }}>Se connecter</a>
                </li>
            @endguest
            <li class="nav-item">
                <a class="nav-link" href={{ route('profiles.index') }}>Tout les Profile</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="/Profile">Mon Profile</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href={{ route('settings.index') }}>Mes informations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{ route('profiles.create') }}>Ajouter Profile</a>
            </li>
        </ul>
        @auth
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                {{auth()->user()->email}}
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="{{route('login.logout')}}">Deconnexion</a></li>
            </ul>
        </div>
        @endauth
    </div>
</nav>
