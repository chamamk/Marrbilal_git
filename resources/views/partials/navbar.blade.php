<nav class="sidebar close print-hide">
    <header>
        <div class="image-text">
            <span class="image">
                <img src="{{ asset('logo.png') }}" alt="">
            </span>
            <div class="text logo-text">
                <span class="name">Mar<sub>Bilal</sub></span>
                {{-- <span class="profession">

                </span> --}}
            </div>
        </div>
        <i class='bx bx-chevron-right toggle'></i>
    </header>
    <div class="menu-bar">
        <div class="menu">
            <ul class="menu-links px-0">
                <li class="nav-link">
                    <a href="/">
                        <i class='bx bx-home-alt icon'></i>
                        <span class="text nav-text">Accueil</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('article.index') }}">
                        <i class='bx bx-cart icon' ></i>
                        <span class="text nav-text">Article</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('client.index') }}">
                        <i class='bx bx-user icon' ></i>
                        <span class="text nav-text">Client</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="{{ route('achat.index') }}">
                        <i class='bx bx-shopping-bag icon'></i>
                        <span class="text nav-text">Achat</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="{{ route('fournisseur.index') }}">
                        <i class='bx bx-user-circle icon' ></i>
                        <span class="text nav-text">Fournisseur</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="{{ route('bonCommande.index') }}">
                        <i class='bx bxs-paper-plane icon'></i>
                        <span class="text nav-text">Bon de commande</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{ route('bl.index') }}">
                        <i class='bx bx-folder icon'></i>
                        <span class="text nav-text">Bl</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="{{route('typemarbre.index')}}">
                        <i class='bx bxs-wrench icon' ></i>
                        <span class="text nav-text">Paramètres </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="bottom-content">
            <li class="">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                           <i class='bx bx-log-out icon' ></i>
                        </x-responsive-nav-link>
                    </form>
                    <span class="text nav-text">{{ Auth::user()->name }}</span>
            </li>
        </div>
    </div>
</nav>
