<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Blog')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <h1>BLOG</h1>
                </div>
            </div>          
        </nav>
      
        <nav class="navbar navbar-default navbar-static-top menu-abajo">
            
            <!--INICIO CONTAINER-->
            <div class="container">

                <!--HEADER MENU-->
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <!--HEADER MENU-->

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    
                    <!-- Authentication Links -->
                     @if (Auth::guest())

                     <ul  class="nav navbar-nav">
                        <li><a href="#">Articulos</a></li>
                        <li><a href="#">Categorias</a></li>
                        <li><a href="#">Contacto</a></li>
                     </ul>

                     <!-- Right Side Of Navbar -->
                     <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>   
                    </ul>

                    @else
                        <ul class="nav navbar-nav">
                            <li><a href="{{route('users.list')}}">Usuarios</a></li>
                            <li><a href="{{route('categories.index')}}">Categorias</a></li>
                            <li><a href="#">Articulos</a></li>
                            <li><a href="#">Imagenes</a></li>
                            <li><a href="#">Tags</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right"> 
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
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
                                </ul>
                            </li>
    
                        @endif
                        </ul>
                </div>

            </div>
            <!--FIN CONTAINER-->

        </nav>
        <div class="container">
            @yield('content')
        </div>

        <div class="footer well">
        <p>footer</p>
            @include('flash::message')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
