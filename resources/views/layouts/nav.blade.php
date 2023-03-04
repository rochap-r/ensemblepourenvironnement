<div class="second-bar">
    <div class="container">
        <div class="logo-menu">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img alt="logo" src="{{ asset('assets/img/logo.png') }}" class="white-logo">
                            <img alt="logo" src="{{ asset('assets/img/logo-w.png') }}" class="black-logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="nav-bar">
                        <nav>
                            <ul>
                                <li><a href="{{ route('home') }}">Accueil</a> </li>
                                <li><a href="JavaScript:void(0)">Nos Projets</a></li>
                                <li><a href="{{ route('blog.index') }}">Actualités</a></li>
                                <li><a href="{{ route('about') }}">A-propos</a></li>
                                <li><a href="{{ route('contact') }}">Nos Contacts</a></li>
                            </ul>
                        </nav>
                        <div class="extras">
                            @auth
                                <a onclick="event.preventDefault(); getElementById('nav-logout-form').submit()"
                                    href="" class="btn btn-danger py-2 px-4 ms-3 btn-hover">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-gravatar" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                      <path d="M5.64 5.632a9 9 0 1 0 6.36 -2.632v7.714"></path>
                                   </svg>
                                </a>
                                <form id="nav-logout-form" action="{{ route('logout') }}" method="POST">@csrf
                                </form>
                            @endauth
                            <div class="donation">
                            </div>

                            <a class="theme-btn" href="">Faire un Don</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="responsive-bar">
    <div class="container">
        <div class="responsive-bar-slider">
            <a href="{{ route('home') }}">
                <img alt="logo" src="{{ asset('assets/img/logo.png') }}" class="white-logo">
                <img alt="logo" src="{{ asset('assets/img/logo-w.png') }}" class="black-logo">
            </a>
            <div class="bar-menu">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </div>
</div>
<div class="mobile-nav hmburger-menu" id="mobile-nav" style="display:block;">
    <div class="res-log">
        <a href="{{ route('home') }}">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Responsive Logo" class="white-logo">
            <img alt="logo" src="{{ asset('assets/img/logo-w.png') }}" class="black-logo">
        </a>
    </div>
    <ul>
        <li><a href="{{ route('home') }}">Accueil</a> </li>
        <li><a href="JavaScript:void(0)">Nos Projets</a></li>
        <li><a href="{{ route('blog.index') }}">Actualités</a></li>
        <li><a href="{{ route('about') }}">A-propos</a></li>
        <li><a href="{{ route('contact') }}">Nos Contacts</a></li>
        @auth
        <li><a onclick="event.preventDefault(); getElementById('nav-logout-form').submit()"
            href="" class=" btn-hover">
          Déconnexion
        </a>
        <form id="nav-logout-form" action="{{ route('logout') }}" method="POST">@csrf
        </form>
        </li>
    @endauth
    </ul>
</div>