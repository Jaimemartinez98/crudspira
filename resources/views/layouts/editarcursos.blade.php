@extends('layouts.plantilla')
@section('content')

<div class="row">

    <form action="{{route('update3',$cursos->id)}}" method="POST">
        @method('PUT')
        @csrf
        <form>
        <div class="row">
                <label name="idc" id="idc" for="exampleInputEmail1"></label>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Nombre Del Curso</label>
                    <input type="text" name="nombre1" id="nombre1" value="{{$cursos->nombrecurso}}"
                        class="form-control" placeholder="Ingrese el nombre del curso" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Intensidad Horaria</label>
                    <input type="text" name="intensidad" id="intensidad" value="{{$cursos->intensidadhoraria}}"
                        class="form-control" placeholder="Ingrese su intensidad horaria" required>
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
