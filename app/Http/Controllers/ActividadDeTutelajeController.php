<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ActividadTutelaje;
use App\Models\Anio;
use Illuminate\Http\Request;

class ActividadDeTutelajeController extends Controller
{
    public function index(){
        $anios = Anio::all();
        return view('ActividadDeTutelaje.index', compact('anios'));
    }

    public function show($anio){
        $actividades = ActividadTutelaje::select('id_actividad_tutelaje', 'alumno', 'programa_educativo', 'tipo_tutelaje', 'descripcion', 'nombre_integrante', 'linea')->where('anio', '=', $anio)->get();
        return view('ActividadDeTutelaje.show', compact('anio'), compact('actividades'));
    }
}
