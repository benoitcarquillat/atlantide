<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <ul class="nav navbar-nav">
                <li> <a href="/">Accueil</a> </li>
                <li> <a href="#">Lieu d'interet</a> </li>
                <li> <a href="/evenements">Evenements</a> </li>
                
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/img/logo.png">
                </a>

                <button class="button-search">
                    <input type="text" placeholder="Votre recherche..."> <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </button>

                {{-- Quand l'utilisateur est connecté --}}
                @auth
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->pseudo }} <span class="caret"></span>
                    </a>
        
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                Logout
                            </a>
        
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        <li> <a href="#">Mon profil</a> </li>
                    </ul>
                </li>
                @endauth

                {{-- Quand l'utilisateur n'est pas connecté --}}
                @guest
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Mon compte <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="/login">Connexion</a>
                        </li>
                        <li> <a href="/register">Créer un compte</a> </li>
                    </ul>
                </li>
                @endguest
            </ul>
            




        </div>
    </div>
</nav>