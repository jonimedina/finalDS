<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;

class MateriaController extends Controller
{

    public function index()
    {
        $materias = Materia::paginate(10);
        return view("/vistas.materias")->with('materias', $materias);
    }

    public function create(Request $request)
    {
        $materia = new Materia;
        $materia->nombre = $request->nombreMateria;
        $materia->anio = $request->anioMateria;

        $materia->save();

        if ($materia == true){
            return back()->with("correcto", "Materia agregada correctamente");
        } else {
            return back()->with("incorrecto", "Error al agregar materia");
        }
    }

    public function destroy(string $id)
    {
        $materia = Materia::find($id);
        $materia->delete();

        if ($materia == true){
            return back()->with("correcto", "Se eliminó el registro correctamente");
        } else {
            return back()->with("incorrecto", "Error al eliminar el registro");
        }
    }

}
