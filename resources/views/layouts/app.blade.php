<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title >{{ config('app.name', 'WonderfulJourney') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/288aebbf11.js" crossorigin="anonymous"></script>
</head>
<body >
    <div id="app">
        <nav class="navbar" id="item">
            <div class="container navbar justify-content-center mt-2 " id="item">
                <a class="navbar-brand text-white" style=" font-weight: bold;"href="{{ url('/') }}">
                    <h1>Wonderful Journey</h1>
                </a>
              
            </div>
        
        </nav>
        <nav class="navbar navbar-expand-md navbar shadow-sm" id="item">
            <div class="container ">
               
                <button class="navbar-toggler" type="button" id="item" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/">Home</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/myblog">My Blog</a>
                           
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Category
                                </a>
                            
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="item">
                                    <a class="dropdown-item text-white" href="/category/1">
                                        Beach
                                    </a>
                                    <a class="dropdown-item text-white" href="/category/2">
                                        Mountain
                                    </a>
                                    <a class="dropdown-item text-white" href="/category/3">
                                        City
                                    </a>

                            </div>
                        </li>
                    @endguest  

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto " id="item">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item" id="item">
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item" id="item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown" id="item">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" id="item">
                                    <a class="dropdown-item text-white" href="/profile">
                                        Profile
                                    </a>

                                
                                    <a class="dropdown-item text-white" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" >
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
</body>

<footer id="item" class="text-center text-light py-3 mt-4"> © 2020 Copyright | Salsabila Azaria</footer>
</html>
