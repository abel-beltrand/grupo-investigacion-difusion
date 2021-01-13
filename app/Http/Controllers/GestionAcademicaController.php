<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Anio;
use App\Models\GestionA;
use Illuminate\Http\Request;

class GestionAcademicaController extends Controller
{
    public function index(){
        $anios = Anio::all();
        return view('GestionAcademica.index', compact('anios'));
    }

    public function show($anio){
        $gestiones = GestionA::select('responsabilidad', 'funcion_encomendada', 'tipo_gestion')->where('anio', '=', $anio)->get();
        return view('GestionAcademica.show', compact('anio'), compact('gestiones'));
    }
}
