<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Materia;
use Illuminate\Support\Facades\Auth;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materias = Materia::all();
        $estudiantes = Estudiante::orderBy('id','ASC')->paginate(10);
        return view("/vistas.estudiantes")->with('estudiantes', $estudiantes)->with('materias', $materias);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $estudiante = new Estudiante;

        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->dni = $request->dni;
        $estudiante->mail = $request->mail;
        $estudiante->escuela = $request->escuela;
        $estudiante->materia1 = $request->materia1;
        $estudiante->aniomateria1 = $request->aniomateria1;
        $estudiante->materia2 = $request->materia2;
        $estudiante->aniomateria2 = $request->aniomateria2;
        $estudiante->retiro = $request->retiro;

        $estudiante->save();

        if ($estudiante == true){
            return back()->with("correcto", "Estudiante agregado correctamente");
        } else {
            return back()->with("incorrecto", "Error al registrar");
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function buscar(Request $request)
    {
        $apellido = $request->apellido; 
        $estudiantes = Estudiante::where('apellido', 'like', '%' . $apellido . '%')->get();
        return view('/vistas.busquedaEstudiante', ['estudiantes' => $estudiantes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $estudiante = Estudiante::find($id);
        $materias = Materia::all();

        if ($estudiante){
            $estudiante->nombre = $request->nombre;
            $estudiante->apellido = $request->apellido;
            $estudiante->dni = $request->dni;
            $estudiante->mail = $request->mail;
            $estudiante->escuela = $request->escuela;
            $estudiante->materia1 = $request->materia1;
            $estudiante->aniomateria1 = $request->aniomateria1;
            $estudiante->materia2 = $request->materia2;
            $estudiante->aniomateria2 = $request->aniomateria2;
            $estudiante->retiro = $request->retiro;

            $estudiante->save();
            return back()->with("correcto", "Estudiante modificado correctamente");
        } else {
            return back()->with("incorrecto", "Error al modificar datos");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->delete();

        if ($estudiante == true){
            return back()->with("correcto", "Se eliminó el registro correctamente");
        } else {
            return back()->with("incorrecto", "Error al eliminar el registro");
        }
    }

    public function listado1()
    {
        $materias = Materia::all();

        if (Auth::check()) {
            $docente = Auth::user()->docente;
            
            if ($docente->materia1 !== null && $docente->aniomateria1 !== null) {
                $estudiantes = Estudiante::where([
                    ['materia1', '=', $docente->materia1],
                    ['aniomateria1', '=', $docente->aniomateria1],
                ])->orWhere([
                    ['materia2', '=', $docente->materia1],
                    ['aniomateria2', '=', $docente->aniomateria1],
                ])->get();
                
                return view('/vistas.listadoEstudiantes', compact('estudiantes', 'docente', 'materias'));
            } else {
                return back()->with("incorrecto", "Sin estudiantes en este módulo");
                
            }
        } else {
            return redirect()->route('login');
        }    
    }

    public function listado2()
    {
        $materias = Materia::all();

        if (Auth::check()) {
            $docente = Auth::user()->docente;
            
            if ($docente->materia2 !== null && $docente->aniomateria2 !== null) {
                $estudiantes = Estudiante::where([
                    ['materia1', '=', $docente->materia2],
                    ['aniomateria1', '=', $docente->aniomateria2],
                ])->orWhere([
                    ['materia2', '=', $docente->materia2],
                    ['aniomateria2', '=', $docente->aniomateria2],
                ])->get();
                
                return view('/vistas.listadoEstudiantes', compact('estudiantes', 'docente', 'materias'));
            } else {
                return back()->with("incorrecto", "Sin estudiantes en este módulo");
                
            }
        } else {
            return redirect()->route('login');
        }    
    }
}
