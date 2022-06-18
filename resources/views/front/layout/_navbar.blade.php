<header>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}"><span class="text-primary">Saving</span>-Live</a>
            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Route::is('home') ? 'active' : ''  }}">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item {{Route::is('article') ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('article')}}">Articles</a>
                    </li>
                    <li class="nav-item {{Route::is('about') ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('about')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">
                            Let's Start
                        </a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-success ml-lg-3" data-bs-toggle="modal" data-bs-target="#addNewObligation">
                            Obligation
                        </button>
                    </li>
                </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>



@section('js')


@endsection
