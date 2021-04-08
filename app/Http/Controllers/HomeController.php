<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personas;
use App\Models\Cursos;
use App\Models\curso_estudiante;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin', 'estudiante']);
        return view('home');
    }
    public function index1(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        return view('layouts.agregarpersona');
    }
    public function index2(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        return view('layouts.agregarcurso');
    }
    public function index3(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        $users['personas']=Personas::all();   
        $users2['cursos']=Cursos::all();        
        return view('layouts.agregarcursosaestudiantes', $users, $users2);
    }
    
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
}
