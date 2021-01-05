<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Incidencias - Añadir incidencias</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
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
    <h1>Incidencias - Añadir incidencias</h1>
</div>


<div id="dFormIncidencias">
    <h3>Añadir incidencia</h3>
    <form  method="post" action="{{route('anadirIncidencia')}}" >
        @csrf
        <label for="cod">Codigo de inciencia</label>
        <select id="cod" type="text"  name="cod_incidencia">
            <option value="internet">internet</option>
            <option value="ordenador_malfuncionando">ordenador  no funciona correctamente</option>
            <option value="pantalla">pantalla</option>
            <option value="proyector">proyector no funciona</option>
            <option value="teclado">teclado no funciona</option>
            <option value="webcam">webcam no funciona</option>
        </select>
        <label for="aula">Aula</label>
        <input id="aula" type="text" placeholder="aula" name="aula">
        <label for="date">Fecha</label>
        <input id="date" type="date" placeholder="fecha" name="fecha">
        <label for="hora">Hora</label>
        <input id="hora" type="time" placeholder="hora" name="hora">
        <label for="equipo">Equipo</label>
        <input id="equipo" type="text" placeholder="HZXXX" name="equipo">
        <button type="submit">Enviar</button>
        <input id="user" type="hidden"  name="user" value="{{ Auth::user()->id }}">
        <input id="estado" type="hidden"  name="estado" value="recibida">
    </form>
</div>

<div id="dTitulo2">
    <h2>Tus inciencias</h2>
</div>

<div id="dTabla">
    <table>
        <tr>
            <th>id</th>
            <th>profesor(a)</th>
            <th>codigo_incidencia</th>
            <th>Aula</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Comentario</th>
            <th>Equipo</th>
            <th>Estado</th>
        </tr>
        @foreach ($incidencias as $incidencia)
        <tr>
            <td>{{$incidencia->id}}</td>
            <td>{{$incidencia->user}}</td>
            <td>{{$incidencia->cod_incidencia}}</td>
            <td>{{$incidencia->aula}}</td>
            <td>{{$incidencia->fecha}}</td>
            <td>{{$incidencia->hora}}</td>
            <td>{{$incidencia->comentario}}</td>
            <td>{{$incidencia->equipo}}</td>
            <td>{{$incidencia->estado}}</td>
        </tr>
        @endforeach
    </table>
</div>
</body>
</html>
