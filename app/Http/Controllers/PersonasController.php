<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Personas;

class PersonasController extends Controller
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
        $personaAgregar= new Personas;
        $request->validate(
            [
                'cc'=>'required',
                'nombre'=>'required',
                'apellido' => 'required',
                'celular' => 'required',
                'direccion' => 'required',
                'barrio' => 'required'             
                
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
    public function leer()
    {
        
        $users['personas']=Personas::all();
        return view ('layouts.ver', $users);   
    }
    public function edit1($id)
    {
        $Actualizar['personas']=Personas::findOrFail($id);    
        return view('layouts.editar', $Actualizar);
    }
    public function updatepersonas(Request $request, $id)
    {
        $personasUpdate= Personas::findOrFail($id);
        $personasUpdate->nombre = $request->nombre1;
        $personasUpdate->apellido = $request->apellido;
        $personasUpdate->celular = $request->celular;
        $personasUpdate->direccion = $request->direccion;
        $personasUpdate->barrio = $request->barrio;          
        $personasUpdate->save();
        return back()->with('update','La nota ha sido actualizada correctamente');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function show(Personas $personas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function edit(Personas $personas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personas $personas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personas $personas)
    {
        //
    }
}
