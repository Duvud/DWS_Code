<html lang="es">
<head>
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Verificación de correo</title>
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
    <h1>Verificar correo electrónico</h1>
</div>

<div id="dVerificacion">
    @if (session('resent'))
    <div>
        <p>Acabamos de enviar un enlace de verificación a tu correo electrónico</p>
    </div>
    @endif
    <div>
        <p>Antes de continuar, por favor busca en tu correo electrónico un enlace de verificacion</p>
        <p>Si no has recibido ningún correo</p>
    </div>
    <form method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Clica aquí para enviar otro enlace</button>
    </form>
</div>
</body>
</html>








