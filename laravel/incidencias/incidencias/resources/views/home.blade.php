@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Panel de profesores') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>{{ __('Bienvenid@ ')  }} {{Auth::user()->name}} ,
                    para consultar tus incidencias o añadir una, acceda al desplegable que tiene
                        en la parte derecha del menú principal

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
