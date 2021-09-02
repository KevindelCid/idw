
@extends('layouts.app')
@section('content')
    <div class="container">



   

<div class="col-md-12">
    <div class="box">
<form action="" class="mb-5" method="" enctype="multipart/form-data">
<div class="row">


  

</div>
</div>

   {{-- <h6> Contacto externo: {{ $gg->correo }}</h6>
--}}

  


    
        


    <div class="col-md-12 form-group">
        <h1>Tu agenda </h1>




<div id="agenda" name="agenda"></div>
</div>
</div>
</form>
    </div></div></div>
    
<!-- Button trigger modal -->

   <div class="use" style="color:#0e0e0e";>




    





<!-- Modal -->
<div class="modal fade" id="click_evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title">Detalles del evento</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>

      <div class="modal-body">

         <h1 id="tituloE" name="tituloE"></h1>
<h4 id="HoraE"></h4>

<input type="hidden" name="idev" id="idev">


<h5 id="descriE"></h5>



<br>
<form method="POST" id="datosed">
  @csrf
       <div class="row">
 
         <div class="col-12">
         
           <div class="form-group">
         
         <label for="">Título</label>
         <input type="text" class="form-control" name="tituloed" id="tituloed">
         
           </div>
         
         </div>
         
       </div>
 <div class="row">
 
 <div class="col-6">
 
   <div class="form-group">
 
 <label for="">Fecha</label>
 <input type="date" class="form-control" name="fechaed" id="fechaed">
 
   </div>
 
 </div>
 
 <div class="col-3">
 
   <div class="form-group">
 
 <label for="inicio">Hora de inicio</label>
 <input type="time" class="form-control" name="inicioed" id="inicioed">
 
   </div>
 
 </div>
 <div class="col-3">
 
   <div class="form-group">
{{--  
 <label for="tiempo">Duracion (minutos)</label>
 <input type="number" class="form-control" name="tiempoed" id="tiempoed">
  --}}
   </div>
 
 </div>
 
 
 
 </div>
 
 
 {{-- <div class="row">
 
   <div class="col-12">
   
     <div class="form-group">
   
   <label for="">Finalización</label>
   <textarea class="form-control" id="horafinal" name="horafinal" cols="30" rows="5"></textarea>
   
     </div>
   
   </div>
   
 </div> --}}
 <div class="row">
 
   <div class="col-12">
   
     <div class="form-group">
   
   <label for="">Descripción</label>
   <textarea class="form-control" id="descripcioned" name="descripcioned" cols="30" rows="5"></textarea>
   
     </div>
   
   </div>
   
 </div>
 </form>




      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning">Editar</button>
      </div>
    </div>
  </div>
</div>
















<!-- Modal -->
<div class="modal fade dark" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title centrado">Agregar evento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
    </div>
 
    <div class="modal-body">

<form method="POST" id="datosform">
 @csrf
      <div class="row">

        <div class="col-12">
        
          <div class="form-group">
        
        <label for="">Título</label>
        <input type="text" class="form-control" name="titulo" id="titulo">
        
          </div>
        
        </div>
        
      </div>
<div class="row">

<div class="col-6">

  <div class="form-group">

<label for="">Fecha</label>
<input type="date" class="form-control" name="fecha" id="fecha">

  </div>

</div>

<div class="col-3">

  <div class="form-group">

<label for="inicio">Hora de inicio</label>
<input type="time" class="form-control" name="inicio" id="inicio">

  </div>

</div>
<div class="col-3">

  <div class="form-group">

<label for="tiempo">Duracion (minutos)</label>
<input type="number" class="form-control" name="tiempo" id="tiempo">

  </div>

</div>



</div>


{{-- <div class="row">

  <div class="col-12">
  
    <div class="form-group">
  
  <label for="">Finalización</label>
  <textarea class="form-control" id="horafinal" name="horafinal" cols="30" rows="5"></textarea>
  
    </div>
  
  </div>
  
</div> --}}
<div class="row">

  <div class="col-12">
  
    <div class="form-group">
  
  <label for="">Descripción</label>
  <textarea class="form-control" id="descripcion" name="descripcion" cols="30" rows="5"></textarea>
  
    </div>
  
  </div>
  
</div>
</form>
 
</div>   

    <div class="modal-footer">

        <button onclick="guardar();" type="button" class="btn btn-success" name="btnGuardar" id="btnGuardar">Guardar</button>
        {{-- <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
        <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button> --}}

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      
    </div>
     
 </div>


</div>
</div>
</div>






    @endsection('layouts.app')
    {{-- <script>

        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('agenda');
          var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth'
          });
          calendar.render();
        });
  
      </script> --}}