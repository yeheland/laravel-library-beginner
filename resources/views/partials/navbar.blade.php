<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('list.books') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('list.books') }}">Livres</a>
                </li>
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-success" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif

                {{-- @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif --}}

                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('list.books') }}">Livres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('list.authors') }}">Auteurs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('list.categories') }}">Genres</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->email }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>




{{-- <ul class="">
    <li><a href="{{ route('accueil') }}">Accueil</a></li>
    <li><a href="{{ route('list.authors') }}">Auteurs</a></li>
    <li><a href="{{ route('list.categories') }}">Genres</a></li>
    <li><a href="{{ route('list.books') }}">Livres</a></li>

    <li><a href="">Utilisateurs</a></li>

</ul> --}}