@extends('layouts.adminApp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Panel de administrador</div>
                    <div class="card-body">
                        <p>Bienvenido {{Auth::user()->name}} , para ver qué cosas
                        eres capaz de hacer en este panel, por favor, clica en el
                        desplegable del panel superior a mano derecha con tu nombre</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
