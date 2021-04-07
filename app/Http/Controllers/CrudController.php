<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   

public function store(Request $request)
    {
        $personaAgregar= new crud;
        
        $request->validate(
            [
                'cc'=>'required',
                'nombre'=>'required',
                'apellido' => 'required',
                'celular' => 'required',
                'direccion' => 'required',
                'barrio' => 'required',              
                
            ]
            );
        $personaAgregar->id = $request->cc;  
        $personaAgregar->nombre = $request->nombre;
        $personaAgregar->apellido = $request->apellido;
        $personaAgregar->celular = $request->celular;
        $personaAgregar->direccion = $request->direccion;
        $personaAgregar->barrio = $request->barrio;
        $personaAgregar->save();
      
        return back()->with('agregar','La persona se agrego correctamente');
       
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function show(crud $crud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function edit(crud $crud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, crud $crud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function destroy(crud $crud)
    {
        //
    }
}
