@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Voce está conectado!
                    
                    <formulario-component> </formulario-component> <!-- componente Vue.js -->
                    <formulario-component> </formulario-component> <!-- componente Vue.js -->
                    <mensagem-component> </mensagem-component> <!-- componente Vue.js -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection