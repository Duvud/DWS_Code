@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Incidencias</div>
                    <h3 style="margin-top: 1em;margin-left: 1em;">Añadir incidencia {{Auth::user()->name}}</h3>
                    <form method="post" style="margin: 1em" action="{{route('anadirIncidencia')}}">
                        @csrf
                        <table>
                            <tr>
                                <th><label for="cod">Codigo de inciencia</label></th>
                                <th><label for="aula">Aula</label></th>
                                <th><label for="date">Fecha</label></th>
                                <th><label for="hora">Hora</label></th>

                            </tr>
                            <tr>
                                <td>
                                    <select id="cod" type="text"  name="cod_incidencia">
                                        <option value="internet">internet</option>
                                        <option value="ordenador_malfuncionando">ordenador  no funciona correctamente</option>
                                        <option value="pantalla">pantalla</option>
                                        <option value="proyector">proyector no funciona</option>
                                        <option value="teclado">teclado no funciona</option>
                                        <option value="webcam">webcam no funciona</option>
                                    </select>
                                </td>
                                <td><input id="aula" type="text" placeholder="aula" name="aula"></td>
                                <td><input id="date" type="date" placeholder="fecha" name="fecha"></td>
                                <td><input id="hora" type="time" placeholder="hora" name="hora"></td>
                            </tr>
                            <tr>
                                <th><label for="equipo">Equipo</label></th>
                            </tr>
                            <tr>
                                <td><input style="margin-bottom: 1em" id="equipo" type="text" placeholder="HZXXX" name="equipo"></td>
                            </tr>
                            <td><button type="submit">Enviar</button></td>
                        </table>
                        <input id="user" type="hidden"  name="user" value="{{ Auth::user()->id }}">
                        <input id="estado" type="hidden"  name="estado" value="recibida">
                    </form>
                    <h3 style="margin-top: 1em;margin-left: 1em;">Tus incidencias:</h3>
                    <table style="margin: 1em">
                        <tr>
                            <th>id</th>
                            <th>profesor(a)</th>
                            <th>codigo_incidencia</th>
                            <th>Aula</th>
                            <th>Fecha</th>
                            <th>Hora</th>
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
                            <td>{{$incidencia->equipo}}</td>
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
