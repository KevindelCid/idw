@extends('layouts.app')
@section('content') <div class="centrar">
    <div class="container">
        <div class="form-group">
           
            <h3>Seleccionar la categoría:</h3><br>
        <div id="obj1" class="col-md-12 collapse-menu">
            <div class="box">
                <form action="" class="mb-3" >
                 <div class="row">               

                    <div class="col-md-1 form-group">
                        <div class="conti">
                            <div class="card">
                              {{-- <img class="img-fluid" src="{{ asset('storage').'/'.$nawal->glifo  }}" width="20" alt=""> --}}
                              <a href="{{ route('juridico.nuevo') }}" class="" >Penal</a>
                            </div></div></div>
                            <div class="col-md-1 form-group">
                                <div class="conti">
                            <div class="card">
                                {{-- <img class="img-fluid" src="{{ asset('storage').'/'.$nawal->glifo  }}" width="20" alt=""> --}}
                                <a href="" class="" >Civil</a>
                              </div></div></div>
                              <div class="col-md-1 form-group">
                                <div class="conti">
                              <div class="card">
                                {{-- <img class="img-fluid" src="{{ asset('storage').'/'.$nawal->glifo  }}" width="20" alt=""> --}}
                                <a href="" class="" >Laboral</a>
                              </div></div></div>
                              <div class="col-md-1 form-group">
                                <div class="conti">
                              <div class="card">
                                {{-- <img class="img-fluid" src="{{ asset('storage').'/'.$nawal->glifo  }}" width="20" alt=""> --}}
                                <a href="" class="" >Familia</a>
                              </div></div></div>
                              <div class="col-md-1 form-group">
                                <div class="conti">
                                <div class="card">
                                {{-- <img class="img-fluid" src="{{ asset('storage').'/'.$nawal->glifo  }}" width="20" alt=""> --}}
                                <a href="" class="" >Admin</a>
                              </div></div></div>
                                <div class="col-md-1 form-group">
                                    <div class="conti">
                              <div class="card">
                                {{-- <img class="img-fluid" src="{{ asset('storage').'/'.$nawal->glifo  }}" width="20" alt=""> --}}
                                <a href="" class="" >Otros</a>
                              </div></div></div>
                        </div>
                    </div>

                 </div>
                </form>
            </div>

<i>Al presionar alguno de los botones de categoría se generará una nueva consulta y se iniciará el llenado de datos respectivos</i>

        </div>
    </div>

@endsection('layouts.app')
