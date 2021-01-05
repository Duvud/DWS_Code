<html lang="es">
<head>
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../app.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin - Home</title>
</head>
<body>

<div id="MenuPrincipal">
    <div id="divImg">
        <a href="{{ url('/') }}" id="aImg"><img alt="Plaiaundi" src="{{ asset('img/gobierno.png') }}" ></a>
    </div>
    <div id="divBotones">
        <a href="{{ route('registerAdmin') }}" class="botones">Añadir usuario adminstrador</a>
        <a href="{{ route('AdminIncidencias') }}" class="botones">Gestionar incidencias</a>
        <a href="{{ route('logout') }}" class="botones" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
            Cerrar Sesión</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>

<div id="dTitulo">
    <h1>Incidencias - Panel de administrador</h1>
</div>

<div id="dTextoDescripcion">
    <p>
        <span>Bienvenid@ {{ Auth::user()->name }}, para ver y administrar las diferentes incidencias o añadir usuarios
            administradores,utiliza los botones del menú principal superior</span>
    </p>
</div>
</body>
</html>
