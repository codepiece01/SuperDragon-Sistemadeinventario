<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    // Lista todos los usuarios del sistema
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    // Muestra el formulario para crear un usuario nuevo
    public function create()
    {
        return view('usuarios.create');
    }

    // Guarda el usuario nuevo, encriptando la contraseña antes de guardarla
    public function store(Request $request)
    {
        $request->validate([
            'NombreUsuario' => 'required|string|max:50|unique:Usuarios,NombreUsuario',
            'Contrasena'    => 'required|string|min:6',
            'Rol'           => 'required|in:Administrador,Cajero,Planta',
        ]);

        Usuario::create([
            'NombreUsuario' => $request->NombreUsuario,
            // Nunca se guarda la contraseña tal cual la escribió el usuario;
            // Hash::make() la convierte en un hash irreversible antes de guardarla
            'Contrasena'    => Hash::make($request->Contrasena),
            'Rol'           => $request->Rol,
        ]);

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario creado correctamente.');
    }

    // Muestra el detalle de un usuario (sin mostrar la contraseña, por seguridad)
    public function show(Usuario $usuario)
    {
        return view('usuarios.show', compact('usuario'));
    }

    // Muestra el formulario de edición. El campo de contraseña se deja vacío:
    // si el usuario no escribe nada ahí, la contraseña actual no se modifica
    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    // Actualiza el usuario. La contraseña solo se cambia si el campo
    // vino lleno; si se dejó vacío, se conserva la que ya tenía
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'NombreUsuario' => 'required|string|max:50|unique:Usuarios,NombreUsuario,' . $usuario->IdUsuario . ',IdUsuario',
            'Contrasena'    => 'nullable|string|min:6',
            'Rol'           => 'required|in:Administrador,Cajero,Planta',
        ]);

        $datos = [
            'NombreUsuario' => $request->NombreUsuario,
            'Rol'           => $request->Rol,
        ];

        // Solo se incluye la contraseña en la actualización si el campo
        // vino con algo escrito
        if ($request->filled('Contrasena')) {
            $datos['Contrasena'] = Hash::make($request->Contrasena);
        }

        $usuario->update($datos);

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario actualizado correctamente.');
    }

    // Elimina un usuario del sistema
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario eliminado correctamente.');
    }
}