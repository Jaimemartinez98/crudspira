@extends('layouts.plantilla')

@section('content')
<div class="row">
  
<form action="{{route('store3')}}" method="POST">
    @csrf  
<form>
    <div class="row">
      <label name="idc" id="idc" for="exampleInputEmail1"></label>
     

      <div class="item form-group">
        <label class="col-form-label col-md-6 col-sm-3 label-align" for="first-name">Estudiante<span class="required">*</span>
        </label>
        <div class="col-md-12 col-sm-6 ">
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
        
      </div>

      <div class="item form-group">
        <label class="col-form-label col-md-6 col-sm-3 label-align" for="first-name">Curso<span class="required">*</span>
        </label>
        <div class="col-md-12 col-sm-6 ">
            <select id="curso_id" class="form-control" name="curso_id" required>
                @foreach ($cursos as $cursos)
                <option value="{{$cursos['id']}}">{{($cursos->nombrecurso)}}</option>
                @endforeach
        </select>
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