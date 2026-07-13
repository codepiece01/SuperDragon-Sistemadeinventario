<?php

namespace App\Http\Controllers;

use App\Models\SubCategoria;
use App\Models\Categoria;
use Illuminate\Http\Request;

class SubCategoriaController extends Controller
{
    // Trae todas las subcategorías junto con su categoría relacionada
    public function index()
    {
        $subcategorias = SubCategoria::with('categoria')->get();
        return view('subcategorias.index', compact('subcategorias'));
    }

    // Muestra el formulario para crear una subcategoría nueva.
    // Necesita la lista de categorías para armar un select donde el usuario
    // elija a cuál categoría va a pertenecer.
    public function create()
    {
        $categorias = Categoria::all();
        return view('subcategorias.create', compact('categorias'));
    }

    // Guarda la nueva subcategoría, validando que la descripción venga
    // llena, que no esté repetida, y que la categoría seleccionada
    // realmente exista en la tabla Categoria.
    public function store(Request $request)
    {
        $request->validate([
            'Descripcion' => 'required|string|max:50|unique:SubCategoria,Descripcion',
            'IdCategoria' => 'required|exists:Categoria,IdCategoria',
        ]);

        SubCategoria::create($request->all());

        return redirect()->route('subcategorias.index')
            ->with('success', 'Subcategoría creada correctamente.');
    }

    // Muestra el detalle de una subcategoría en particular, junto con
    // el nombre de su categoría relacionada.
    public function show(SubCategoria $subcategoria)
    {
        $subcategoria->load('categoria');
        return view('subcategorias.show', compact('subcategoria'));
    }

    // Muestra el formulario de edición, con los datos actuales cargados
    // y la lista de categorías para el select.
    public function edit(SubCategoria $subcategoria)
    {
        $categorias = Categoria::all();
        return view('subcategorias.edit', compact('subcategoria', 'categorias'));
    }

    // Actualiza la subcategoría con los nuevos datos del formulario.
    // Se ignora el propio registro al validar unicidad, para no chocar
    // consigo mismo al editar sin cambiar el texto.
    public function update(Request $request, SubCategoria $subcategoria)
    {
        $request->validate([
            'Descripcion' => 'required|string|max:50|unique:SubCategoria,Descripcion,' . $subcategoria->IdSubCategoria . ',IdSubCategoria',
            'IdCategoria' => 'required|exists:Categoria,IdCategoria',
        ]);

        $subcategoria->update($request->all());

        return redirect()->route('subcategorias.index')
            ->with('success', 'Subcategoría actualizada correctamente.');
    }

    // Borra la subcategoría de la base de datos.
    public function destroy(SubCategoria $subcategoria)
    {
        $subcategoria->delete();

        return redirect()->route('subcategorias.index')
            ->with('success', 'Subcategoría eliminada correctamente.');
    }
}
