<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Landing Page</title>
</head>
<body>

<div id="MenuPrincipal">
    <div id="divImg">
        <a href="{{ url('/') }}" id="aImg"><img alt="Plaiaundi" src="{{ asset('img/gobierno.png') }}" ></a>
    </div>
    <div id="divBotones">
        <a href="{{ route('login') }}" class="botones">Iniciar Sesión</a>
        <a href="{{ route('register') }}" class="botones">Registrarse</a>
    </div>
</div>

<div id="dTitulo">
    <h1>Incidencias - Bienvenido</h1>
</div>

<div id="dTextoDescripcion">
    <p>
        Bienvenid@ a la aplicación de incidencias de Plaiaundi,
        para iniciar sesión o registrarte, por favor, utiliza el menú superior
    </p>
</div>
</body>
</html>
