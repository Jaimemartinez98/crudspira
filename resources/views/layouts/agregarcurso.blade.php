@extends('layouts.plantilla')

@section('content')
<div class="row" class="center-block">
  
<form action="{{route('store2')}}" method="POST">
    @csrf  
<form>
  
    <div class="row " >
      <label name="idc" id="idc" for="exampleInputEmail1"></label>
      
      <div class="col-md-12 col-sm-6  form-group has-feedback " >
        <label for="exampleInputEmail1">Curso</label>
        <input type="text" name="nombrecurso" id="nombrecurso" class="form-control" placeholder="Ingrese el curso" required>
      </div>
      <div class="col-md-12 col-sm-6  form-group has-feedback">
        <label for="exampleInputEmail1">Intensidad Horaria</label>
        <input type="number" name="intensidadhoraria" id="intensidadhoraria" class="form-control" placeholder="intensidad horaria" required>
      </div>
          
      <button type="submit" class="btn btn-success btn-block">Enviar</button>
          
    </div>
       
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