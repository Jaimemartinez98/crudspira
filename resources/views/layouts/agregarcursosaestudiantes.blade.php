@extends('layouts.plantilla')

@section('content')
<div class="row">
  
<form action="{{route('store3')}}" method="POST">
    @csrf  
<form>
  
    <div class="card">
      <div class="card-body">
      <h4 class="card-title">----------------------------------------Darles Cursos a los Estudiantes---------------------------------------</h4>
  <div class="row">
      <div class="col-md-12 m-auto">

            <!-- aqui crea las cajas de texto-->  
          <div class="form-group">
            <select id="persona_id" class="form-control" name="persona_id" required>
              @foreach ($personas as $personas)
              {{$a=$personas->nombre}}
              {{$b=$personas->apellido}}
              {{$c=$personas->id}}
              {{$concat = "CC: ".$c." - ".$a." ".$b."" }}
                  <option value="{{$personas['id']}}">{{($concat)}}</option>
              @endforeach
      </select>
          </div>
          <!--fin caja texto-->
              <!-- aqui crea las cajas de texto-->  
              <div class="form-group">
                <select id="curso_id" class="form-control" name="curso_id" required>
                  @foreach ($cursos as $cursos)
                  <option value="{{$cursos['id']}}">{{($cursos->nombrecurso)}}</option>
                  @endforeach
          </select>
              </div>
              <!--fin caja texto-->
             
      </div>

  </div>
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