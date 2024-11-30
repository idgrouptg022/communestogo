<nav>
    <ul class="nav-menu">
        <li class="nav-item">
            <a href="#">
                <i class="fas fa-arrow-left"></i>
                retour à la FCT
            </a>
        </li>
        {{-- <li class="nav-item">
            <a href="#">A Propos</a>
        </li>
        <li class="nav-item">
            <a>Regions <i class="fas fa-chevron-down"></i></a>
            <div class="dropdown">
                <ul class="nav-submenu">
                    <li class="nav-submenu-item"><a href="">Maritime</a></li>
                    <li class="nav-submenu-item"><a href="">Plateaux</a></li>
                    <li class="nav-submenu-item"><a href="">Centrale</a></li>
                    <li class="nav-submenu-item"><a href="">Kara</a></li>
                    <li class="nav-submenu-item"><a href="">Savanes</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a href="#">Actu-communes</a>
        </li> --}}
        <li class="nav-item {{ $page == 'home' ? 'active' : ''}}">
            <a href="{{ route('guests:home') }}">Accueil</a>
        </li>
    </ul>
    {{-- <figure class="nav-logo">
        <img src="{{ asset('assets/images/logo.jpg') }}" alt="">
    </figure> --}}
    <div class="navbar-icon-container">
        <i class="fa fa-bars navbar-icon"></i>
    </div>
</nav>
