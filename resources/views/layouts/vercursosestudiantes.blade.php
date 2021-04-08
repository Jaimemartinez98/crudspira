@extends('layouts.plantilla')
@section('content')
   
<div class="row">

    
        <table class="table col-md-12   ">
        <tr>
                
                <th>Nombre Del Estudiante</th>
                <th>Curso en el que esta inscrito</th>
                        
        </tr>
            @foreach ($curso_estudiante as $item)
            <tr>
            <td>{{$item->persona->nombre }} {{$item->persona->apellido }} </td>
            <td>{{$item->curso->nombrecurso }}</td>                         
          
           
            </tr>
@endforeach
        </table>
        
    
</div>
@endsection