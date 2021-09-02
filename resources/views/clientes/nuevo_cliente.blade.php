@extends('layouts.app')
@section('content')
    <div class="container">

    <div class="col-md-12">
        <div class="box">
<form action="{{ url('clientes/nuevo_cliente') }}" class="mb-5" method="POST" enctype="multipart/form-data">
@csrf



<div class="row">
          
    <div class="col-md-3 form-group">
      <label for="name" class="col-form-label">Primer nombre:</label>

<input type="text" name="nombre1" class="form-control" value="" id="nombre1">

</div>
<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Segundo nombre:</label>

<input type="text" name="nombre2" class="form-control" value="" id="nombre2">

</div>
<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Primer apellido:</label>

<input type="text" name="apellido1" class="form-control" value="" id="apellido1">

</div>
<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Segundo apellido:</label>

<input type="text" name="apellido2" class="form-control" value="" id="apellido2">

</div>

<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Apellido de casada:</label>

<input type="text" name="apellido_casada" class="form-control" value="" id="apellido_casada">

</div>


<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Fecha de nacimiento:</label>

<input type="date" name="f_nacimiento" class="form-control" value="" id="f_nacimiento">

</div>

<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">DPI:</label>

<input type="number" name="dpi" class="form-control" value="" id="dpi">

</div>



<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Sexo:</label>

<select name="sexo" class="form-control">
 
    <option value="1">Masculino</option>
    <option value="2">Femenino</option>
  </select>
</div>
<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Estado civil:</label>

<select name="estado_civil" class="form-control">
 
    <option value="1">Solter@</option>
    <option value="2">Casad@</option>
  </select>
</div>

<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Nacionalidad:</label>

<select name="nacionalidad" class="form-control">
 @foreach($naci as $n)
    <option value="{{ $n->id_nacionalidad }}">{{ $n->GENTILICIO_NAC }}</option>
  @endforeach
  </select>
</div>
<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Domicilio:</label>

<select name="domicilio" class="form-control">
 
    <option value="1">1</option>
    <option value="2">2...</option>
  </select>
</div>


<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Residencia:</label>

<input type="text" name="residencia" class="form-control" value="" id="residencia">

</div>
<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Profesión:</label>

<select name="profesion" class="form-control">
 
    <option value="1">1</option>
    <option value="2">2...</option>
  </select>
</div>

<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Teléfono 1:</label>

<input type="number" name="telefono1" class="form-control" value="" id="telefono1">

</div>

<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Teléfono 2:</label>

<input type="number" name="telefono2" class="form-control" value="" id="telefono2">

</div>
<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Teléfono 3:</label>

<input type="number" name="telefono3" class="form-control" value="" id="telefono3">

</div>



<div class="col-md-3 form-group">
    <label for="name" class="col-form-label">Referido por:</label>

<select name="referido_por" class="form-control">
    <option value="1">Radio</option>
    <option value="2">Value 2</option>
    <option value="3">Value 3</option>
  </select>
</div>







<div class="col-md-4 form-group">
<label for="name" class="col-form-label">Foto:</label>

<input type="file" name="foto" value="" class="form-control"  id="foto">
</div> 

<div class="col-md-12 form-group">

<input type="submit" class="btn btn-primary form-control"   class="btn btn-success" value="Agregar a consultas pendientes">
</div>




</form>

</div>
    </div>

</div>

@endsection('layouts.app')
