<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anio;
use App\Models\ProyectoDesarrollado;
use Illuminate\Http\Request;

class ProyectosDesarrolladosController extends Controller
{
    public function index(){
        $anios = Anio::all();
        return view('ProyectosDesarrollados.index', compact('anios'));
    }

    public function show($anio){
        $proyectos = ProyectoDesarrollado::select('id_proyecto_desarrollado', 'titulo', 'fuente', 'fecha_inicio', 'fecha_fin', 'linea')->where('anio', '=', $anio)->get();
        return view('ProyectosDesarrollados.show', compact('anio'), compact('proyectos'));
    }
}
