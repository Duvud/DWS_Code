<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Inicio de sesión</title>
</head>
<body>

<!--Menú principal-->
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
    <h1>Incidencias - Iniciar_sesión</h1>
</div>

<div id="Form">
    <form method="POST" action="{{ route('login') }}">
        @csrf
            <div>
            <label for="email" class="col-md-4 col-form-label text-md-right"><!--{{ __('E-Mail Address') }}--></label>
                <input id="email" type="email" class="" name="email" placeholder="Correo electrónico" required autocomplete="email" autofocus>
            </div>
                @error('email')
                @enderror
            <div>
            <label for="password" class="col-md-4 col-form-label text-md-right"><!--{{ __('Password') }}--></label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña"  required autocomplete="current-password">
            </div>
                @error('password')
                <div>
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            <div>
                @if (Route::has('password.request'))
                    <div>
                        <a id="pOlvidar" href="{{ route('password.request') }}" style="text-decoration: none; color: #FFFFFF">
                            <p>Forgot Your Password?</p>
                        </a>
                    </div>
                @endif
            </div>
            <div>
                <button type="submit">
                   <b>Entrar</b>
                </button>
            </div>
            <div>
                <a href="{{ url('auth/google') }}">
                    <img alt="Imagen inicio de sesión de google" src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png">
                </a>
            </div>
        </form>
</div>
</body>
</html>
