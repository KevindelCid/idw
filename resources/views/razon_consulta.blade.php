@extends('layouts.app')
@section('content')
    <div class="container">

    <div class="col-md-12">
        <div class="box">
<form action="{{ url('Xconsulta/'.$id.'/'.$tipo) }}" class="mb-5" method="POST" enctype="multipart/form-data">
@csrf



<div class="row">
          
    <div class="col-md-12 form-group">
      <label for="name" class="col-form-label">Razón de la consulta:</label>

<textarea name="razon" class="form-control" rows="10" id="razon"></textarea>

</div>

<div class="col-md-12 form-group">

<input type="submit"   class="btn btn-success" value="Agregar a consultas pendientes">
</div>




</form>

</div>
    </div>

</div>

@endsection('layouts.app')
