<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Registrar usuario administrador</title>
</head>
<body>

<div id="MenuPrincipal">
    <div id="divImg">
        <a href="{{ url('/') }}" id="aImg"><img alt="Plaiaundi" src="{{ asset('img/gobierno.png') }}" ></a>
    </div>
        <div id="divBotones">
            <a href="{{ route('registerAdmin') }}" class="botones">Añadir usuario adminstrador</a>
            <a href="{{ route('AdminIncidencias') }}" class="botones">Gestionar incidencias</a>
            <a href="{{ route('logout') }}" class="botones"
               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                Cerrar Sesión</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
</div>


<div id="dTitulo">
    <h1>Incidencias - Registro de usuarios adminstradores</h1>
</div>

<div id="Form">
    <form method="POST" action="{{ route('registerAdmin') }}">
        @csrf
        <div>
            <input id="name" type="text"  name="name" placeholder="Nombre" required autocomplete="text" autofocus>
            @error('name')
            <span  role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <div>
            <input id="email" type="email" name="email" placeholder="Correo electrónico" required autocomplete="email" autofocus>
            @error('email')
            <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <div>
            <input id="password" type="password" name="password" placeholder="Contraseña"  required autocomplete="current-password">
            @error('password')
            <span  role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <div>
            <input id="password-confirm" type="password"  name="password_confirmation" placeholder="Confirmar contraseña"  required autocomplete="current-password">
            @error('password-confirm')
            <span  role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <div>
            <button type="submit">
                Registrar
            </button>
        </div>
        <input id="type" type="hidden"  name="type" value="1">
    </form>
</div>


</body>
</html>
