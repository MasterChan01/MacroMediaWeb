<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Macromedia') }}</title>

    <!-- Styles -->
    
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/js/custom.js'])
    @vite(['resources/js/typed/typed.min.js'])

</head>
<body>
    
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('img/macro-bg.png')}}" alt="" style="width: 150px; height: auto;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->

                    <nav class="navbar">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav" style="font-family: 'Nunito', sans-serif;">
                                    <li class="nav-item">
                                        <a class="nav-link mx-2" href="../">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mx-2" href="#">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle mx-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services 
                                        &nbsp
                                        <i class="fas fa-chevron-down chevron-icon mr-3"></i>
                                        </a>

                                    <div class="drawer justify-content-center" id="services-drawer">                                        
                                        <ul>
                                            <li>
                                                <a href="../services">
                                                    <i class="fas fa-film" ></i>Video Editing
                                                </a>
                                            </li>
                                            <li>
                                                <a href="../services">
                                                    <i class="fas fa-palette" style="color:#a794ef;"></i>Graphic Design
                                                </a>
                                            </li>
                                            <li>
                                                <a href="../services">
                                                <i class="fas fa-cogs" style="color:skyblue;"></i>Social Media Management
                                                </a>
                                            </li>                                            
                                            <li>
                                                <a href="../services">
                                                    <i class="fas fa-bullhorn" style="color:#58b771;"></i>Social Media Marketing
                                                </a>
                                            </li>
                                            <!--
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-search-plus" style="color:gray;"></i>Search Engine Optimization
                                                </a>
                                            </li>-->
                                        </ul>
                                    </div>

                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mx-2" href="/about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mx-2" href="/faq">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mx-2" href="/contact-us">Contact Us</a>
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
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
        
    </div>



    @section('content')
        <div id="app">
            <button @click="toggleDrawer">Toggle Drawer</button>
            <drawer v-if="showDrawer"></drawer>
        </div>
    @endsection

</body>
</html>
