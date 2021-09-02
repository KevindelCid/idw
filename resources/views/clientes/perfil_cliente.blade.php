@extends('layouts.app')
@section('content')
    <div class="container">

    <div class="col-md-12">
        <div class="box">
<form action="" class="mb-5" method="POST" enctype="multipart/form-data">
@csrf



<div class="row">
          
   


        @foreach($chol as $dato) 
        <div class="col-md-3 form-group">
   

      <img src="{{ asset('storage').'/'.$dato->foto }}" width="150" alt="">

</div>

    

<div class="col-md-9 form-group">
    <label for="name" class="col-form-label">
<h2>
{{ $dato->nombre1." ".$dato->nombre2." ".$dato->apellido1." ".$dato->apellido2}} 
@if($dato->apellido_casada != null)

{{" de ".$dato->apellido_casada }}

@endif
</h2>

    </label>


</div>



<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Fecha de nacimiento:</label>
    <h6>{{ $fesha }}</h6>
</div>

<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">DPI:</label>
    <h6>{{ $dato->dpi }}</h6>
</div>

{{-- @if( $dato->sexo == 1) {{ _('Masculino') }} @else {{ _('Femenino') }} @endif --}}

<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Sexo:</label>
    @if( $dato->sexo == 1)
    <h6>{{ 'Masculino' }}</h6>
    @else
    <h6>{{ 'Femenino' }}</h6>
    @endif


</div>
<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Estado civil:</label>
    @if( $dato->estado_civil == 1)
    <h6>{{ 'Solter@' }}</h6>
    @else
    <h6>{{ 'Casad@' }}</h6>
    @endif
</div>

<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Nacionalidad:</label>
    <h6>{{ $dato->nacionalidad }}</h6>

</div>
<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Domicilio:</label>
    <h6>{{ $dato->domicilio }}</h6>

</div>


<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Residencia:</label>
    <h6>{{ $dato->residencia }}</h6>


</div>
<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Profesión:</label>
    <h6>{{ $dato->profesion }}</h6>
</div>

<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Teléfono 1:</label>
    <h6>{{ $dato->telefono1 }}</h6>
</div>

<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Teléfono 2:</label>
    <h6>{{ $dato->telefono2 }}</h6>
</div>
<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Teléfono 3:</label>
    <h6>{{ $dato->telefono3 }}</h6>

</div>



<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Referido por:</label>
    <h6>{{ $dato->referido_por }}</h6>
</div>






</form>

<h5></h5>
<div class="col-md-6 form-group">
    <a type="submit" class="btn btn-primary form-control" href="{{ url('home/'.$id) }}"  class="btn btn-danger" value="Agregar consulta">Agregar consulta</a>
    
    </div>
    
    <div class="col-md-6 form-group">
        <a type="submit" class="btn btn-warning form-control" href="{{ url('consultas/consultas_de/'.$id) }}"  class="btn btn-danger" value="Agregar consulta">Ver todas las consultas</a>

       
        </div>
    @endforeach
</div>

    </div>

</div>


        
@endsection('layouts.app')
