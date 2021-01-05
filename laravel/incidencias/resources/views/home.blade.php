<html lang="es">
<head>
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Incidencias</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>Home</title>
</head>
<body>

<div id="MenuPrincipal">
    <div id="divImg">
        <a href="{{ url('/') }}" id="aImg"><img alt="Plaiaundi" src="{{ asset('img/gobierno.png') }}" ></a>
    </div>
    <div id="divBotones">
        @guest
        @if (Route::has('login'))
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        @endif
        @if (Route::has('register'))
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        @endif
        @else
        <a href="{{ route('ProfesorIncidencias') }}" class="botones">Añadir incidencias</a>
        <a href="{{ route('logout') }}" class="botones" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
            Cerrar Sesión</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @endguest
    </div>
</div>

<div id="dTitulo">
    <h1>Incidencias - Bienvenid@</h1>
</div>

<div id="dTextoDescripcion">
    <p>
        Hola {{\Illuminate\Support\Facades\Auth::user()->name}}, en este panel, a través
        del menú superior, podrás añadir y ver tus incidencias.
    </p>
</div>
</body>
</html>
