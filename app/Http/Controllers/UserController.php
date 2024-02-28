<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Docente;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function mostrarPerfil(){

        $usuario = auth()->user();
        $docente = $usuario->docente;
        
    return view('/vistas.perfil', compact('usuario', 'docente'));
    }


    public function modificarPerfil(Request $request, $id){
        
        $docente = Docente::find($id);

        if ($docente){
            $docente-> update([
                "nombre" => $request->input("nombre"),
                "apellido" => $request->input("apellido"),
                "telefono" => $request->input("telefono"),
            ]);

            $docente->save();

            return back()->with("correcto", "Datos modificados correctamente");
        } else {
            return back()->with("incorrecto", "Error al modificar datos");
        }
    }

    public function modificarPassword(Request $request, $mail)
    {
        // Validaciones
        $request->validate([
            'currentPassword' => 'required|string',
            'newPassword' => 'required|string|min:6|confirmed',
        ]);
    
        // Verificar la contraseña actual
        $usuario = Auth::user();
        $usuario = User::find($mail);

        if (!Hash::check($request->input('currentPassword'), $usuario->password)) {
            return back()->withErrors(['currentPassword' => 'La contraseña actual no es válida.']);
        }
        
        // Actualizar la contraseña
        $usuario->password = Hash::make($request->input('newPassword'));
        
        if ($usuario->save()) {
            return back()->with("correcto", "Contraseña modificada correctamente");
        } else {
            return back()->with("incorrecto", "Error al cambiar contraseña");
        }
    }

}
