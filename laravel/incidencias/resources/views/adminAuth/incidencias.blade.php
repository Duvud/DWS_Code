@extends('layouts.adminApp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Incidencias</div>
                    <h3 style="margin-top: 1em">Cambiar de estado incidencia</h3>

                    <form method="post" style="margin: 1em" action="{{route('cambiarEstado')}}">
                        @csrf
                        <input type="number" placeholder="id incidencia" name="id">
                        <select  placeholder="estado" name="estado">
                            <option value="recibida">recibida</option>
                            <option value="resuelta">resuelta</option>
                            <option value="en_proceso">en proceso</option>
                            <option value="rechazada">rechazada</option>
                        </select>
                        <button type="submit">Cambiar estado incidencia</button>
                    </form>
                    <form method="post" style="margin: 1em" action="{{route('cambiarComentario')}}">
                        @csrf
                        <input type="number" placeholder="id incidencia" name="id">
                        <input type="text" placeholder="cometario" name="comentario">
                        <button type="submit">Cambiar comentario incidencia</button>
                    </form>
                    <!--
                     <h3>Añadir incidencia</h3>
                    <form method="post" action="{{url('/anadirIncidencia')}}">
                        <input type="text" placeholder="estado" name="id">
                        <input type="text" placeholder="estado" name="id">
                        <button type="submit">Añadir incidencia</button>
                    </form>
                     -->
                    <h3>Lista de incidencias:</h3>
                    <table style="margin: 1em">
                        <tr>
                            <th>id</th>
                            <th>profesor(a)</th>
                            <th>codigo_incidencia</th>
                            <th>Aula</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Comentario</th>
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
                            <td>{{$incidencia->estado}}</td>
                        </tr>
                    @endforeach
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
