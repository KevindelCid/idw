
@extends('layouts.app')
@section('content')
    <div class="container">
<h2>Consultas pendientes</h2>
@if (Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{ Session::get('mensaje') }}  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
@endif


<a href="{{ url('welcome') }}"> Crear Nueva consulta </a>

<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Sexo</th>
            <th>Residencia</th>
            <th>Telefono</th>
            <th>Referido por </th>
            <th>Tipo Consulta</th>
            <th>Motivo</th>
            <th>Estado</th>


        </tr>
    </thead>
    <tbody>
        @if(isset($chol))
        @foreach ($chol as $ajq)
            
   
        <tr>
            <td><img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$ajq->foto  }}" width="100" alt=""></td>
           
                {{-- <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$ajq->foto  }}" width="100" alt=""> --}}
        
            <td>{{ $ajq->nombre1." ".$ajq->apellido1 }}</td>
            @if($ajq->sexo == 1)
            <td>{{ 'Masculino' }}</td>
            @else
            <td>{{ 'Femenino' }}</td>
            @endif
            <td>{{ $ajq->residencia }}</td>
            <td>{{ $ajq->telefono1 }}</td>
            <td>{{ $ajq->referido_por }}</td>
            <td>{{ $ajq->tipo }}</td>  
            <td>{{ $ajq->motivo_consulta }}</td> 
            @if($ajq->estado == 1)
            <td>{{ 'Pendiente' }}</td>
            @else
            <td>{{ 'Empezado' }}</td>
            @endif
                 
            <td>    
          
                
                
                <a href="{{ url('') }}" class="btn btn-success ">
                 Empezar consulta
                </a>
          
        
               <form action="{{ url('') }}" class="d-inline" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" class="btn btn-danger" value="Borrar Consulta" onclick="return confirm('¿Quieres Borrar este ajq\'ij')">
          
            </form></td>
        </tr>   
          @endforeach
        
          @endif
    </tbody>
</table>
{{-- {!! $ajqijs->links() !!} --}}
<a href="{{url('home')}}">Inicio</a>

</div>

@endsection('layouts.app')
