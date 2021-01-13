<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ActividadDocente;
use App\Models\Anio;
use Illuminate\Http\Request;

class ActividadDocenteController extends Controller
{
    public function index(){
        $anios = Anio::all();
        return view('ActividadDocente.index', compact('anios'));
    }

    public function show($anio){
        $actividades = ActividadDocente::select('materia', 'programa_educativo', 'nombre_integrante', 'linea')->where('anio', '=', $anio)->get();
        return view('ActividadDocente.show', compact('anio'), compact('actividades'));
    }
}
