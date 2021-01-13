<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anio;
use App\Models\ParticipacionCA;
use Illuminate\Http\Request;

class ParticipacionConOtrasCAController extends Controller
{
    public function index(){
        $anios = Anio::all();
        return view('ParticipacionConOtrasCA.index', compact('anios'));
    }

    public function show($anio){
        $participaciones = ParticipacionCA::select('nombre_participacion', 'tipo_participacion_ca', 'fecha_inicio', 'fecha_fin')->where('anio', '=', $anio)->get();
        return view('ParticipacionConOtrasCA.show', compact('anio'), compact('participaciones'));
    }
}
