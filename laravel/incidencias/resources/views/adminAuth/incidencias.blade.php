<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset=ISO-8859-1">
    <title>Admin - Incidencias</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
    <h1>Incidencias - Gestionar incidencias</h1>
</div>

<div id="formEditar1">
    <h3>Cambiar estado de incidencia</h3>
    <form method="post" style="margin-bottom: 1em" action="{{route('cambiarEstado')}}">
        @csrf
        <div>
            <input type="number" placeholder="id incidencia" name="id">
        </div>
        <div>
            <select  placeholder="estado" name="estado">
                <option value="recibida">recibida</option>
                <option value="resuelta">resuelta</option>
                <option value="en_proceso">en proceso</option>
                <option value="rechazada">rechazada</option>
            </select>
        </div>
        <div>
            <button type="submit">Cambiar estado</button>
        </div>
    </form>
</div>

<div id="formEditar2">
    <h3>Cambiar comentario de incidencia</h3>
    <form method="post"  action="{{route('cambiarComentario')}}">
        @csrf
        <div>
            <input type="number" placeholder="id incidencia" name="id">
        </div>
        <div>
            <input type="text" placeholder="comentario" name="comentario">
        </div>
        <div>
            <button type="submit">Cambiar comentario</button>
        </div>
    </form>
</div>

<div id="dTitulo2">
    <h2>Lista de incidencias</h2>
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
