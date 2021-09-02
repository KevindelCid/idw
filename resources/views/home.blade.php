@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ideas Diseño Web') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   <div class="centrar">
                        <a href="{{ url('Xconsulta/'.$id.'/migracion') }}"> <img src="{{ asset('storage').'/migra.jpg' }}" width="300" alt=""></a>
                        
<a href="{{ url('Xconsulta/'.$id.'/juridico') }}"><img src="{{ asset('storage').'/juridico.png' }}" width="300" alt=""></a>
                    </div>


                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
