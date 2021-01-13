<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anio;
use App\Models\ProductosC;
use Illuminate\Http\Request;

class ProductosCientificosController extends Controller
{
    public function index(){
        $anios = Anio::all();
        return view('ProductosCientificos.index', compact('anios'));
    }

    public function show($anio){
        $productosc =ProductosC::select('tipo_producto', 'titulo', 'lugar', 'fecha', 'linea')->where('anio', '=', $anio)->orderBy('fecha', 'asc')->get();
        return view('ProductosCientificos.show', compact('anio'), compact('productosc'));
    }
}