<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    // Trae todas las categorías de la base de datos y las manda a la vista
    // que muestra la lista completa (la tabla en pantalla).
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    // Muestra la página con el formulario vacío para agregar una categoría nueva.
    public function create()
    {
        return view('categorias.create');
    }

    // Se ejecuta cuando el usuario llena el formulario de "crear" y le da guardar.
    // Revisa que el campo Descripcion venga lleno y que no exista ya otra
    // categoría con esa misma descripción (evita duplicados en la base de datos).
    public function store(Request $request)
    {
        $request->validate([
            'Descripcion' => 'required|string|max:100|unique:Categoria,Descripcion',
        ]);

        Categoria::create($request->all());

        return redirect()->route('categorias.index')
            ->with('success', 'Categoría creada correctamente.');
    }

    // Muestra el detalle de una sola categoría en particular.
    // No siempre se usa en tablas simples como esta, pero queda por si hace falta.
    public function show(Categoria $categoria)
    {
        return view('categorias.show', compact('categoria'));
    }

    // Muestra el formulario de edición, ya con los datos actuales de esa categoría
    // cargados en los campos (para que el usuario los modifique).
    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    // Se ejecuta cuando el usuario edita una categoría y le da guardar.
    // Revisa que el campo venga bien lleno y que no choque con otra categoría
    // ya existente, ignorando el propio registro que se está editando
    // (si no, Laravel pensaría que "choca consigo mismo" al no cambiar el texto).
    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'Descripcion' => 'required|string|max:100|unique:Categoria,Descripcion,' . $categoria->IdCategoria . ',IdCategoria',
        ]);

        $categoria->update($request->all());

        return redirect()->route('categorias.index')
            ->with('success', 'Categoría actualizada correctamente.');
    }

    // Borra una categoría de la base de datos.
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();

        return redirect()->route('categorias.index')
            ->with('success', 'Categoría eliminada correctamente.');
    }
}
