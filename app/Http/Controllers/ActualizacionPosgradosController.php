<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ActualizacionPG;
use App\Models\Anio;
use Illuminate\Http\Request;

class ActualizacionPosgradosController extends Controller
{
    public function index(){
        $anios = Anio::all();
        return view('ActualizacionPosgrados.index', compact('anios'));
    }

    public function show($anio){
        $actualizaciones = ActualizacionPG::select('programa_educativo', 'fecha_implementacion', 'anio')->where('anio', '=', $anio)->get();
        return view('ActualizacionPosgrados.show', compact('anio'), compact('actualizaciones'));
    }
}
