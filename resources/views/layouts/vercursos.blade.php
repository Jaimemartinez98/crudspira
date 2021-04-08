@extends('layouts.plantilla')
@section('content')
   
<div class="row">

    
        <table class="table col-md-12   ">
        <tr>
                <th>ID</th>
                <th>Nombre Del Curso</th>
                <th>Intensidad Horaria</th>
                        
        </tr>
            @foreach ($cursos as $item)
            <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->nombrecurso}}</td>
            <td>{{$item->intensidadhoraria}}</td>                
          
            <td>
                <a href="{{route('editar2', $item->id)}}" class="btn btn-warning">Editar</a>
            </td>
            </tr>
@endforeach
        </table>
        
    
</div>
@endsection