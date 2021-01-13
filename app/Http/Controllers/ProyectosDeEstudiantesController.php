<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anio;
use App\Models\ProyectoEstudiante;
use Illuminate\Http\Request;

class ProyectosDeEstudiantesController extends Controller
{
    public function index(){
        $anios = Anio::all();
        return view('ProyectosDeEstudiantes.index', compact('anios'));
    }

    public function show($anio){
        $proyectos = ProyectoEstudiante::select('programa_educativo', 'titulo', 'estado', 'linea')->where('anio', '=', $anio)->get();
        return view('ProyectosDeEstudiantes.show', compact('anio'), compact('proyectos'));
    }
}
