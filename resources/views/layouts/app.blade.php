<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookstore - @yield('title')</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="{{asset('css/main.css')}}" media="screen,projection"/>
</head>

<body>
    {{-------------------------------------------------- Navbar --------------------------------------------------}}
    <div class="prueba navba-fixed">
        <nav class="orange darken-1">
            <div class="nav-wrapper container">
                <a href="/" class="brand-logo right">Bookstore</a>
                {{------------------------------------ Elementos --------------------------------------------------}}
                {{-- Categorias --}}
                <ul class="left hide-on-med-and-down">
                    <li>
                        <a class="dropdown-trigger" data-target="dropdow-menu" href="#">
                            Categorias
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                </ul>

                {{-- Elementos Categorias --}}
                <ul id="dropdow-menu" class="dropdown-content">
                    @foreach ($categories as $category)
                        <li><a href="/category/{{$category->id}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
                {{----------------------------------------- Fin Elementos ----------------------------------------}}

                 {{---------------------------------------- Menu hamburguesa -------------------------------------}}
                 <ul id="slide-out" class="sidenav">
                    <h2 class="header center-align orange darken-1">Menu</h2>
                    <li><div class="divider"></div></li>
                    <li class="orange darken-1">
                        <a class="dropdown-trigger" data-target="dropdow-menu-hamburguesa">
                            Categorias
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                    {{-- Categorias --}}
                    <ul id="dropdow-menu-hamburguesa" class="dropdown-content">
                        @foreach ($categories as $category)
                            <li><a href="/category/{{$category->id}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                    <li><div class="divider"></div></li>
                    <a onclick="M.toast({html: 'I am a toast'})" class="btn">Toast!</a>
                </ul>
                <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                {{-- ------------------------------------------------------------------------------------------- --}}
            </div>
        </nav>
    </div>
    {{------------------------------------------------- Fin Navbar -------------------------------------------------}}

    <div class="principal container">
        @yield('content')
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>
