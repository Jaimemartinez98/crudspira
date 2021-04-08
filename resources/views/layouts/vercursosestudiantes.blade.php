@extends('layouts.plantilla')
@section('content')
   
<div class="container">

        <h2>Filterable Table</h2>
        <p>Type something in the input field to search the table for first names, last names or emails:</p>  
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
        <table class="table table-bordered table-striped">
                <thead>
        <tr>
                
                <th>Nombre Del Estudiante</th>
                <th>Curso en el que esta inscrito</th>
                        
        </tr>
</thead>
<tbody id="myTable">
            @foreach ($curso_estudiante as $item)
            <tr>
            <td>{{$item->persona->nombre }} {{$item->persona->apellido }} </td>
            <td>{{$item->curso->nombrecurso }}</td>                         
          
           
            </tr>
@endforeach
</tbody>
        </table>
        
    
</div>
<script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
        </script>
@endsection