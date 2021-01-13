<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ActualizacionPE;
use App\Models\Anio;
use Illuminate\Http\Request;

class ActualizacionPEController extends Controller
{
    public function index(){
        $anios = Anio::all();
        return view('ActualizacionPE.index', compact('anios'));
    }

    public function show($anio){
        $actualizaciones = ActualizacionPE::select('programa_educativo', 'fecha_implementacion', 'anio')->where('anio', '=', $anio)->get();
        return view('ActualizacionPE.show', compact('anio'), compact('actualizaciones'));
    }
}
