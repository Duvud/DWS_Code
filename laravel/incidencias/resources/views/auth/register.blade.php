<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Registro de profesores</title>
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
    <h1>Incidencias - Registro de profesores</h1>
</div>



<div id="Form">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <input id="name" type="text"  name="name" placeholder="Nombre" required autocomplete="text" autofocus>
        </div>
        <div>
            <input id="email" type="email" name="email" placeholder="Correo electrónico" required autocomplete="email" autofocus>
        </div>
        <div>
            <input id="password" type="password" name="password" placeholder="Contraseña"  required autocomplete="current-password">
        </div>
        <div>
            <input id="password-confirm" type="password"  name="password_confirmation" placeholder="Confirmar contraseña"  required autocomplete="current-password">
        </div>
        <div>
        </div>
        <div>
            <button type="submit">
                Registro
            </button>
        </div>
    </form>
</div>


</body>
</html>
