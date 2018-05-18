<nav class="navbar navbar-default navbar-static-top navbar-expand-lg ">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#app-navbar-collapse" aria-controls="app-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button> --}}

            <!--MENU NAV LARGE -->
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item"> 
                    <a class="nav-link" href="/">Accueil</a> 
                </li>

                <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false" id="dropdown-exploration">
                                Explorez <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown-exploration">
                                    <li class="nav-item"><a href="/villes">Les villes</a></li>
                                    <li class="nav-item"><a href="/lieux">Les lieux d'interet</a></li>
                                    <li class="nav-item"><a href="/evenements">Les évenements</a></li> 
                            </ul>
                </li>
                
                <!-- Branding Image -->
                <a class="navbar-brand nav-item" href="{{ url('/') }}">
                    <img src="/img/logo.png">
                </a>

                <form class="button-search" method="GET" action="/search">
                    <input type="text" placeholder="Votre recherche..." name="q"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </form>

                {{-- Quand l'utilisateur est connecté --}}
                @auth
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="dropdown-if-connected">
                        {{ Auth::user()->pseudo }} <span class="caret"></span>
                    </a>
        
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdown-if-connected">
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
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="dropdown-not-connected">
                        Mon compte <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdown-not-connected">
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
    </div>
</nav>

