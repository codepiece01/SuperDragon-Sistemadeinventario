<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\SubCategoria;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Se traen las cantidades de cada módulo para mostrarlas
        // como resumen en el panel principal
        $totalCategorias = Categoria::count();
        $totalSubcategorias = SubCategoria::count();
        $totalUsuarios = Usuario::count();

        return view('home', compact('totalCategorias', 'totalSubcategorias', 'totalUsuarios'));
    }
}