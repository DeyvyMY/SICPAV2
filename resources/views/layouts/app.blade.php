<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SICPA  v2</title>
    <style type="text/css">
        .content {
            background-image: url("{{asset('assets/img/textura.jpg')}}");
        }
    </style>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
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

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        SICPA v2
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Monitoreo</a>
                            <ul class="dropdown-menu" role= "menu">
                                <li><a href="">Inventario</a></li>
                                <li><a href="">Compras</a></li>
                                <li><a href="">Ventas</a></li>
                                <li><a href="">Gastos</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Operaciones</a>
                            <ul class="dropdown-menu" role= "menu">
                                <li><a href="">Compras</a></li>
                                <li><a href="">Ventas</a></li>
                                <li><a href="">Notas de Crédito</a></li>
                                <li><a href="">Notas de Débito</a></li>
                                <li><a href="">Prodcutos</a></li>
                                <li><a href="">Clientes</a></li>
                                <li><a href="">Proveedores</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reportes</a>
                            <ul class="dropdown-menu" role= "menu">
                                <li><a href="">Compras</a></li>
                                <li><a href="">Ventas</a></li>
                                <li><a href="">Notas de Crédito</a></li>
                                <li><a href="">Notas de Débito</a></li>
                                <li><a href="">Prodcutos</a></li>
                                <li><a href="">Clientes</a></li>
                                <li><a href="">Proveedores</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Kardex</a>
                            <ul class="dropdown-menu" role= "menu">
                                <li><a href="">Por Producto</a></li>
                                <li><a href="">Por proveedor</a></li>
                                <li><a href="">Por proveedores</a></li>

                            </ul>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
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
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
