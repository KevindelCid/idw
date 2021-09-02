@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ideas Diseño Web') }}</div>

                <div class="card-body">
                    <div class="card-body">
@if(isset(auth()->user()->name))
                        <h4>{{ auth()->user()->name }} </h4>
                        @else 
                        <h4>{{ __('No te has logueado') }} </h4>
                        @endif
                     </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   <div class="centrar">
                        <a href="{{ url('clientes/nuevo_cliente') }}"> <img src="{{ asset('storage').'/ncliente.jpg' }}" width="300" alt=""></a>
                        
<a href="{{ url('clientes/listado') }}"><img src="{{ asset('storage').'/list.jpg' }}" width="300" alt=""></a>
                    </div>


                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
