<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anio;
use App\Models\EstanciaAyC;
use Illuminate\Http\Request;

class EstanciasAcademicasController extends Controller
{
    public function index(){
        $anios = Anio::all();
        return view('EstanciasAcademicasCientificas.index', compact('anios'));
    }

    public function show($anio){
        $estancias = EstanciaAyC::select('institucion', 'proposito', 'fecha_inicio', 'fecha_fin', 'linea')->where('anio', '=', $anio)->get();
        return view('EstanciasAcademicasCientificas.show', compact('anio'), compact('estancias'));
    }
}
