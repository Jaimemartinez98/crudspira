@extends('layouts.plantilla')

@section('content')
<div class="row" class="center-block">
  
<form action="{{route('store2')}}" method="POST">
    @csrf  
<form>
  
    
       
    </div> 
    <br>
    <div class="card">
      <div class="card-body">
      <h4 class="card-title">Ingreso de cursos</h4>
  <div class="row">
      <div class="col-md-12 m-auto">

            <!-- aqui crea las cajas de texto-->  
          <div class="form-group">
            <input type="text" name="nombrecurso" id="nombrecurso" class="form-control" placeholder="Ingrese el curso" required>
          </div>
          <!--fin caja texto-->
              <!-- aqui crea las cajas de texto-->  
              <div class="form-group">
                <input type="number" name="intensidadhoraria" id="intensidadhoraria" class="form-control" placeholder="intensidad horaria" required>
              </div>
              <!--fin caja texto-->
              <button type="submit" class="btn btn-success btn-block">Enviar</button>
      </div>

  </div>
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