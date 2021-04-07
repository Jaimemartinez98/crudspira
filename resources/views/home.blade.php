@extends('layouts.plantilla')

@section('content')
<div class="row">
  
<form action="{{route('store')}}" method="POST">
    @csrf  
<form>
    <div class="row">
      <label name="idc" id="idc" for="exampleInputEmail1"></label>
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Cedula</label>
        <input type="text" name="cc" id="cc" class="form-control" placeholder="Ingrese su cedula" required>
      </div>
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese su nombre" required>
      </div>
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Apellido</label>
        <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingrese su apellido" required>
        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Celular</label>
            <input type="text" name="celular" id="celular" class="form-control" placeholder="Ingrese su celuco" required>
    
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Direccion</label>
            <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ingrese su direccion" required>
    
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Barrio</label>
            <input type="text" name="barrio" id="barrio" class="form-control" placeholder="Ingrese su barrio" required>
    
          </div>
          
          
          
    </div>
          <button type="submit" class="btn btn-success btn-block">Enviar</button>
    </div>
  </form>

  
 

  
</form> 
@if (session('agregar2'))
    <div class="alert alert-succes mt-3">
        {{session('agregar2')}}
    </div>
@endif
</div>
@endsection