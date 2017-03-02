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

    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/chosen.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('Trumbowyg/ui/trumbowyg.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/ie8.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/ie9.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
        
    <!-- Wrapper -->
            <div id="wrapper">
                <!-- Main -->
                    <div id="main">
                        <div class="inner">

                            <!-- Header -->
                                <header id="header">
                                    <a href="index.html" class="logo"><strong>Editorial</strong></a>
                                    <ul class="icons">
                                        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                                        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                                        <li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
                                        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                                        <li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>                    
                                    </ul>
                                </header>

                                @yield("content")

                        </div>
                    </div>

                <!-- Sidebar -->
                    <div id="sidebar">
                        <div class="inner">

                            <!-- Search -->
                                <section id="search" class="alt">
                                    <form method="post" action="#">
                                        <input type="text" name="query" id="query" placeholder="Search" />
                                    </form>
                                </section>

                            <!-- Menu -->
                                <nav id="menu">
                                    <header class="major">
                                        <h2>Menu</h2>
                                    </header>
                                    @if (Auth::guest())
                                        <ul>
                                            <li><a href="{{ route('HomeView') }}">Homepage</a></li>
                                            <li><a href="generic.html">Generic</a></li>
                                            <li><a href="elements.html">Elements</a></li>
                                            <li>
                                                <span class="opener">Articulos</span>
                                                <ul>
                                                    <li><a href="#">Lorem Dolor</a></li>
                                                    <li><a href="#">Ipsum Adipiscing</a></li>
                                                    <li><a href="#">Tempus Magna</a></li>
                                                    <li><a href="#">Feugiat Veroeros</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Etiam Dolore</a></li>
                                            <li><a href="#">Adipiscing</a></li>
                                            <li>
                                                <span class="opener">Another Submenu</span>
                                                <ul>
                                                    <li><a href="#">Lorem Dolor</a></li>
                                                    <li><a href="#">Ipsum Adipiscing</a></li>
                                                    <li><a href="#">Tempus Magna</a></li>
                                                    <li><a href="#">Feugiat Veroeros</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Maximus Erat</a></li>
                                            <li><a href="#">Sapien Mauris</a></li>
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                        </ul>
                                    @else
                                    <ul>
                                        <li>
                                            <span class="opener">{{ Auth::user()->name }}</span>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        Logout
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>

                                        @if(Auth::user()->isAdmin())
                                        <li><a href="{{route('users.list')}}">Usuarios</a></li>
                                        @endif
                                        <li><a href="{{route('categories.index')}}">Categorias</a></li>
                                        <li><a href="{{route('articles.index')}}">Articulos</a></li>
                                        <li><a href="{{route('admin.image.index')}}">Imagenes</a></li>
                                        <li><a href="{{route('tags.index')}}">Tags</a></li>
                                    </ul>

                                    @endif
                                </nav>

                            <!-- Section -->
                                <section>
                                    <header class="major">
                                        <h2>Ante interdum</h2>
                                    </header>
                                    <div class="mini-posts">
                                        <article>
                                            <a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
                                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                                        </article>
                                        <article>
                                            <a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
                                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                                        </article>
                                        <article>
                                            <a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
                                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                                        </article>
                                    </div>
                                    <ul class="actions">
                                        <li><a href="#" class="button">More</a></li>
                                    </ul>
                                </section>

                            <!-- Section -->
                                <section>
                                    <header class="major">
                                        <h2>Get in touch</h2>
                                    </header>
                                    <p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                                    <ul class="contact">
                                        <li class="fa-envelope-o"><a href="#">information@untitled.tld</a></li>
                                        <li class="fa-phone">(000) 000-0000</li>
                                        <li class="fa-home">1234 Somewhere Road #8254<br />
                                        Nashville, TN 00000-0000</li>
                                    </ul>
                                </section>

                            <!-- Footer -->
                                <footer id="footer">
                                    <p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
                                </footer>

                        </div>
                    </div>

            </div>

    </div>

    <!-- Scripts -->
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js') }}"></script>
    <script src="{{asset('js/skel.min.js')}}"></script>
    <script src="{{asset('js/util.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/app.js') }}"></script>

    <script src="{{asset('js/chosen.jquery.js') }}"></script>
    <script src="{{asset('Trumbowyg/trumbowyg.min.js') }}"></script>
  


    @yield('js')
</body>
</html>
