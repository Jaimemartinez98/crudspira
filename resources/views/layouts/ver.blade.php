@extends('layouts.plantilla')
@section('content')
   
<div class="row">

    
        <table class="table col-md-12   ">
        <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Celular</th>
                <th>Direccion</th>
                <th>Barrio</th>         
                <th>Acción</th>               
        </tr>
            @foreach ($personas as $item)
            <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->nombre}}</td>
            <td>{{$item->apellido}}</td>
            <td>{{$item->celular}}</td>
            <td>{{$item->direccion}}</td>
            <td>{{$item->barrio}}</td>           
          
            <td>
                <a href="{{route('editar1', $item->id)}}" class="btn btn-warning">Editar</a>
            </td>
            </tr>
@endforeach
        </table>
        
    
</div>
@endsection