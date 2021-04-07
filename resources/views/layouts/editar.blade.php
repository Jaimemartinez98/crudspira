@extends('layouts.plantilla')
@section('content')

<div class="row">

    <form action="{{route('update2',$personas->id)}}" method="POST">
        @method('PUT')
        @csrf
        <form>
        <div class="row">
                <label name="idc" id="idc" for="exampleInputEmail1"></label>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" name="nombre1" id="nombre1" value="{{$personas->nombre}}"
                        class="form-control" placeholder="Ingrese su nombre" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Apellido</label>
                    <input type="text" name="apellido" id="apellido" value="{{$personas->apellido}}"
                        class="form-control" placeholder="Ingrese su apellido" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Celular</label>
                    <input type="text" name="celular" id="celular" value="{{$personas->celular}}"
                        class="form-control" placeholder="Ingrese su celuco" required>

                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Direccion</label>
                    <input type="text" name="direccion" id="direccion"
                        value="{{$personas->direccion}}" class="form-control"
                        placeholder="Ingrese su direccion" required>

                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Barrio</label>
                    <input type="text" name="barrio" id="barrio" value="{{$personas->barrio}}"
                        class="form-control" placeholder="Ingrese su barrio" required>
                </div> 
            </div>
              <button type="submit" class="btn btn-success btn-block">Enviar</button>
        </form>
    </form>

 





@if (session('update1'))
<div class="alert alert-succes mt-3">
    {{session('update1')}}
</div>
@endif
</div>
@endsection
